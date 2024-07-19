<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Qrcode;
use Exception;
use Http;
use Illuminate\Http\Request;
use App\Models\Sales;
use Illuminate\Support\Str;
use App\Models\Establishments;
use Illuminate\Support\Facades\Auth;
use App\Models\Audit;

class SalesController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->role == 'globaladmin') {
            $sales = Sales::orderBy('id', 'desc')->paginate(10);
        } else {
            $sales = Sales::where('establishment_id', $user->establishment_id)->orderBy('id', 'desc')->paginate(10);
        }
        return view("sales.index", compact("sales"));
    }

    public function create()
    {
        $user = Auth::user();
        if ($user->role == 'globaladmin') {
            $establishments = Establishments::orderBy('id', 'desc')->paginate(10);
        } else {
            $establishments = Establishments::where('id', $user->establishment_id)->orderBy('id', 'desc')->paginate(10);
        }

        if ($user->role == 'globaladmin') {
            $clients = Clients::orderBy('id', 'desc')->paginate(10);
        } else {
            $clients = Clients::where('establishment_id', $user->establishment_id)->orderBy('id', 'desc')->paginate(10);
        }
        return view('sales.create', compact('establishments', 'clients'));
    }

    public function store(Request $request)
    {
        $tx_id = Str::random(32);
        $token = $this->PixGetToken();

        $validatedData = $request->validate([
            'establishment_id' => 'required|integer|exists:establishments,id',
            'client_id' => 'required|integer|exists:clients,id',
            'status' => 'required|string',
            'price_real' => 'required|numeric',
        ]);
        Sales::create([
            'establishment_id' => $validatedData['establishment_id'],
            'client_id' => $validatedData['client_id'],
            'status' => $validatedData['status'],
            'price_real' => $validatedData['price_real'],
            'tx_id' => $tx_id,
        ]);

        $name = "geovamelo";
        
        Audit::insert([
            "action_route" => "/sales/add",
            "payload" => json_encode($request->all()),
            "created_by" => auth()->user()->email,
            "establishment_id" => auth()->user()->establishment_id,
            "created_at" => now(),
        ]);
        return $this->CreateQrCode($name, $validatedData['price_real'], $validatedData['client_id'], $token, $tx_id);
    }

    private function PixGetToken()
    {
        $request = Http::withoutVerifying()->post('https://api.globalscm.app.br/internal/api/v1/auth/login', [
            'email' => "paulo.koga@cardban.com.br",
            'password' => "Kdf#25Pp",
        ]);

        if (!($request->status() == 200 || $request->status() == 201)) {
            throw new Exception("Houve um erro ao gerar o token de acesso. Por favor, entre em contato com o Suporte.");
        }

        $token = $request->json()["access_token"];
        return $token;
    }

    private function CreateQrCode($name, $amount, $id, $token, $tx_id)
    {
        try {
            $cpfCnpj = 55213312809;
            $headers = [
                'Authorization' => 'Bearer ' . $token,
                'Content-Type' => 'application/json',
            ];

            $response = Http::withoutVerifying()->withHeaders($headers)->post('https://api.globalscm.app.br/internal/api/v1/payments/qrcode/dynamic', [
                "key" => "8dafe345-c9c0-4500-a4bf-ec212da840d6",
                "codeCategory" => "0001",
                "receiverName" => "WIGLA TECNOLOGIA EM PAGAMENTOS LTDA",
                "payerRequest" => "Pagamento por Pix",
                "payerCPF" => strlen($cpfCnpj) == 11 ? $cpfCnpj : "",
                "payerCNPJ" => strlen($cpfCnpj) > 11 ? $cpfCnpj : "",
                "payerName" => $name,
                "city" => "Sao Paulo",
                "zipcode" => "01227200",
                "initialAmount" => $amount,
                "expirationQR" => "84400",
                "transactionIdentification" => $tx_id,
                "additionalData" => [
                    "name" => "Detalhes do Pagamento",
                    "value" => "Cobranca  de invoice de teste numero 0001"
                ],
                "reusable" => false
            ]);

            if (!($response->status() == 200 || $response->status() == 201)) {
                throw new Exception("Houve um erro na geração do QRCode. Por favor, entre em contato com o Suporte.");
            }

            $qrcode = $response->json()["qrcode"];

            $image = '<img src="data:image/png;base64,' . $qrcode . '" width="350" height="350" class="img-thumbnail">';

            Qrcode::insert([
                "qrcode_ref" => $image,
                "tx_id" => $tx_id
            ]);

            return redirect('/sales')->with('success', 'sales added successfully.');
        } catch (\Throwable $th) {
            $message = $th->getMessage();
            if (strpos($message, "No query results for model") !== false) {
                $message = "Erro ao criar o identificador da venda";
            }
            $notification = array(
                'message' => $message,
                'alert-type' => 'error',
            );
            
            return redirect('/sales')->with($notification);
        }
    }

    public function qrcode(string $id)
    {
        $qrcode = Qrcode::where('id', $id)->firstOrFail();
        $tx_id = $qrcode->tx_id;
        $id = $qrcode->id;
        $image = $qrcode->qrcode_ref;

        return view('sales.qrcode', compact('tx_id', 'id', 'image'));
    }

    public function view(string $id)
    {
        $sales = Sales::findOrFail($id);
        return view('sales.view', compact('sales'));
    }
}

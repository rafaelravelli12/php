<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;
use App\Models\Establishments;
use Illuminate\Support\Facades\Auth;

class ClientsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->role == 'globaladmin') {
            $clients = Clients::orderBy('id', 'desc')->paginate(10);
        } else {
            $clients = Clients::where('establishment_id', $user->establishment_id)->orderBy('id', 'desc')->paginate(10);
        }

        return view("clients.index", compact("clients"));
    }

    public function create()
    {
        $user = Auth::user();
        if ($user->role == 'globaladmin') {
            $establishments = Establishments::orderBy('id', 'desc')->paginate(10);
        } else {
            $establishments = Establishments::where('id', $user->establishment_id)->orderBy('id', 'desc')->paginate(10);
        }

        return view('clients.create', compact('establishments'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'establishment_id' => 'required|exists:establishments,id',
            'identification' => 'required|string',
            'name' => 'required|string',
            'zip_code' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
        ]);

        Clients::create([
            'establishment_id' => $validatedData['establishment_id'],
            'identification' => $validatedData['identification'],
            'name' => $validatedData['name'],
            'zip_code' => $validatedData['zip_code'],
            'address' => $validatedData['address'],
            'city' => $validatedData['city'],
            'state' => $validatedData['state'],
            'country' => $validatedData['country'],
        ]);

        return redirect('/clients')->with('success', 'Client added successfully.');
    }

    public function view(string $id)
    {
        $client = Clients::findOrFail($id);
        return view('clients.view', compact('client'));
    }

    public function edit(string $id)
    {
        $client = Clients::findOrFail($id);
        $establishments = Establishments::all();
        return view('clients.edit', compact('client', 'establishments'));
    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'establishment_id' => 'required|exists:establishments,id',
            'identification' => 'required|string',
            'name' => 'required|string',
            'zip_code' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
        ]);

        $client = Clients::findOrFail($id);
        $client->update($validatedData);

        return redirect('/clients')->with('success', 'Client updated successfully.');
    }

    public function deleteView(string $id)
    {
        $client = Clients::findOrFail($id);
        return view('clients.delete', compact('client'));
    }

    public function destroy(string $id)
    {
        $client = Clients::findOrFail($id);
        $client->delete();

        return redirect('/clients')->with('success', 'Client deleted successfully.');
    }
}

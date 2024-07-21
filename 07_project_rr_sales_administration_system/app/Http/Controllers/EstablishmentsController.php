<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Establishments;
use Illuminate\Support\Facades\Auth;

class EstablishmentsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->role == 'globaladmin') {
            $establishments = Establishments::orderBy('id', 'desc')->paginate(10);
        } else {
            $establishments = Establishments::where('id', $user->establishment_id)->orderBy('id', 'desc')->paginate(10);
        }

        return view("establishments.index", compact("establishments"));
    }

    public function create()
    {
        return view('establishments.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'identification' => 'required|string',
            'name' => 'required|string',
            'zip_code' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
        ]);

        Establishments::create([
            'identification' => $validatedData['identification'],
            'name' => $validatedData['name'],
            'zip_code' => $validatedData['zip_code'],
            'address' => $validatedData['address'],
            'city' => $validatedData['city'],
            'state' => $validatedData['state'],
            'country' => $validatedData['country'],
        ]);

        return redirect('/establishments')->with('success', 'Establishment added successfully.');
    }

    public function view(string $id)
    {
        $establishment = Establishments::findOrFail($id);
        return view('establishments.view', compact('establishment'));
    }

    public function edit(string $id)
    {
        $establishment = Establishments::findOrFail($id);
        return view('establishments.edit', compact('establishment'));
    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'identification' => 'required|string',
            'name' => 'required|string',
            'zip_code' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
        ]);

        $establishment = Establishments::findOrFail($id);
        $establishment->update($validatedData);

        return redirect('/establishments')->with('success', 'Establishment updated successfully.');
    }

    public function deleteView(string $id)
    {
        $establishment = Establishments::findOrFail($id);
        return view('establishments.delete', compact('establishment'));
    }

    public function destroy(string $id)
    {
        $establishment = Establishments::findOrFail($id);
        $establishment->delete();

        return redirect('/establishments')->with('success', 'Establishment deleted successfully.');
    }
}

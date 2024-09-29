<?php

namespace App\Http\Controllers;

use App\Models\Establishments;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $users = User::orderBy('id', 'desc')->paginate(10);

        return view("users.index", compact("users"));
    }

    public function create()
    {
        $user = Auth::user();

        return view('users.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
            'placa_do_carro' => 'required|string',
        ]);

        $hashedPassword = Hash::make($validatedData['password']);

        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $hashedPassword,
            'placa_do_carro' => $validatedData['placa_do_carro'],
        ]);

        return redirect('/users')->with('success', 'User added successfully.');
    }

    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        
        // Toggle the carro_estacionado value
        $user->carro_estacionado = !$user->carro_estacionado;
        $user->save(); // Save the changes
    
        return redirect('/users')->with('success', 'User updated successfully.');
    }

}

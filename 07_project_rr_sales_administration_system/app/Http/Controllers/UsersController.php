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
        if ($user->role == 'globaladmin') {
            $users = User::orderBy('id', 'desc')->paginate(10);
        } else {
            $users = User::where('establishment_id', $user->establishment_id)->orderBy('id', 'desc')->paginate(10);
        }

        return view("users.index", compact("users"));
    }

    public function create()
    {
        $user = Auth::user();
        if ($user->role == 'globaladmin') {
            $establishments = Establishments::orderBy('id', 'desc')->paginate(10);
        } else {
            $establishments = Establishments::where('id', $user->establishment_id)->orderBy('id', 'desc')->paginate(10);
        }

        return view('users.create', compact('establishments'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
            'role' => 'required|string',
            'establishment_id' => 'required|integer'
        ]);

        $hashedPassword = Hash::make($validatedData['password']);

        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'role' => $validatedData['role'],
            'password' => $hashedPassword,
            'establishment_id' => intval($validatedData['establishment_id'])
        ]);

        return redirect('/users')->with('success', 'User added successfully.');
    }

    public function view(string $id)
    {
        $user = User::findOrFail($id);

        return view('users.view', compact('user'));
    }

    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        $establishments = Establishments::orderBy("id", "desc")->get();

        return view('users.edit', compact('user', 'establishments'));
    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
            'role' => 'required|string',
        ]);

        unset($validatedData['password']);
        $validatedData['password'] = Hash::make($request->input('password'));

        $user = User::findOrFail($id);
        $user->update($validatedData);

        return redirect('/users')->with('success', 'User updated successfully.');
    }

    public function deleteView(string $id)
    {
        $user = User::findOrFail($id);
        return view('users.delete', compact('user'));
    }

    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/users')->with('success', 'User deleted successfully.');
    }
}

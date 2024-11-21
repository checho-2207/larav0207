<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'names' => 'required|string|max:255',
            'ide' => 'required|integer|unique:usuarios',
            'number' => 'required|integer',
            'adress' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios',
            'password' => 'required|string|min:8|confirmed',
            'rol' => 'required|in:Usuario,Vendor,Admin',
        ]);

        Usuario::create([
            'names' => $request->names,
            'ide' => $request->ide,
            'number' => $request->number,
            'adress' => $request->adress,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'confirmacion' => $request->password_confirmation,
            'rol' => $request->rol,
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado exitosamente');
    }

    public function show(Usuario $usuario)
    {
        return view('usuarios.show', compact('usuario'));
    }

    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'names' => 'required|string|max:255',
            'ide' => 'required|integer|unique:usuarios,ide,' . $usuario->id,
            'number' => 'required|integer',
            'adress' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios,email,' . $usuario->id,
            'rol' => 'required|in:Usuario,Vendor,Admin',
        ]);

        $usuario->update([
            'names' => $request->names,
            'ide' => $request->ide,
            'number' => $request->number,
            'adress' => $request->adress,
            'email' => $request->email,
            'rol' => $request->rol,
        ]);

        if ($request->filled('password')) {
            $usuario->update(['password' => Hash::make($request->password)]);
        }

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado exitosamente');
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado exitosamente');
    }
}


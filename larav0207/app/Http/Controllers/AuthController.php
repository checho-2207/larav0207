<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('aut.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'Apellido' => 'required|string|max:255',
            'Correo' => 'required|string|email|max:255|unique:usuarios,Correo',
            'password' => 'required|string|min:8|confirmed',
        ]);

        Usuario::create([
            'Nombre' => $request->Nombre,
            'Apellido' => $request->Apellido,
            'Correo' => $request->Correo,
            'password' => Hash::make($request->password),
            'Tipo de usuario' => 'usuario', // Puedes establecer el valor predeterminado
        ]);

        return redirect()->route('login')->with('success', 'Registro exitoso. Inicia sesión.');
    }

    public function showLoginForm()
    {
        return view('aut.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'Correo' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['Correo' => $request->Correo, 'password' => $request->password])) {
            return redirect()->route('dashboard'); // Cambia a tu página principal
        }

        return back()->withErrors(['Correo' => 'Las credenciales no coinciden.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}


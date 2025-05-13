<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //Muestra el formulario de Login
    public function showLoginForm(){
        return view('auth.login');
    }

    //Procesar el login
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Intento de autenticación
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Protección contra ataques de sesión
            return redirect()->route('admin.dashboard');
        }

        // Si falla, regresa con errores
        return back()->withErrors([
            'email' => 'credenciales incorrectas.',
        ]);
    }

    // Cierra la sesión
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }
}

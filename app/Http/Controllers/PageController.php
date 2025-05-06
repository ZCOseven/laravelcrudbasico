<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Método para la página de inicio
    public function home()
    {
        // Retorna la vista 'home' desde resources/views/home.blade.php
        return view('home');
    }

    // Método para la página "Nosotros"
    public function about()
    {
        // Retorna la vista 'about' desde resources/views/about.blade.php
        return view('about');
    }
}

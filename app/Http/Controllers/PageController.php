<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Método para la página de inicio
    public function home()
    {
        // 1. Obtener todos los posts desde la base de datos
        // - \App\Models\Post::all() devuelve una colección con todos los registros de la tabla 'posts'.
        $posts = \App\Models\Post::all();

        // 2. Retornar la vista 'home' ubicada en resources/views/pages/home.blade.php
        // - La variable $posts se envía a la vista utilizando compact().
        return view('pages.home', compact('posts'));
    }

    // Método para la página "Nosotros"
    public function about()
    {
        // Retorna la vista 'about' desde resources/views/pages/about.blade.php
        return view('pages.about');
    }
}

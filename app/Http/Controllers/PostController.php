<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Método show en el controlador PostController
    public function show($id)
    {

        // 1. Buscar el post por su ID en la base de datos
        // \App\Models\Post::findOrFail($id):
        // - Busca un registro en la tabla 'posts' que coincida con el ID proporcionado.
        // - Si encuentra el post, lo asigna a la variable $post.
        // - Si no lo encuentra, lanza automáticamente un error 404 (Página no encontrada).
        $post = \App\Models\Post::findOrFail($id);

        // 2. Retornar la vista 'posts.show' y enviar la variable $post
        // - 'posts.show' indica que está buscando la vista en resources/views/posts/show.blade.php.
        // - compact('post') convierte la variable $post en un array asociativo ['post' => $post]
        return view('posts.show', compact('post'));
    }
}

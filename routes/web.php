<?php
use Illuminate\Support\Facades\Route;

//Controladores usados
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

// Ruta GET que maneja "/posts/{id}" y pasa el ID al método 'show' de PostController
Route::get('/posts/{id}', [PostController::class, 'show'])->name('post.show'); 
// Asigna un nombre ('post.show') para usarlo fácilmente en las vistas
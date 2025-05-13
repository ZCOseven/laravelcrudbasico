<?php
use Illuminate\Support\Facades\Route;

//Controladores usados
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

// Ruta GET que maneja "/posts/{id}" y pasa el ID al método 'show' de PostController
// Asigna un nombre ('post.show') para usarlo fácilmente en las vistas
Route::get('/posts/{id}', [PostController::class, 'show'])->name('post.show'); 



// Grupo de rutas protegidas para admin
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard'); // Vista simple
    })->name('admin.dashboard'); // Asegúrate que el nombre esté aquí
});

//Rutas públicas de autentificación
Route::get('admin/loginAutentificate', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login.submit');
Route::post('admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
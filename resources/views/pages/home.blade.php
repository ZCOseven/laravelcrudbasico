@extends('layouts.app')
@section('title' , 'Home')

<style>
    .card-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
        padding: 20px 0px;
    }

    .card {
        background-color: #ffffff;
        border: 1px solid #e0e0e0;
        border-radius: 12px;
        padding: 16px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        /* transform: translateY(-10px); */
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
        margin-bottom: 8px;
        color: #333;
    }

    .card-description {
        color: #666;
        margin-bottom: 12px;
    }

    .card-link {
        color: #007bff;
        text-decoration: none;
        font-weight: 500;
    }

    .card-link:hover {
        text-decoration: underline;
    }
</style>

@section('content')
<h1>Pagina de Inicio</h1>
<p style="font-size: 15px; margin-bottom: 1rem;">Usando plantillas Blade</p>

<p style="font-size: 15px;">All Posts \ Recientes</p>

<div class="card-container">
    @foreach ($posts as $post)
    <div class="card">
        <h2 class="card-title">{{ $post->title }}</h2>
        <p class="card-description">{{ Str::limit($post->description, 100) }}</p>
        <a href="{{ route('post.show', $post->id) }}" class="card-link">Leer Más</a>
    </div>
    @endforeach
</div>

@endsection
@extends('layouts.app')
@section('title' , $post->title)

@section('content')

<h1>Pagina de Show Post</h1>
<p style="font-size: 15px; margin-bottom: 2rem;">Usando plantillas Blade</p>

<h1 style="text-align: center; text-decoration: underline;">{{ $post->title }}</h1>
<p style="font-size: 15px; margin-top: 5px;">{{ $post->description }}</p>

@endsection
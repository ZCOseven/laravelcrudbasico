@extends('Layouts.app')
@section('title', 'Dashboard Admin')

@section('content')

<h1>Bienvenido al Dashboard de administrador</h1>
<p style="font-size: 15px; margin-bottom: 1rem;">Usando plantillas Blade</p>

    <form action="{{ route('admin.logout')}}" method="POST">
        @csrf
        <button type="submit">Adiós</button>
    </form>

@endsection
@extends('Layouts.app')
@section('title', 'Login Admin')

@section('content')
<h1>Login Admin</h1>
<p style="font-size: 15px; margin-bottom: 1rem;">Usando plantillas Blade</p>

@if($errors->any())
    @foreach ($errors->all() as $error)
        <p style="margin-bottom: 0.5rem; color: red;">{{ $error }}</p>
    @endforeach
@endif

<form action="{{ route('admin.login') }}" method="POST">
    @csrf
    <div>
        <label for="email">Correo <span>*</span></label><br>
        <input type="email" name="email" id="email">
    </div>

    <div>
        <label for="password">Contraseña <span>*</span></label><br>
        <input type="password" name="password" id="password">
    </div>

    <br>

    <button type="submit">Inciar Sesión</button>

</form>

@endsection
@extends('layouts.app')

@section('title', 'Cadastrar Usuário')

@section('content')
<h1>Cadastro de usuário</h1>

@if($errors->any())
    <ul class="errors">
        @foreach($errors->all() as $error)
        <li class="error">{{ $error }}</li>
        @endforeach
    </ul>    
@endif

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name="name" value="{{ old('name') }}">
    <input type="email" name="email" value="{{ old('email') }}">
    <input type="password" name="password">
    <button type="submit">
        Cadastrar
    </button>
</form>
@endsection
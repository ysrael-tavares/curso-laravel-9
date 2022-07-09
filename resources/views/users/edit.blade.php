@extends('layouts.app')

@section('title', 'Editar Usuário')

@section('content')
<h1>Edição de usuário</h1>

@if($errors->any())
    <ul class="errors">
        @foreach($errors->all() as $error)
        <li class="error">{{ $error }}</li>
        @endforeach
    </ul>    
@endif

<form action="{{ route('users.update', $user->id) }}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="name" value="{{ $user->name }}">
    <input type="email" name="email" value="{{ $user->email }}">
    <input type="password" name="password">
    <button type="submit">
        Editar
    </button>
</form>
@endsection
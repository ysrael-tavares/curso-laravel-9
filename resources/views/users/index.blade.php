@extends('layouts.app')

@section('title', 'Lista Usuários')

@section('content')
<h1>Listagem dos usuários - (<a href="{{ route('users.create') }}">+</a>)</h1>

<ul>
    @foreach($users as $item)
        <li>
            {{ $item->name }} - 
            {{ $item->email }}
            <a href="{{ route('users.show', ['id' => $item->id]) }}">Detalhes</a>
            <a href="{{ route('users.edit', ['id' => $item->id]) }}">Editar</a>
        </li>
    @endforeach
</ul>
@endsection
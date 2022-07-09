@extends('layouts.app')

@section('title', 'Editar Usuário')

@section('content')
<h1>Edição de usuário</h1>

@include('includes.validation-forms')

<form action="{{ route('users.update', $user->id) }}" method="post">
    @method('PUT')
    @include('users._partials.form')
</form>
@endsection
@extends('layouts.app')

@section('title', 'Cadastrar Usuário')

@section('content')
<h1>Cadastro de usuário</h1>

@include('includes.validation-forms')

<form action="{{ route('users.store') }}" method="post">
    @csrf
    @include('users._partials.form')
</form>
@endsection
@extends('adminlte::page')

@section('title', 'Novo Perfil')

@section('content_header')
    <h1>Cadastrar Novo Perfil </h1>
@stop

@section('content')
    <p>Cadastrar Novo Perfil.</p>

    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <form class="form" action="{{route('permissions.store')}}" method="post">
                @csrf
                @include('admin.pages.permissions._partials_permission.forms_permissions')
            </form>
        </div>


        <div class="card-footer">
            <a href="{{route('permissions.index')}}" class="btn btn-dark">Voltar</a>
        </div>

@stop

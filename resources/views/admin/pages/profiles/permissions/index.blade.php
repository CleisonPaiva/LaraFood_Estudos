@extends('adminlte::page')

@section('title', 'Permissões do Perfil')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{route('profiles.index')}}" class="active">Perfis</a></li>
    </ol>
    <h1>Permissões do Perfil
        <a href="{{route('profiles.permissions.available',$profile->id)}}" class="btn btn-dark" ><i class="fas fa-plus"></i> Nova Permissão</a>
    </h1>
@stop

@section('content')
    <p>Permissões do Perfil.</p>

    <div class="card">
        <div class="card-header">
            <form class="form form-inline" action="{{route('profiles.search')}}" method="post">
                @csrf
                <input type="text" name="filter" placeholder="Nome:" class="form-control" value="{{$filters['filter']?? ''}}">
                <button type="submit" class="btn btn-info"><i class="fas fa-filter"></i> Filtrar</button>
            </form>

        </div>
        <div class="card-body">

            @include('admin.includes.alerts')

            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th style="width:200px">Ações</th>
                </tr>

                </thead>
                <tbody>

                @foreach($permissions as $permission)
                    <tr>
                        <td>{{$permission->name}}</td>

                        <td style="width: 10px">
                            <a href="{{route('profiles.edit',$permission->id)}}" class="btn btn-success"><i class="far fa-edit"></i> Editar</a>
                         </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
        <div class="card-footer">


        </div>
    </div>

@stop

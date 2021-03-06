@extends('adminlte::page')

@section('title', 'Permissões')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{route('permissions.index')}}" class="active">Permissões</a></li>
    </ol>
    <h1>Permissões <a href="{{route('permissions.create')}}" class="btn btn-dark" ><i class="fas fa-plus"></i> Nova Permissão</a> </h1>
@stop

@section('content')
    <p>Listagem das Permissoões.</p>

    <div class="card">
        <div class="card-header">
            <form class="form form-inline" action="{{route('permissions.search')}}" method="post">
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
                    <th style="width:250px">Ações</th>
                </tr>

                </thead>
                <tbody>

                @foreach($permissions as $permission)
                    <tr>
                        <td>{{$permission->name}}</td>

                        <td style="width: 10px">
{{--                            Permissoes de usuarios--}}
                            <a href="{{route('permissions.edit',$permission->id)}}" class="btn btn-success"><i class="far fa-edit"></i> Editar</a>
                            <a href="{{route('permissions.show',$permission->id)}}" class="btn btn-warning"><i class="fas fa-eye"></i> Exibir</a>
                            <a href="{{route('permission.profiles',$permission->id)}}" class="btn btn-outline-info"><i class="fas fa-users"></i></a>
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{--Paginação,não deixa perder o filtro caso mude a pagina--}}
            @if(isset($filters))
                {{$permissions->appends($filters)->links()}}
            @else
                {{$permissions->links()}}
            @endif
        </div>
    </div>

@stop

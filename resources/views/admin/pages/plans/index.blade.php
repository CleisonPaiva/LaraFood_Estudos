@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{route('plans.index')}}">Planos</a></li>
    </ol>
    <h1>Planos <a href="{{route('plans.create')}}" class="btn btn-dark" ><i class="fas fa-plus"></i> Novo Plano</a> </h1>
@stop

@section('content')
    <p>Listagem dos Planos.</p>

    <div class="card">
        <div class="card-header">
            <form class="form form-inline" action="{{route('plans.search')}}" method="post">
                @csrf
                <input type="text" name="filter" placeholder="Nome:" class="form-control" value="{{$filters['filter']?? ''}}">
                <button type="submit" class="btn btn-info"><i class="fas fa-filter"></i> Filtrar</button>
            </form>

        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th style="width: 200px">Ações</th>
                </tr>

                </thead>
                <tbody>

                    @foreach($plans as $plan)
                        <tr>
                            <td>{{$plan->name}}</td>
                            <td>{{number_format($plan->price,2,',','.')}}</td>
                            <td style="width: 10px">
                                <a href="{{route('plans.edit',$plan->url)}}" class="btn btn-success"><i class="far fa-edit"></i> Editar</a>
                                <a href="{{route('plans.show',$plan->url)}}" class="btn btn-warning"><i class="fas fa-eye"></i> Exibir</a>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
        <div class="card-footer">
{{--Paginação,não deixa perder o filtro caso mude a pagina--}}
            @if(isset($filters))
                {{$plans->appends($filters)->links()}}
            @else
                {{$plans->links()}}
            @endif
        </div>
    </div>

@stop

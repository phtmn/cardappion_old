@extends('layouts.admin.master')

@section('cabecalho')
    <div class="panel-header panel-header-sm">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <a href="{{ route('menus.create') }}" class="btn btn-outline-primary"> Novo Menu +</a>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Voltar para Dashboard</a></li>
                            <li class="breadcrumb-item active">Cadastrar Menu</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>

@stop

@section('conteudo')
    @include('tools.messages')
    <div class="card card-dark card-outline">
        <div class="card-header">
            <h4 class="card-title">Seus Menus ({{$data->count()}})</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive table-hover ">
                <table class="table">
                    <thead class="text-primary">
                        <th>Codigo</th>
                        <th>Nome</th>
                        <th>Itens</th>
                        <th>Disponivel</th>
                        <th class="text-right"></th>
                    </thead>
                    <tbody>
                    @forelse($data as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->description}}</td>
                            <td>{{ 0 }}</td>
                            <td>{{$d->active ? 'Sim' : 'Não'}}</td>

                            <td class="text-right">
                                <a href="{{route('menu.menuItens',$d->id)}}" class="btn btn-primary btn-round">Ver Itens</a>
                                <a href="{{route('menu.share',$d->id)}}" class="btn btn-success btn-round" data-toggle="tooltip" title="proximas versoes">Compartilhar</a>

                            </td>
                        </tr>
                    @empty
                        <p>Nenhuma promoção cadastrada</p>

                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
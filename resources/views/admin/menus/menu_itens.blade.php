@extends('layouts.admin')

@section('cabecalho')
    <div class="panel-header panel-header-sm">
    </div>
@stop

@section('conteudo_principal')
    @include('tools.messages')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Você está vendo o MENU: {{$menu->description}}</h4>
{{--            <a href="{{route('menus.create')}}" class="btn btn-danger btn-round"> Novo Menu</a>--}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class="text-primary">
                    <th>Codigo</th>
                    <th>Nome</th>
                    <th>Valor(R$)</th>
                    <th>Foto</th>
                    <th class="text-right"></th>
                    </thead>
                    <tbody>
                    @forelse( $menu->products as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->description}}</td>
                            <td>{{$d->price }}</td>
                            <td><i>próximas versões</i></td>
                            <td class="text-right">
                                <a href="{{route('menu.deleteItem',[$menu->id,$d->id])}}" class="btn btn-outline-danger btn-round">Remover</a>
                            </td>
                        </tr>
                    @empty
                        <p>Nenhum item no menu</p>

                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
@extends('layouts.admin')

@section('cabecalho')
    <div class="panel-header panel-header-sm">
    </div>
@stop

@section('conteudo_principal')
    @include('tools.messages')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Seus Menus</h4>
            <a href="{{route('menus.create')}}" class="btn btn-danger btn-round"> Novo Menu</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
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
                                <a href="#" class="btn btn-success btn-round" data-toggle="tooltip" title="proximas versoes">Gerar Link</a>
                                <a href="#" class="btn btn-outline-success btn-round" data-toggle="tooltip" title="em desenvolvimento">QRCode</a>
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
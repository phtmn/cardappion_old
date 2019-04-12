@extends('layouts.admin')

@section('cabecalho')
    <div class="panel-header panel-header-sm">
    </div>
@stop

@section('conteudo_principal')

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Seus Produtos ( {{$data->count()}} )</h4>
            <a href="{{route('products.create')}}" class="btn btn-danger btn-round"> Novo Produto</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class="text-primary">
                    <th>Codigo</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Imagem</th>
                    <th class="text-right"></th>
                    </thead>
                    <tbody>
                    @forelse($data as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->description}}</td>
                            <td>{{ $d->price}}</td>
                            <td><i>em desenvolvimento</i></td>
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
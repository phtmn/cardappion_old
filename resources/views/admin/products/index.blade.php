@extends('layouts.admin.master')

@section('cabecalho')
    <div class="panel-header panel-header-sm">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <a href="{{ route('products.create') }}" class="btn btn-outline-primary"> Novo Produto +</a>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('products.index')}}">Voltar para Produtos</a></li>
                            <li class="breadcrumb-item active">Cadastrar Produto</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
@stop

@section('conteudo')

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Seus Produtos ( {{$data->count()}} )</h4>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class="text-primary">
                        <th>Codigo</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Imagem</th>

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
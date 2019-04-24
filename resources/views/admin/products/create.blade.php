@extends('layouts.admin.master')

@section('cabecalho')

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

@stop

@section('conteudo')
    @include('tools.messages')
    <div class="card">
        <form action="{{route('products.store')}}" method="POST">
            @csrf
            <div class="card-header">
                <h4 class="card-title">Novo Item</h4>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label for="" class="text-primary">Descrição</label>
                    <input type="text" name="description" class="form-control">
                </div>

                <div class="form-group">
                    <label for="" class="text-primary">Valor</label>
                    <input type="text" name="price" class="form-control">
                </div>

                <div class="form-group">
                    <label for="" class="text-primary">Clique para adicionar imagem destaque</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="form-group">
                    <label for="" class="text-primary">Descreva esse Item</label>
                    <textarea name="details" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="active" class="text-primary">Incluir no Cardápio</label>
                    <select name="menu_id" id="" class="form-control" placeholder="Selecione">
                        @foreach($menus as $menu)
                            <option value="{{$menu->id}}">{{$menu->description}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="active">Disponivel</label>
                    <select name="active" id="" class="form-control">
                        <option value="1" selected>Sim</option>
                        <option value="0">Não</option>
                    </select>
                </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-round">Salvar</button>
            </div>
        </form>
    </div>

@stop
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
                            <li class="breadcrumb-item"><a href="{{route('menus.index')}}">Voltar para Menus</a></li>
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
        <form action="{{route('menus.store')}}" method="POST">
            @csrf

        <div class="card-body">
            <div class="form-group">
                    <label for="" class="text-primary">Nome do Cardápio</label>
                    <input type="text" name="description" class="form-control">
            </div>

            <div class="form-group">
                <label for="" class="text-primary">Url para compatilhamento do menu</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">https://cardappon.com.br/menu/</span>
                    </div>
                    <input type="text" class="form-control" name="url" id="basic-url" aria-describedby="basic-addon3">
                </div>
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
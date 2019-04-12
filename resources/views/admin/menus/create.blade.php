@extends('layouts.admin')

@section('cabecalho')
    <div class="panel-header panel-header-sm">
    </div>
@stop

@section('conteudo_principal')

    <div class="card">
        <form action="{{route('menus.store')}}" method="POST">
            @csrf
        <div class="card-header">
            <h4 class="card-title">Novo Cardápio</h4>
        </div>

        <div class="card-body">
            <div class="form-group">
                    <label for="" class="text-primary">Nome do Cardápio</label>
                    <input type="text" name="description" class="form-control">
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
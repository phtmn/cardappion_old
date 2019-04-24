@extends('layouts.admin.master')

@section('cabecalho')
    <div class="panel-header panel-header-sm">
    </div>
@stop

@section('conteudo')
    @include('tools.messages')
 <form action="{{route('config.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Informações Principais</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nome Da Loja</label>
                        <input type="text" name="store_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Slogan</label>
                        <input type="text" name="slogan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="category">Categoria</label>
                        <select name="category" id="" class="form-control">
                            <option value="Restaurante">Restaurante</option>
                            <option value="Lanchonete">Lanchonete</option>
                            <option value="Marmitaria">Marmitaria</option>
                            <option value="FoodTruck">FoodTruck</option>
                            <option value="Delivery">Delivery</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Descreva sua Loja</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="form-check mt-3">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="has_delivery" value="1">
                            <span class="form-check-sign"></span>
                                Faz Delivery?
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="delivery_phone">Número Delivery</label>
                        <input type="text" name="delivery_phone" class="form-control">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Sociais e Comunicação</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="facebook" class="form-control" placeholder="facebook">
                    </div>
                    <div class="form-group">
                        <input type="text" name="instagram" class="form-control" placeholder="@intagram">
                    </div>
                    <div class="form-group">
                        <input type="text" name="maps" class="form-control" placeholder="maps.google">
                    </div>

                    <div class="form-group">
                        <input type="text" name="whatsapp" class="form-control" placeholder="Whatsapp para pedidos">
                    </div>

                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Endereço e Localização</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="address" class="form-control" placeholder="Endereço e numero">
                    </div>
                    <div class="form-group">
                        <input type="text" name="city" class="form-control" placeholder="Bairro e Cidade">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-block btn-success btn-lg btn-round"> Salvar Dados</button>
        </div>
    </div>
</form>
@stop
@extends('layouts.admin.master')

@section('cabecalho')
<div class="panel-header panel-header-sm">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{--<a href="{{ route('menus.create') }}" class="btn btn-outline-primary"> Novo Menu +</a> --}}
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            {{--<li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Cardappon</a></li>--}}
                            <li class="breadcrumb-item active"><i class="text-primary fa fa-cog nav-icon"></i> Perfil   </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>

@stop

@section('conteudo')
    @include('tools.messages')
 <form action="{{route('config.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card card-warning card-outline">
                <div class="card-header">
                    <h4 class="card-title"><b class=""> Dados do Estabelecimento </b></h4>
                </div>
                <div class="card-body">


                <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Nome <b class="text-danger" data-toggle="tooltip" data-placement="right" title="Campo obrigatório"> * </b></label>
                            <div class="col-sm-6">
                                <input type="text" name="nome" class="form-control">
                            </div>
                </div>               
                <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">CNPJ </label>
                            <div class="col-sm-3">
                                <input type="text" name="cnpj" class="form-control">
                            </div>
                </div>
                <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">CEP <b class="text-danger" data-toggle="tooltip" data-placement="right" title="Campo obrigatório"> * </b></label>
                            <div class="col-sm-2">
                                <input type="text" name="cep" class="form-control">
                            </div>
                </div>
                <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Endereço </label>
                            <div class="col-sm-6">
                                <input type="text" name="endereco" class="form-control">
                            </div>
                </div>
                <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Bairro </label>
                            <div class="col-sm-4">
                                <input type="text" name="bairro" class="form-control">
                            </div>
                </div>
                <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Número </label>
                            <div class="col-sm-1">
                                <input type="text" name="numero" class="form-control">
                            </div>
                </div>
                <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Cidade </label>
                            <div class="col-sm-4">
                                <input type="text" name="cidade" class="form-control">
                            </div>
                </div>
                <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Estado </label>
                            <div class="col-sm-1">
                                <input type="text" name="estado" class="form-control">
                            </div>
                </div>
                <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Telefone </label>
                            <div class="col-sm-2">
                                <input type="text" name="telefone" class="form-control">
                            </div>
                </div>
                <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right"> WhatsApp </label>
                            <div class="col-sm-2">
                                <input type="text" name="whatsapp" class="form-control">
                            </div>
                </div>
                <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Site </label>
                            <div class="col-sm-4">
                                <input type="text" name="site" class="form-control">
                            </div>
                </div>
                <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Fan Page </label>
                            <div class="col-sm-4">
                                <input type="text" name="fanpage" class="form-control">
                            </div>
                </div>
                <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Instagram </label>
                            <div class="col-sm-4">
                                <input type="text" name="instagram" class="form-control">
                            </div>
                </div>                      
                <hr>                    
                    <div class="form-group row">                     
                            <div class="col-sm-4">                                
                            </div>
                            <div class="col-sm-4">
                            <button type="submit" class="btn btn-block btn-outline-success btn-lg btn-round"> <i class=" fa fa-check-square nav-icon"></i> Salvar</button>
                            </div>
                            <div class="col-sm-4">                                
                            </div>                            
                </div>                    
                </div>
            </div>
        </div>            
    </div>
</form>
@stop
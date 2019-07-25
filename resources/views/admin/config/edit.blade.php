@extends('layouts.admin.master')

@section('cabecalho')


<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
            <i class="fas fa-home text-white"></i> 
              <h3 class="h1 text-white d-inline-block mb-0">Perfil</h3>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              
            </div>
          </div>
        
        </div>
      </div>
    </div>


@stop

@section('conteudo')
   




<div class="container-fluid mt--6">
<div class="row">

<div class="col-lg-4">
          <div class="card-wrapper">
            <!-- Sizes -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">{{ auth()->user()->name }}</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <div class="form-group">
                  <label class="form-control-label">Large input {{ auth()->user()->name }} LOGO</label>
                  <label class="form-control-label">Large input {{ auth()->user()->email }} LOGO</label> 
                 
                </div>              
              </div>
            </div>
        
        </div>
      </div>
        <div class="col-lg-8">
          <div class="card-wrapper">
            <!-- Form controls -->
            
            <!-- HTML5 inputs -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Dados do Estabelecimento</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
         
    <form action="{{route('config.store')}}" method="POST">
    @csrf
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label text-right">Nome <b class="text-danger" data-toggle="tooltip" data-placement="right" title="Campo obrigatório"> * </b></label>
                    <div class="col-md-7">
                        <input type="text" name="name" class="form-control" value="{{$config->name}}">  
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Nº do Documento <b class="text-danger" data-toggle="tooltip" data-placement="right" title="Campo obrigatório"> * </b></label>
                    <div class="col-md-3">
                        <input type="text" name="docnumber" class="form-control" value="{{$config->docnumber}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">CEP <b class="text-danger" data-toggle="tooltip" data-placement="right" title="Campo obrigatório"> * </b></label>
                    <div class="col-md-3">
                        <input type="text" name="zipcode" class="form-control" value="{{$config->zipcode}}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Endereço </label>
                    <div class="col-md-3">
                        <input type="text" name="zipcode" class="form-control" value="{{$config->zipcode}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Bairro </label>
                    <div class="col-md-3">
                        <input type="text" name="zipcode" class="form-control" value="{{$config->zipcode}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Cidade </label>
                    <div class="col-md-3">
                        <input type="text" name="zipcode" class="form-control" value="{{$config->zipcode}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Estado </label>
                    <div class="col-md-3">
                        <input type="text" name="zipcode" class="form-control" value="{{$config->zipcode}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Telefone </label>
                    <div class="col-md-3">
                        <input type="text" name="zipcode" class="form-control" value="{{$config->zipcode}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">WhatsApp </label>
                    <div class="col-md-3">
                        <input type="text" name="zipcode" class="form-control" value="{{$config->zipcode}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Site </label>
                    <div class="col-md-3">
                        <input type="text" name="zipcode" class="form-control" value="{{$config->zipcode}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Instagram </label>
                    <div class="col-md-3">
                        <input type="text" name="zipcode" class="form-control" value="{{$config->zipcode}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-search-input" class="col-md-4 col-form-label form-control-label text-right">Fan Page </label>
                    <div class="col-md-3">
                        <input type="text" name="zipcode" class="form-control" value="{{$config->zipcode}}">
                    </div>
                  </div>                  

                  <button type="submit" class="btn btn-block btn-outline-success btn-lg btn-round"> <i class=" fa fa-check-square nav-icon"></i> Salvar</button>
              
                  @include('tools.messages')             
              
                </form>
              </div>
            </div>
          </div>
        </div>
      
      </div>
@stop






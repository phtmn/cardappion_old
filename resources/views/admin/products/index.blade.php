@extends('layouts.admin.master')

@section('cabecalho')
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Perfil</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
        
        </div>
      </div>
    </div>
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
                        <th>Categoria</th>
                        <th>Preço</th>
                        <th>Imagem</th>
                        <th></th>

                    </thead>
                    <tbody>
                    @forelse($data as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->description}}</td>
                            <td>{{ $d->category->name }}</td>
                            <td>{{ $d->price}}</td>
                            <td><img src="{{Storage::url($d->image)}}" style="height: 70px;" alt=""/></td>
                            <td>
                                <a href="" data-toogle="toltip" title="Editar produto" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
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

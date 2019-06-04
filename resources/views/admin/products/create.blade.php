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
        <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
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
                    <label for="Categoria" class="text-primary">Categoria</label>
                    <select name="category_id" id="" class="form-control">
                        @foreach($categories as $c)
                            <option value="{{$c->id }}">{{$c->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="" class="text-primary">Valor</label>
                    <input type="text" name="price" class="form-control">
                </div>

                <div class="img">
                    <label class="text-primary"> Foto de Destaque</label>
                    <input type="file" id="input-file-now" name="image" class="dropify img-thumbnail" />
                </div>

                <div class="form-group">
                    <label for="Categoria" class="text-primary">Adicionar ao menu</label>
                    <select name="menu_id" id="" class="form-control">
                        @foreach($menus as $m)
                            <option value="{{$m->id }}">{{$m->description }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="nome" class="text-primary">Informações Adicionais</label>
                    <textarea name="details" id="summernote" cols="30" rows="10"></textarea>
                </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-round">Salvar</button>
            </div>
        </form>
    </div>

@stop

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('js/dropify/dist/css/dropify.css')}}">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script> -->

@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script> -->
    <script src="{{asset('js/dropify/dist/js/dropify.js')}}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/viaCep.js') }}"></script>
    <script>

        $('#summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });

        $(document).ready(function(){
                $("#tel_res,#tel_cel").mask('(00)00000-0000');
                $("#cpf").mask('00000000000');
                $("#cep").mask('00.000-000');
        })

        $(document).ready(function(){
            $('.dropify').dropify({
                messages:{
                    'default': 'Clique para enviar a foto da sua oferta'
                }
            });
        });
    </script>


@stop

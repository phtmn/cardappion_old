@extends('layouts.admin.master')

@section('cabecalho')
    <div class="panel-header panel-header-sm">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <a href="{{route('promotions.create')}}" class="btn btn-success"> <i class=" fa fa-plus nav-icon"></i> Oferta </a>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           
                            <li class="breadcrumb-item active"><i class="text-primary fa fa-bullhorn nav-icon"></i> Ofertas</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
@stop

@section('conteudo')

<div class="card card-warning card-outline">
    <div class="card-header">
        <h4 class="card-title">Ofertas Cadastradas</h4>
    </div>
    <div class="card-body">
       <div class="table-responsive">
           <table class="table">
               <thead class="text-dark">
                    <th>#</th>
                    <th>Título </th>
                    <th>Valor (R$)</th>
                    <th class="text-danger">Validade</th>
                    <th>Link</th>
                    <th>Ações</th>
               </thead>
               <tbody>
                    @forelse($data as $d)
                        <tr>
                            <td><img src="{{Storage::url($d->image)}}" style="height: 70px;" alt=""/></td>
                            <td>{{$d->title}}</td>
                            <td>R$ {{ number_format($d->promotion_value,2,',','.') }}</td>
                            <td>{{ $d->expiration_date }}</td>
                            <td><a href="{{ route('promo',$d->url)  }}" target="_blank">cardappon.com.br/promo/{{ $d->url }}</a></td>
                            <td>
                                <a href="#" data-toogle="tooltip" title="Copiar link | implementar função com js" class="btn btn-primary btn-sm"><i class="fa fa-copy"></i></a>
                                <a href="{{route('promotion.qrCode',$d->id)}}" class="btn btn-success btn-sm"><i class="fa fa-qrcode"></i></a>
                            </td>
                        </tr>
                    @empty
                        <p class="text-danger">Nenhuma promoção cadastrada</p>
                    @endforelse
               </tbody>
           </table>
       </div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">--}}
                    {{--<i class="now-ui-icons ui-1_simple-remove"></i>--}}
                {{--</button>--}}
                <h6 class="title title-up">Incluir Promoção</h6>
            </div>
            <form action="{{route('promotions.store')}}" method="POST">
                @csrf
            <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="description" class="form-control" placeholder="Nome da Promoção" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="promotion_value" class="form-control" placeholder="Valor promocional" required>
                    </div>

                    <div class="form-group">
                        <input type="date" name="start_date" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="date" name="end_date" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default">Incluir Promoção</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
            </form>
        </div>
    </div>
</div>

@stop
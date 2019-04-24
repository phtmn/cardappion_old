@extends('layouts.admin.master')

@section('cabecalho')
    <div class="panel-header panel-header-sm">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <a data-toggle="modal" data-target="#myModal" class="btn btn-outline-primary"> Nova Promoção +</a>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Voltar para Dashboard</a></li>
                            <li class="breadcrumb-item active">Cadastrar Promoção</li>
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
        <h4 class="card-title">Suas Promoções</h4>
    </div>
    <div class="card-body">
       <div class="table-responsive">
           <table class="table">
               <thead class="text-primary">
                    <th>Codigo</th>
                    <th>Nome da Promoção</th>
                    <th>Valor Promocional</th>
                    <th>Período de validade</th>
                    <th class="text-right"> Opções</th>
               </thead>
               <tbody>
                    @forelse($data as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->description}}</td>
                            <td>R$ {{ number_format($d->promotion_value,2,',','.') }}</td>
                            <td>{{ date('d/m/Y',strtotime($d->start_date))}} Até {{date('d/m/Y',strtotime($d->end_date))}}</td>
                            <td>
                                <a href="{{route('promotion.qrCode',$d->id)}}" class="btn btn-success btn-round">QRCode</a>
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
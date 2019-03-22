@extends('layouts.admin')

@section('cabecalho')
    <div class="panel-header panel-header-sm">
    </div>
@stop

@section('conteudo_principal')

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Suas Promoções</h4>
        <a href="" class="btn btn-danger btn-round" data-toggle="modal" data-target="#myModal"> Nova Promoção</a>
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
                            <td>{{$d->descricao}}</td>
                            <td>R$ {{ number_format($d->valor_promocional,2,',','.') }}</td>
                            <td>{{ date('d/m/Y',strtotime($d->data_inicio))}} Até {{date('d/m/Y',strtotime($d->data_final))}}</td>
                            <td>
                                <a href="{{route('promocao.qrCode',$d->id)}}" class="btn btn-success btn-round">QRCode</a>
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
            <form action="{{route('promocao.store')}}" method="POST">
                @csrf
            <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="descricao" class="form-control" placeholder="Nome da Promoção" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="valor_promocional" class="form-control" placeholder="Valor promocional" required>
                    </div>

                    <div class="form-group">
                        <input type="date" name="data_inicio" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="date" name="data_final" class="form-control">
                    </div>

                    {{--<input type="hidden" name="user_id" value="{{auth()->user()->id}}">--}}

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
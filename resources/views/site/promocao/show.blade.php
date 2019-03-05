@extends('layouts.site')


@section('conteudo_principal')

 <div class="page-header clear-filter" filter-color="orange">
     <div class="page-header-image" data-parallax="true" style="background-image:url('{{asset('vendor/site/assets/img/bg5.jpg')}}');">
     </div>
     <div class="container">
         <div class="photo-container">
             <img src="../assets/img/ryan.jpg" alt="">
         </div>
         <h3 class="title"> {{$promocao->descricao}}</h3>
         <h1 class="title"> RS {{ number_format($promocao->valor_promocional,2,',','.')}}</h1>
         <p class="category"> Valido de: {{ date('d/m/Y',strtotime($promocao->data_inicio))}}</p>
         <p class="category"> Até: {{ date('d/m/Y',strtotime($promocao->data_final))}}</p>
         <div class="content">

         </div>
     </div>
 </div>


@stop
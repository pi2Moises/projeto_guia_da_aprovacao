@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<br>
<br>
<div class="container">

    <div class="row row-no-gutters">
      <div class="col-xs-12 col-md-8">
          <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <a href=" {{url('/plano')}} ">Criar Novo Cronograma de Estudos - {{date('Y')}} </a>
                <br>
                <br>
                <br>
                <br>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
          <div class="card">
            <div class="card-header">Cantinho da Motivação</div>
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <label for="">Sentindo-se <strong>desanimado</strong>?
                    <br> Veja o que preparamos para você.</label>
                     @foreach($valores as $valor) 
                        <button class="btn btn-secondary" type="button" data-content="por: {{$valor->autor}}" data-placement="top" data-toggle="popover" title="{{$valor->frase}}">Motivacional
                        </button>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    @endsection
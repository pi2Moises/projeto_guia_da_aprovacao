@extends('layouts.app')
@section('content')
{{-- <style>
  .ciclo{
    transform: rotate(-90deg);
    text-align: center;
    width: 5px;
    padding: 10px;
  }
</style> --}}
<br>
<br>
<br>
<br>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
<div class="card-header"><strong>QUADRO HORÁRIO - Tribunal de Contas do DF (Auditor Fiscal)</strong></div>
<div class="card-body">
  @if (session('status'))
  <div class="alert alert-success" role="alert">
    {{ session('status') }}
  </div>
  @endif
  <div> 
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/visualizar_plano')}}">Planos</a></li>
        <li class="breadcrumb-item"><a id="detalhe">Detalhes do Plano</a></li>
        <li class="breadcrumb-item active" aria-current="page">Quadro Horário</li>
      </ol>
    </nav>
  </div>
  <table class="table table-hover table-bordered">
    <thead align="center">
      <tr>
        <th scope="col" style="font-size: 10px;">#</th>
        <th scope="col" style="font-size: 10px;">Segunda</th>
        <th scope="col" style="font-size: 10px;">Terça</th>
        <th scope="col" style="font-size: 10px;">Quarta</th>
        <th scope="col" style="font-size: 10px;">Quinta</th>
        <th scope="col" style="font-size: 10px;">Sexta</th>
          <th scope="col" style="font-size: 10px;">Sábado</th>
            <th scope="col" style="font-size: 10px;">Domingo</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="ciclo">
                <span>Ciclo 1</span> 
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdsegunda as $segunda)
                  <a href="{{url('/edit-quadro',[$segunda->id,$segunda->id_plano,$segunda->disciplina])}}" data-toggle="tooltip" data-original-title="{{$segunda->tempo}} Hora(s)"> {{$segunda->disciplina}} </a>
                  {{-- <br/><br/> --}}
                  <div class="dropdown-divider"></div>
                @endforeach
              </td>
              <td align="center" style="font-size: 10px;">
                  @foreach($qdterca as $terca)
                    <a href="{{url('/edit-quadro',[$terca->id,$terca->id_plano,$terca->disciplina])}}" data-toggle="tooltip" data-original-title="{{$terca->tempo}} Hora(s)"> {{$terca->disciplina}} </a>
                    {{-- <br/><br/> --}}
                    <div class="dropdown-divider"></div>
                  @endforeach              
              </td>
              {{-- <td align="center">Português<p> <font size="1">(21:00 às 22:30)</font></p></td> --}}
              <td align="center" style="font-size: 10px;">
                @foreach($qdquarta as $quarta)
                  <a href="{{url('/edit-quadro',[$quarta->id,$quarta->id_plano,$quarta->disciplina])}}" data-toggle="tooltip" data-original-title="{{$quarta->tempo}} Hora(s)"> {{$quarta->disciplina}} </a>
                  <div class="dropdown-divider"></div>
                  {{-- <br/><br/> --}}
                @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdquinta as $quinta)
                  <a href="{{url('/edit-quadro',[$quinta->id,$quinta->id_plano,$quinta->disciplina])}}" data-toggle="tooltip" data-original-title="{{$quinta->tempo}} Hora(s)"> {{$quinta->disciplina}} </a>
                  <div class="dropdown-divider"></div>
                  {{-- <br/><br/> --}}
                @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdsexta as $sexta)
                  <a href="{{url('/edit-quadro',[$sexta->id,$sexta->id_plano,$sexta->disciplina])}}" data-toggle="tooltip" data-original-title="{{$sexta->tempo}} Hora(s)"> {{$sexta->disciplina}} </a>
                  <div class="dropdown-divider"></div>  
                  {{-- <br/><br/> --}}
                @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdsabado as $sabado)
                  <a href="{{url('/edit-quadro',[$sabado->id,$sabado->id_plano,$sabado->disciplina])}}" data-toggle="tooltip" data-original-title="{{$sabado->tempo}} Hora(s)"> {{$sabado->disciplina}} </a>
                  <div class="dropdown-divider"></div>
                  {{-- <br/><br/> --}}
                @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qddomingo as $domingo)
                  <a href="{{url('/edit-quadro',[$domingo->id,$domingo->id_plano,$domingo->disciplina])}}" data-toggle="tooltip" data-original-title="{{$domingo->tempo}} Hora(s)"> {{$domingo->disciplina}} </a>
                  <div class="dropdown-divider"></div>
                  {{-- <br/><br/> --}}
                @endforeach              
              </td>
            </tr>
            <tr>
              <td class="ciclo">
                <span>Ciclo 2</span> 
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdsegunda2 as $segunda2)
                  <a href="{{url('/edit-quadro',[$segunda2->id,$segunda2->id_plano,$segunda2->disciplina])}}" data-toggle="tooltip" data-original-title="{{$segunda2->tempo}} Hora(s)"> {{$segunda2->disciplina}} </a>
                  <div class="dropdown-divider"></div>
                  {{-- <br/><br/> --}}
                @endforeach
              </td>
              <td align="center" style="font-size: 10px;">
                  @foreach($qdterca2 as $terca2)
                    <a href="{{url('/edit-quadro',[$terca2->id,$terca2->id_plano,$terca2->disciplina])}}" data-toggle="tooltip" data-original-title="{{$terca2->tempo}} Hora(s)"> {{$terca2->disciplina}} </a><div class="dropdown-divider"></div>
                  @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdquarta2 as $quarta2)
                  <a href="{{url('/edit-quadro',[$quarta2->id,$quarta2->id_plano,$quarta2->disciplina])}}" data-toggle="tooltip" data-original-title="{{$quarta2->tempo}} Hora(s)"> {{$quarta2->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdquinta2 as $quinta2)
                  <a href="{{url('/edit-quadro',[$quinta2->id,$quinta2->id_plano,$quinta2->disciplina])}}" data-toggle="tooltip" data-original-title="{{$quinta2->tempo}} Hora(s)"> {{$quinta2->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdsexta2 as $sexta2)
                  <a href="{{url('/edit-quadro',[$sexta2->id,$sexta2->id_plano,$sexta2->disciplina])}}" data-toggle="tooltip" data-original-title="{{$sexta2->tempo}} Hora(s)"> {{$sexta2->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdsabado2 as $sabado2)
                  <a href="{{url('/edit-quadro',[$sabado2->id,$sabado2->id_plano,$sabado2->disciplina])}}" data-toggle="tooltip" data-original-title="{{$sabado2->tempo}} Hora(s)"> {{$sabado2->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qddomingo2 as $domingo2)
                  <a href="{{url('/edit-quadro',[$domingo2->id,$domingo2->id_plano,$domingo2->disciplina])}}" data-toggle="tooltip" data-original-title="{{$domingo2->tempo}} Hora(s)"> {{$domingo2->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach              
              </td>
            </tr>
            <tr>
              <td class="ciclo">
                <span>Ciclo 3</span> 
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdsegunda3 as $segunda3)
                  <a href="{{url('/edit-quadro',[$segunda3->id,$segunda3->id_plano,$segunda3->disciplina])}}" data-toggle="tooltip" data-original-title="{{$segunda3->tempo}} Hora(s)"> {{$segunda3->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach
              </td>
              <td align="center" style="font-size: 10px;">
                  @foreach($qdterca3 as $terca3)
                    <a href="{{url('/edit-quadro',[$terca3->id,$terca3->id_plano,$terca3->disciplina])}}" data-toggle="tooltip" data-original-title="{{$terca3->tempo}} Hora(s)"> {{$terca3->disciplina}} </a><div class="dropdown-divider"></div>
                  @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdquarta3 as $quarta3)
                  <a href="{{url('/edit-quadro',[$quarta3->id,$quarta3->id_plano,$quarta3->disciplina])}}" data-toggle="tooltip" data-original-title="{{$quarta3->tempo}} Hora(s)"> {{$quarta3->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdquinta3 as $quinta3)
                  <a href="{{url('/edit-quadro',[$quinta3->id,$quinta3->id_plano,$quinta3->disciplina])}}" data-toggle="tooltip" data-original-title="{{$quinta3->tempo}} Hora(s)"> {{$quinta3->disciplina}} </a><br/><br/>
                @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdsexta3 as $sexta3)
                  <a href="{{url('/edit-quadro',[$sexta3->id,$sexta3->id_plano,$sexta3->disciplina])}}" data-toggle="tooltip" data-original-title="{{$sexta3->tempo}} Hora(s)"> {{$sexta3->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdsabado3 as $sabado3)
                  <a href="{{url('/edit-quadro',[$sabado3->id,$sabado3->id_plano,$sabado3->disciplina])}}" data-toggle="tooltip" data-original-title="{{$sabado3->tempo}} Hora(s)"> {{$sabado3->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qddomingo3 as $domingo3)
                  <a href="{{url('/edit-quadro',[$domingo3->id,$domingo3->id_plano,$domingo3->disciplina])}}" data-toggle="tooltip" data-original-title="{{$domingo3->tempo}} Hora(s)"> {{$domingo3->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach              
              </td>
            </tr>
            <tr>
              <td class="ciclo">
                <span>Ciclo 4</span> 
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdsegunda4 as $segunda4)
                  <a href="{{url('/edit-quadro',[$segunda4->id,$segunda4->id_plano,$segunda4->disciplina])}}" data-toggle="tooltip" data-original-title="{{$segunda4->tempo}} Hora(s)"> {{$segunda4->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach
              </td>
              <td align="center" style="font-size: 10px;">
                  @foreach($qdterca4 as $terca4)
                    <a href="{{url('/edit-quadro',[$terca4->id,$terca4->id_plano,$terca4->disciplina])}}" data-toggle="tooltip" data-original-title="{{$terca4->tempo}} Hora(s)"> {{$terca4->disciplina}} </a><div class="dropdown-divider"></div>
                  @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdquarta4 as $quarta4)
                  <a href="{{url('/edit-quadro',[$quarta4->id,$quarta4->id_plano,$quarta4->disciplina])}}" data-toggle="tooltip" data-original-title="{{$quarta4->tempo}} Hora(s)"> {{$quarta4->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdquinta4 as $quinta4)
                  <a href="{{url('/edit-quadro',[$quinta4->id,$quinta4->id_plano,$quinta4->disciplina])}}" data-toggle="tooltip" data-original-title="{{$quinta4->tempo}} Hora(s)"> {{$quinta4->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdsexta4 as $sexta4)
                  <a href="{{url('/edit-quadro',[$sexta4->id,$sexta4->id_plano,$sexta4->disciplina])}}" data-toggle="tooltip" data-original-title="{{$sexta4->tempo}} Hora(s)"> {{$sexta4->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdsabado4 as $sabado4)
                  <a href="{{url('/edit-quadro',[$sabado4->id,$sabado4->id_plano,$sabado4->disciplina])}}" data-toggle="tooltip" data-original-title="{{$sabado4->tempo}} Hora(s)"> {{$sabado4->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qddomingo4 as $domingo4)
                  <a href="{{url('/edit-quadro',[$domingo4->id,$domingo4->id_plano,$domingo4->disciplina])}}" data-toggle="tooltip" data-original-title="{{$domingo4->tempo}} Hora(s)"> {{$domingo4->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach              
              </td>
            </tr>
            <tr>
              <td class="ciclo">
                <span>Ciclo 5</span> 
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdsegunda5 as $segunda5)
                  <a href="{{url('/edit-quadro',[$segunda5->id,$segunda5->id_plano,$segunda5->disciplina])}}" data-toggle="tooltip" data-original-title="{{$segunda5->tempo}} Hora(s)"> {{$segunda5->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach
              </td>
              <td align="center" style="font-size: 10px;">
                  @foreach($qdterca5 as $terca5)
                    <a href="{{url('/edit-quadro',[$terca5->id,$terca5->id_plano,$terca5->disciplina])}}" data-toggle="tooltip" data-original-title="{{$terca5->tempo}} Hora(s)"> {{$terca5->disciplina}} </a><div class="dropdown-divider"></div>
                  @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdquarta5 as $quarta5)
                  <a href="{{url('/edit-quadro',[$quarta5->id,$quarta5->id_plano,$quarta5->disciplina])}}" data-toggle="tooltip" data-original-title="{{$quarta5->tempo}} Hora(s)"> {{$quarta5->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdquinta5 as $quinta5)
                  <a href="{{url('/edit-quadro',[$quinta5->id,$quinta5->id_plano,$quinta5->disciplina])}}" data-toggle="tooltip" data-original-title="{{$quinta5->tempo}} Hora(s)"> {{$quinta5->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdsexta5 as $sexta5)
                  <a href="{{url('/edit-quadro',[$sexta5->id,$sexta5->id_plano,$sexta5->disciplina])}}" data-toggle="tooltip" data-original-title="{{$sexta5->tempo}} Hora(s)"> {{$sexta5->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdsabado5 as $sabado5)
                  <a href="{{url('/edit-quadro',[$sabado5->id,$sabado5->id_plano,$sabado5->disciplina])}}" data-toggle="tooltip" data-original-title="{{$sabado5->tempo}} Hora(s)"> {{$sabado5->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qddomingo5 as $domingo5)
                  <a href="{{url('/edit-quadro',[$domingo5->id,$domingo5->id_plano,$domingo5->disciplina])}}" data-toggle="tooltip" data-original-title="{{$domingo5->tempo}} Hora(s)"> {{$domingo5->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach              
              </td>
            </tr>
            <tr>
              <td class="ciclo">
                <span>Ciclo 6</span> 
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdsegunda6 as $segunda6)
                  <a href="{{url('/edit-quadro',[$segunda6->id,$segunda6->id_plano,$segunda6->disciplina])}}" data-toggle="tooltip" data-original-title="{{$segunda6->tempo}} Hora(s)"> {{$segunda6->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach
              </td>
              <td align="center" style="font-size: 10px;">
                  @foreach($qdterca6 as $terca6)
                    <a href="{{url('/edit-quadro',[$terca6->id,$terca6->id_plano,$terca6->disciplina])}}" data-toggle="tooltip" data-original-title="{{$terca6->tempo}} Hora(s)"> {{$terca6->disciplina}} </a><div class="dropdown-divider"></div>
                  @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdquarta6 as $quarta6)
                  <a href="{{url('/edit-quadro',[$quarta6->id,$quarta6->id_plano,$quarta6->disciplina])}}" data-toggle="tooltip" data-original-title="{{$quarta6->tempo}} Hora(s)"> {{$quarta6->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdquinta6 as $quinta6)
                  <a href="{{url('/edit-quadro',[$quinta6->id,$quinta6->id_plano,$quinta6->disciplina])}}" data-toggle="tooltip" data-original-title="{{$quinta6->tempo}} Hora(s)"> {{$quinta6->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdsexta6 as $sexta6)
                  <a href="{{url('/edit-quadro',[$sexta6->id,$sexta6->id_plano,$sexta6->disciplina])}}" data-toggle="tooltip" data-original-title="{{$sexta6->tempo}} Hora(s)"> {{$sexta6->disciplina}} </a>
                    <div class="dropdown-divider"></div>
                @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qdsabado6 as $sabado6)
                  <a href="{{url('/edit-quadro',[$sabado6->id,$sabado6->id_plano,$sabado6->disciplina])}}" data-toggle="tooltip" data-original-title="{{$sabado6->tempo}} Hora(s)"> {{$sabado6->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach              
              </td>
              <td align="center" style="font-size: 10px;">
                @foreach($qddomingo6 as $domingo6)
                  <a href="{{url('/edit-quadro',[$domingo6->id,$domingo6->id_plano,$domingo6->disciplina])}}" data-toggle="tooltip" data-original-title="{{$domingo6->tempo}} Hora(s)"> {{$domingo6->disciplina}} </a><div class="dropdown-divider"></div>
                @endforeach              
              </td>
            </tr>

          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
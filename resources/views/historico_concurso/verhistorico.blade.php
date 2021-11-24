@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<br>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><strong>Histórico de Concurso Realizados</strong></div>
        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
          @if (session('success'))
          <div class="alert alert-success text-white px-5" role="alert">
            <div class="container">
              <i class="now-ui-icons ui-2_like lg pull-left mr-3"></i>
              <strong>Parabéns!</strong>
              <span> {{ session('success')}} </span>
              <button type="button" class="close text-white" data-dismiss="alert">
              <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
            </div>
          </div>
          @endif
          <table class="table table-hover table-bordered">
            <thead align="center">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Concurso</th>
                <th scope="col">Nota Mínima</th>
                <th scope="col">Minha Nota</th>
                <th scope="col">Nota de Corte</th>
                <th scope="col">Situação</th>
                <!-- <th scope="col">Observações</th> -->
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>

              @php
                $i = 1;
              @endphp
              @foreach($concursos as $concurso)
              <tr>
                <!-- @dump($concurso) -->
                
                @if($concurso -> situacao == "Reprovado")
                <td>{{$i}}</td>
                    <td align="center" data-toggle="tooltip" data-original-title="OBSERVAÇÕES: {{ $concurso->observacao }}">
                      {{ $concurso->concurso }}
                      <p><font size="1" color="red">(Data da Prova: {{ \Carbon\Carbon::parse($concurso->dt_prova)->format('d/m/Y')}})</font></p>
                    </td>
                    <td align="center">{{ $concurso->nota_min }} pontos<p> <font size="1"><!-- (21:00 às 22:30) --></font></p></td>
                    <td align="center">{{ $concurso->minha_nota }} pontos<p> <font size="1"><!-- (21:00 às 22:30) --></font></p></td>
                    <td align="center">{{ $concurso->nota_corte }} pontos<p> <font size="1"><!-- (21:00 às 22:30) --></font></p></td>
                    <td align="center">{{ $concurso->situacao }}<p> <font size="1"><!-- (21:00 às 22:30) --></font></p></td>
                @else
                <td>{{$i}}</td>
                    <td align="center" data-toggle="tooltip" data-original-title="OBSERVAÇÕES: {{ $concurso->observacao }}" style="color: green;"><strong>{{ $concurso->concurso }}</strong><p><font size="1" color="red">(Data da Prova: {{ \Carbon\Carbon::parse($concurso->dt_prova)->format('d/m/Y')}})</font></p></td>
                    <td align="center" style="color: green;">{{ $concurso->nota_min }} pontos<p> <font size="1"><!-- (21:00 às 22:30) --></font></p></td>
                    <td align="center" style="color: green;">{{ $concurso->minha_nota }} pontos<p> <font size="1"><!-- (21:00 às 22:30) --></font></p></td>
                    <td align="center" style="color: green;">{{ $concurso->nota_corte }} pontos<p> <font size="1"><!-- (21:00 às 22:30) --></font></p></td>
                    <td align="center" style="color: green;" ><strong>{{ $concurso->situacao }}</strong><p> <font size="1"><!-- (21:00 às 22:30) --></font></p></td>
                    <!-- <td align="center">Português<p> <font size="1">(21:00 às 22:30)</font></p></td> -->
                    <!-- <td align="center">{{$concurso->observacao}}</td> -->
                @endif
                  
                    <td align="center">
                      <form method="post" action="{{ url('/delete_concurso',$concurso->id) }}">
                       {{ csrf_field() }}
                       <input type="hidden" name="_method" value="DELETE">
                        <a href=" {{ url('/edit_concurso',$concurso->id)}} " class="btn btn-info btn-sm rounded">Editar</a>
                        <input type="submit" value="Deletar" class="btn btn-danger btn-sm rounded">
                      </td>
                    </form>
              </tr>
              @php
              $i++;
              @endphp
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
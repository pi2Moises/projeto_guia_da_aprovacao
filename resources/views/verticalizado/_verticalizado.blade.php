@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<br>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div>
      <div class="card">
        <div class="card-header"><strong>EDITAL VERTICALIZADO<!--  - Tribunal de Contas do DF (Auditor Fiscal) --></strong></div>
        <div style="padding: 20px;">
             <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/visualizar_plano')}}">Planos</a></li>
                        <li class="breadcrumb-item"><a href="#">Detalhes do Plano</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edital Verticalizado</li>
                    </ol>
              </nav>
        </div>         
        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
          {{-- @dd($id) --}}
          <div class="accordion" id="accordionExample">
            <div class="card">
            @php
                $i = 1;

                // $valor = TRUE;
                //  $disc = $disciplinas[0]->id;
                
            @endphp


            @foreach($disciplinas as $disciplina)
{{--             @php
            if($valor == TRUE){ 
               $disc = $disciplina->id;
            @endphp --}}

              
            
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse{{$i}}" aria-expanded="false" aria-controls="collapse{{$i}}">
                <strong>{{$i}} - {{$disciplina->disciplina}}</strong>
                </button>
                </h2>
              </div>
              @if($i == 1)
              <div id="collapse{{$i}}" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
              @else
              <div id="collapse{{$i}}" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              @endif 
                <div class="card-body">
                <a href=" {{url('/topico-disciplina',$disciplina->id)}} "><button type="button" class="btn btn-success">Adicionar Tópico de {{$disciplina->disciplina}}</button></a>
                {{-- <a href=" {{url('/topico-disciplina',$disciplina->id)}} "><button type="button" class="btn btn-warning">Editar Tópico de {{$disciplina->disciplina}}</button></a> --}}
                 {{-- <button type="button" class="btn btn-primary">Adicionar Tópico</button> --}}
                 <table class="table table-hover">
                  <thead align="center">
                      <tr style="font-size: 12px;">
                        <th scope="col">Assunto</th>
                        <th scope="col">Vídeo Aula</th>
                        <th scope="col">PDF</th>
                        <th scope="col">Resumo/Esquema</th>
                        <th scope="col">Lei Seca</th>
                        <th scope="col">Qtd Revisões</th>
                        <th scope="col">Qtd Exercício</th>
                        <th scope="col">Ações</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                      $server = 'localhost';
                      $username = 'root';
                      $password = '';
                      $bd = 'aprovacao';

                      $conecta = mysqli_connect($server, $username, $password, $bd);
                      $sql = "
                              SELECT * FROM topico WHERE id_disciplina = {$disciplina->id}
                              ";
                      $query = mysqli_query($conecta, $sql);
                      // $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
                      $num = 1;
                      while ($linhas = mysqli_fetch_array($query,MYSQLI_ASSOC)) {@endphp
                        
                        <tr>";
                        <td style='font-size: 12px;'>"."<a href='editar-topico/{$linhas['id']}'>". $num." - ".utf8_encode($linhas['assunto'])."</a>"."</td>";
                        <td style='font-size: 12px;' align='center'>@php$linhas['video_aula']@endphp</td>
                        <td style='font-size: 12px;' align='center'>@php$linhas['pdf']@endphp</td>
                        <td style='font-size: 12px;' align='center'>@php$linhas['resumo']@endphp</td>
                        <td style='font-size: 12px;' align='center'>@php$linhas['lei_seca']@endphp</td>
                        <td style='font-size: 12px;' align='center'>@php$linhas['qtd_revisao']@endphp</td>
                        <td style='font-size: 12px;' align='center'>@php$linhas['qtd_exercicio']@endphp</td>
                        <td style='font-size: 12px;' align='center'><button value=".$linhas['id']." class='btn btn-danger btn-sm' data-toggle='tooltip' name='excluir' data-original-title='Excluir Tópico'>Excluir</button><button value=".$linhas['id']." class='btn btn-info btn-sm' data-toggle='modal' data-target='.bd-example-modal-lg' name='editar' data-original-title='Editar Tópico'>Editar</button></td>
                        </tr>
                      @php  $num++;
                      }
                      @endphp
                    </tbody>
                    {{-- <button class="btn btn-danger"></button> --}}
                  </table>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



                  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Editar Tópico</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body" id="ed">
                          {{-- <p>Modal body text goes here.</p> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>            
            @php
                $i++;
          
            @endphp
          
            @endforeach         
        
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
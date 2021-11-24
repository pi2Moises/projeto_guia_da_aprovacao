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
              <li class="breadcrumb-item"><a id="detalhe">Detalhes do Plano</a></li>
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
                      <tr style="font-size: 12px; background-color: #c0c0c0;">
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
                              SELECT * FROM topico WHERE id_disciplina = {$disciplina->id} ORDER BY assunto
                              ";
                      $query = mysqli_query($conecta, $sql);
                      // $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
                      $num = 1;
                      while ($linhas = mysqli_fetch_array($query,MYSQLI_ASSOC)) {@endphp
                        
                        <tr>
                          <td style='font-size: 11px;' data-toggle="tooltip" data-original-title="<?php echo $linhas['aula'];?>">
                          <span name="assunto">
                          <?php 
                          if(substr(utf8_encode($linhas['assunto']),1,1) != '.'){
                              echo '<strong>'.utf8_encode($linhas['assunto']).'<strong>';
                          }else{
                              echo utf8_encode($linhas['assunto']);

                          }
                          ?>
                          </span></td>
                          <td style='font-size: 11px;' align='center'>
                            <?php 
                                if($linhas['video_aula'] == '10%' || $linhas['video_aula'] == '20%' || $linhas['video_aula'] == '30%' || $linhas['video_aula'] == '40%'){
                                  echo '<span class="badge badge-danger">'.$linhas['video_aula'].'</span>';

                                }elseif($linhas['video_aula'] == '50%' || $linhas['video_aula'] == '60%' || $linhas['video_aula'] == '70%'){
                                  echo '<span class="badge badge-warning">'.$linhas['video_aula'].'</span>';
                                }elseif($linhas['video_aula'] == '80%' || $linhas['video_aula'] == '90%' || $linhas['video_aula'] == '100%'){
                                  echo '<span class="badge badge-success">'.$linhas['video_aula'].'</span>';
                                }else{
                                  echo $linhas['video_aula'];
                                }

                                ?>     
                          </td>
                          <td style='font-size: 11px;' align='center'><?php echo $linhas['pdf'];?>            </td>
                          <td style='font-size: 11px;' align='center'><?php echo $linhas['resumo'];?>         </td>
                          <td style='font-size: 11px;' align='center'><?php echo $linhas['lei_seca'];?>       </td>
                          <td style='font-size: 11px;' align='center'><?php echo $linhas['qtd_revisao'];?>    </td>
                          <td style='font-size: 11px;' align='center'><?php echo $linhas['qtd_exercicio'];?>  </td>
                          <td style='font-size: 11px;' align='center'>
                            <button class="btn btn-danger btn-sm" value="<?php echo $linhas["id"];?>" name="excluir"><img data-toggle="tooltip" data-original-title="Excluir" src="{{url('img/ico/baseline_close_black_18dp.png')}}" width="15px" height="15px"></button>
                            <button type="button" class="btn btn-info btn-sm" name="editar" data-toggle="modal" data-target="#<?php echo $linhas["id"];?>" value="<?php echo $linhas["id"];?>"><img data-toggle="tooltip" data-original-title="Editar" src="{{url('img/ico/baseline_border_color_black_18dp.png')}}" width="15px" height="15px" title="Editar Item"></button>

                          </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade bd-example-modal-lg" id="<?php echo $linhas["id"];?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $linhas["id"];?>" aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar Assunto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body" id="ed<?php echo $linhas["id"];?>">
                               
                              </div>
                              {{-- <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div> --}}
                            </div>
                          </div>
                        </div>

                        @php
                        $num++;
                      }
                      @endphp
                    </tbody>
                  </table>
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
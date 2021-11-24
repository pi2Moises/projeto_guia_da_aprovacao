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
                <div class="card-header"><strong>Detalhes do Plano - Tribunal de Contas do DF (Auditor Fiscal)</strong></div>
                <div style="padding: 20px;"> 
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/visualizar_plano')}}">Planos</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detalhes do Plano</li>
                    </ol>
                </nav>
            </div>
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                {{-- @dd( 'id' ) --}}
                <div class="row">
                    <div class="col-md-4 p-3">
                        <div class="card box-shadow">
                            <div class="card-body" align="center">
                                <img src=" {{url('img/ico/construction_project_plan_building_architect_design_develop-92_icon-icons.com_60242.png')}} " width="128" height="128"><br>
                                <strong>Edital Veriticalizado</strong>
                                <br>
                                <br>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">           
                                     {{--  @dd($id)  --}}                             
                                     <a href="{{url('/verticalizado',$id)}} "><button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-original-title="Ver Edital Verticalizado">Ver</button></a>
                                     <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-original-title="Editar Disciplinas do Edital Verticalizado">Editar</button>
                                     <a href=" {{url('/disciplina',$id)}} "><button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-original-title="Cadastrar Disciplinas do Edital Verticalizado">Cadastrar</button></a>
                                 </div> 
                             </div>

                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 p-3">
                    <div class="card box-shadow">
                        <div class="card-body" align="center">
                            <img src=" {{url('img/ico/construction_project_plan_building_architect_design_develop-57_icon-icons.com_60216.png')}} " width="128" height="128"><br>
                            <strong>Quadro Horário</strong>
                            <br>
                            <br>
                            <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">                                         
  '                              <a href="#" data-toggle="modal" data-target="#modal1"><button type="button" class="btn btn-sm btn-outline-secondary">Ver</button></a>
                                  <a href="#" data-toggle="modal" data-target="#modal1"><button type="button" class="btn btn-sm btn-outline-secondary">Editar</button></a>
                                  <a href="#" data-toggle="modal" data-target="#modal1"><button type="button" class="btn btn-sm btn-outline-secondary">Cadastrar</button></a>
                              </div> 
                          </div>'
                            <!-- <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">                                         
                                    <a href="{{ url('/quadro_horario',$id) }} "><button type="button" class="btn btn-sm btn-outline-secondary">Ver</button></a>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                                    <a href=" {{url('/cad-quadro',$id)}} "><button type="button" class="btn btn-sm btn-outline-secondary">Cadastrar</button></a>
                                </div> 
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-3">
                    <div class="card box-shadow ">
                        <div class="card-body" align="center">
                           <img src=" {{url('img/ico/construction_project_plan_building_architect_design_develop-52_icon-icons.com_60223.png')}} " width="128" height="128"><br>
                           <strong>Ciclo de Estudos</strong>
                           <br>
                           <br>
                           <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">                                         
                                <a href="#"><button type="button" class="btn btn-sm btn-outline-secondary">Ver</button></a>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Cadastrar</button>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-3">
                <div class="card box-shadow">
                    <a href=""></a>
                    <div class="card-body" align="center">
                        <img src=" {{url('img/ico/construction_project_plan_building_architect_design_develop-80_icon-icons.com_60245.png')}} " width="128" height="128"><br>
                        <strong>Lista de Exercício</strong>
                        <br>
                        <br>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">                                         
                                <a href="#" data-toggle="modal" data-target="#modal1"><button type="button" class="btn btn-sm btn-outline-secondary">Ver</button></a>
                                <a href="#" data-toggle="modal" data-target="#modal1"><button type="button" class="btn btn-sm btn-outline-secondary">Editar</button></a>
                                <a href="#" data-toggle="modal" data-target="#modal1"><button type="button" class="btn btn-sm btn-outline-secondary">Cadastrar</button></a>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-3">
                <div class="card box-shadow">
                    <div class="card-body" align="center">
                        <img src=" {{url('img/ico/construction_project_plan_building_architect_design_develop-68_icon-icons.com_60246.png')}} " width="128" height="128"><br>
                        <strong>Cronometrar Sessão de Estudos</strong>
                        <br>
                        <br>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">                                         
                                <a href="{{url('/cronometro')}}"><button type="button" class="btn btn-sm btn-outline-secondary">Ver</button></a>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Cadastrar</button>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-3">
                <div class="card box-shadow">
                    <div class="card-body" align="center">
                        <img src=" {{url('img/ico/construction_project_plan_building_architect_design_develop-71_icon-icons.com_60239.png')}} " width="128" height="128"><br>
                        <strong>Histórico de Revisões</strong>
                        <br>
                        <br>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">                                         
                                <a href="#"><button type="button" class="btn btn-sm btn-outline-secondary">Ver</button></a>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Cadastrar</button>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header pb-0">
          <h4 class="modal-title text-dark mx-auto">
            <b><strong>Aviso</strong></b>
        </h4>
        <button type="button" class="close text-danger pt-4 ml-0" data-dismiss="modal">
            <span>
              <i class="now-ui-icons ui-1_simple-remove lg"></i>
          </span>
      </button>
  </div>
  <div class="modal-body">
    <p class="m-0">{{ Auth::user()->name }}, informamos que este recurso ainda não encontra-se disponível. Estamos trabalhando para finalizar esta etapa e entregar este recurso o mais rápido possível.
        <br>
        <br>
        Atenciosamente,<br>
        <b>Guia da Aprovação.</b>
        <br>
    </div>
    <div class="modal-footer d-flex flex-row justify-content-between">
      {{-- <button type="button" class="btn btn-secondary">Nice Button</button> --}}
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div> 
</div>
</div>
</div>
</div>
</div>
@endsection
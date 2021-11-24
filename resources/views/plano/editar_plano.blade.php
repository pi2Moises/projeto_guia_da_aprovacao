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
                <div class="card-header"><strong>Novo Cronograma - Detalhes do Concurso/Vestibular</strong></div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-4 p-3">
                            <div class="card box-shadow">
                                <div class="card-body" align="center">
                                    <img src=" {{url('img/ico/construction_project_plan_building_architect_design_develop-92_icon-icons.com_60242.png')}} " width="128" height="128"><br>
                                    <a href=" {{url('/verticalizado')}} "><button class="btn btn-primary btn-lg" type="button"><strong>Edital Veriticalizado</strong></button></a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-3">
                            <div class="card box-shadow">
                                <div class="card-body" align="center">
                                    <img src=" {{url('img/ico/construction_project_plan_building_architect_design_develop-57_icon-icons.com_60216.png')}} " width="128" height="128"><br>
                                    <a href=" {{ url('/quadro_horario') }} "><button class="btn btn-primary btn-lg" type="button"><strong>Quadro Horário</strong></button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-3">
                            <div class="card box-shadow ">
                                <div class="card-body" align="center">
                                     <img src=" {{url('img/ico/construction_project_plan_building_architect_design_develop-52_icon-icons.com_60223.png')}} " width="128" height="128"><br>
                                    <button class="btn btn-primary btn-lg" type="button"><strong>Ciclo de Estudos</strong></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-3">
                            <div class="card box-shadow">
                                <div class="card-body" align="center">
                                    <img src=" {{url('img/ico/construction_project_plan_building_architect_design_develop-80_icon-icons.com_60245.png')}} " width="128" height="128"><br>
                                    <button class="btn btn-primary btn-lg" type="button"><strong>Exercício</strong></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-3">
                            <div class="card box-shadow">
                                <div class="card-body" align="center">
                                    <a href="{{url('/cronometro')}}" target="_black">
                                        <img src=" {{url('img/ico/construction_project_plan_building_architect_design_develop-68_icon-icons.com_60246.png')}} " width="128" height="128"><br>
                                        <button class="btn btn-primary btn-lg" type="button"><strong>Cronometrar Sessão de Estudos</strong></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-3">
                            <div class="card box-shadow">
                                <div class="card-body" align="center">
                                    <img src=" {{url('img/ico/construction_project_plan_building_architect_design_develop-71_icon-icons.com_60239.png')}} " width="128" height="128"><br>                                    
                                    <button class="btn btn-primary btn-lg" type="button"><strong>Histórico de Revisões</strong></button>
                                </div>
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
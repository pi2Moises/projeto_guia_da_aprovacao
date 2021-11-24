@extends('layouts.app')
@section('content')
<script>
  

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.getElementsByClassName('needs-validation');
// Loop over them and prevent submission
var validation = Array.prototype.filter.call(forms, function(form) {
  form.addEventListener('submit', function(event) {
    if (form.checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
    }
    form.classList.add('was-validated');
  }, false);
});
}, false);
})();
</script>
<style>   
  .tabs-2{
    border-top-right-radius: 5px !important;
    border-top-left-radius: 5px !important;
    border-bottom-right-radius: 0px !important;
    border-bottom-left-radius: 0px !important; 
  }
</style>
<br>
<br>
<br>
<br>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><strong>Controle de Tempo de Estudo</strong></div>
        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
          {{-- @dd($id); --}}
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
          <button class="btn btn-warning btn-sm" data-toggle="tooltip" data-original-title="Mostrar" id="mostrar"><img  src="{{url('img/ico/baseline_keyboard_arrow_down_black_18dp.png')}}" width="15px" height="15px"></button>
          <button class="btn btn-warning btn-sm" data-toggle="tooltip" data-original-title="Esconder" id="esconder" style="display: none;"><img  src="{{url('img/ico/baseline_keyboard_arrow_up_black_18dp.png')}}" width="15px" height="15px"></button>
          <br>
          <br>
          <div id="div_forms" style="display: none;">
            <form class="needs-validation" method="post" action=" {{url('/cad-horas-estudo')}} " id="formcadhor"  novalidate>
            {{ csrf_field() }}
            <div class="form-row">
              <div class="col-md-6 mb-4">
                <label for="validationTooltip01">Disciplina</label>
                <input class="form-control form-control-sm" type="text" placeholder="Ex: Dir. Constitucional" name="disciplina"> 
                <div class="invalid-tooltip">Preencimento obrigatório</div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationTooltip01">Horas Estudadas</label>
                <input class="form-control form-control-sm" type="text" placeholder="Ex: 1.5" name="hora_estudada"> 
                <div class="invalid-tooltip">Preencimento obrigatório</div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationTooltip01">Horas Planejadas</label>
                <input class="form-control form-control-sm" type="text" placeholder="Ex: 1.5" name="hora_planejada"> 
                <div class="invalid-tooltip">Preencimento obrigatório</div>
              </div>
              {{-- <input type="hidden" name="id_plano" value="{{$id}}"> --}}

            </div>
            <button class="btn btn-primary" type="submit">Adicionar Disciplinar</button>
            <br>
          <br>
          <br>
          </form>
          <form class="needs-validation" method="post" action="{{url('/cad-meta-horas-estudo')}}" id="formcadmeta"  novalidate style="display: none;">
            {{ csrf_field() }}
            <div class="form-row">
              <div class="col-md-6 mb-4">
                <label for="validationTooltip01">Nome da Meta</label>
                <input class="form-control form-control-sm" type="text" placeholder="Ex: Dir. Constitucional" name="nome_meta"> 
                <div class="invalid-tooltip">Preencimento obrigatório</div>
              </div>
              <div class="col-md-2 mb-3">
                <label for="validationTooltip01">Horas Estudadas</label>
                <input class="form-control form-control-sm" type="text" placeholder="Ex: 1.5" name="hora_estudada"> 
                <div class="invalid-tooltip">Preencimento obrigatório</div>
              </div>
              <div class="col-md-2 mb-3">
                <label for="validationTooltip01">Horas Planejadas</label>
                <input class="form-control form-control-sm" type="text" placeholder="Ex: 1.5" name="hora_planejada"> 
                <div class="invalid-tooltip">Preencimento obrigatório</div>
              </div>
              <div class="col-md-2 mb-3">
                <label for="validationTooltip01">Qtde de Dias</label>
                <input class="form-control form-control-sm" type="text" placeholder="Ex: 100" name="qt_dia"> 
                <div class="invalid-tooltip">Preencimento obrigatório</div>
              </div>
              {{-- <input type="hidden" name="id_plano" value="{{$id}}"> --}}

            </div>
            <button class="btn btn-primary" type="submit">Criar Meta</button>
            <br>
          <br>
          <br>
          </form>
          </div>
          

                {{-- <form class="needs-validation" method="post" action=" {{url('/insert-topico')}} " novalidate>
                  {{ csrf_field() }} --}}
                  <div class="form-row">
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        <a class="nav-link active tabs-1" href="#">Por Disciplina</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link tabs-2" href="#">Metas</a>
                      </li>
                      {{-- <li class="nav-item">
                        <a class="nav-link tabs-3" href="#">Total</a>
                      </li> --}}

                    </ul>
                    
                    <table class="table table-hover" style="margin-top: 10px;" name="disp">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Disciplina</th>
                          <th scope="col" style="text-align: center;">Horas Estudas</th>
                          <th scope="col" style="text-align: center;">horas Restantes</th>
                          <th scope="col" style="text-align: center;">Planejadas</th>
                          <th scope="col" style="text-align: center;">Ação</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                        $cont = 1;
                        @endphp
                        @foreach($disciplinas as $d)
                        <tr>
                          <td> {{$cont}} </td>
                          <td>{{$d->disciplina}}</td>
                          <td style="text-align: center;"><span>{{$d->hora_estudada}}</span></td>
                          <td style="text-align: center;">{{$d->hora_restante}}</td>
                          <td style="text-align: center;">{{$d->hora_planejada}}</td>
                          <td style="text-align: center;">
                             <a href=" {{url('/edit-horas-estudo',$d->id)}} " class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="Alterar tempo de Estudo"><img  src="{{url('img/ico/baseline_border_color_black_18dp.png')}}" width="15px" height="15px"></a>
                             <a href="{{url('/delete-horas-estudo',$d->id)}}" class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Remover tempo de Estudo"><img  src="{{url('img/ico/baseline_close_black_18dp.png')}}" width="15px" height="15px"></a>
                          </td>
                        </tr>
                        @php
                        $cont++;
                        @endphp                        
                        @endforeach                        
                        <tr>
                          <th scope="row">Total</th>
                          @foreach($tot_horas as $horas)
                          <th scope="row">  </th>
                          <td style="text-align: center;"><strong>{{$horas->total_estudada}}</strong></td>
                          <td style="text-align: center;"><strong>{{$horas->total_restante}}</strong></td>
                          <td style="text-align: center;"><strong>{{$horas->total_planejada}}</strong></td>
                          <td></td>
  
                          @endforeach
                          
                        </tr>
                      </tbody>
                    </table>
                    <table class="table table-hover" style="margin-top: 10px;display: none;" name="metas">
                      <thead>
                        <tr>
                          <th scope="col" style="text-align: center;font-size: 10px;">Dia</th>
                          <th scope="col" style="text-align: center;font-size: 10px;">Nome da Meta</th>
                          <th scope="col" style="text-align: center;font-size: 10px;">Horas Estudas</th>
                          <th scope="col" style="text-align: center;font-size: 10px;">horas Restantes</th>
                          <th scope="col" style="text-align: center;font-size: 10px;">Planejadas</th>
                          <th scope="col" style="text-align: center;font-size: 10px;">Data</th>
                          <th scope="col" style="text-align: center;font-size: 10px;">Dia da Semana</th>
                          <th scope="col" style="text-align: center;font-size: 10px;">Ação</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach($meta as $mt)
                        <tr style="text-align: center;font-size: 10px;">
                          <th scope="row">{{$i}}</th>
                          <th scope="row">{{$mt->nome_meta}}</th>
                          <td>{{$mt->hora_estudada}}</td>
                          <td>{{$mt->hora_restante}}</td>
                          <td>{{$mt->hora_planejada}}</td>
                          @if(date('d/m/Y') == $mt->data)
                            <td style="color: green;" data-toggle="tooltip" title="Continuar aqui"><strong>{{$mt->data}}</strong></td>
                          @else
                            <td>{{$mt->data}}</td>
                          @endif
                          
                          {{-- <td>{{ \Carbon\Carbon::parse($mt->data)->format('d/m/Y')}}</td> --}}
                          <td>{{$mt->dia_semana}}</td>
                          <td style="text-align: center;">
                             <a href=" {{url('/edit-meta-horas-estudo',$mt->id)}} " class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="Alterar tempo de Estudo"><img  src="{{url('img/ico/baseline_border_color_black_18dp.png')}}" width="10px" height="10px"></a>
                             <a href="{{url('/delete-meta-horas-estudo',$mt->id)}}" class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Remover tempo de Estudo"><img  src="{{url('img/ico/baseline_close_black_18dp.png')}}" width="10px" height="10px"></a>
                          </td>
                        </tr>
                        @php
                        $i++;
                        @endphp
                        @endforeach
                        <tr>
                          <th scope="row">Total</th>
                         @foreach($tot_meta as $mt_horas)
                          <th scope="row">  </th>
                          <td style="text-align: center;"><strong>{{$mt_horas->total_estudada}}</strong></td>
                          <td style="text-align: center;"><strong>{{$mt_horas->total_restante}}</strong></td>
                          <td style="text-align: center;"><strong>{{$mt_horas->total_planejada}}</strong></td>
                          <td></td>
                          <td></td>
                          <td></td>
  
                          @endforeach
                        </tr>                        
                      </tbody>
                    </table>
                    </div>
                  <br>
                  <br>
                  {{-- <button class="btn btn-primary" type="submit">Adicionar Tópico</button> --}}
                {{-- </form> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection
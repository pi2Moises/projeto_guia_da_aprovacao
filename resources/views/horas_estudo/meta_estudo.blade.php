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
          <form method="post" name="modalform" action="{{url('/alter-meta-horas-estudo',$dados->id)}}" >
            {{ csrf_field() }}
            <div class="form-row">
              <div class="col-md-12 mb-4">
                {{-- {{url('/edit-meta-horas-estudo',$mt->id)}} --}}
                <label for="validationTooltip01">Nome da Meta</label>
                <input class="form-control form-control-sm" type="text" placeholder="Ex: Dir. Constitucional" name="nome_meta" value="{{$dados->nome_meta}}"> 
                <div class="invalid-tooltip">Preencimento obrigatório</div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationTooltip01">Horas Estudadas</label>
                <input class="form-control form-control-sm" type="text" placeholder="Ex: 1.5" name="hora_estudada" value="{{$dados->hora_estudada}}"> 
                <div class="invalid-tooltip">Preencimento obrigatório</div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationTooltip01">Horas Planejadas</label>
                <input class="form-control form-control-sm" type="text" placeholder="Ex: 1.5" name="hora_planejada" value="{{$dados->hora_planejada}}"> 
                <div class="invalid-tooltip">Preencimento obrigatório</div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationTooltip01">Data</label>
                <input class="form-control form-control-sm" type="date" placeholder="Ex: 00/00/2000" name="data" value="{{$dados->data}}"> 
                <div class="invalid-tooltip">Preencimento obrigatório</div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationTooltip01">Dia da Semana</label>
                <select name="dia_semana" id="dia_semana" class="form-control form-control-sm">
                  @if($dados->dia_semana == 'Segunda-Feira')
                    <option>Segunda-Feira</option>
                  @elseif($dados->dia_semana == 'Terça-Feira')
                    <option>Terça-Feira</option>
                  @elseif($dados->dia_semana ==  'Quarta-Feira')
                    <option>Quarta-Feira</option>
                  @elseif($dados->dia_semana == 'Quinta-Feira')
                    <option>Quinta-Feira</option>
                  @elseif($dados->dia_semana == 'Sexta-Feira')
                    <option>Sexta-Feira</option>
                  @elseif($dados->dia_semana == 'Sábado')
                    <option>Sábado</option>
                  @else
                    <option>Domingo</option>
                  @endif
                  <option value="Segunda-Feira">Segunda-Feira</option>
                  <option value="Terça-Feira">Terça-Feira</option>
                  <option value="Quarta-Feira">Quarta-Feira</option>
                  <option value="Quinta-Feira">Quinta-Feira</option>
                  <option value="Sexta-Feira">Sexta-Feira</option>
                  <option value="Sábado">Sábado</option>
                  <option value="Domingo">Domingo</option>
                </select>
                <div class="invalid-tooltip">Preencimento obrigatório</div>
              </div>
              {{-- <input type="hidden" name="id_plano" value="{{$id}}"> --}}

            </div>
            <button class="btn btn-primary" type="submit">Editar Meta</button>
          </form>


        </div>
        <br>
        <br>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
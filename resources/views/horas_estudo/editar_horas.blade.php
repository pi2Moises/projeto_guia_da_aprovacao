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
          <form class="needs-validation" method="post" action=" {{url('/edit-horas-estudo',$dados->id)}}" novalidate>
            {{ csrf_field() }}
            <div class="form-row">
              <div class="col-md-6 mb-4">
                <label for="validationTooltip01">Disciplina</label>
                <input class="form-control form-control-sm" type="text" placeholder="Ex: Dir. Constitucional" name="disciplina" value="{{$dados->disciplina}}">
                <div class="invalid-tooltip">Preencimento obrigatório</div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationTooltip01">Horas Estudadas</label>
                <input class="form-control form-control-sm" type="text" placeholder="Ex: 1.5" name="hora_estudada" value="{{$dados->hora_estudada}}"> 
                <div class="invalid-tooltip">Preencimento obrigatório</div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationTooltip01">Horas Planejadas</label>
                <input class="form-control form-control-sm" type="text" placeholder="Ex: 1.5" name="hora_planejada"value="{{$dados->hora_planejada}}"> 
                <div class="invalid-tooltip">Preencimento obrigatório</div>
              </div>
              {{-- <input type="hidden" name="id_plano" value="{{$id}}"> --}}

            </div>
            <button class="btn btn-primary" type="submit">Editar Disciplinar</button>
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
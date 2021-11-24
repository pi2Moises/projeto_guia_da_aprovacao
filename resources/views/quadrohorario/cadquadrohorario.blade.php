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
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong>Montar Quadro Horário - TCDF</strong></div>
                <div class="card-body">
                    <div> 
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/visualizar_plano')}}">Planos</a></li>
                            <li class="breadcrumb-item"><a id="detalhe">Detalhes do Plano</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Quadro Horário</li>
                        </ol>
                    </nav>
                </div>
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
            <form class="needs-validation" method="post" action=" {{url('/add-quadro')}} " novalidate>
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationTooltip01">Disciplina</label>
                        <select class="form-control form-control-sm" id="validationTooltip01" name="disciplina" required>
                            <option value="">Selecione uma Disciplina</option>
                          @foreach($disciplinas as $disciplina)
                          <option value="{{$disciplina->disciplina}}">{{$disciplina->disciplina}}</option>
                          @endforeach
                      </select>
                        <div class="invalid-tooltip">Preencimento obrigatório</div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationTooltip01">Ciclo</label>
                    <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="ciclo">
                      {{-- <option>Selecione o Ciclo</option> --}}
                      <option value="1">Ciclo 1</option>
                      <option value="2">Ciclo 2</option>
                      <option value="3">Ciclo 3</option>
                      <option value="4">Ciclo 4</option>
                      <option value="5">Ciclo 5</option>
                      <option value="6">Ciclo 6</option>

                  </select>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationTooltip01">Dia da Semana</label>
                <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="dia">
                  {{-- <option>Selecione o Dia</option> --}}
                  <option value="segunda">Segunda-Feira</option>
                  <option value="terca">Terça-Feira</option>
                  <option value="quarta">Quarta-Feira</option>
                  <option value="quinta">Quinta-Feira</option>
                  <option value="sexta">Sexta-Feira</option>
                  <option value="sabado">Sábado</option>
                  <option value="domingo">Domingo</option>

              </select>
          </div>
          <div class="col-md-2 mb-3">
            <label for="validationTooltip01">Tempo de Estudo</label>
            <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="tempo">
              {{-- <option>Tempo</option> --}}
              <option value="1">1 hora</option>
              <option value="1.5">1,5 hora</option>
              <option value="2">2 horas</option>
              <option value="2.5">2,5 horas</option>
              <option value="3">3 horas</option>


          </select>
      </div>
      <input type="hidden" name="id_plano" value="{{$id}}">

  </div>
  <br>
  <button class="btn btn-primary" type="submit">Adicionar Disciplinar ao Quadro</button>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
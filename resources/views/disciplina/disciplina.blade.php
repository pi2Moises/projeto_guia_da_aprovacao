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
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><strong>Cadastrar Disciplina</strong></div>
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
                    <form class="needs-validation" method="post" action=" {{url('/add-disciplina')}} " novalidate>
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col-md-8 mb-3">
                                <label for="validationTooltip01">Disciplina</label>
                                <input type="text" class="form-control" id="validationTooltip01" name="disciplina" placeholder="Nome da disciplina" required>
                                <div class="invalid-tooltip">
                                    Preencimento obrigatório
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Qtde de Aulas</label>
                                <input type="text" class="form-control" id="validationTooltip02" name="qt_aula" placeholder="Ex: 30" required>
                                <div class="invalid-tooltip">
                                    Preencimento obrigatório
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Carga Horária</label>
                                <input type="text" class="form-control" id="validationTooltip02" name="carga_horaria" placeholder="Ex: 50" required>
                                <div class="invalid-tooltip">
                                    Preencimento obrigatório
                                </div>
                            </div>
                            <input type="hidden" name="id_plano" value="{{$id}}">
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip02">Professor</label>
                                <input type="text" class="form-control" id="validationTooltip02" name="prof" placeholder="Ex: Fulano da Silva" required>
                                <div class="invalid-tooltip">
                                    Preencimento obrigatório
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="validationTooltipUsername">Meta de Questões</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    </div>
                                    <input type="text" class="form-control" id="validationTooltipUsername" name="questoes" placeholder="Ex: 200" aria-describedby="validationTooltipUsernamePrepend" required>
                                    <div class="invalid-tooltip">
                                        Preencimento obrigatório
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <br>
                        <div class="form-group">
                           <fieldset class="form-group">
                                <div class="row">
                                  <legend class="col-form-label col-sm-6 pt-0">Nível de Dificuldade</legend>
                                  <div class="col-sm-10">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="dificuldade" id="gridRadios1" value="Nenhuma" checked>
                                      <label class="form-check-label" for="gridRadios1">
                                        Nenhuma
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="dificuldade" id="gridRadios1" value="Baixa" checked>
                                      <label class="form-check-label" for="gridRadios1">
                                        Baixa
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="dificuldade" id="gridRadios2" value="Mediana">
                                      <label class="form-check-label" for="gridRadios2">
                                        Mediana
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="dificuldade" id="gridRadios2" value="Alta">
                                      <label class="form-check-label" for="gridRadios2">
                                        Alta
                                      </label>
                                    </div>
                                  </div>
                                </div>
                            </fieldset>
                        </div>
                        <br>
                        <button class="btn btn-primary" type="submit">Cadastrar Disciplinar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
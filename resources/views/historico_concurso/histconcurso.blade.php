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
                <div class="card-header"><strong>Histórico de Aprovações/Reprovações</strong></div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        <p class="alert-success"> {{ session('status') }}</p>
                        <br>
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
                    <form class="needs-validation" novalidate action="{{ url('/hist_concurso') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip01">Concurso</label>
                                <input type="text" class="form-control" name="concurso" id="validationTooltip01" placeholder="Concurso" required>
                                <div class="invalid-tooltip">
                                    Preencimento obrigatório
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="validationTooltip02">Nota Mínima</label>
                                <input type="text" class="form-control" name="nota_min" id="validationTooltip02" placeholder="Ex: 30" required>
                                <div class="invalid-tooltip">
                                    Preencimento obrigatório
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="validationTooltip02">Minha Nota</label>
                                <input type="text" class="form-control" name="minha_nota" id="validationTooltip03" placeholder="Ex: 30" required>
                                <div class="invalid-tooltip">
                                    Preencimento obrigatório
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="validationTooltip02">Nota de Corte</label>
                                <input type="text" class="form-control" name="nota_corte" id="validationTooltip04" placeholder="Ex: 30" required>
                                <div class="invalid-tooltip">
                                    Preencimento obrigatório
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="validationTooltip02">Situação</label>
                                <input type="text" class="form-control" name="situacao" id="validationTooltip05" placeholder="Ex: Aprovado" required>
                                <div class="invalid-tooltip">
                                    Preencimento obrigatório
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Data da Prova</label>
                                <input type="date" class="form-control" name="dt_prova" id="validationTooltip06" placeholder="Ex: 01/01/2010" required>
                                <div class="invalid-tooltip">
                                    Preencimento obrigatório
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip02">Observações</label>
                                <input type="text" class="form-control" name="observacao" id="validationTooltip07" placeholder="Anotações" required>
                                <div class="invalid-tooltip">
                                    Preencimento obrigatório
                                </div>
                            </div>
                            <input type="hidden" name="user" value="{{ Auth::user()->id }}">
                        </div>
                        <br>
                        <br>
                        <button class="btn btn-primary" type="submit">Gerar Histórico</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
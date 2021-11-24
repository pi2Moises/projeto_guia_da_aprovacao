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
                <div class="card-header"><strong>Cadastrar Frase Motivacional</strong></div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{-- alerta de sucesso. --}}
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
                
                    <form class="needs-validation" novalidate method="post" action=" {{url('Cad_frase_Motivacional')}} ">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col-md-8 mb-3">
                                <label for="validationTooltip01">Frase Motivacional</label>
                                <input type="text" class="form-control" name="frase" id="validationTooltip01" placeholder="Insira aqui sua frase" required>
                                <div class="invalid-tooltip">
                                    Preencimento obrigatório
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Autor</label>
                                <input type="text" class="form-control" name="autor" id="validationTooltip02" placeholder="Nome do autor" required>
                                <div class="invalid-tooltip">
                                    Preencimento obrigatório
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationTooltip02" style="color: red;"> OBS: Está frase será exibida <strong>aleatóriamente</strong> na tela inicial.</label>
                            </div>                                                       
                        <br>
                        <button class="btn btn-primary" type="submit">Cadastrar Frase</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
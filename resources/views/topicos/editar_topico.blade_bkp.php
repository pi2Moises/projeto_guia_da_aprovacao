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
                <div class="card-header"><strong>Editar Tópico de Disciplina</strong></div>
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
                    <form class="needs-validation" method="post" action=" {{url('alterar-topico',$dados->id)}} " novalidate>
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationTooltip01">Assunto</label>
                                <input type="text" class="form-control" id="validationTooltip01" name="assunto" placeholder="Assunto" required value="{{$dados->assunto}}">
                                <div class="invalid-tooltip">
                                    Preencimento obrigatório
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationTooltip02">Vídeo Aula</label>
                                    <select class="form-control form-control-sm" name="video_aula" id="exampleFormControlSelect1" >
                                      <option value="{{$dados->video_aula}}">{{$dados->video_aula}}</option>
                                      <option value="10%">10%</option>
                                      <option value="20%">20%</option>
                                      <option value="30%">30%</option>
                                      <option value="40%">40%</option>
                                      <option value="50%">50%</option>
                                      <option value="60%">60%</option>
                                      <option value="70%">70%</option>
                                      <option value="80%">80%</option>
                                      <option value="90%">90%</option>
                                      <option value="100%">100%</option>
                                      <option value="-">-</option>
                                      <option value="OK">OK</option>
                                    </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationTooltip02">PDF</label>
                                    <select class="form-control form-control-sm" name="pdf" id="exampleFormControlSelect1">
                                     <option value="{{$dados->pdf}}">{{$dados->pdf}}</option>
                                      <option value="10%">10%</option>
                                      <option value="20%">20%</option>
                                      <option value="30%">30%</option>
                                      <option value="40%">40%</option>
                                      <option value="50%">50%</option>
                                      <option value="60%">60%</option>
                                      <option value="70%">70%</option>
                                      <option value="80%">80%</option>
                                      <option value="90%">90%</option>
                                      <option value="100%">100%</option>
                                      <option value="-">-</option>
                                      <option value="OK">OK</option>
                                    </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationTooltip02">Resumo/Esquema</label>
                                    <select class="form-control form-control-sm" name="resumo" id="exampleFormControlSelect1">
                                    <option value="{{$dados->resumo}}">{{$dados->resumo}}</option>
                                      <option value="10%">10%</option>
                                      <option value="20%">20%</option>
                                      <option value="30%">30%</option>
                                      <option value="40%">40%</option>
                                      <option value="50%">50%</option>
                                      <option value="60%">60%</option>
                                      <option value="70%">70%</option>
                                      <option value="80%">80%</option>
                                      <option value="90%">90%</option>
                                      <option value="100%">100%</option>
                                      <option value="-">-</option>
                                      <option value="OK">OK</option>
                                    </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationTooltip02">Lei Seca</label>
                                    <select class="form-control form-control-sm" name="lei_seca" id="exampleFormControlSelect1">
                                      <option value="{{$dados->lei_seca}}">{{$dados->lei_seca}}</option>
                                      <option value="10%">10%</option>
                                      <option value="20%">20%</option>
                                      <option value="30%">30%</option>
                                      <option value="40%">40%</option>
                                      <option value="50%">50%</option>
                                      <option value="60%">60%</option>
                                      <option value="70%">70%</option>
                                      <option value="80%">80%</option>
                                      <option value="90%">90%</option>
                                      <option value="100%">100%</option>
                                      <option value="-">-</option>
                                      <option value="OK">OK</option>
                                    </select>
                            </div>
                            <input type="hidden" name="id_topico" value="{{$dados->id}}">
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltipUsername">Qtd Revisões</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    </div>
                                    <input type="text" class="form-control" id="validationTooltipUsername" name="qtd_revisao" placeholder="Ex: 0" aria-describedby="validationTooltipUsernamePrepend" required value="{{$dados->qtd_revisao}}">
                                    {{-- <div class="invalid-tooltip">
                                        Preencimento obrigatório
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltipUsername">Qtd Exercício</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    </div>
                                    <input type="text" class="form-control" id="validationTooltipUsername" name="qtd_exercicio" placeholder="Ex: 0" aria-describedby="validationTooltipUsernamePrepend" required value="{{$dados->qtd_exercicio}}">
                                    {{-- <div class="invalid-tooltip">
                                        Preencimento obrigatório
                                    </div> --}}
                                </div>
                            </div>
                            
                        </div>
                        <br>
                        <br>
                        <button class="btn btn-primary" type="submit">Editar Tópico</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
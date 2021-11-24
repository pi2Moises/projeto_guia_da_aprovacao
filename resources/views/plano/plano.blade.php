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
                <div class="card-header"><strong>Novo Cronograma - Detalhes do Concurso/Vestibular</strong></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
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

                    <form class="needs-validation" novalidate method="post" enctype='multipart/form-data' action="{{ url('/cadastro_cronograma') }}">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col-md-8 mb-3">
                                <label for="validationTooltip01">Orgão</label>
                                <input type="text" class="form-control" id="validationTooltip01" name="orgao" placeholder="Nome do Órgão" value="{{old('orgao')}}" required>
                                <div class="invalid-tooltip">
                                    Preencimento obrigatório
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Data de Publicação Edital</label>
                                <input type="date" class="form-control" id="validationTooltip02" name="dt_edital" placeholder="Last name" required>
                                <div class="invalid-tooltip">
                                     Preencimento obrigatório
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip02">Data da Prova</label>
                                <input type="date" class="form-control" id="validationTooltip02" name="dt_prova" placeholder="Last name" required>
                                <div class="invalid-tooltip">
                                     Preencimento obrigatório
                                </div>
                            </div>
                             <div class="col-md-6 mb-3">
                                <label for="validationTooltip02">Banca Organizadora</label>
                                <input type="text" class="form-control" id="validationTooltip02" name="banca" placeholder="Cebraspe" required>
                                <div class="invalid-tooltip">
                                     Preencimento obrigatório
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="validationTooltipUsername">Qtde de Vagas</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    </div>
                                    <input type="text" class="form-control" id="validationTooltipUsername" name="qt_vaga" placeholder="Vagas" aria-describedby="validationTooltipUsernamePrepend" required>
                                    <div class="invalid-tooltip">
                                        Preencimento obrigatório
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltipUsername">Salário</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    </div>
                                    <input type="text" class="form-control" id="validationTooltipUsername" name="salario" placeholder="R$ 11.860,56" aria-describedby="validationTooltipUsernamePrepend" required>
                                    <div class="invalid-tooltip">
                                       Preencimento obrigatório
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltipUsername">Taxa de Inscrição</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    </div>
                                    <input type="text" class="form-control" id="validationTooltipUsername" name="tx_inscricao" placeholder="R$ 50,00" aria-describedby="validationTooltipUsernamePrepend" required>
                                    <div class="invalid-tooltip">
                                       Preencimento obrigatório
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltipUsername">Prazo para Inscrição</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    </div>
                                    <input type="date" class="form-control" id="validationTooltipUsername" name="prazo_inscricao" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                                    <div class="invalid-tooltip">
                                       Preencimento obrigatório
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip03">Local da Prova</label>
                                <input type="text" class="form-control" id="validationTooltip03" name="local_prova" placeholder="Endereço" required>
                                <div class="invalid-tooltip">
                                   Preencimento obrigatório
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationTooltip04">Cargo</label>
                                <input type="text" class="form-control" id="validationTooltip04" name="cargo" placeholder="Cargo" required>
                                <div class="invalid-tooltip">
                                   Preencimento obrigatório
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <fieldset class="form-group">
                            <div class="row">
                              <legend class="col-form-label col-sm-6 pt-0">Plano de estudo Pós-Edital?</legend>
                              <div class="col-sm-10">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="pos_edital" id="gridRadios1" value="S" checked>
                                  <label class="form-check-label" for="gridRadios1">
                                    SIM
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="pos_edital" id="gridRadios2" value="N">
                                  <label class="form-check-label" for="gridRadios2">
                                    NÃO
                                  </label>
                                </div>
                              </div>
                            </div>
                          </fieldset>
                        </div>
                        <div class="form-group">
                           <fieldset class="form-group">
                                <div class="row">
                                  <legend class="col-form-label col-sm-6 pt-0">Você efetuou o pagamento da inscrição?</legend>
                                  <div class="col-sm-10">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="pg_inscricao" id="gridRadios1" value="S" checked>
                                      <label class="form-check-label" for="gridRadios1">
                                        SIM
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="pg_inscricao" id="gridRadios2" value="N">
                                      <label class="form-check-label" for="gridRadios2">
                                        NÃO
                                      </label>
                                    </div>
                                  </div>
                                </div>
                            </fieldset>
                        </div>
                        <label for="validationTooltip03">Anexar Imagem de Onde Deseja Trabalhar</label><br>
                        <input type="file" name="imagem" class="btn btn-outline-secondary rounded  col-md-12 mb-3" id="customFile">
                        <br>
                        <br>
                        
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Anotações</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="anotacoes" rows="6" placeholder="Coloque suas anotações aqui"></textarea>
                            <input type="hidden" name="user" value="{{ Auth::user()->id }}">
                        </div>
                        <br>
                        <button class="btn btn-primary" type="submit">Gerar Cronograma de Estudos</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

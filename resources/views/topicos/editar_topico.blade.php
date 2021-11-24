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
                                <label for="validationTooltip02">Aulas</label>
                                    <select class="form-control form-control-sm" name="aula" id="exampleFormControlSelect1">
                                      <option value="{{$dados->Aula}}">{{$dados->Aula}}</option>
                                        @for($i = 0; $i <= 150; $i++)
                                            @if($i < 10)
                                            <option value="Aula 0{{$i}}">Aula 0{{$i}}</option>
                                            @else
                                            <option value="Aula {{$i}}">Aula {{$i}}</option>
                                            @endif
                                        @endfor                                  
                                    </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltipUsername">Qtd Revisões</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    </div>
                                    {{-- <input type="text" class="form-control" id="validationTooltipUsername" name="qtd_revisao" placeholder="Ex: 0" aria-describedby="validationTooltipUsernamePrepend" required value="{{$dados->qtd_revisao}}"> --}}
                                     <select class="form-control form-control-sm" name="qtd_revisao" id="exampleFormControlSelect1">
                                      <option value="{{$dados->qtd_revisao}}">{{$dados->qtd_revisao}}</option>
                                    
                                            @for($i = 0; $i <= 20; $i++)
                                            @if($i < 10)
                                            <option value="0{{$i}}">0{{$i}}</option>
                                            @else
                                            <option value="{{$i}}">{{$i}}</option>
                                            @endif
                                            @endfor                                  
                                        </select>
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
                                    {{-- <input type="text" class="form-control" id="validationTooltipUsername" name="qtd_exercicio" placeholder="Ex: 0" aria-describedby="validationTooltipUsernamePrepend" required value="{{$dados->qtd_exercicio}}"> --}}
                                     <select class="form-control form-control-sm" name="qtd_exercicio" id="exampleFormControlSelect1">
                                    <option value="{{$dados->qtd_exercicio}}">{{$dados->qtd_exercicio}}</option>
                                    
                                            @for($i = 0; $i <= 500; $i++)
                                            @if($i < 10)
                                            <option value="0{{$i}}">0{{$i}}</option>
                                            @else
                                            <option value="{{$i}}">{{$i}}</option>
                                            @endif
                                            @endfor                                  
                                        </select>
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

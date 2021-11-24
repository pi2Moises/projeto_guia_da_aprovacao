@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong>Planos de Estudos</strong></div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="row">
                    @foreach($planos as $plano)
                    <div class="col-md-4 p-3">
                            <div class="card box-shadow">
                                <!-- <img class="card-img-top" width="335" height="182" src="{{ $plano->imagem }}"> -->
                                <img class="card-img-top" src="{{ url('img/img/181116-GB-Tribunal-de-Contas-do-Distrito-Federal-001-840x560.jpg') }}"> 
                                <div class="card-body">
                                    <p class="card-text"><strong> {{$plano->orgao}} </strong></p>
                                    {{-- <p class="card-text"><strong>Resumo:</strong><br/> --}}
                                        <strong>Banca:</strong> {{$plano->banca}}<br/>
                                        <strong>Vagas:</strong> {{$plano->qt_vaga}}<br/>
                                        <strong>Cargo:</strong> {{$plano->cargo}}<br/>
                                        <strong>Prazo Inscrição:</strong> {{ \Carbon\Carbon::parse($plano->prazo_inscricao)->format('d/m/Y')}}<br/>
                                        <strong>Valor Inscrição:</strong> {{$plano->tx_inscricao}}<br/>
                                        <strong>Inscrição Paga? </strong> {{$plano->pg_inscricao}}<br/>
                                        <strong>Data da Prova:</strong> {{ \Carbon\Carbon::parse($plano->dt_prova)->format('d/m/Y')}}<br/>
                                    </p>
                                    {{-- <p class="card-text"> {{$plano->anotacoes}} </p> --}}
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{url('/detalhe_plano',$plano->id)}}" >
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                            </a>
                                            
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Excluir</button>
                                        </div> 
                                        <small class="text-muted">9 mins</small>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
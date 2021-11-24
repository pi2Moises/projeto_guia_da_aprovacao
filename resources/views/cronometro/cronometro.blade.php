@extends('layouts.app')

@section('content')
<script>
var centesimas = 0;
var segundos = 0;
var minutos = 0;
var horas = 0;
function inicio () {
    control = setInterval(cronometro,10);
    document.getElementById("inicio").disabled = true;
    document.getElementById("parar").disabled = false;
    document.getElementById("continuar").disabled = true;
    document.getElementById("reinicio").disabled = false;
}
function parar () {
    clearInterval(control);
    document.getElementById("parar").disabled = true;
    document.getElementById("continuar").disabled = false;
}
function reinicio () {
    clearInterval(control);
    centesimas = 0;
    segundos = 0;
    minutos = 0;
    horas = 0;
    Centesimas.innerHTML = ":00";
    Segundos.innerHTML = ":00 ";
    Minutos.innerHTML = ":00";
    Horas.innerHTML = "00";
    document.getElementById("inicio").disabled = false;
    document.getElementById("parar").disabled = true;
    document.getElementById("continuar").disabled = true;
    document.getElementById("reinicio").disabled = true;
}
function cronometro () {
    if (centesimas < 99) {
        centesimas++;
        if (centesimas < 10) { centesimas = "0"+centesimas }
        Centesimas.innerHTML = ":"+centesimas;
    }
    if (centesimas == 99) {
        centesimas = -1;
    }
    if (centesimas == 0) {
        segundos ++;
        if (segundos < 10) { segundos = "0"+segundos }
        Segundos.innerHTML = ":"+segundos;
    }
    if (segundos == 59) {
        segundos = -1;
    }
    if ( (centesimas == 0)&&(segundos == 0) ) {
        minutos++;
        if (minutos < 10) { minutos = "0"+minutos }
        Minutos.innerHTML = ":"+minutos;
    }
    if (minutos == 59) {
        minutos = -1;
    }
    if ( (centesimas == 0)&&(segundos == 0)&&(minutos == 0) ) {
        horas ++;
        if (horas < 10) { horas = "0"+horas }
        Horas.innerHTML = horas;
    }
}
 
 </script>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong>Tempo de Estudos</strong></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col" align="center">
                        <h1>
                            <b class="reloj" id="Horas">00</b>
                            <b class="reloj" id="Minutos">:00</b>
                            <b class="reloj" id="Segundos">:00</b>
                            <h5 class="reloj" id="Centesimas">:00</h5>
                             <h5>Lingua Portuguesa</h5>



                        </h1>
                    </div>
                    <div class="col" align="center">
                        <!-- <h5>Lingua Portuguesa</h5> -->
                    <div id="contenedor">
 <!--                        <div class="reloj" id="Horas">00</div>
                        <div class="reloj" id="Minutos">:00</div>
                        <div class="reloj" id="Segundos">:00</div> -->
                        <!-- <div class="reloj" id="Centesimas">:00</div> -->
                        <input type="button" class="boton" id="inicio" value="Start &#9658;" onclick="inicio();">
                        <input type="button" class="boton" id="parar" value="Stop &#8718;" onclick="parar();" disabled>
                        <input type="button" class="boton" id="continuar" value="Resume &#8634;" onclick="inicio();" disabled>
                        <input type="button" class="boton" id="reinicio" value="Reset &#8635;" onclick="reinicio();" disabled>
                    </div>
                    </div>
                     <br>
                    <br>
                    <br>
                    <br>
                    <div class="col" align="right">
                        <button class="btn btn-secondary" type="button" data-content="por: Chris Garrett" data-placement="top" data-toggle="popover" title="Quanto mais difícil fica, mais próximo está o sucesso.">Motivacional
                        </button>
                    </div>
                   
                     

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

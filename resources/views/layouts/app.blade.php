<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Guia da Aprovação</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="{{ url('assets/js/bootstrap.js') }}" defer></script>
    <script type="text/javascript" src="{{ url('assets/js/navbar-ontop.js') }}" defer></script>
    <script type="text/javascript" src="{{ url('assets/js/parallax.js') }}" defer></script>
    <script type="text/javascript" src="{{ url('assets/js/customscript.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles: bootstrap 4.* -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/bootstrap-grid.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/bootstrap-grid.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/bootstrap-reboot.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/bootstrap-reboot.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/nucleo-icons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/now-ui-kit.css') }}" rel="stylesheet">
    <style type="text/css">
    .fundo{
    background-color: #c0c0c0;
    }
    </style>
  </head>
  <body class="fundo">
    <div id="app">
      <nav class="navbar navbar-expand-lg bg-primary navbar-dark fixed-top">
        <div class="container">
          <div class="collapse navbar-collapse text-center justify-content-end" id="navbarNowUIKitFree">
            <ul class="navbar-nav flex-row justify-content-center mt-2 mt-md-0">
              <li class="nav-item mx-3 mx-md-1">
               
              </li>
              <li class="nav-item ml-1">
                
              </li>
            </ul>
          </div>
        </div>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
          </ul>
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">ENTRAR</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">REGISTRAR-SE</a>
            </li>
            @endif
            @else
            <div class="collapse navbar-collapse" id="navbarSupportedContent3">
              <a class="btn btn-light text-primary" href="{{url('/home')}}">
                <i class="now-ui-icons arrows-1_share-66 mr-1"></i> PÁGINA INICIAL
              </a>
              </div>
              <div class="collapse navbar-collapse" id="navbarSupportedContent3">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown mx-1">
                    <li class="nav-item dropdown ml-2">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                       CADASTRO
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <h6 class="dropdown-header">Cadastro Acadêmico</h6>
                        <!-- <a class="dropdown-item" href="{{url('/disciplina')}}">Disciplinas</a> -->
                        <a class="dropdown-item" href="#">Cursos</a>
                        <a class="dropdown-item" href="#">Sua Rontina</a>
                      </div>
                    </li>
                  </li>
                </ul>
              </div>
              <div class="collapse navbar-collapse" id="navbarSupportedContent3">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown mx-1">
                    <li class="nav-item dropdown ml-2">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                       HISTÓRICO
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{url('/hist_concurso')}}">Manter Histórico de Concurso</a>
                        <a class="dropdown-item" href="{{url('/verHistorico')}}">Ver Histórico de Concursos</a>
                      </div>
                    </li>
                  </li>
                </ul>
              </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent3">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown mx-1">
                    <li class="nav-item dropdown ml-2">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                       EXERCÍCIO
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <h6 class="dropdown-header">Rendimento</h6>
                        <a class="dropdown-item" href="{{url('/exercicio/desempenho')}}">Desempenho</a>
                        <a class="dropdown-item" href="#">Resolver Questões</a>
                        <a class="dropdown-item" href="#">Novo Simulado</a>
                      </div>
                    </li>
                  </li>
                </ul>
              </div>
              <div class="collapse navbar-collapse" id="navbarSupportedContent3">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown mx-1">
                    <li class="nav-item dropdown ml-2">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                       REVISÃO
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <h6 class="dropdown-header">Ex: 1-7-15-30</h6>
                        <a class="dropdown-item" href="#">Fio da Meada</a>
                        <a class="dropdown-item" href="#">Revisão Cumulativa</a>
                      </div>
                    </li>
                  </li>
                </ul>
              </div>
              <div class="collapse navbar-collapse" id="navbarSupportedContent3">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown mx-1">
                    <li class="nav-item dropdown ml-2">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                       MONTAR EDITAL
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <h6 class="dropdown-header">Rotinas de Estudos</h6>
                        <a class="dropdown-item" href="{{url('/plano')}}">Novo Cronograma de Estudos</a>
                        <a class="dropdown-item" href="{{url('/visualizar_plano')}}">Plano de Estudos</a>
                        <!-- <a class="dropdown-item" href="{{url('/verticalizado')}}">Edital Verticalizado</a> -->
                        <!-- <a class="dropdown-item" href="#">Ciclo de Estudos</a> -->
                        <!-- <a class="dropdown-item" href="{{url('/quadro_horario')}}">Quadro Horário</a> -->
                        <!-- <a class="dropdown-item" href="{{url('horas-estudo')}}">Tempo de Estudo</a> -->
                      </div>
                    </li>
                  </li>
                </ul>
              </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent3">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown mx-1">
                    <li class="nav-item dropdown ml-2">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                       SISTEMA
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <h6 class="dropdown-header">Configurações do Sistema</h6>
                        <a class="dropdown-item" href="#">Versão</a>
                        <a class="dropdown-item" href="#">Manual</a>
                        <a class="dropdown-item" href="#">Backup</a>
                        <a class="dropdown-item" href=" {{url('/Cad_frase_Motivacional')}} ">Motivacional</a>
                      </div>
                    </li>
                  </li>
                </ul>
              </div>
              <div class="collapse navbar-collapse" id="navbarSupportedContent3">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown mx-1">
                    <li class="nav-item dropdown ml-2">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                       AJUDA
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <h6 class="dropdown-header">Tutoriais</h6>
                        <a class="dropdown-item" href="#">Perfil</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                       </li>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Versão</a>
                      <a class="dropdown-item" href="#">Manual</a>
                    </div>
                  </li>
                </ul>
              </div>
            <li class="nav-item dropdown ml-2">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                <i class="now-ui-icons ui-1_settings-gear-63 x2"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <h6 class="dropdown-header">Configurações do Usuário</h6>
                <a class="dropdown-item" href="#"> {{ Auth::user()->name }} - Perfil</a>
                <a class="dropdown-item" href="#">Dados Pessoais</a>
                <a class="dropdown-item" href="#">Endereço</a>
                <div class="divider"></div>
                <a class="dropdown-item" href="#">Senha de Acesso</a>
                <div class="divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
            @endguest
          </ul>
        </div>
      </nav>
      <main class="py-4">
        @yield('content')
      </main>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ url('assets/js/jquery.min.js') }}"></script>
    <script>
    $(document).ready(function(){
    $('[data-toggle="popover"]').popover();
    $('[data-toggle="tooltip"]').tooltip();
    $('#datepicker-example').datepicker({
    calendarWeeks: true,
    autoclose: true,
    todayHighlight: true
    });
    });
    </script>
  </body>
</html>
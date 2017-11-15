<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('', 'Bienes Nacionales') }}</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('img/bandera.png') }}" rel="icon">
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/menu.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/general.css') }}" rel="stylesheet">  
        <link href="{{ asset('css/appstilo.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/tablas.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap-submenu.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('img/bandera.png') }}" rel="icon">
    </head>
<body>

    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        <img id="logo" class="subir-10 img-responsive" id="cintilloWeb" src="{{ asset('img/logo.png') }}" alt="Logo"> 
                    </a>
                </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                      
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Formularios<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                             <ul class="dropdown-menu" role="menu">
                                <li class="dropdown-submenu"><a href="">Registrar Datos</a>
                                    <ul class="dropdown-menu">
                            <!--SUB-MENU DE ANEXOS T-->
                            <li><a href="proveedores">Proveedores</a></li>
                                <li class="dropdown-submenu"><a href="">Modalidades</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="concurso">Compra por Concurso</a></li>
                                        <li><a href="directa">Compra Directa</a></li>
                                        <li><a href="confiscacion">Confiscación</a></li>
                                        <li><a href="dacion">Dación en Pago</a></li>
                                        <li><a href="donacion">Donación</a></li>
                                        <li><a href="expropiacion">Expropiación</a></li>
                                        <li><a href="permuta">Permuta</a></li>
                                        <li><a href="transferencia">Transferencia</a></li>
                                        <li><a href="adjudicacion">Adjudicación</a></li>
                                    </ul>
                                </li>

                                    <li><a href="seguros">Seguros</a></li>
                                    <li><a href="responsables">Responsables de los Bienes</a></li>
                                    <li><a href="marcaAdd">Marcas</a></li>
                                    <li><a href="modelos">Modelos</a></li>
                                    <li><a href="home">Componentes</a></li>
                                    <li><a href="#">Bienes</a></li>
                                    <li><a href="tablat2">Equipo de Transporte</a></li>
                                    <li><a href="tablat2">Semovientes</a></li>
                                    <li><a href="tablat2">Bienes Muebles e Inmuebles</a></li>
                                    <li><a href="tablat2">Bienes de Inmuebles del Organo</a></li>
                                   
                                        
                                    </ul>
                                </li>
                             <!--SUB-MENU DE INVENTARIOS-->
                                <li class="dropdown-submenu"><a href="">Consultar Datos</a>
                                    <ul class="dropdown-menu">
                                      <li><a href="regProveedores">Proveedores</a></li>
                                        <li class="dropdown-submenu"><a href="">Modalidades</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="regConcurso">Compra por Concurso</a></li>
                                            <li><a href="regDirecta">Compra Directa</a></li>
                                            <li><a href="regConfiscacion">Confiscación</a></li>
                                            <li><a href="regDacion">Dación en Pago</a></li>
                                            <li><a href="regDonacion">Donación</a></li>
                                            <li><a href="regExpropiacion">Expropiación</a></li>
                                            <li><a href="regPermuta">Permuta</a></li>
                                            <li><a href="regTransferencia">Transferencia</a></li>
                                            <li><a href="regAdjudicacion">Adjudicación</a></li>
                                        </ul>
                                       </li>
                                       <li><a href="regSeguros">Seguros</a></li>
                                       <li><a href="regResponsables">Responsables de los Bienes</a></li>
                                       <li><a href="histoMarcas">Marcas</a></li>
                                       <li><a href="regModelos">Modelos</a></li>
                                       <li><a href="home">Componentes</a></li>
                                       <li><a href="registroT8">Bienes</a></li>
                                       <li><a href="registroT9">Equipo de Transporte</a></li>
                                       <li><a href="registroT10">Semovientes</a></li>
                                       <li><a href="registroT11">Bienes Muebles e Inmuebles</a></li>
                                       <li><a href="registroT12">Bienes de Inmuebles del Órgano</a></li>
                                      
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    
                         <!-- Right Side Of Navbar -->
                         <ul class="nav navbar-nav navbar-right">
                         <!-- Authentication Links-->
                      
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                 <i class="fa fa-user" aria-hidden="true"></i> {{ $_SESSION['nombre'] }}<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}">
                                           Cerrar Sesión
                                        </a>
                                   
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                         <!-- Authentication Links-->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                 <i class="fa fa-cog" aria-hidden="true"></i>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/bitacora') }}">
                                        Bitácora  <i class="fa fa-archive" aria-hidden="true"></i>  
                                        </a>

                                        <a href="{{ url('/histoMarcas') }}">
                                        Histórico de Marcas  <i class="fa fa-history" aria-hidden="true"></i>  
                                        </a>

                                        <a href="{{ url('/logout') }}">
                                        Añadir modelo  <i class="fa fa-plus-circle" aria-hidden="true"></i>  
                                        </a>

                                    </li>
                                </ul>
                            </li>
                        </ul>

                </div>
            </div>
        </nav>
   </div>
    
 <div class="container" id="sha">
    <div class="row">
       <div class="col-md-12 " >
           <img src="{{URL::asset('/img/cintillo.jpg')}}" id="banner" alt="Cintillo Web">
       </div>
    </div>
         @yield('content')
</div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/dropdown.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/validateCampoMarcas.js') }}"></script>
    <script src="{{ asset('js/validateGeneral.js') }}"></script> <!-- Valida los campos de las (Tabla Proveedores=T1 a la Tabla bienes de Inmuebles Organos=T12) -->
    <script src="{{ asset('js/validateModalidades.js') }}"></script> <!-- Valida los campos de la Tabla compra por concurso=T2 a la  Tabla adjudicación=T28 (Modalidades)) -->
    <script src="{{ asset('js/validate.js') }}"></script>
    <script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-hover-dropdown.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-submenu.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/tabla.datatable.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/funcion.mask.decimal.js') }}"></script>
   

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <center><footer id="pie">
                    <h6>Vicepresidencia de la República Bolivariana de Venezuela</h6>
                    <h6>Dirección General de Tecnología de la Información - &copy; 2017 Todos los Derechos Reservados</h6>
                </footer></center>
            </div>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
        <!-- Custom styles for this template-->
        <link href={{asset("/css/all.min.css")}} rel="stylesheet">
        <link href={{asset("/css/sb-admin-2.min.css")}} rel="stylesheet">

        <!-- Custom styles for table -->
        <link href={{asset("/css/dataTables.bootstrap4.min.css")}} rel="stylesheet">

        <link href={{asset("/css/style.css")}} rel="stylesheet">
        <link rel="icon"  href={{asset("/img/fav7.ico")}}>

        <script src={{asset("/highcharts/highcharts.js")}}></script>
        <script src={{asset("/highcharts/variable-pie.js")}}></script>
        <script src={{asset("/highcharts/exporting.js")}}></script>
        <script src={{asset("/highcharts/export-data.js")}}></script>
        {{-- <script src="/highcharts/accessibility.js"></script> --}}

        <script src={{asset("/highcharts/data.js")}}></script>
        <script src={{asset("/highcharts/drilldown.js")}}></script>

        {{-- INICIO mapa --}}

    <link rel="stylesheet" href={{asset("libs/leaflet.css")}} />
    <link rel="stylesheet" href={{asset("src/leaflet.draw.css")}} />

    <script src={{asset("libs/leaflet-src.js")}}></script>

    <script src={{asset("src/Leaflet.draw.js")}}></script>
    <script src={{asset("src/Leaflet.Draw.Event.js")}}></script>

    <script src={{asset("src/edit/handler/Edit.Poly.js")}}></script>
    <script src={{asset("src/edit/handler/Edit.SimpleShape.js")}}></script>
    <script src={{asset("src/edit/handler/Edit.Rectangle.js")}}></script>
    <script src={{asset("src/edit/handler/Edit.Marker.js")}}></script>
    <script src={{asset("src/edit/handler/Edit.CircleMarker.js")}}></script>
    <script src={{asset("src/edit/handler/Edit.Circle.js")}}></script>


    <script src={{asset("src/draw/handler/Draw.Feature.js")}}></script>
    <script src={{asset("src/draw/handler/Draw.Polyline.js")}}></script>
    <script src={{asset("src/draw/handler/Draw.Polygon.js")}}></script>
    <script src={{asset("src/draw/handler/Draw.SimpleShape.js")}}></script>
    <script src={{asset("src/draw/handler/Draw.Rectangle.js")}}></script>
    <script src={{asset("src/draw/handler/Draw.Marker.js")}}></script>
    <script src={{asset("src/draw/handler/Draw.CircleMarker.js")}}></script>
    <script src={{asset("src/draw/handler/Draw.Circle.js")}}></script>


    <script src={{asset("src/ext/TouchEvents.js")}}></script>
    <script src={{asset("src/ext/LatLngUtil.js")}}></script>
    <script src={{asset("src/ext/GeometryUtil.js")}}></script>
    <script src={{asset("src/ext/LineUtil.Intersect.js")}}></script>
    <script src={{asset("src/ext/Polyline.Intersect.js")}}></script>
    <script src={{asset("src/ext/Polygon.Intersect.js")}}></script>

    <script src={{asset("src/Control.Draw.js")}}></script>
    <script src={{asset("src/Tooltip.js")}}></script>
    <script src={{asset("src/Toolbar.js")}}></script>

    <script src={{asset("src/draw/DrawToolbar.js")}}></script>
    <script src={{asset("src/edit/EditToolbar.js")}}></script>
    <script src={{asset("src/edit/handler/EditToolbar.Edit.js")}}></script>
    <script src={{asset("src/edit/handler/EditToolbar.Delete.js")}}></script>

    <script src={{asset("libs/leaflet.snap.js")}}></script>
    <script src={{asset("libs/leaflet.geometryutil.js")}}></script>



        {{-- FIN mapa --}}

    
        {{-- <title style="display: block">Recoleccion de datos</title> --}}
        <title >E-SPPB+ @yield('title')</title>
    </head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @section('mainMenu')
                <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center" style="justify-content: flex-end;" href="{{ route('main') }}">
                    {{-- justify-content-center --}}
                <div class="sidebar-brand-icon rotate-n-15" >
                    <i style="font-size: 15px;">E-SPPB+</i>
                    {{-- class="fas fa-laugh-wink" --}}
                </div   >
                
                <div class="sidebar-brand-text mx-0" style="padding-left: 11px;">
                    <img src={{asset("/img/logoMain2.png")}} alt="Logo App" style="width: 200px">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('main') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading" style="color: white">
                Inicio
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Acerca del proyecto</span>
                </a>
                <div id="collapseTwo" class="collapse" data-parent="#accordionSidebar">
                        {{-- aria-labelledby="headingTwo"  --}}
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Componentes:</h6>
                        <a class="collapse-item" href="{{ route('team') }}">Equipo de investigación</a>
                        <a class="collapse-item" href="{{ route('publi') }}">Publicaciones y difusión</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Ingreso</span>
                </a>
                <div id="collapseUtilities" class="collapse" 
                    data-parent="#accordionSidebar">
                    {{-- aria-labelledby="headingUtilities" --}}
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Componentes:</h6>
                        <a class="collapse-item" href="#" data-toggle="modal" data-target="#modalLoginForm">Iniciar sesión</a>
                        <a class="collapse-item" href="{{ route('password.request') }}">Olvide mi contraseña</a>
                        <a class="collapse-item" href="#" data-toggle="modal" data-target="#modalRegisterForm">Registrarse</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <!-- RETURN -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"  aria-labelledby="descriptionMenu"></button>
                <div id="descriptionMenu" style="display: none;">Este boton permite expandir y/o contraer el menu</div>
            </div>

        </ul>
        @endsection
        <!-- End of Sidebar -->
        @yield('mainMenu')
        <!-- _________________________________________________________________________________________________ -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" style="background-color: white">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3" aria-describedby="describeMenu">
                        <i class="fa fa-bars"></i>
                        <div id="describeMenu" style="display: none;">Permite mostrar y ocultar el menu</div>
                    </button>
                    
                    <div>Sistema de consultas</div>
                    <!-- Topbar Search -->
                    {{-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                               id="search">
                               
                            
                                <label class="input-group-append" for="search" aria-describedby="descriptionSearch" >
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                    <div id="descriptionSearch" style="display: none;">Este boton permite realizar una busqueda</div>
                                </button>
                                </label>
                            
                        </div>
                    </form> --}}

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        {{-- <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." id="search2">
                                            
                                        <label class="input-group-append" aria-describedby="descriptionSearch2" for="search2">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                                <div id="descriptionSearch2" style="display: none;">Este boton permite realizar una busqueda</div>
                                            </button>
                                        </label>
                                        
                                    </div>
                                </form>
                            </div>
                        </li> --}}

                        <div class="topbar-divider d-none d-sm-block"></div>

                        @section('perfilUser')
                        <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-danger" style="max-height: 38px; overflow: hidden;" data-toggle="modal" data-target="#modalRegisterForm">
                                <i class="fas fa-file-alt fa-sm fa-fw mr-2 text-white-400"></i>
                                Registro</button>
                        </div>

                        

                        <div class="modal-footer d-flex justify-content-center">
                                <button class="btn btn-success" style="max-height: 38px; overflow: hidden;" data-toggle="modal" data-target="#modalLoginForm">
                                    <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-white-400"></i>
                                    Ingresar</button>
                            </div>
                        @endsection

                        @yield('perfilUser')



                        <!-- <div class="topbar-divider d-none d-sm-block"></div> -->

                        

                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- ____________________________________________________________________________________________________ -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- all code here -->
        
                    {{-- @include('index') --}}
                    
                    
                    @section('content')
                        @if (isset($team))
                            @include('teamWork')
                        @else
                            @if (isset($publi))
                                @include('publication')
                            @endif
                        @endif
                    @endsection

                    @yield('content')
                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- _________________________________________________________________________________________________________ -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up" style=" line-height: 40px;" aria-labelledby="descriptionClose"></i>
        <div id="descriptionClose" style="display: none;">Este icono permite ir al encabezado del sitio web</div>
    </a>




    <!-- _____________________________________________________________________________________________________________ -->

    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" 
        aria-hidden="true" aria-labelledby="myModalLabel">
        
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width:80%; left:10%">
                <div class="modal-header text-center" style="background-color:#4e73df">
                    {{-- <h4 class="modal-title w-100 font-weight-bold text-white">Sign in h</h4> --}}
                    <div class="modal-title w-100 font-weight-bold text-white" style="font-size: 25px;" id="myModalLabel">Ingresar</div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="md-form mb-4">

                            <i class="fas fa-envelope prefix grey-text" style="color:#3E3E3E"></i>
                            {{-- <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label> --}}
                            <label for="email" style="color:#3E3E3E">
                            {{ __('E-Mail') }}</label>
                            
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                            style="color:black;"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
            
                        </div>

                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text" style="color:#3E3E3E"></i>
                            {{-- <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label> --}}
                            <label for="password" style="color:#3E3E3E">
                            {{ __('Contraseña') }}</label>

                            {{-- <input type="password" id="defaultForm-pass" class="form-control validate" required> --}}
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                            style="color:black;"
                            name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Recuerdame') }}
                                </label>
                            </div>
                        </div>

                        <div class="modal-footer d-flex justify-content-center">
                            <div class="form-group row mb-0">
                                
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-white-400"></i>
                                    {{ __('Entrar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                        
                                    </a>
                                @endif
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- _____________________________________________________________________________________________________________ -->

    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" 
        aria-hidden="true" aria-labelledby="myModalLabel">
        
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width:80%; left:10%">
                <div class="modal-header text-center" style="background-color:#4e73df">
                    
                    <div class="modal-title w-100 font-weight-bold text-white" style="font-size: 25px;" id="myModalLabel">Registro</div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <form method="POST" action="{{ route('register') }}">
                            
                        @csrf
                        <div class="form-group md-form mb-2">
                            <div class="input-group">

                                <label class="sr-only" for="name-2">Nombre</label>
                                <input id="name-2" type="text" class="form-control mr-1"
                                style="border-top-left-radius:6px;
                                border-bottom-left-radius:6px;
                                color:black;" 
                                
                                placeholder="Nombre" name="name" value="{{ old('name') }}" required>

                            

                                <label class="sr-only" for="apellido">Apellidos</label>
                                <input id="apellido" type="text" class="form-control" 
                                style="color:black;"
                                placeholder="Apellidos" name="apellido" value="{{ old('apellido') }}" required>
                            </div>
                        </div>
                        

                        <div class="md-form mb-2">
                            
                            <label class="sr-only" for="email2">E-mail</label>
                            <input id="email2" type="email" class="form-control" 
                            style="color:black;"
                            placeholder="E-mail" name="email2" value="{{ old('email2') }}" required >
                        </div>

                        <div class="md-form mb-2">
                            <i class="far fa-calendar" style="color:#3E3E3E" aria-hidden="true"></i>
                            <label for="date" style="color:#3E3E3E">Fecha de Nacimiento</label>
                            <input id="date" type="date" class="form-control" style="color:black;" name="date" 
                            value="{{ old('date') }}" required>
                        </div>

                        <div class="md-form mb-2">
                            <label class="sr-only" for="profesion">Profesión</label>
                            <input id="profesion" type="text" class="form-control" 
                            style="color:black;"
                            placeholder="Profesión" name="profesion" 
                            value="{{ old('profesion') }}" required>
                        </div>

                        <div class="md-form mb-2">
                            <label class="sr-only" for="institucion">Institución</label>
                            <input id="institucion" type="text" class="form-control" 
                            style="color:black;"
                            placeholder="Institución" name="institucion" 
                            value="{{ old('institucion') }}" required>
                        </div>
                        

                        <div class="md-form mb-2">
                                <i class="far fa-clipboard" style="color:#3E3E3E" aria-hidden="true"></i>
                                <label for="motivo" style="color:#3E3E3E">Motivo</label>
                                <textarea id="motivo" type="text" class="form-control" name="motivo" rows="4" cols="45" 
                                required maxlength="180" style="resize:none; color:black;"
                                placeholder="Escriba brevemente el motivo por el cual desea registrarse en la plataforma.">{{ old('motivo') }}</textarea>
                        </div>


                        <div class="modal-footer d-flex justify-content-center pb-0 pt-1">
                            <div class="form-group row mb-0">
                                <button type="submit" class="btn btn-success" >
                                    <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-white-400"></i>
                                    Solicitar Registro
                                </button>    
                                                         
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Registrado-->
    <div class="modal fade" id="regis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Solicitud de registro enviada</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Su solicitud de registro se ha enviado correctamente, pronto se le enviara una respuesta a su correo.</div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="button" data-dismiss="modal" >Aceptar</button>
                    
                </div>
            </div>
        </div>
    </div>
    <script src={{asset("//code.jquery.com/jquery-1.12.0.min.js")}}></script>
    @if((isset($registrado)))
    
        <script>                    
            $(document).ready(function()
            {
                $("#regis").modal("show");
            });
        </script>                                                
    @endif  
 
    @extends('layouts.footer')




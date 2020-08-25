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
    <link rel="icon" href={{asset("/img/fav7.ico")}}>

    <title>E-SPPB+ @yield('title')</title>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center" style="justify-content: flex-end;" href="{{ route('main') }}">
                {{-- justify-content-center --}}
                <div class="sidebar-brand-icon rotate-n-15">
                    <i style="font-size: 15px;">E-SPPB+</i>
                    {{-- class="fas fa-laugh-wink" --}}
                </div>

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
                {{Auth::user()->rol}}
            </div>

            <!-- Nav Item - Tables -->
            {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('map') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Configuración de variables</span></a>
            </li> --}}

            <!-- Nav Item - Tables -->
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('hisC') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Gestión de plataformas</span></a>
            </li> --}}

            <!-- Nav Item - Tables -->
            {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('hisC') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Agregar Centro medico</span></a>
            </li> --}}

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span> Gestión de usuarios</span>
                </a>
                <div id="collapseTwo" class="collapse" data-parent="#accordionSidebar">
                    {{-- aria-labelledby="headingTwo"  --}}
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Componentes:</h6>
                        <a class="collapse-item" href="{{ route('usuarioAgregar') }}">Agregar usuario</a>
                        {{-- <a class="collapse-item" href="{{ route('usuarioEditar') }}">Editar usuario</a> --}}
                        {{-- <a class="collapse-item" href="{{ route('usuarioEliminar') }}">Eliminar usuario</a> --}}
                        <a class="collapse-item" href="{{ route('usuarioListar') }}">Listar usuarios</a>
                        <a class="collapse-item" href="{{ route('usuarioSolicitud') }}">Solicitudes</a>
                    </div>
                </div>
            </li>


    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('cenMedi') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>Actualizar centro medico</span></a>
    </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <!-- RETURN -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle" aria-labelledby="descriptionMenu"></button>
                <div id="descriptionMenu" style="display: none;">Este boton permite expandir y/o contraer el menu</div>
            </div>

        </ul>
        <!-- End of Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" style="background-color: white">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"
                        aria-describedby="describeMenu">
                        <i class="fa fa-bars"></i>
                        <div id="describeMenu" style="display: none;">Permite mostrar y ocultar el menu</div>
                    </button>

                    <div>Sistema de consultas</div>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <div class="container">

                            <!-- Nav Item - User Information -->
                            <li class=" nav-item dropdown no-arrow ">
                                <a class="  nav-link dropdown-toggle  " href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="user">
                                        <span class=" mr-2 d-none d-lg-inline text-white-100 small "
                                            style=" font-weight: bold;">{{ Auth::user()->name }} &nbsp; <i
                                                class="fa fa-angle-down"></i></span>
                                        <img class="img-profile rounded-circle img-user" src={{asset("/img/user.png")}} alt="User">
                                    </div>

                                </a>

                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    {{-- <a class="dropdown-item item-sl" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 "></i>
                                        Perfil
                                    </a>
                                    <div class="dropdown-divider"></div> --}}
                                    <a class="dropdown-item item-sl" href="{{ route('logout') }}" data-toggle="modal"
                                        data-target="#logoutModal" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 "></i>
                                        Salir
                                    </a>

                                </div>
                            </li>
                        </div>

                        <!-- Logout Modal-->
                        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">¿Cerrar sesión?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">Seleccione "Salir" si está listo para finalizar la sesión
                                        actual.</div>
                                    <div class="modal-footer">
                                        <button class="btn btn-danger" type="button"
                                            data-dismiss="modal">Cancel</button>
                                        <a class="btn btn-primary" href="{{ route('logout1') }}">Salir</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- Page Heading -->
                    <h1 class="h2 mb-2" style="font-weight: bold; color: royalblue">Gestión de usuraios</h1>
                    <center>
                        <div class="mb-4"
                            style="border-radius: 10px 10px; padding: 10px; background-color:royalblue; color: white;">
                            <h2 class="h4 mb-2" style="font-weight: bold">Registrar usuario</h2>
                        </div>
                    </center>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <form method="POST" action="{{ route('formAdd') }}">

                                @csrf
                                <div class="form-group md-form mb-2">
                                    <div class="input-group">

                                        <label class="sr-only" for="name">Nombre</label>
                                        <input id="name" type="text" class="form-control mr-1" style="border-top-left-radius:6px;
                                        border-bottom-left-radius:6px;
                                        color:black;" placeholder="Nombre" name="name" value="{{ old('name') }}"
                                            required>

                                        <label class="sr-only" for="apellido">Apellidos</label>
                                        <input id="apellido" type="text" class="form-control" style="color:black;"
                                            placeholder="Apellidos" name="apellido" value="{{ old('apellido') }}"
                                            required>
                                    </div>
                                </div>


                                <div class="md-form mb-2">

                                    <label class="sr-only" for="email">E-mail</label>
                                    <input id="email" type="email" class="form-control" style="color:black;"
                                        placeholder="E-mail" name="email" value="{{ old('email') }}" required>
                                </div>

                                <div class="md-form mb-2">
                                    <i class="far fa-calendar" style="color:#3E3E3E" aria-hidden="true"></i>
                                    <label for="date" style="color:#3E3E3E">Fecha de Nacimiento</label>
                                    <input id="date" type="date" class="form-control" style="color:black;" name="date"
                                        value="{{ old('date') }}" required>
                                </div>

                                <div class="md-form mb-2">
                                    <label class="sr-only" for="profesion">Profesión</label>
                                    <input id="profesion" type="text" class="form-control" style="color:black;"
                                        placeholder="Profesión" name="profesion" value="{{ old('profesion') }}"
                                        required>
                                </div>

                                <div class="md-form mb-2">
                                    <label class="sr-only" for="institucion">Institución</label>
                                    <input id="institucion" type="text" class="form-control" style="color:black;"
                                        placeholder="Institución" name="institucion" value="{{ old('institucion') }}"
                                        required>
                                </div>

                                <div class="md-form mb-2">
                                    <label  for="rol">Rol del usuario: </label>
                                    <select id='rol' name="rol" required>
                                        <option value="Especialista" selected>Especialista</option>
                                        <option value="Investigador" >Investigador</option>
                                    </select>
                                </div>

                                <div>
                                    <button type="submit" class="btn btn-success">
                                        {{-- <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-white-400"></i> --}}
                                        Registrar
                                    </button>

                                </div>

                            </form>
                        </div>
                    </div>



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

    <!-- Registrado-->
    <div class="modal fade" id="regisadd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        @if (isset($errorEmail))
                        Error en el registro
                        @else
                        Registrado correctamente
                        @endif
                    </h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if (isset($errorEmail))
                    El usuario no se ha podido registrar, el correo pertenece a un usuario que ya se encuentra
                    registrado.
                    @else
                    El usuario se ha registrado correctamente, pronto se le enviara el usuario y contraseña al correo.
                    @endif
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="button" data-dismiss="modal">Aceptar</button>

                </div>
            </div>
        </div>
    </div>

<script src={{asset("//code.jquery.com/jquery-1.12.0.min.js")}}></script>
@if (isset($add))

    <script>                    
        $(document).ready(function()
        {
            $("#regisadd").modal("show");
        });
    </script>                                                
@endif  
    @extends('layouts.footer')

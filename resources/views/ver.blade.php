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
                            <h2 class="h4 mb-2" style="font-weight: bold">Solicitudes</h2>
                        </div>
                    </center>

                    
<div class="mb-4 shadow p-4" style="border-radius: 10px 10px; padding: 10px;">
    <b >Nombre:</b> {{$ver->nombre}} <br>
    <b >Apellidos:</b>  {{$ver->apellidos}}<br>
    <b >E-Mail:</b>  {{$ver->email}}<br>
    <b >Fecha de nacimiento:</b>  {{$ver->fecha}}<br>
    <b >Profesión:</b>  {{$ver->profesion}}<br>
    <b >Institución:</b>  {{$ver->institucion}}<br>
    <b >Motivo:</b>  {{$ver->motivo}}<br>


    {{-- <div class="md-form mb-2">

        <b class="blue"><label for="rol">Asignar rol:</label></b>
        <select name="rol" required>
        <option value="Especialista" selected>Especialista</option>
        <option value="Investigador" >Investigador</option>
        </select>
    </div> --}}

    

    <br><br>

    {{-- {{$opcion='Especialista'}} --}}

    <a  href="{{ route('usuarioSolicitud') }}">
        <button  class="btn btn-blue" >Regresar</button> 
    </a> 
    <a href="{{ route('aceptar',$ver->id)}}">
        <button type="submit"  class="btn btn-success" >Aceptar</button>
    </a> 
    <a href="{{ route('rechazar',$ver->id)}}">
        <button  class="btn btn-danger" >Rechazar</button> 
    </a>

    
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

    @extends('layouts.footer')

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
            <li class="nav-item">
                <a class="nav-link" href="{{ route('map') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Regiones</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('hisC') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Historia Clínica</span></a>
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
                    <h1 class="h2 mb-2" style="font-weight: bold; color: royalblue">Historia Clínica</h1>

                    <div class="mb-4"
                        style="border-radius: 10px 10px; padding: 10px; background-color:royalblue; color: white;">
                        Ingese la cédula del paciente para consultar su historia clinica.
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <form method="GET" action="{{ route('cedula') }}">
                                <label class="sr-only" for="cedPac">Nombre</label>
                                <input id="cedPac" type="text" class="form-control mr-1" style="border-top-left-radius:6px;
                    border-bottom-left-radius:6px;
                    color:black;" placeholder="Cédula del paciente" name="cedula" required>
                                <br>
                                <button type="submit" class="btn btn-success">
                                    {{-- <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-white-400"></i> --}}
                                    Consultar
                                </button>
                            </form>
                        </div>
                    </div>
                    <br>
                    @if (isset($cedul) )
                    <div class="card shadow mb-4 p-4">
                        <div class="row">
                            
                            <div class="col-xl-6 col-lg-6 ">

                                <b>Datos basicos</b><br><br>
                                <b>Cédula: </b>{{$cedul->id}}<br>
                                <b>Nombre: </b>{{$cedul->name}}<br> 
                                <b>Dirección: </b>{{$cedul->address}}<br> 
                                <b>E-mail: </b>{{$cedul->email}}<br> 
                                <b>Sub-Región: </b>{{$cedul->subregion}}<br> 
                                <b>Ciudad: </b>{{$cedul->city}}<br> 
                                <b>Zona: </b>{{$cedul->zone}}<br> 
                                <b>Telefono: </b>{{$cedul->phone_number}}<br> 
                                <b>Celular: </b>{{$cedul->cellphone_number}}<br>

                                <b>Fecha de nacimiento: </b>{{$cedul->date_birth}}<br> 
                                <b>Edad: </b>{{$cedul->age}}<br> 
                                <b>Sexo: </b>{{$cedul->gender}}<br> 
                                <b>Ocupación principal: </b>{{$cedul->main_occupation}}<br> 
                                <b>Ocupación actual: </b>{{$cedul->current_occupation}}<br> 
                                <b>Eps: </b>{{$cedul->eps}}<br> 
                                <b>Tipo de afiliación: </b>{{$cedul->affiliation_type}}<br> 
                                <b>Estado civil: </b>{{$cedul->civil_status}}<br> 
                                <b>Años de educación: </b>{{$cedul->education_years}}<br> 
                                <b>Nivel de educación: </b>{{$cedul->educational_level}}<br> 
                                <b>Ingresos: </b>{{$cedul->source_income}}<br> 
                                <b>Fuente de ingresos: </b>{{$cedul->monthly_income}}<br> 
                                <b>Estrato: </b>{{$cedul->stratum}}<br> 
                            
                            </div>
                            <div class="col-xl-6 col-lg-6 ">

                                <b>Datos del acompañante</b><br><br>
                                <b>Relación: </b>{{$cedul->relationship_patient}}<br> 
                                <b>Nombre: </b>{{$cedul->companion_name}}<br> 
                                <b>Dirección: </b>{{$cedul->companion_address}}<br> 
                                <b>Telefono: </b>{{$cedul->companion_phone}}<br> 
                                <b>Celular: </b>{{$cedul->companion_cellphone}}<br><br>

                                

                                <b>Datos clinicos</b><br><br>
                                <b>Osteoporosis crónica: </b>{{$cedul->chronic_osteoporosis}}<br> 
                                <b>Artritis crónica: </b>{{$cedul->chronic_arthritis}}<br> 
                                <b>Accidente cerebrovascular crónico: </b>{{$cedul->chronic_stroke}}<br> 
                                <b>Infarto crónico: </b>{{$cedul->chronic_heart_attack}}<br> 
                                <b>Enfermedad pulmonar crónica: </b>{{$cedul->chronic_lung_disease}}<br> 
                                <b>Cáncer crónico: </b>{{$cedul->chronic_cancer}}<br> 
                                <b>Hipertensión crónica: </b>{{$cedul->chronic_hypertension}}<br> 
                                <b>Peso crónico: </b>{{$cedul->chronic_weight}}<br> 
                                <b>Salud crónica: </b>{{$cedul->chronic_health}}<br> 
                                <b>Medicamentos con receta: </b>{{$cedul->prescription_drugs}}<br> 
                                <b>Nombre de los medicamentos: </b>{{$cedul->name_prescription_drugs}}<br> 
                                <b>Medicamentos sin receta: </b>{{$cedul->not_prescription_drugs}}<br> 
                                <b>Nombre de los medicamentos: </b>{{$cedul->name_not_prescription_drugs}}<br> 
                                <b>Altura: </b>{{$cedul->size}}<br> 
                                
                            </div>
                            
                        </div>
                    </div>
                        <div class="card shadow mb-4 p-4">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 ">
                                <br><b>Datos clinicos</b><br><br>
                                <b>Peso: </b>{{$cedul->weight}}<br> 
                                <b>IMC: </b>{{$cedul->imc}}<br> 
                                <b>Diámetro de cintura: </b>{{$cedul->waist_diameter}}<br> 
                                <b>Consumo de cigarrillos: </b>{{$cedul->cigarettes}}<br> 
                                <b>Numero de paquetes: </b>{{$cedul->cigarettes_packs}}<br> 
                                <b>Alcohol último mes: </b>{{$cedul->alcohol_last_month}}<br> 
                            </div>
                            <div class="col-xl-6 col-lg-6 ">
                                <br><b>Datos clinicos</b><br><br>
                                <b>Menos de 5 veces: </b>{{$cedul->less_five_alcohol}}<br> 
                                <b>Más de 5 veces: </b>{{$cedul->more_five_alcohol}}<br> 
                                <b>Demasiadas veces: </b>{{$cedul->many_alcohol}}<br> 
                                <b>Velocidad: </b>{{$cedul->speed}}<br> 
                                <b>Días de caminata: </b>{{$cedul->walking_days}}<br> 
                                <b>Tiempo de caminata: </b>{{$cedul->walking_time}}<br>
                                {{-- {{$cedul->sistolica}}<br> 
                                {{$cedul->diastolica}}<br>  --}}
                            </div>
                            </div>
                        </div>
                    </div>
                        
                    @elseif(isset($vacia) && $vacia==true)
                        No se han encontrado pacientes con esa cédula.
                    @endif

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

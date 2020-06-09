@extends('layouts.app')


@section('perfilUser')
<div class="container">

    <!-- Nav Item - User Information -->
    <li class=" nav-item dropdown no-arrow ">
        <a class="  nav-link dropdown-toggle  " href="#" id="userDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <div class="user">
                <span class=" mr-2 d-none d-lg-inline text-white-100 small " style=" font-weight: bold;">{{ Auth::user()->name }} &nbsp; <i class="fa fa-angle-down"></i></span>
                <img class="img-profile rounded-circle img-user" src={{asset("/img/user.png")}} alt="User">
            </div>
            
        </a>

        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            {{-- <a class="dropdown-item item-sl" href="#">
                <i class="fas fa-user fa-sm fa-fw mr-2 "></i>
                Perfil
            </a> --}}
            {{-- <div class="dropdown-divider"></div> --}}
            <a class="dropdown-item item-sl" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal"
                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 "></i>
                Salir
            </a>

        </div>
    </li>
</div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Cerrar sesión?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Salir" si está listo para finalizar la sesión actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('logout1') }}">Salir</a>
                </div>
            </div>
        </div>
    </div>
@endsection



@if (Auth::user()->rol === 'Administrador')
    @include('layouts.administrador')
@elseif(Auth::user()->rol === 'Especialista')
    @include('layouts.especialista')
@elseif(Auth::user()->rol === 'Investigador')
    @include('layouts.investigador')
@endif

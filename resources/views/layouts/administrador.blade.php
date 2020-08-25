<!-- All content page -->
@section('content')
      {{-- <div id="changeContent"> --}}

        @if (isset($ind) && $ind==true)
            @include('index')
        @else
            @if (isset($agregar))
                @include('agregar')
            @else
                @if (isset($editar))
                    @include('editar')
                @else
                    @if (isset($eliminar))
                        @include('eliminar')
                    @else
                        @if (isset($listar))
                            @include('listar')
                        @else
                            @if (isset($solicitud))
                                @include('solicitud')
                            @else
                                @if (isset($ver))
                                    @include('ver')
                                @endif
                            @endif
                        @endif
                    @endif
                @endif
            @endif
        @endif
    {{-- <div> --}}
@endsection
<!-- End content page -->

{{-- ----------------------------------------------------------------------- --}}

<!-- Section Menu -->
@section('mainMenu')
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center" style="justify-content: flex-end;" href="#">
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
                <a class="collapse-item"  href="{{ route('usuarioAgregar') }}">Agregar usuario</a>
                {{-- <a class="collapse-item"  href="{{ route('usuarioEditar') }}">Editar usuario</a> --}}
                {{-- <a class="collapse-item"  href="{{ route('usuarioEliminar') }}">Eliminar usuario</a> --}}
                <a class="collapse-item"  href="{{ route('usuarioListar') }}">Listar usuarios</a>
                <a class="collapse-item"  href="{{ route('usuarioSolicitud') }}">Solicitudes</a>
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
        <button class="rounded-circle border-0" id="sidebarToggle"  aria-labelledby="descriptionMenu"></button>
        <div id="descriptionMenu" style="display: none;">Este boton permite expandir y/o contraer el menu</div>
    </div>

</ul>
@endsection

<!-- End of Menu -->
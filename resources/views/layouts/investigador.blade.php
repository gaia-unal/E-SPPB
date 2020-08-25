<!-- All content page -->
@section('content')

    {{-- <div  id="changeContent"> --}}

        @if (isset($ind) && $ind==true)
            {{-- <div id='content1'> --}}
                @include('index')
            {{-- </div> --}}
        @else
            @if (isset($mapa) && $mapa==true)
                @include('map')
            @else
                @if (isset($conP) && $conP==true)
                    {{-- <div id='content2'> --}}
                        @include('consultaP')
                    {{-- </div> --}}
                @else
                    {{-- @if (isset($conL) && $conL==true)
                        <div id='content3'>
                            @include('consultaL')
                        </div>
                    @else --}}
                        @if (isset($grafico))
                            @include('grafico')
                        @endif
                    {{-- @endif --}}
                @endif 
            @endif
        @endif
    {{-- </div> --}}
@endsection

<!-- End content page -->

{{-- ----------------------------------------------------------------------- --}}

<!-- Section Menu -->
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
            {{Auth::user()->rol}}
        </div>


        
        <!-- Nav Item - Pages Collapse Menu -->

            <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('map') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Regiones</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('conP') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Consulta personalizada</span></a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        {{-- <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers"
                aria-expanded="true" aria-controls="collapseUsers">
                <i class="fas fa-fw fa-cog"></i>
                <span> Consultas</span>
            </a>
            <div id="collapseUsers" class="collapse" data-parent="#accordionSidebar">
                    
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Componentes:</h6>
                    <a class="collapse-item"  href="{{ route('conP') }}">Consulta personalizada</a>
                    <a class="collapse-item"  href="{{ route('conL') }}">Consulta limitada</a>
                </div>
            </div>
        </li> --}}

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
<!-- End of section  Menu-->

<script></script>
<!-- Begin Script -->


<!-- End Script -->

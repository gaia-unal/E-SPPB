<!-- All content page -->
@section('content')
      {{-- <div id="changeContent"> --}}

        @if (isset($ind) && $ind==true)
            @include('index')
        @else
            @if (isset($history))
                @include('patient')
            @else
                @if (isset($mapa) && $mapa==true)
                    @include('map')
                @else
                    @if (isset($grafico))
                        @include('grafico')
                    @endif
                @endif
            @endif
        @endif
    {{-- <div> --}}
@endsection

<!-- End content page -->

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
        <button class="rounded-circle border-0" id="sidebarToggle"  aria-labelledby="descriptionMenu"></button>
        <div id="descriptionMenu" style="display: none;">Este boton permite expandir y/o contraer el menu</div>
    </div>

</ul>

@endsection
<!-- End of Sidebar -->

<!-- Begin Script -->
<script></script>
<!-- Map script  -->
{{-- <script src="/js/map.js"></script> --}}
<!-- End Script -->
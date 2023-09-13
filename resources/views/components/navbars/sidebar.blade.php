@props(['activePage'])

<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 d-flex text-wrap align-items-center" href=" {{ route('dashboard') }} ">
            <img src="{{ asset('assets') }}/img/logo-bl.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-2 font-weight-bold text-white">Borges Logistics</span>
        </a>
    </div>


    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">

            @can('dashboard')
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Perfil</h6>
            </li>


            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'dashboard' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('dashboard') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Pagina Principal</span>
                </a>
            </li>

            @endcan


            @can('admin.users.index')



            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'users' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('admin.users.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">manage_accounts</i>
                    </div>
                    <span class="nav-link-text ms-1">Usuarios</span>
                </a>
            </li>

            @endcan


            @can('dashboard')


            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'user-profile' ? 'active bg-gradient-primary' : '' }} "
                    href="{{ route('user-profile') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1.2rem;" class="fas fa-user-circle ps-2 pe-2 text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">Perfil</span>
                </a>

            </li>
            @endcan


            @can('driver.ver.index')


            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">USUARIO GERENTE</h6>
            </li>



            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'indexOperarioCita' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('cita.indexOperario') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">Documentacion</span>
                </a>
            </li>
            @endcan

            @can('aspirante.driver.index')


            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'tables' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('driver.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">groups</i>
                    </div>
                    <span class="nav-link-text ms-1">Owners</span>
                </a>
            </li>
                @endcan

            @can('aspirante.aspirante.index')

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Usuario Operario</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'estado' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{ route('estado') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">Aspirantes/Drivers</span>
                </a>
            </li>



            @endcan

            @can('solicitud.ver.operario.cita')


            <li class="nav-item">

                <a class="nav-link text-white {{ $activePage == 'solicitudesVer' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{ route('solicitud.ver') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">pending_actions</i>
                    </div>
                    <span class="nav-link-text ms-1">Driver Qualifications</span>
                </a>
            </li>

            @endcan


            @can('solicitud.ver.operario.cita')


            <li class="nav-item">

                <a class="nav-link text-white {{ $activePage == 'ver' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{ route('driver.ver') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">pending_actions</i>
                    </div>
                    <span class="nav-link-text ms-1">Driver Applications</span>
                </a>
            </li>

            @endcan


        </ul>
        </div>
        
        @can('dashboard')


        <div class="sidenav-footer position-absolute w-100 bottom-0 ">
                <div class="mx-3">
                    <a class="btn bg-gradient-primary w-100" href="https://borgeslogistics.com" target="_blank">PAGINA WEB</a>
                </div>


            </div>
        @endcan

</aside>

<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="ver"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Tables"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">TABLA CONDUCTORES</h6>
                            </div>
                        </div>

                        <!-- Tabla -->

@if (session('mensaje'))
     <div class="alert alert-success">
        <strong>{{session('mensaje')}}</strong>
    </div>

@endif

<div class="card">
    <div class="card-header">
        <form action="{{route('driver.ver')}}" method="GET">
            @csrf
            <div class="input-group input-group-outline">
            <label class="form-label">Search here</label>
            <input type="text" name="search" class="form-control">
            </div>
        </form>
    </div>
     <div class="card-body px-0 pb-2">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>TIPO</th>


                    <th>CORREO</th>


                    <th>ACCIONES</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($drivers as $driver)
                <tr>

                    <td>{{$driver->nombre}}</td>
                    <td>{{$driver->tipoConductor}}</td>


                    <td>{{$driver->correo}}</td>


                    <td width="15px"> <a href="{{route('driver.indexVer',$driver)}}" class="btn btn-warning btn-sm">Visualizar</a></td>
                    <td width="15px"> <a href="{{route('documento.view',$driver->clearingHouse)}}" class="btn btn-warning btn-sm">Clearing House</a></td>


                    <td></td>
                </tr>
                @endforeach

            </tbody>
        </table>
        {{$drivers->appends($_GET)->links("pagination::bootstrap-5")}}
    </div>
</div>


                    </div>
                </div>
            </div>

            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>

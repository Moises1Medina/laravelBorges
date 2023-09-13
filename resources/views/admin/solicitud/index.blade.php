<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="solicitud"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Solicitudes Conductor"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">TABLA SOLICITUDES</h6>
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

        <a href="{{route('solicitud.create')}}" class="btn btn-success">Nueva Solicitud</a>

        <form action="{{route('solicitud.index')}}" method="GET">
            @csrf
            <div class="input-group input-group-outline">
            <label class="form-label">Search here</label>
            <input type="text" name="search" class="form-control">
            </div>

            @if ($solicituds->count())
            <div class="card-body">
            </div>
            <div class="card-footer">
            </div>
        @else

            <div class="card-body">
                <strong>No hay registros</strong>
            </div>

        @endif
        </form>

     <div class="card-body">




        <table class="table table-striped">
            <thead>
                <tr>
                    <th>COMPANY</th>
                    <th>NAME</th>
                    <th>DRIVER TYPE</th>
                    
                    <th>STATUS</th>



                </tr>
            </thead>
            <tbody>
                @foreach ($solicituds as $solicitud)
                <tr>

                    <td>{{$solicitud->company}}</td>
                    <td>{{$solicitud->name}}</td>
                    <td>{{$solicitud->driverType}}</td>
                    
                    <td>{{$solicitud->status}}</td>


                   <!-- Botones -->



                </tr>
                @endforeach

            </tbody>
        </table>
        {{$solicituds->appends($_GET)->links("pagination::bootstrap-5")}}
    </div>
</div>




    <x-footers.auth></x-footers.auth>
</div>
</main>
<x-plugins></x-plugins>
</x-layout>

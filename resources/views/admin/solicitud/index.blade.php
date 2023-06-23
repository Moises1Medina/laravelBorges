<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="solicitudes"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Solicitudes"></x-navbars.navs.auth>
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

        <form action="{{route('solicitud.index')}}" method="GET">
            @csrf
            <div class="input-group input-group-outline">
            <label class="form-label">Search here</label>
            <input type="text" name="search" class="form-control">
            </div>
        </form>

     <div class="card-body">




        <table class="table table-striped">
            <thead>
                <tr>
                    <th>NOMBRE DRIVER</th>
                    <th>TIPO</th>
                    <th>FECHA DE SOLICITUD</th>
                    <th>CORREO</th>
                    <th>DOCUMENTO</th>



                </tr>
            </thead>
            <tbody>
                @foreach ($solicituds as $solicitud)
                <tr>

                    <td>{{$solicitud->nombreConductor}}</td>
                    <td>{{$solicitud->tipo}}</td>
                    <td>{{$solicitud->fechaSolicitud}}</td>
                    <td>{{$solicitud->correo}}</td>
                    <td>{{$solicitud->documento}}</td>


                   <!-- Botones -->
                   <td width="15px"> <a href="{{route('solicitud.edit',$solicitud)}}" class="btn btn-success btn-sm">Abrir</a></td>
                    <td width="15px">
                        <form action="{{route('solicitud.destroy',$solicitud)}}" method="POST">
                            @method('delete')
                            @csrf
                            <input type="submit" value="Eliminar" class="btn btn-danger btn-sm">
                        </form>
                    </td>

                    <td></td>
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
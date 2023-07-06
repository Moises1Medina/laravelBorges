<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="estado"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Conductores Estado"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">CONDUCTORES ESTADO</h6>
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
        <a href="{{route('driver.createEstado')}}" class="btn btn-success">Nuevo Estado Driver</a>

    </div>
    <div class="card-header">
    </div>
     <div class="card-body px-0 pb-2">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>NOMBRE</th>

                    <th>ESTADO</th>
                    <th>TELEFONO</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($drivers as $driver)
                <tr>

                    <td>{{$driver->nombre}}</td>
                    <td>{{$driver->estado}}</td>

                    <td>{{$driver->telefono}}</td>

                    <td width="15px"> <a href="{{route('driver.editEstado',$driver)}}" class="btn btn-warning btn-sm">Editar</a></td>
                    <td width="15px">
                        <form action="{{route('driver.destroy',$driver)}}" method="POST">
                            @method('delete')
                            @csrf
                            <input type="submit" value="Eliminar" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        {{$drivers->links("pagination::bootstrap-5")}}
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

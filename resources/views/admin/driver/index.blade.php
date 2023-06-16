<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="tables"></x-navbars.sidebar>
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
                                <h6 class="text-white text-capitalize ps-3">TABLA ASPIRANTES</h6>
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

        <form action="{{route('driver.index')}}" method="GET">
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
                    <th>NOMBRE</th>
                    <th>ESTADO</th>
                    <th>FECHA DE APLICACION</th>

                    <th>MVR</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($aspirantes as $aspirante)
                <tr>

                    <td>{{$aspirante->nombre}}</td>
                    <td>{{$aspirante->estado}}</td>
                    <td>{{$aspirante->fechaIngreso}}</td>
                    <td>{{$aspirante->mvr}}</td>


                   <!-- Botones -->
                   <td width="15px"> <a href="{{route('aspirante.edit',$aspirante)}}" class="btn btn-warning btn-sm">Editar</a></td>
                    <td width="15px">
                        <form action="{{route('aspirante.destroy',$aspirante)}}" method="POST">
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
        {{$aspirantes->appends($_GET)->links("pagination::bootstrap-5")}}
    </div>
</div>



            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>

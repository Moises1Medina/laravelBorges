<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="estado"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Aspirantes"></x-navbars.navs.auth>
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
        <a href="{{route('aspirante.create')}}" class="btn btn-success">Nuevo Aspirante</a>

        <form action="{{route('aspirante.index')}}" method="GET">
            @csrf
            <div class="input-group input-group-outline">
            <label class="form-label">Search here</label>
            <input type="text" name="search" class="form-control">
            </div>


            @if ($aspirantes->count())
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

     <div class="card-body px-0 pb-2">




        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>ESTADO</th>




                </tr>
            </thead>
            <tbody>
                @foreach ($aspirantes as $aspirante)
                <tr>

                    <td>{{$aspirante->nombre}}</td>
                    <td>{{$aspirante->estado}}</td>




                   <!-- Botones -->



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

<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="indexOperarioCita"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='Cita'></x-navbars.navs.auth>
        <!-- End Navbar -->



                <div class="row">
                    <div class="col-12">
                        <div class="card my-4">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                    <h6 class="text-white text-capitalize ps-3">SOLICITUDES CITAS</h6>
                                </div>
                            </div>



                                    <div>


                                        @if (session('mensaje'))
                                        <div class="alert alert-success">
                                        <strong>{{session('mensaje')}}</strong>
                                    </div>

                                @endif

                                <div class="card">

                                    <div class="card-header">

                                        <form action="{{route('cita.indexOperario')}}" method="GET">
                                            @csrf
                                            <div class="input-group input-group-outline">
                                            <label class="form-label">Search here</label>
                                            <input type="text" name="search" class="form-control">
                                            </div>
                                            @if ($citas->count())
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
                                                    <th>DRIVER</th>
                                                    <th>FECHA</th>
                                                    <th>ESTADO</th>




                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($citas as $cita)
                                                <tr>

                                                    <td>{{$cita->driver}}</td>
                                                    <td>{{$cita->fechaCita}}</td>
                                                    <td>{{$cita->estado}}</td>




                                                    <!-- Botones -->
                                                    <td width="15px"> <a href="{{route('cita.edit',$cita)}}" class="btn btn-warning btn-sm">Editar</a></td>
                                                    <td width="15px">
                                                        <form action="{{route('cita.destroy',$cita)}}" method="POST">
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
                                        {{$citas->appends($_GET)->links("pagination::bootstrap-5")}}
                                    </div>
                                </div>


                                </div>


                                    </div>
                </div>
            <x-footers.auth></x-footers.auth>
        </div>
    </div>
</div>
<x-plugins></x-plugins>

</x-layout>

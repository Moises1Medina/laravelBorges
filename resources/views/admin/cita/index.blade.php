<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="cita"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='Cita'></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                <span class="mask  bg-gradient-primary  opacity-6"></span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="{{ asset('assets') }}/img/bruce-mars.jpg" alt="profile_image"
                                class="w-100 border-radius-lg shadow-sm">
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
                           <a href="{{route('cita.create')}}" class="btn btn-success">Nueva Cita</a>
                           <form action="{{route('cita.index')}}" method="GET">
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
                </div>

            </div>
        </div>
        <x-footers.auth></x-footers.auth>
    </div>
    <x-plugins></x-plugins>

</x-layout>

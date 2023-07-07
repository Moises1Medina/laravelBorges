<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="users"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='users'></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                <span class="mask  bg-gradient-primary  opacity-6"></span>
            </div>

            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card my-4">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                    <h6 class="text-white text-capitalize ps-3">TABLA USUARIOS</h6>
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

                                   <form action="{{route('admin.users.index')}}" method="GET">
                                       @csrf
                                       <div class="input-group input-group-outline">
                                       <label class="form-label">Search here</label>
                                       <input type="text" name="search" class="form-control">
                                       </div>

                                       @if ($users->count())
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
                                               <th>ID</th>
                                               <th>NOMBRE</th>
                                               <th>EMAIL</th>




                                           </tr>
                                       </thead>
                                       <tbody>
                                           @foreach ($users as $user)
                                           <tr>

                                               <td>{{$user->id}}</td>
                                               <td>{{$user->name}}</td>
                                               <td>{{$user->email}}</td>




                                              <!-- Botones -->

                                              <td width="15px"> <a href="{{route('admin.users.edit',$user)}}" class="btn btn-success btn-sm">Editar</a></td>
                                              <td width="15px">
                                                  <form action="{{route('admin.users.destroy',$user)}}" method="POST">
                                                      @method('delete')
                                                      @csrf
                                                      <input type="submit" value="Eliminar" class="btn btn-danger btn-sm">
                                                  </form>
                                              </td>

                                           </tr>
                                           @endforeach

                                       </tbody>
                                   </table>
                                   {{$users->appends($_GET)->links("pagination::bootstrap-5")}}
                               </div>
                           </div>




                           </div>


                            </div>









                        </div>
                    </div>
                </div>
            </div>

            <x-footers.auth>

            </x-footers.auth>

        </div>
    </div>


<x-plugins>

</x-plugins>

</x-layout>

<x-layout bodyClass="g-sidenav-show  bg-gray-200">
        <x-navbars.sidebar activePage="tablesAspirante"></x-navbars.sidebar>
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
                                    <h6 class="text-white text-capitalize ps-3">CONDUCTORES ESTADO</h6>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                   <table class="table table-striped">
                                       <thead>
                                           <tr>


                                               <th>NOMBRE</th>
                                               <th>TIPO CONDUCTOR</th>



                                               <th>TELEFONO</th>

                                               <th colspan="2"></th>
                                               <th></th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                           @foreach ($drivers as $driver)
                                           <tr>

                                               <td>{{$driver->nombre}}</td>
                                               <td>{{$driver->tipoConductor}}</td>

                                               <td>{{$driver->telefono}}</td>
                                               <td>{{$driver->correo}}</td>


                                               <td></td>
                                               <td></td>
                                           </tr>
                                           @endforeach

                                       </tbody>
                                   </table>
                               </div>
                         </div>
                <x-footers.auth></x-footers.auth>
            </div>
        </main>
        <x-plugins></x-plugins>

</x-layout>

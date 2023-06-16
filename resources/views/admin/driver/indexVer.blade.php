<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="ver"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Visualizacion Driver"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">INFORMACION DE DRIVER</h6>
                            </div>
                        </div>

                        <br>
                        <h6 class="text-black text-capitalize ps-3">Visualizar driver: {{$driver->nombre}}</h6>


                        <!-- CONTENT -->

                           @if (session('mensaje'))
                           <div class="alert alert-success">
                                <strong>{{session('mensaje')}}</strong>
                           </div>
                           @endif



                        <div class="card">
                            <div class="card-body">
                                <div class="p-4 bg-light">
                                {!! Form::model($driver,['route'=>['driver.indexVer',$driver]
                                                        ,'method'=>'put']) !!}


                                    <div class="input-group input-group-static mb-4">
                                        {!! Form::label('nombre', 'Nombre',['class' => 'form-control']) !!}
                                        {!! Form::text('nombre',null, ['class'=>'form-control','disabled'=>'true']) !!}
                                        @error('nombre')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group input-group-static mb-4">
                                        {!! Form::label('tipoConductor', 'Tipo de Conductor',['class' => 'form-control']) !!}
                                        {!! Form::text('tipoConductor',null, ['class'=>'form-control','disabled'=>'true']) !!}
                                        @error('nombre')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('apliDateTime', 'Aplicacion Fecha',['class' => 'form-label']) !!}
                                        {!! Form::date('apliDateTime',null, ['class'=>'form-group','disabled'=>'true']) !!}
                                        @error('nombre')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        {!! Form::label('fechaModif', 'Fecha Modificacion',['class' => 'form-label']) !!}
                                        {!! Form::date('fechaModif',null, ['class'=>'form-group','disabled'=>'true']) !!}
                                        @error('nombre')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="input-group input-group-static mb-4">
                                        {!! Form::label('carrier', 'Transportadora',['class' => 'form-control']) !!}
                                        {!! Form::text('carrier',null, ['class'=>'form-control','disabled'=>'true']) !!}
                                        @error('nombre')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group input-group-static mb-4">
                                        {!! Form::label('telefono', 'Telefono',['class' => 'form-control']) !!}
                                        {!! Form::text('telefono',null, ['class'=>'form-control','disabled'=>'true']) !!}
                                        @error('nombre')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group input-group-static mb-4">
                                        {!! Form::label('correo', 'Correo',['class' => 'form-control']) !!}
                                        {!! Form::text('correo',null, ['class'=>'form-control','disabled'=>'true']) !!}
                                        @error('nombre')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group input-group-static mb-4">
                                        {!! Form::label('truckOwner', 'Dueño de camion',['class' => 'form-control']) !!}
                                        {!! Form::text('truckOwner',null, ['class'=>'form-control','disabled'=>'true']) !!}
                                        @error('nombre')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group input-group-static mb-4">
                                        {!! Form::label('referedBy', 'Referido por',['class' => 'form-control']) !!}
                                        {!! Form::text('referedBy',null, ['class'=>'form-control','disabled'=>'true']) !!}
                                        @error('nombre')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('ultInspeccion', 'Ultima Inspeccion',['class' => 'form-label']) !!}
                                        {!! Form::date('ultInspeccion',null, ['class'=>'form-group','disabled'=>'true']) !!}
                                        @error('nombre')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="input-group input-group-static mb-4">
                                        {!! Form::label('documentos', 'Documentos',['class' => 'form-control']) !!}
                                        {!! Form::number('documentos',null, ['class'=>'form-control','disabled'=>'true']) !!}
                                        @error('nombre')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group input-group-static mb-4">
                                        {!! Form::label('camion', 'Camion',['class' => 'form-control']) !!}
                                        {!! Form::text('camion',null, ['class'=>'form-control','disabled'=>'true']) !!}
                                        @error('nombre')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>







                                {!! Form::close() !!}

                            </div>
                        </div>







    <x-footers.auth></x-footers.auth>
</div>
</main>
<x-plugins></x-plugins>

</x-layout>

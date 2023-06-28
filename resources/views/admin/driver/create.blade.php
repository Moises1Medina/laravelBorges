<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="estado"></x-navbars.sidebar>
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
                                <h6 class="text-white text-capitalize ps-3">TABLA CONDUCTORES</h6>
                            </div>
                        </div>
    <br>

    <!-- CONTENT -->


    <h6 class="text-black text-capitalize ps-3">NUEVO PRODUCTO</h6>
    <div class="card">
        <div class="card-body">
            <div class="p-4 bg-light">
            {!! Form::open(['route'=>'driver.store', 'enctype' => 'multipart/form-data']) !!}


                <div class="input-group input-group-outline my-3">
                    {!! Form::label('nombre', 'Nombre',['class' => 'form-label']) !!}
                    {!! Form::text('nombre',null, ['class'=>'form-control']) !!}
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="input-group input-group-outline my-3">
                    {!! Form::label('tipoConductor', 'Tipo de Conductor',['class' => 'form-label']) !!}
                    {!! Form::text('tipoConductor',null, ['class'=>'form-control']) !!}
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('apliDateTime', 'Aplicacion Fecha',['class' => 'form-label']) !!}
                    {!! Form::date('apliDateTime',null, ['class'=>'form-group']) !!}
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('fechaModif', 'Fecha Modificacion',['class' => 'form-label']) !!}
                    {!! Form::date('fechaModif',null, ['class'=>'form-group']) !!}
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="input-group input-group-outline my-3">
                    {!! Form::label('carrier', 'Transportadora',['class' => 'form-label']) !!}
                    {!! Form::text('carrier',null, ['class'=>'form-control']) !!}
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="input-group input-group-outline my-3">
                    {!! Form::label('telefono', 'Telefono',['class' => 'form-label']) !!}
                    {!! Form::text('telefono',null, ['class'=>'form-control']) !!}
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="input-group input-group-outline my-3">
                    {!! Form::label('correo', 'Correo',['class' => 'form-label']) !!}
                    {!! Form::text('correo',null, ['class'=>'form-control']) !!}
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="input-group input-group-outline my-3">
                    {!! Form::label('truckOwner', 'Dueño de camion',['class' => 'form-label']) !!}
                    {!! Form::text('truckOwner',null, ['class'=>'form-control']) !!}
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="input-group input-group-outline my-3">
                    {!! Form::label('referedBy', 'Referido por',['class' => 'form-label']) !!}
                    {!! Form::text('referedBy',null, ['class'=>'form-control']) !!}
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('ultInspeccion', 'Ultima Inspeccion',['class' => 'form-label']) !!}
                    {!! Form::date('ultInspeccion',null, ['class'=>'form-group']) !!}
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="input-group input-group-outline my-3">
                    {!! Form::label('documentos', 'Documentos',['class' => 'form-label']) !!}
                    {!! Form::number('documentos',null, ['class'=>'form-control']) !!}
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="input-group input-group-outline my-3">
                    {!! Form::label('camion', 'Camion',['class' => 'form-label']) !!}
                    {!! Form::text('camion',null, ['class'=>'form-control']) !!}
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="input-group input-group-static mb-4">
                    {!! Form::label('clearingHouse', 'CH',['class' => 'form-control']) !!}
                    {!! Form::file('clearingHouse', ['class'=>'form-control-file']) !!}
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>







                {!! Form::submit('Guardar conductor',['class'=>'btn bg-gradient-primary']) !!}




            {!! Form::close() !!}

        </div>
    </div>
    </div>
    <x-footers.auth></x-footers.auth>
</div>
</main>
<x-plugins></x-plugins>

</x-layout>

<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="solicitud"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Solicitud"></x-navbars.navs.auth>
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
    <br>

    <!-- CONTENT -->


    <h6 class="text-black text-capitalize ps-3">NUEVA SOLICITUD</h6>
    <div class="card">
        <div class="card-body">
            <div class="p-4 bg-light">
            {!! Form::open(['route'=>'solicitud.store', 'enctype' => 'multipart/form-data']) !!}


                <div class="input-group input-group-outline my-3">
                    {!! Form::label('nombreConductor', 'Nombre del conductor',['class' => 'form-label']) !!}
                    {!! Form::text('nombreConductor',null, ['class'=>'form-control']) !!}
                    @error('nombreConductor')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="input-group input-group-outline my-3">
                    {!! Form::label('tipo', 'Tipo del documento',['class' => 'form-label']) !!}
                    {!! Form::text('tipo',null, ['class'=>'form-control']) !!}
                    @error('tipo')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('fechaSolicitud', 'Fecha de la solicitud',['class' => 'form-label']) !!}
                    {!! Form::date('fechaSolicitud',null, ['class'=>'form-group']) !!}
                    @error('fechaSolicitud')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>



                <div class="input-group input-group-outline my-3">
                    {!! Form::label('correo', 'Correo',['class' => 'form-label']) !!}
                    {!! Form::text('correo',null, ['class'=>'form-control']) !!}
                    @error('correo')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>



                <div class="input-group input-group-static mb-4">
                    {!! Form::label('documento', 'Documento a revisar',['class' => 'form-control']) !!}
                    {!! Form::file('documento', ['class'=>'form-control-file']) !!}
                    @error('documento')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>


                <div class="input-group input-group-static mb-4">
                    {!! Form::label('estado', 'Estado de Conductor') !!}
                    {!! Form::select('estado',['PENDIENTE'=>'PENDIENTE'],'PENDIENTE',['class'=>'form-control']) !!}
                    @error('estado')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <div class="input-group input-group-outline my-3">
                    {!! Form::label('descripcion', 'Descripcion del documento a solicitar o revisar',['class' => 'form-label']) !!}
                    {!! Form::text('descripcion',null, ['class'=>'form-control']) !!}
                    @error('descripcion')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('fechaCaducidad', 'Fecha de caducidad',['class' => 'form-label']) !!}
                    {!! Form::date('fechaCaducidad',null, ['class'=>'form-group']) !!}
                    @error('fechaCaducidad')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>









                {!! Form::submit('Guardar solicitud',['class'=>'btn bg-gradient-primary']) !!}




            {!! Form::close() !!}

        </div>
    </div>
    </div>
    <x-footers.auth></x-footers.auth>
</div>
</main>
<x-plugins></x-plugins>

</x-layout>

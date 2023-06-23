<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="solicitudes"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Solicitudes"></x-navbars.navs.auth>
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
                        <h6 class="text-black text-capitalize ps-3">Editar solicitud del driver: {{$solicitud->nombreConductor}}</h6>


                        <!-- CONTENT -->

                           @if (session('mensaje'))
                           <div class="alert alert-success">
                                <strong>{{session('mensaje')}}</strong>
                           </div>
                           @endif



                        <div class="card">
                            <div class="card-body">
                                <div class="p-4 bg-light">
                                {!! Form::model($solicitud,['route'=>['solicitud.update',$solicitud]
                                                        ,'method'=>'put']) !!}


                                    <div class="input-group input-group-static mb-4">
                                        {!! Form::label('nombreConductor', 'Nombre del Conductor',['class' => 'form-control']) !!}
                                        {!! Form::text('nombreConductor',null, ['class'=>'form-control']) !!}
                                        @error('nombre')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group input-group-static mb-4">
                                        {!! Form::label('tipo', 'Tipo de documento',['class' => 'form-control']) !!}
                                        {!! Form::text('tipo',null, ['class'=>'form-control']) !!}
                                        @error('nombre')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('fechaSolicitud', 'Fecha de la solicitud',['class' => 'form-label']) !!}
                                        {!! Form::date('fechaSolicitud',null, ['class'=>'form-group']) !!}
                                        @error('nombre')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <br>

                                    <div class="input-group input-group-static mb-4">
                                        {!! Form::label('correo', 'Correo',['class' => 'form-control']) !!}
                                        {!! Form::text('correo',null, ['class'=>'form-control']) !!}
                                        @error('nombre')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group input-group-static mb-4">
                                        {!! Form::label('documento', 'Documento',['class' => 'form-control']) !!}
                                        {!! Form::file('documento',null, ['class'=>'form-control-file']) !!}
                                        @error('nombre')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group input-group-static mb-4">
                                        {!! Form::label('descripcion', 'Descripcion ',['class' => 'form-control']) !!}
                                        {!! Form::text('descripcion',null, ['class'=>'form-control']) !!}
                                        @error('nombre')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>




                                    {!! Form::submit('Actualizar solicitud',['class'=>'btn bg-gradient-primary']) !!}




                                {!! Form::close() !!}

                            </div>
                        </div>







    <x-footers.auth></x-footers.auth>
</div>
</main>
<x-plugins></x-plugins>

</x-layout>

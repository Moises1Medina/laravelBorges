<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="cita"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Cita"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">TABLA CITAS</h6>
                            </div>
                        </div>

                        <br>
                        <h6 class="text-black text-capitalize ps-3">Editar cita del driver: {{$cita->driver}}</h6>


                        <!-- CONTENT -->

                           @if (session('mensaje'))
                           <div class="alert alert-success">
                                <strong>{{session('mensaje')}}</strong>
                           </div>
                           @endif



                        <div class="card">
                            <div class="card-body">
                                <div class="p-4 bg-light">
                                {!! Form::model($cita,['route'=>['cita.update',$cita]
                                                        ,'method'=>'put']) !!}


                                    <div class="input-group input-group-static mb-4">
                                        {!! Form::label('driver', 'Nombre del Driver',['class' => 'form-control']) !!}
                                        {!! Form::text('driver',null, ['class'=>'form-control']) !!}
                                        @error('Nombre del Driver')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>



                                    <div class="form-group">
                                        {!! Form::label('fechaCita', 'Fecha de la cita',['class' => 'form-label']) !!}
                                        {!! Form::date('fechaCita',null, ['class'=>'form-group']) !!}
                                        @error('Fecha de la cita')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <br>

                                    <div class="input-group input-group-static mb-4">
                                        {!! Form::label('estado', 'Estado',['class' => 'form-control']) !!}
                                        {!! Form::select('estado',['APROBADO'=>'APROBADO','RECHAZADO'=>'RECHAZADO','PENDIENTE'=>'PENDIENTE'],'PENDIENTE',['class'=>'form-control']) !!}
                                        @error('nombre')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>







                                    {!! Form::submit('Actualizar cita',['class'=>'btn bg-gradient-primary']) !!}




                                {!! Form::close() !!}

                            </div>
                        </div>







    <x-footers.auth></x-footers.auth>
</div>
</main>
<x-plugins></x-plugins>

</x-layout>

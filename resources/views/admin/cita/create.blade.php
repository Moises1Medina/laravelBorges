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

    <!-- CONTENT -->


    <h6 class="text-black text-capitalize ps-3">NUEVA CITA</h6>
    <div class="card">
        <div class="card-body">
            <div class="p-4 bg-light">
            {!! Form::open(['route'=>'cita.store', 'enctype' => 'multipart/form-data']) !!}


                <div class="input-group input-group-outline my-3">
                    {!! Form::label('driver', 'Nombre del conductor',['class' => 'form-label']) !!}
                    {!! Form::text('driver',null, ['class'=>'form-control']) !!}
                    @error('driver')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <div class="form-group">
                    {!! Form::label('fechaCita', 'Fecha de la cita',['class' => 'form-label']) !!}
                    {!! Form::date('fechaCita',null, ['class'=>'form-group']) !!}
                    @error('fechaCita')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <br>

                <div class="input-group input-group-static mb-4">
                    {!! Form::label('estado', 'Estado de la cita') !!}
                    <br>
                    {!! Form::select('estado',['PENDIENTE'=>'PENDIENTE'],'PENDIENTE',['class'=>'form-control']) !!}
                    @error('estado')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>









                {!! Form::submit('Guardar cita',['class'=>'btn bg-gradient-primary']) !!}




            {!! Form::close() !!}

        </div>
    </div>
    </div>
    <x-footers.auth></x-footers.auth>
</div>
</main>
<x-plugins></x-plugins>

</x-layout>

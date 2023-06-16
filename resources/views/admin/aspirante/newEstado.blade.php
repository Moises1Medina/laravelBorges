<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="estado"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Estado"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">TABLA ESTADOS</h6>
                            </div>
                        </div>
    <br>

    <!-- CONTENT -->


    <h6 class="text-black text-capitalize ps-3">NUEVO ESTADO</h6>
    <div class="card">
        <div class="card-body">
            <div class="p-4 bg-light">
            {!! Form::open(['route'=>'aspirante.store']) !!}


                <div class="input-group input-group-outline my-3">
                    {!! Form::label('nombre', 'Nombre',['class' => 'form-label']) !!}
                    {!! Form::text('nombre',null, ['class'=>'form-control']) !!}
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="input-group input-group-outline my-3">
                    {!! Form::label('estado', 'Estado de Conductor',['class' => 'form-label']) !!}
                    {!! Form::text('estado',null, ['class'=>'form-control']) !!}
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>




                <div class="input-group input-group-outline my-3">
                    {!! Form::label('mvr', 'MVR',['class' => 'form-label']) !!}
                    {!! Form::text('mvr',null, ['class'=>'form-control']) !!}
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>







                {!! Form::submit('Guardar estado de Aspirante',['class'=>'btn bg-gradient-primary']) !!}




            {!! Form::close() !!}

        </div>
    </div>
    </div>
    <x-footers.auth></x-footers.auth>
</div>
</main>
<x-plugins></x-plugins>

</x-layout>

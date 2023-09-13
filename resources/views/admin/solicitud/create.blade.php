<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="solicitudesVer"></x-navbars.sidebar>
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
                    {!! Form::label('name', 'Nombre',['class' => 'form-label']) !!}
                    {!! Form::text('name',null, ['class'=>'form-control']) !!}
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="input-group input-group-outline my-3">
                    {!! Form::label('company', 'Company ',['class' => 'form-label']) !!}
                    {!! Form::text('company',null, ['class'=>'form-control']) !!}
                    @error('company')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <div class="input-group input-group-outline my-3">
                    {!! Form::label('driverType', 'Driver Type',['class' => 'form-label']) !!}
                    {!! Form::text('driverType',null, ['class'=>'form-control']) !!}
                    @error('driverType')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                

                <div class="input-group input-group-outline my-3">
                    {!! Form::label('apliStatus', 'Application Status',['class' => 'form-label']) !!}
                    {!! Form::text('apliStatus',null, ['class'=>'form-control']) !!}
                    @error('apliStatus')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('apliDate', 'Application Date',['class' => 'form-label']) !!}
                    {!! Form::date('apliDate',null, ['class'=>'form-group']) !!}
                    @error('apliDate')
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
                    {!! Form::label('status', 'Status') !!}
                    {!! Form::select('status',['INACTIVE'=>'INACTIVE','ACTIVE'=>'ACTIVE'],'INACTIVE',['class'=>'form-control']) !!}
                    @error('status')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <div class="input-group input-group-outline my-3">
                    {!! Form::label('notes', 'Notes ',['class' => 'form-label']) !!}
                    {!! Form::text('notes',null, ['class'=>'form-control']) !!}
                    @error('notes')
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

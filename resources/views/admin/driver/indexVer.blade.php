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
                            <div class="card-body px-0 pb-2">
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



                                    <div class="form-group">
                                        {!! Form::label('birth', 'Birthday ',['class' => 'form-label']) !!}
                                        {!! Form::date('birth',null, ['class'=>'form-group','disabled'=>'true']) !!}
                                        @error('birth')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <br>

                                    <div class="input-group input-group-static mb-4">
                                        {!! Form::label('driverLicense', 'Driver License',['class' => 'form-control']) !!}
                                        {!! Form::text('driverLicense',null, ['class'=>'form-control','disabled'=>'true']) !!}
                                        @error('driverLicense')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="input-group input-group-static mb-4">
                                        {!! Form::label('driverLicenseState', 'Driver License State',['class' => 'form-control']) !!}
                                        {!! Form::text('driverLicenseState',null, ['class'=>'form-control','disabled'=>'true']) !!}
                                        @error('driverLicenseState')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('driverLicenseDate', 'Driver License Date',['class' => 'form-label']) !!}
                                        {!! Form::date('driverLicenseDate',null, ['class'=>'form-group','disabled'=>'true']) !!}
                                        @error('driverLicenseDate')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <br>

                                    <div class="input-group input-group-static mb-4">
                                        {!! Form::label('restriction', 'Restriction',['class' => 'form-control']) !!}
                                        {!! Form::text('restriction',null, ['class'=>'form-control','disabled'=>'true']) !!}
                                        @error('restriction')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group input-group-static mb-4">
                                        {!! Form::label('endorsement', 'Endorsement',['class' => 'form-control']) !!}
                                        {!! Form::text('endorsement',null, ['class'=>'form-control','disabled'=>'true']) !!}
                                        @error('endorsement')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group input-group-static mb-4">
                                        {!! Form::label('driverStatus', 'Driver Status',['class' => 'form-control']) !!}
                                        {!! Form::text('driverStatus',null, ['class'=>'form-control','disabled'=>'true']) !!}
                                        @error('driverStatus')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>


                                


                                    <div class="form-group">
                                        {!! Form::label('apliDate', 'Aplication Date',['class' => 'form-label']) !!}
                                        {!! Form::date('apliDate',null, ['class'=>'form-group','disabled'=>'true']) !!}
                                        @error('apliDate')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        {!! Form::label('hiredDate', 'Hired Date',['class' => 'form-label']) !!}
                                        {!! Form::date('hiredDate',null, ['class'=>'form-group','disabled'=>'true']) !!}
                                        @error('hiredDate')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        {!! Form::label('terminationDate', 'Termination Date',['class' => 'form-label']) !!}
                                        {!! Form::date('terminationDate',null, ['class'=>'form-group','disabled'=>'true']) !!}
                                        @error('terminationDate')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <br>




                                {!! Form::close() !!}

                            </div>
                        </div>







    <x-footers.auth></x-footers.auth>
</div>
</main>
<x-plugins></x-plugins>

</x-layout>

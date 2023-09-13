<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="ver"></x-navbars.sidebar>
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


    <h6 class="text-black text-capitalize ps-3">NUEVO DRIVER</h6>
    <div class="card">
        <div class="card-body">
            <div class="p-4 bg-light">
            {!! Form::open(['route'=>'driver.store', 'enctype' => 'multipart/form-data']) !!}

            <br>
                <div class="input-group input-group-outline my-3">
                    {!! Form::label('nombre', 'Nombre',['class' => 'form-label']) !!}
                    {!! Form::text('nombre',null, ['class'=>'form-control']) !!}
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('birth', 'Birthday',['class' => 'form-label']) !!}
                    {!! Form::date('birth',null, ['class'=>'form-group']) !!}
                    @error('birth')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="input-group input-group-outline my-3">
                    {!! Form::label('driverLicense', 'Driver License',['class' => 'form-label']) !!}
                    {!! Form::text('driverLicense',null, ['class'=>'form-control']) !!}
                    @error('driverLicense')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                
                <div class="input-group input-group-outline my-3">
                    {!! Form::label('driverLicenseState', 'Driver License State',['class' => 'form-label']) !!}
                    {!! Form::text('driverLicenseState',null, ['class'=>'form-control']) !!}
                    @error('driverLicenseState')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('driverLicenseDate', ' Driver License Date',['class' => 'form-label']) !!}
                    {!! Form::date('driverLicenseDate',null, ['class'=>'form-group']) !!}
                    @error('driverLicenseDate')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="input-group input-group-outline my-3">
                    {!! Form::label('restriction', ' Restriction ',['class' => 'form-label']) !!}
                    {!! Form::text('restriction',null, ['class'=>'form-control']) !!}
                    @error('restriction')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="input-group input-group-outline my-3">
                    {!! Form::label('endorsement', ' Endorsement ',['class' => 'form-label']) !!}
                    {!! Form::text('endorsement',null, ['class'=>'form-control']) !!}
                    @error('endorsement')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                

                <div class="input-group input-group-static mb-4">
                    {!! Form::label('driverStatus', 'Driver Status',['class' => 'form-control']) !!}
                    {!! Form::select('driverStatus',['Active'=>'Active','Inactive'=>'Inactive'],'Inactive',['class'=>'form-control']) !!}
                    @error('driverStatus')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>    

                    


                <BR>
                <div class="form-group">
                    {!! Form::label('apliDate', ' Aplication Date  ',['class' => 'form-label']) !!}
                    {!! Form::date('apliDate',null, ['class'=>'form-group']) !!}
                    @error('apliDate')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('hiredDate', ' Hired Date  ',['class' => 'form-label']) !!}
                    {!! Form::date('hiredDate',null, ['class'=>'form-group']) !!}
                    @error('hiredDate')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('terminationDate', ' Termination Date  ',['class' => 'form-label']) !!}
                    {!! Form::date('terminationDate',null, ['class'=>'form-group']) !!}
                    @error('terminationDate')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <BR>
                <div class="input-group input-group-static mb-4">
                    {!! Form::label('clearingHouse', 'SUBE AQUI TU CLEARING HOUSE',['class' => 'form-control']) !!}
                    {!! Form::file('clearingHouse', ['class'=>'form-control-file']) !!}
                    @error('clearingHouse')
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

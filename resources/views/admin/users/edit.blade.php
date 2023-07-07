<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="users"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Usuarios"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">ASIGNAR ESTADO</h6>
                            </div>
                        </div>

                        <br>
                        <h6 class="text-black text-capitalize ps-3">Editar estado del usuario: {{$user->name}}</h6>


                        <!-- CONTENT -->

                           @if (session('info'))
                           <div class="alert alert-success">
                                <strong>{{session('info')}}</strong>
                           </div>
                           @endif



                        <div class="card">
                            <div class="card-body">
                                <div class="p-4 bg-light">
                                {!! Form::model($user,['route'=>['admin.users.update',$user]
                                                        ,'method'=>'put']) !!}


                                    <div class="input-group input-group-static mb-4">
                                        {!! Form::label('name', 'Nombre del Usuario',['class' => 'form-control']) !!}
                                        {!! Form::text('name',null, ['class'=>'form-control']) !!}
                                        @error('Nombre del Usuario')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror



                                    </div>

                                    <div class="input-group input-group-static mb-4">
                                        {!! Form::label('email', 'Correo ',['class' => 'form-control']) !!}
                                        {!! Form::text('email',null, ['class'=>'form-control']) !!}
                                        @error('Correo')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>



                                    <h2 class="h5">Listado de Roles</h2>

                                    {!! Form::model($user, ['route'=>['admin.users.update',$user],'method'=>'put']) !!}
                                            @foreach ($roles as $role)
                                                <div>
                                                    <label >
                                                        {!! Form::checkbox('roles[]', $role->id, null, ['class'=>'mr-1']) !!}
                                                        {{$role->name}}
                                                    </label>
                                                </div>
                                            @endforeach



                                    {!! Form::submit('Actualizar Usuario',['class'=>'btn bg-gradient-primary']) !!}




                                {!! Form::close() !!}

                            </div>
                        </div>







    <x-footers.auth></x-footers.auth>
</div>
</main>
<x-plugins></x-plugins>

</x-layout>

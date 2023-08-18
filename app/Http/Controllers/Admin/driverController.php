<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aspirante;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class driverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) //Leer todos los registros
    {
        //

        $search=$request->search;
        $aspirantes=Aspirante::where('nombre','like',"%". $search. "%")->orWhere('driverStatus','like',"%". $search. "%")->orWhere('apliDate','like',"%". $search. "%")->paginate(5);
        return view('admin.driver.index',compact('aspirantes'));
    }



    public function ver(Request $request) //Leer todos los registros
    {
        //
        $search=$request->search;
        $drivers=\App\Models\Admin\driver::where('nombre','like',"%". $search. "%")->paginate(5);
        return view('admin.driver.ver',compact('drivers'));
    }

    public function indexVer(\App\Models\Admin\driver $driver) //Leer todos los registros
    {
        //

        $drivers=\App\Models\Admin\driver::paginate(5);
        return view('admin.driver.indexVer',compact('driver'));
    }


    public function indexDocumento(\App\Models\Admin\driver $driver) //Leer todos los registros
    {
        //

        $drivers=\App\Models\Admin\driver::paginate(5);
        return view('admin.driver.documento',compact('driver'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //Abrir formularios para un nuevo registro
    {
        //

        return view('admin.driver.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //Guardar en la base de datos el nuevo registro
    {
        //
       $request->validate(

            ['nombre'=>'required',
             'birth'=>'required',
             'driverLicense'=>'required',
             'driverLicenseState'=>'required',
             'driverLicenseDate'=>'required',
             'restriction'=>'required',
             'endorsement'=>'required',
             'driverStatus'=>'required',
             'apliDate'=>'required',
             'hiredDate'=>'required',
             'terminationDate'=>'required',
             'clearingHouse'=>'required'   ]

       );

       $folderPath = public_path('media/documentos/');
       $documento = $request->file('clearingHouse');



       $filename= Str::slug($request->nombre). '_' .  'clearingHouse'.'.' . $documento->guessExtension();
       $documento->move($folderPath,$filename);

       $drivers = \App\Models\Admin\driver::create([

             'nombre'=>$request->nombre,
             'birth'=>$request->birth,
             'driverLicense'=>$request->driverLicense,
             'driverLicenseState'=>$request->driverLicenseState,
             'driverLicenseDate'=>$request->driverLicenseDate,
             'restriction'=>$request->restriction,
             'endorsement'=>$request->endorsement,
             'driverStatus'=>$request->driverStatus,
             'apliDate'=>$request->apliDate,
             'hiredDate'=>$request->hiredDate,
             'terminationDate'=>$request->terminationDate,
             'clearingHouse'=>$filename



       ]);



       return redirect()->route('driver.edit',$drivers)->with('mensaje','El conductor ha sido registrado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(\App\Models\Admin\driver $driver) //Visualizar un solo registro a detalle (No lo utilizare)
    {
        //
        return view('admin.driver.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(\App\Models\Admin\driver $driver) //Abrir un formulario para edicion de un registro
    {
        //
        return view('admin.driver.edit',compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, \App\Models\Admin\driver $driver) //Actualizar la informacion del registro de la base de datos
    {
        //

        $request->validate(

            ['nombre'=>'required',
            'birth'=>'required',
            'driverLicense'=>'required',
            'driverLicenseState'=>'required',
            'driverLicenseDate'=>'required',
            'restriction'=>'required',
            'endorsement'=>'required',
            'driverStatus'=>'required',
            'apliDate'=>'required',
            'hiredDate'=>'required',
            'terminationDate'=>'required',
            'clearingHouse'=>'required']

       );

       $driver->update($request->all());
       return redirect()->route('driver.edit',$driver)->with('mensaje','El conductor ha sido actualizado exitosamente');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(\App\Models\Admin\driver $driver) //Eliminar un registro
    {
        //
        $driver->delete();
        return redirect()->route('driver.ver')->with('mensaje','El conductor ha sido eliminado exitosamente');
    }

    public function estado(\App\Models\Admin\driver $driver) // Estado
    {
        //
        return view('admin.driver.editEstado',compact('driver'));

    }




}

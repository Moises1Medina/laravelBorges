<?php

namespace App\Http\Controllers;

use App\Models\Aspirante;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class AspiranteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)

    {
        //
        $search=$request->search;
        $aspirantes=Aspirante::where('nombre','like',"%". $search. "%")->orWhere('estado','like',"%". $search. "%")->paginate(5);

        return view('admin.aspirante.index',compact('aspirantes'));



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.aspirante.newEstado');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
            'nombre'=>'required',
            'estado'=>'required',
            'mvr'=>'required',



            ]
        );

        $fecha = now();
        $request["fechaIngreso"]= $fecha;
        $request["fechaRevicion"]= $fecha;


        $folderPath = public_path('media/documentos/');
        $documento = $request->file('mvr');

        $filename = Str::slug($request->nombre). '_' . date('Ymd_His') . 'mvr'.'.' . $documento->guessExtension();
        $documento->move($folderPath,$filename);
        $aspirante = Aspirante::create([

            'nombre'=>$request->nombre,
            'estado'=>$request->estado,
            'mvr'=>$filename,
            'fechaIngreso'=>$request->fechaIngreso,
            'fechaRevicion'=>$request->fechaRevicion

        ]);

        return redirect()->route('aspirante.index',$aspirante)->with('mensaje','El aspirante ha sido registrado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aspirante $aspirante)
    {
        //
        return view('admin.aspirante.editEstado',compact('aspirante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aspirante $aspirante)
    {

        $request->validate(
            [
            'nombre'=>'required',
            'estado'=>'required',

             ]
        );

        $aspirante->update($request->all());
        return redirect()->route('aspirante.edit',$aspirante)->with('mensaje','El aspirante ha sido actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aspirante $aspirante)
    {
        //
        $aspirante->delete();
        return redirect()->route('driver.index')->with('mensaje','El aspirante ha sido eliminado exitosamente');
    }


    public function mostraArchivo(Request $request)
    {
        $folderPath = public_path('media/documentos/');
        $rutaDocumento = $request->file('mvr');





        $rutaArchivo = storage_path('app/public/naren-andres_20230627_235645.pdf');

        if(file_exists($rutaArchivo)){

            $headers= [
                'Content-Type' => 'application/pdf',
            ];

            return response()->file($rutaArchivo,$headers);
        } else {
            return view('admin.aspirante.editEstado',compact('aspirante'));

        }
    }


}

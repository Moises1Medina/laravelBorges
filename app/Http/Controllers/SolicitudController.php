<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use App\Models\Cita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     */



     public function ver(Request $request) //Leer todos los registros
     {
         //
         $search=$request->search;
         $solicituds=Solicitud::where('name','like',"%". $search. "%")->orWhere('driverType','like',"%". $search. "%")->orWhere('apliDate','like',"%". $search. "%")->orWhere('status','like',"%". $search. "%")->orWhere('apliStatus','like',"%". $search. "%")->paginate(5);
         $citas=Cita::where('driver','like',"%". $search. "%")->paginate(5);
         return view('admin.solicitud.ver',compact('solicituds','citas'));
     }

    public function index(Request $request)
    {
        //
        $search=$request->search;
        $solicituds=Solicitud::where('name','like',"%". $search. "%")->orWhere('driverType','like',"%". $search. "%")->orWhere('apliDate','like',"%". $search. "%")->orWhere('status','like',"%". $search. "%")->orWhere('apliStatus','like',"%". $search. "%")->paginate(5);

        return view('admin.solicitud.index',compact('solicituds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.solicitud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate(

            ['name'=>'required',
             'company'=>'required',
             'driverType'=>'required',
             'apliStatus'=>'required',
             'apliDate'=>'required',
             'documento',
             'notes'=>'required',
             'status'=>'required'
          ]

       );


       $folderPath = public_path('media/documentos/');
       $documento = $request->file('documento');



       $filename= Str::slug($request->nombre). '_' .  'documentoSolicitar'.'.' . $documento->guessExtension();
       $documento->move($folderPath,$filename);



       $solicitud = Solicitud::create([
        'name'=>$request->name,
        'company'=>$request->company,
        'driverType'=>$request->driverType,
        'apliStatus'=>$request->apliStatus,
        'apliDate'=>$request->apliDate,
        'documento'=>$filename,
        'notes'=>$request->notes,
        'status'=>$request->status



       ]);






       return redirect()->route('solicitud.ver',$solicitud)->with('mensaje','La solicitud ha sido registrada exitosamente');

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
    public function edit(Solicitud $solicitud)

    {
        //

        return view('admin.solicitud.edit',compact('solicitud'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Solicitud $solicitud)
    {
        //
        $request->validate(

            ['name'=>'required',
             'company'=>'required',
             'driverType'=>'required',
             'apliStatus'=>'required',
             'apliDate'=>'required',
             'documento',
             'notes'=>'required',
             'status'=>'required'

          ]

       );

       $solicitud->update($request->all());
       return redirect()->route('solicitud.edit',$solicitud)->with('mensaje','La solicitud ha sido actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Solicitud $solicitud)
    {
        //
        $solicitud->delete();
        return redirect()->route('solicitud.ver')->with('mensaje','La solicitud ha sido eliminada exitosamente');
    }
}

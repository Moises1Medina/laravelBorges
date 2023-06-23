<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $search=$request->search;
        $solicituds=Solicitud::where('nombreConductor','like',"%". $search. "%")->paginate(10);

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

            ['nombreConductor'=>'required',
             'tipo'=>'required',
             'fechaSolicitud'=>'required',
             'correo'=>'required',
             'documento'=>'required',
             'descripcion'=>'required'
          ]

       );

       $solicitud = Solicitud::create($request->all());
       return redirect()->route('solicitud.edit',$solicitud)->with('mensaje','La solicitud ha sido registrada exitosamente');

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

            ['nombreConductor'=>'required',
             'tipo'=>'required',
             'fechaSolicitud'=>'required',
             'correo'=>'required',
             'documento'=>'required',
             'descripcion'=>'required'
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
        return redirect()->route('solicitud.index')->with('mensaje','La solicitud ha sido eliminada exitosamente');
    }
}

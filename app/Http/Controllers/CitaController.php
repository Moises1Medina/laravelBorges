<?php

namespace App\Http\Controllers;


use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //

        $search=$request->search;
        $citas=Cita::where('driver','like',"%". $search. "%")->paginate(5);

        return view('admin.cita.index',compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.cita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(

            ['driver'=>'required',
             'fechaCita'=>'required',
             'estado'=>'required'  ]
        );


        $cita= Cita::create($request->all());
        return redirect()->route('cita.edit',$cita)->with('mensaje','La cita ha sido registrada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(cita $cita)
    {
        //
        return view('admin.cita.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cita $cita)
    {
        //
        return view('admin.cita.edit',compact('cita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cita $cita)
    {
        //

        $request->validate(

            ['driver'=>'required',
             'fechaCita'=>'required',
             'estado'=>'required'  ]
        );

       $cita->update($request->all());
       return redirect()->route('cita.edit',$cita)->with('mensaje','La cita ha sido actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cita $cita)
    {
        //
        $cita->delete();
        return redirect()->route('cita.index')->with('mensaje','La cita ha sido eliminada exitosamente');
    }
}

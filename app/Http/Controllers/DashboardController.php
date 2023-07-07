<?php

namespace App\Http\Controllers;

use App\Models\Admin\driver;
use App\Models\Cita;
use App\Models\Solicitud;
use Illuminate\Http\Request;
use App\Models\Aspirante;

class DashboardController extends Controller
{
    public function index()
    {
        $aspirantes = Aspirante::count();
        $drivers = \App\Models\Admin\driver::count();
        $solicitudes = Solicitud::count();
        $citas= Cita::count();
        return view('dashboard.index',compact('aspirantes','drivers','solicitudes','citas'));
    }




}

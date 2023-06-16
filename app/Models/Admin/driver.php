<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
    use HasFactory;
    protected $fillable=['nombre','tipoConductor','apliDateTime','fechaModif','carrier','telefono','correo','truckOwner','referedBy','ultInspeccion','documentos','camion'];
}

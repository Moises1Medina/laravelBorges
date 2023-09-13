<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
    use HasFactory;
    protected $fillable=['nombre','birth','driverLicense','driverLicenseState','driverLicenseDate','restriction','endorsement','driverStatus','apliDate','hiredDate','terminationDate','clearingHouse'];
}

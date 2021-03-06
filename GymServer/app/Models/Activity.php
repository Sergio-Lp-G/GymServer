<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sesion;
use DB;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'duration', 'participants'];//asignacion masiva

    public function sesions()
    {
        return $this->hasMany(Sesion::class);//relacion 1 actividad tiene muchas sesiones.
    }
}

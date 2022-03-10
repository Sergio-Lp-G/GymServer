<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Activity;
use App\Models\User;
use DB;


class Sesion extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'startime', 'endtime', 'activity_id']; //asignacion masiva

    public function activities()
    {
        //relacion 1:N 1 actividad tiene muchas sesiones, una sesion pertenece a una actividad
        return $this->belongsTo(Activity::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function signUsers($user)
    {
        // return $this->belongsToMany(User::class);
    }
}

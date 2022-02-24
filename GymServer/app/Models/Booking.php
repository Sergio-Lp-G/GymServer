<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table='sesion_user';

    protected $fillable=[
        'fecha',
        'user_id',
        'sesion_id'
    ];
}

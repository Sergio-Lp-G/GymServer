<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
    use HasFactory;


    //carbon modificar fechas de d-m-y a y-m-d y viceversa??
    //esto al modelo, cazurros. Añadir al modelo este atributo. columnas 
    //a indicar, las que son fechas, conversion automatica de la bbdd
    // protected $dates=['date']
    // $day = \Carbon\Carbon::dateFromFormat('2022-1-1');
    // $days = $day->daysInMonth();
    // (a,m,d)
    // 2022, "del request",1)

    // $fecha=Carbon::create(2001,4,21);
    // $dias = $fecha->daysInMonth();
    // recordar que el dia inicial (0) será el domingo
}
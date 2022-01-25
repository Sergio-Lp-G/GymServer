<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::all();
        // var_dump($activities);
        return view('activities.index', ['activities' => $activities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('activities.create', []);
        //return view('activities/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return view('activities/store');
        return 'Metodo store';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return view('activities/show');
        return 'Metodo show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //        return view('activities/edit');
        return 'Método edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //        return view('activities/update');
        return 'Método update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //        return view('activities/destroy');
        return 'Método destroy';
    }

    //carbon modificar fechas de d-m-y a y-m-d y viceversa??
    //esto al modelo, cazurros. Añadir al modelo este atributo. columnas a indicar, las que son fechas, conversion automatica de la bbdd
    // protected $dates=['date']
    // $day = \Carbon\Carbon::dateFromFormat('2022-1-1');
    // $days = $day->daysInMonth();
    // (a,m,d)
    // 2022, "del request",1)

    // $fecha=Carbon::create(2001,4,21);
    // $dias = $fecha->daysInMonth();
    // recordar que el dia inicial (0) será el domingo
}

<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Sesion;
use Illuminate\Http\Request;
use App\Models\Activity;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Carbon\CarbonPeriod;
use DateTime;


class SesionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Metodos para mostrar todas las sesiones con los nombres de actividades

        $sesions = Sesion::orderBy('date')->get();
        //$sesions->activities; Esto no funciona
        return view('sesions.index', ['sesions' => $sesions]);


        // $activity = Activity::all();
        // return view('sesions.index', ['sesions' => $sesions, 'activity' => $activity]); //No muestra todos los nombres de actividades
        // $sesions = DB::table('sesions') //Esta consulta tampoco muestra todos los nombres de las actividades
        //     ->leftJoin('activities', 'sesions.id', '=', 'activities.id')
        //     ->select('sesions.id', 'sesions.date', 'sesions.startime', 'sesions.endtime', 'sesions.activity_id', 'activities.name as activity_name')
        //     ->orderBy('date')
        //     ->get();

        //Devolvemos las sesiones a la vista
        //return view('sesions.index', ['sesions' => $sesions]); //, 'activity' => $activity

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Creación de una nueva sesion con la lista de actividades para el desplegable
        $activities = Activity::all();
        return view('sesions.create', ['activities' => $activities]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validamos los parametros que nos llegan desde la vista
        $rules = [
            'days' => 'required',
            'month' => 'required',
           
            'startime' => 'required',
            'endtime' => 'required',
            'activity' => 'required'
        ];
        $request->validate($rules);

        //Transformamos los parametros para poder trabajar con ellos.
        $arrDias = $request['days'];
        $month = $request['month'];
        $date = Carbon::createFromDate(2022, $month, 01, 'Europe/Madrid');

        $this->fill_month($request['activity'], $date, $request['startime'], $request['endtime'], $arrDias, $month);

        return redirect('/sesions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function show(Sesion $sesion)
    {
        $activity = Activity::find($sesion->activity_id);
        return view('sesions.show', ['sesion' => $sesion, 'activity' => $activity]); //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function edit(Sesion $sesion)
    {
        return view('sesions.edit', ['sesion' => $sesion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sesion $sesion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sesion $sesion)
    {
        //
    }

    public function debug_fill_month()
    {
        //metodo inutilizado
        $fechaInicio = Carbon::create(2000, 1, 35, 16, 0, 0);
        $fechaFin = Carbon::create(2000, 1, 35, 20, 0, 0);

        $arrDias = ['Monday'];

        $activity = Activity::find(1);
    }

    public function fill_month($activity_id, $date, $fechaInicio, $fechaFin, $arrDias, $month)
    {
        //Para cada dia presente en el mes creamos la sesion.
        for ($j = 1; $j <= $date->daysInMonth; $j++) {
            $dateModifi = Carbon::createFromDate(2022, $month, $j, 'Europe/Madrid');
            if ($dateModifi->isSameMonth($date)) {
                foreach ($arrDias as $dia) {

                    switch ($dia) {
                        case ($dateModifi->isMonday() && $dia == 'lunes'):
                            $sesion = Sesion::create([
                                'date' => $dateModifi,
                                'startime' => $fechaInicio,
                                'endtime' => $fechaFin,
                                'activity_id' => $activity_id
                            ]);
                            break;

                        case ($dateModifi->isTuesday() && $dia == 'martes'):
                            $sesion = Sesion::create([
                                'date' => $dateModifi,
                                'startime' => $fechaInicio,
                                'endtime' => $fechaFin,
                                'activity_id' => $activity_id
                            ]);
                            break;

                        case ($dateModifi->isWednesday() && $dia == 'miercoles'):
                            $sesion = Sesion::create([
                                'date' => $dateModifi,
                                'startime' => $fechaInicio,
                                'endtime' => $fechaFin,
                                'activity_id' => $activity_id
                            ]);
                            break;

                        case ($dateModifi->isThursday() && $dia == 'jueves'):
                            $sesion = Sesion::create([
                                'date' => $dateModifi,
                                'startime' => $fechaInicio,
                                'endtime' => $fechaFin,
                                'activity_id' => $activity_id
                            ]);
                            break;

                        case ($dateModifi->isFriday() && $dia == 'viernes'):
                            $sesion = Sesion::create([
                                'date' => $dateModifi,
                                'startime' => $fechaInicio,
                                'endtime' => $fechaFin,
                                'activity_id' => $activity_id
                            ]);
                            break;
                    }
                }
            }
        }
    }



    public function sign($id)
    {
        return "metodo sign." . $id;
    }
}

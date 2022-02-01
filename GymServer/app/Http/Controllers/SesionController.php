<?php

namespace App\Http\Controllers;

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

        //$this->debug_fill_month();

        $sesions = Sesion::all();

        // $inicio = new Carbon('2022-01-01 00:00:00');
        // $fin = new Carbon('2022-01-31 00:00:00');
        // $days = ['Monday', 'Friday'];
        // $arrDays=[];
        // foreach (CarbonPeriod::create($inicio, CarbonInterval::weeks(1), $fin, CarbonPeriod::IMMUTABLE) as $basedate) {
        //     foreach($days as $dayName){
        //         $date=$basedate->is($dayName) ? $basedate:$basedate->next($dayName);
        //         array_push($arrDays,$date);
        //     }
        // }

        //dd($sesions);
        return view('sesions.index', ['sesions' => $sesions]); //, 'arrDays' => $arrDays
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activity = Activity::all();
        return view('sesions.create', ['activities' => $activity]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('sesions.show',['sesion' => $sesion,'activity'=>$activity ] );//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function edit(Sesion $sesion)
    {
        return view('sesions.edit',['sesion' => $sesion]);
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

        $fechaInicio = Carbon::create(2000, 1, 35, 16, 0, 0);
        $fechaFin = Carbon::create(2000, 1, 35, 20, 0, 0);

        // $arrDias = ['Monday','Friday'];
        $arrDias = ['Monday'];

        // $activity = Activity::find( $id );
        $activity = Activity::find(1);

        // echo $fecha->hour;
        // echo $fecha->minute;
        // echo $fecha->second;

        //var_dump( $this->fill_month( $activity, $fechaInicio, $fechaFin, $arrDias ) );

    }

    public function fill_month($activity, $fechaInicio, $fechaFin, $arrDias)
    {

        for ($i = 1; $i < $fechaInicio->daysInMonth + 1; ++$i) {

            $horaInicio = Carbon::create($fechaInicio->year, $fechaInicio->month, $i, $fechaInicio->hour, $fechaInicio->minute, $fechaInicio->second);
            $horaFin = Carbon::create($fechaFin->year, $fechaFin->month, $i, $fechaFin->hour, $fechaFin->minute, $fechaFin->second);

            if (in_array($horaInicio->englishDayOfWeek, $arrDias)) {

                $sesion = new Sesion;
                $sesion->startime = $horaInicio->format('Y-m-d h:i:s');
                $sesion->endtime = $horaFin->format('Y-m-d h:i:s');
                $sesion->activity_id = $activity->id;
                $sesion->save();

                // $sesions[] = $sesion;
                // echo $dia->englishDayOfWeek;
            }

            // $dates[] = Carbon::createFromDate($fecha->year, $fecha->month, $i, $fecha->hour, $fecha->minute,$fecha->second )->format('Y-m-d h:i:s');
        }

        // return $sesions;

    }
}

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
        //$this->debug_fill_month();
        // $sesions = Sesion::orderBy('date')->get();
        // $sesions->activities;

        //$activity = Activity::all();
        // return view('sesions.index', ['sesions' => $sesions]); //, 'activity' => $activity


        $sesions = DB::table('sesions')
            ->leftJoin('activities', 'sesions.id', '=', 'activities.id')
            ->select('sesions.id', 'sesions.date', 'sesions.startime', 'sesions.endtime', 'sesions.activity_id', 'activities.name as activity_name')
            ->orderBy('date')
            ->get();


        //dd($sesions);
        return view('sesions.index', ['sesions' => $sesions]); //, 'activity' => $activity

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //var_dump($request);
        $rules = [
            'days' => 'required',
            'month' => 'required',
            'year' => 'required',
            'startime' => 'required',
            'endtime' => 'required',
            'activity' => 'required'
        ];
        $request->validate($rules);

        $arrDias = $request['days'];
        //var_dump($dias);
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

    public function fill_month($activity_id, $date, $fechaInicio, $fechaFin, $arrDias, $month)
    {
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

        //return redirect('/sesions');
    }

    // public function fill_month($activity_id, $fechaInicio, $fechaFin, $arrDias)
    // {

    //     //var_dump($activity_id, $fechaInicio, $fechaFin, $arrDias);
    //     for ($i = 1; $i < $fechaInicio->daysInMonth + 1; ++$i) {

    //         $horaInicio = Carbon::create($fechaInicio->year, $fechaInicio->month, $i, $fechaInicio->hour, $fechaInicio->minute, $fechaInicio->second);
    //         $horaFin = Carbon::create($fechaFin->year, $fechaFin->month, $i, $fechaFin->hour, $fechaFin->minute, $fechaFin->second);
    //         var_dump($horaInicio, $horaFin);
    //         if (in_array($horaInicio->englishDayOfWeek, $arrDias)) {

    //             $sesion = new Sesion;
    //             $sesion->startime = $horaInicio->format('Y-m-d h:i:s');
    //             $sesion->endtime = $horaFin->format('Y-m-d h:i:s');
    //             $sesion->activity_id = $activity_id;
    //             $sesion->save();

    //             // $sesions[] = $sesion;
    //             // echo $dia->englishDayOfWeek;
    //         }

    //         //$dates[] = Carbon::createFromDate($fecha->year, $fecha->month, $i, $fecha->hour, $fecha->minute,$fecha->second )->format('Y-m-d h:i:s');
    //     }

    //     // return $sesions;
    //     //return redirect('/sesions');
    // }

    public function sign($id)
    {
        return "metodo sign." . $id;
    }
}

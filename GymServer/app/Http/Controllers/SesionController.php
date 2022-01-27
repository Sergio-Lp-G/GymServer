<?php

namespace App\Http\Controllers;

use App\Models\Sesion;
use Illuminate\Http\Request;
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
        $sesions = Sesion::all();

        $inicio = new Carbon('2022-01-01 00:00:00');
        $fin = new Carbon('2022-01-31 00:00:00');
        $days = ['Monday', 'Friday'];
        $arrDays=[];
        foreach (CarbonPeriod::create($inicio, CarbonInterval::weeks(1), $fin, CarbonPeriod::IMMUTABLE) as $basedate) {
            foreach($days as $dayName){
                $date=$basedate->is($dayName) ? $basedate:$basedate->next($dayName);
                array_push($arrDays,$date);
            }
        }

        // var_dump($sesions);
        return view('sesions.index', ['sesions' => $sesions, 'arrDays'=>$arrDays]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function edit(Sesion $sesion)
    {
        //
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

    public function bgd() //DateTime $inicio
    {
        $inicio = DateTime::createFromFormat('j-M-Y', "1 de enero de 2022");
        $fin = DateTime::createFromFormat('j-M-Y', "31 de diciembre de 2022");
        $days = ['Monday', 'Friday'];
        $arrDays=[];
        foreach (CarbonPeriod::create($inicio, CarbonInterval::weeks(1), $fin, CarbonPeriod::IMMUTABLE) as $basedate) {
            foreach($days as $dayName){
                $date=$basedate->is($dayName) ? $basedate:$basedate->next($dayName);
                array_push($arrDays,$date);
            }
        }
        return view();
    }
}

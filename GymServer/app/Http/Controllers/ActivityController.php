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
        //dd($request);
        $activity=new Activity;

        $activity->name=$request->actividad;
        $activity->description=$request->descripcion;
        $activity->duration=$request->duracion;
        $activity->participants=$request->maxPart;
        $activity->save();
        return redirect('/activities');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activity = Activity::find($id);
        return view('activities.show',['activity' => $activity] );//
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

    public function filter (Request $request) {
        // $filter = $request->input('id');
        $activitys = $request->filter;
        //$activityes =$activitys;
        //$activitys = activity::where('activity_id', 'LIKE', $filter)->get();
        //return var_dump($activitys); //devuelve JSON
        //otra opción, devolver código html
        return view('activities.ajax.filter', ['activitys'=>$activitys]);
        }

    /**
     * Upname the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function upname(Request $request, $id)
    {
        //        return view('activities/upname');
        return 'Método upname';
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

    
}

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
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'participants' => 'required'
        ];
        $request->validate($rules);

        //return view('activities/store');
        //dd($request);
        $activity = new Activity;

        $activity->name = $request->actividad;
        $activity->description = $request->descripcion;
        $activity->duration = $request->duracion;
        $activity->participants = $request->maxPart;
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
        return view('activities.show', ['activity' => $activity]); //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activity = Activity::find($id);
        return view('activities.edit', ['activity' => $activity]);
    }

    public function filter(Request $request)
    {
        // id = $request->input('id');
        $sesions = $request->filter;
        //$activityes =$activitys;
        //$activitys = activity::where('activity_id', 'LIKE', id)->get();
        //return var_dump($activitys); //devuelve JSON
        //otra opción, devolver código html
        return view('activities.ajax.filter', ['sesions' => $sesions]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'participants' => 'required'
        ];
        $request->validate($rules);


        $activity->id = $request->id;

        $activity->name = $request->name;
        $activity->description = $request->description;
        $activity->duration = $request->duration;
        $activity->participants = $request->participants;

        $activity->save();
        return redirect('/activities');
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

    public function search(Request $request)
    {
        $activities = Activity::all();
        return view('activities.search', ['activities' => $activities]);
    }

    public function busqueda(Request $request)
    {
        //dd($request->filtro);
        $id = $request->filter;
        $activity = Activity::find($id);
        return view('activities.ajax.searchactividades', ['actividad' => $activity]);
    }
}

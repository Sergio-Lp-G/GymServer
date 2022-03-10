<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // recogemos todas las actividades desde la base de datos y la pasamos a la vista
        $activities = Activity::all();
        return view('activities.index', ['activities' => $activities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Mostramos la vista de creacion de nuevas actividades.
        return view('activities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validacion de las variables recogidas desde la vista. Si no se reciben no se continua.
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'participants' => 'required'
        ];
        $request->validate($rules);

        //Una vez validado se crea la nueva actividad en la db.
        $activity = Activity::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'duration' => (int)$request['duration'],
            'participants' => (int)$request['participants']
        ]);

        //Redirecionamos a la pagina principal de actividades.
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
        //
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
        //Recogemos la id de la actividad deseada y devolvemos todos sus datos a una vista "show"
        $activity = Activity::find($id);
        return view('activities.edit', ['activity' => $activity]);
    }

    public function filter(Request $request)
    {
        //Usando ajax realizamos la busqueda de las sesiones de la actividad deseada.
        $sesions = $request->filter;
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
        //Validamos que están todos los parametros deseados.
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'participants' => 'required'
        ];
        $request->validate($rules);

        //Actualizamos los valores de la actividad en la db
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
    public function destroy(Activity $activity)
    {
        //Metodo para borrar la actividad deseada.
        $activity->delete();
        return back()->with('status', 'Actividad borrada');
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

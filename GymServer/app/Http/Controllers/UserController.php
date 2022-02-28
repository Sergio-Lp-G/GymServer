<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Sesion;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->addsesion();
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }
    public function addsesion()
    {
        //necesitamos un id_usuario y un id_rol
        $user = User::find(1);
        $sesion = Sesion::find(1);
        $user->addSesion($sesion);
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;

        $user->name = $request->name;
        $user->dni = $request->dni;

        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->weight = $request->weight;
        $user->height = $request->height;
        $user->birthday = $request->birthday;
        $user->gender = $request->gender;
        $user->role_name = $request->role_name;

        $user->save();
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //$user = User::find($id);
        $user->id = $request->id;

        $user->name = $request->name;
        $user->dni = $request->dni;

        $user->email = $request->email;
        $user->password = Hash::make($request->password);


        $user->weight = $request->weight;
        $user->height = $request->height;
        $user->birthday = $request->birthday;
        $user->gender = $request->gender;
        $user->role_name = $request->role_name;
        $user->save();
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

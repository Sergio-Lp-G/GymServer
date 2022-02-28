@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Actualización de sesión {{$user->id}} </h1>

            <form action="/users/{{$user->id}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="id" value="{{$user->id}}">
                <div>
                    <label for="name">Nombre</label>
                    <input type="text" name="name" value="{{$user->name}}">
                </div>

                <div>
                    <label for="dni">DNI</label>
                    <input type="text" name="dni" value="{{$user->dni}}">
                </div>

                <div>
                    <label for="email">Email</label>
                    <input type="text" name="email" value="{{$user->email}}">
                </div>
                <hr>
                <div>
                    <label for="birthday">Fecha de nacumiento</label>
                    <input type="text" name="birthday" value="{{$user->birthday}}">
                </div>
                <hr>
                <div>
                    <label for="weight">Peso</label>
                    <input type="number" name="weight" value="{{$user->weight}}">
                </div>
                <div>
                    <label for="height">Altura</label>
                    <input type="number" name="height" value="{{$user->height}}">
                </div>
                <div>
                    <label for="gender">Genero</label>

                    <select name="gender" id="gender" class="selectpicker" aria-label="size 5 select example">
                        {{$selected = $user->gender}}
                        <option {{$selected == "hombre" ? "selected" : '' }} value="hombre">Hombre</option>
                        <option {{$selected == "mujer" ? "selected" : '' }} value="mujer">Mujer</option>
                        <option {{$selected == "otro" ? "selected" : '' }} value="otro">Otro</option>
                    </select>
                </div>
                <hr>
                <div>
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" value="{{$user->password}}">
                </div>

                <div>
                    <label for="role_name">Rol</label>

                    <select name="role_name" id="role_name" class="selectpicker" aria-label="size 5 select example">
                        {{$selected = $user->role_name}}
                        <option {{$selected == "user" ? "selected" : '' }} value="user">User</option>
                        <option {{$selected == "admin" ? "selected" : '' }} value="admin">Admin</option>
                    </select>
                </div>

                <div>
                    <input type="submit" value="actualizar">
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
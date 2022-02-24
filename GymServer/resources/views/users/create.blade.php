@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <h1>Nuevo Usuario </h1>

            <form action="/users" method="post">
                @csrf
                <div>
                    <label for="name">Nombre</label>
                    <br>
                    <input type="text" name="name" id="name">
                </div>
                <br>
                <div>
                    <label for="dni">DNI</label>
                    <br>
                    <input type="text" name="dni" id="dni">
                </div>
                <br>
                <div>
                    <label for="email">Email</label>
                    <br>
                    <input type="email" name="email" id="email">
                </div>
                <br>
                <div>
                    <label for="password">Contraseña</label>
                    <br>
                    <input type="password" name="password" id="password">
                </div>
                <br>
                <div>
                    <label for="weight">Peso(kg)</label>
                    <br>
                    <input type="number" min="10" max="400" name="weight" id="weight">
                </div>
                <br>
                <div>
                    <label for="height">Altura(cm)</label>
                    <br>
                    <input type="number" min="90" max="300" name="height" id="height">
                </div>
                <br>
                <div>
                    <label for="gender">Genero</label>
                    <br>
                    <select name="gender" id="gender" class="selectpicker" aria-label="size 5 select example">
                        <option value="hombre">Hombre</option>
                        <option value="mujer">Mujer</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>
                <br>
                <div>
                    <label for="birthday">Fecha de nacimiento</label>
                    <br>
                    <input type="date" name="birthday" id="birthday">
                </div>
                <br>
                <div>
                    <input type="submit" value="crear">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
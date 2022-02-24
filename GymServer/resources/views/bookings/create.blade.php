@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>AQUI EN PRINCIPIO SE CREA UNA ACTIVIDAD </h1>
            <form action="/activities" method="post">
                @csrf
                <div>
                    <label for="activity">Actividad</label>
                    <input type="text" name="actividad" id="actividad">
                </div>

                <div>
                    <label for="descripcion">Descripción</label>
                    <input type="text" name="descripcion" id="descripcion">
                </div>

                <div>
                    <label for="duracion">Duración</label>
                    <input type="number" name="duracion" id="duracion">
                </div>

                <div>
                    <label for="maxPart">Máximo de participantes</label>
                    <input type="number" name="maxPart" id="maxPart">
                </div>

                <div>
                    <input type="submit" value="crear">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
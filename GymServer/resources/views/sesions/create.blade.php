@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Creando una sesión</h1>
            <br>
            <form action="/sesions" method="post">
                @csrf
                <div>
                    <label for="activity">Actividad</label>

                    <select name="activity" class="selectpicker" aria-label="size 5 select example">
                        @forelse($activities as $activity)
                        <option value="{{$activity->id}}">{{$activity->name}} </option>
                        @empty
                        <option value="0">Nuleo</option>
                        @endforelse
                    </select>
                </div>
                <br>
                <div>
                    <label for="days[]">Días</label>
                    <select name="days[]" class="selectpicker" multiple aria-label="size 5 select example">
                        <option value="lunes">Lunes</option>
                        <option value="martes">Martes</option>
                        <option value="miercoles">Miercoles</option>
                        <option value="jueves">Jueves</option>
                        <option value="viernes">Viernes</option>
                    </select>
                </div>
                <br>
                <div>
                    <label for="month">Mes</label>
                    <select name="month" class="selectpicker" aria-label="size 12 select example">
                        <option value="1">Enero</option>
                        <option value="2">Febrero</option>
                        <option value="3">Marzo</option>
                        <option value="4">Abril</option>
                        <option value="5">Mayo</option>
                        <option value="6">Junio</option>
                        <option value="7">Julio</option>
                        <option value="8">Agosto</option>
                        <option value="9">Septiembre</option>
                        <option value="10">Octubre</option>
                        <option value="11">Noviembre</option>
                        <option value="12">Diciembre</option>
                    </select>
                </div>
                <br>
                <div>
                    <label for="year">Año</label>
                    <input type="number" min="2020" max="2100" name="year" id="year">
                </div>
                <br>
                <div>
                    <label for="startime">Inicio</label>
                    <input type="time" name="startime" id="startime">
                </div>
                <br>
                <div>
                    <label for="endtime">Fin</label>
                    <input type="time" name="endtime" id="endtime">
                </div>
                <br>
                <div>
                    <input class="btn btn-primary" type="submit" value="crear">
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
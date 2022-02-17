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
                    <!-- <select name="activity" id=""> -->
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
                    <label for="date">Días</label>
                    <select name="date" class="selectpicker" multiple aria-label="size 5 select example">
                        <option value="lunes">Lunes</option>
                        <option value="martes">Martes</option>
                        <option value="miercoles">Miercoles</option>
                        <option value="jueves">Jueves</option>
                        <option value="viernes">Viernes</option>
                    </select>


                    <!-- <input type="date" name="date" id="date"> -->
                </div>
                <br>
                <div>
                    <label for="startime">Inicio</label>
                    <input type="time" name="startime" id="startime">
                </div>
                <br>
                <div>
                    <label for="endtime">Fin</label>
                    <input type="time" name="endtime" id="endtime" >
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
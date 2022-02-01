@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Creando una sesión</h1>

            <form action="/sesions" method="post">
                @csrf
                <div>
                    <label for="activity">Actividad</label>
                    <select name="activity" id="">
                        @forelse($activities as $activity)
                        <option value="{{$activity->id}}">{{$activity->name}} </option>
                        @empty
                        <option value="0">Nuleo</option>
                        @endforelse
                    </select>

                </div>

                <div>
                    <label for="date">Día</label>
                    <input type="date" name="date" id="date">
                </div>

                <div>
                    <label for="startime">Inicio</label>
                    <input type="time" name="startime" id="startime">
                </div>

                <div>
                    <label for="endtime">Fin</label>
                    <input type="time" name="endtime" id="endtime" >
                </div>

                <div>
                    <input type="submit" value="crear">
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
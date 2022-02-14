@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Sesion nº {{$sesion->id}}</h1>

    <ul>
        <li>
            <strong>Código</strong>
            {{ $sesion->id }}
        </li>
        <li>
            <strong>Inicio</strong>
            {{ $sesion->startime }}
        </li>
        <li>
            <strong>Fin</strong>
            {{ $sesion->endtime }}
        </li>
        <li>
            <strong>Actividad</strong>
            {{ $activity->name }}
        </li>
    </ul>
</div>


@endsection
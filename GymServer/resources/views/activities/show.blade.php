@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Actividad nº {{$activity->id}}</h1>

    <ul>
        <li>
            <strong>Código</strong>
            {{ $activity->id }}
        </li>
        <li>
            <strong>Nombre</strong>
            {{ $activity->name }}
        </li>
        <li>
            <strong>Descripción</strong>
            {{ $activity->description }}
        </li>
        <li>
            <strong>Duración</strong>
            {{ $activity->duration }}
        </li>
        <li>
            <strong>Participantes</strong>
            {{ $activity->participants }}
        </li>
    </ul>
    <br>
    <hr>
    <h2>Sesiones:</h2>
    <form method="POST" id="formulario">
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        <input type="hidden" id="sesions" value="{{$activity->sesions}}">

    </form>

    <input type="button" id="buscarSesiones" value="Buscar sesiones"  class="btn btn-primary float-right">

    <br>
    <div id="destinofiltro">
        destino filtro...
    </div>
</div>
@endsection
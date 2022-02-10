@extends('layouts.app')

@section('content')
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
        <h2>Busqueda Ajax</h2>
        <form method="POST" id="formulario">
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            <input type="hidden" id="id" value="{{$activity->id}}">
            {{-- <input type="text" id="filtro"> --}}
            <input type="submit" id="buscar">
        </form>
        <br>
        <div id="destinofiltro">
            destino filtro...
        </div>

        <div id="sessions">
            
        </div>

@endsection
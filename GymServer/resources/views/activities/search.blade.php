@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <select id="selectActividades" name="activity" class="selectpicker" aria-label="size 5 select example">
            @forelse($activities as $activity)
            <option value="{{$activity->id}}">{{$activity->name}} </option>
            @empty
            <option value="0">Nul0</option>
            @endforelse
        </select>
    </div>
    <br>
    <input type="button" id="buscarActividad" value="Buscar actividad" class="btn btn-primary float-right">

    <br>
    <br>
    <div id="destinoActividades">
        destino filtro...
    </div>
</div>
@endsection
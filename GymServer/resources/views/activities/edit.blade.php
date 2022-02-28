@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Actualización de sesión {{$activity->id}} </h1>

            <form action="/activities/{{$activity->id}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="id" value="{{$activity->id}}">
                <div>
                    <label for="name">Nombre</label>
                    <input type="text" name="name" value="{{$activity->name}}">
                </div>

                <div>
                    <label for="description">Descripción</label>
                    <input type="text" name="description" value="{{$activity->description}}">
                </div>

                <div>
                    <label for="duration">Duracion</label>
                    <input type="text" name="duration" value="{{$activity->duration}}">
                </div>
                <div>
                    <label for="participants">Participantes</label>
                    <input type="text" name="participants" value="{{$activity->participants}}">
                </div>

                <div>
                    <input type="submit" value="actualizar">
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
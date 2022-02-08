@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Actualización de sesión {{$sesion->id}} </h1>

            <form action="/sesions/{{$sesion->id}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div>
                    <label for="date">Inicio</label>
                    <input type="text" name="date" value="{{$sesion->date}}">
                </div>

                <div>
                    <label for="startime">Inicio</label>
                    <input type="text" name="startime" value="{{$sesion->startime}}">
                </div>

                <div>
                    <label for="abreviation">Abreviatura</label>
                    <input type="text" name="abreviation" value="{{$sesion->abreviation}}">
                </div>

                <div>
                    <input type="submit" value="actualizar">
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
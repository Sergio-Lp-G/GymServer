@extends('layout.app')
@section('content')
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Lista de estudios</h1>
 -->


<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-8">


            <h1>Lista de estudios
                <a href="/activities/create" class="btn btn-primary float-right">
                    Nuevo
                </a>
            </h1>


            <table class="table table-striped">
                <tr>
                    <th>Nombre</th>
                    <th>Días</th>
                    <th>Nº Sesiones</th>
                    <th>Horario/Sesión</th>
                    <th>Duración</th>
                    <th>MaxParticipantes</th>
                </tr>
                {{-- @forelse ($activities as $activity)--}}
                {{-- <tr>--}}
                {{-- <td>{{$activity->code}} </td>--}}
                {{-- <td>{{$activity->name}} </td>--}}
                {{-- <td>{{$activity->abreviation}} </td>--}}
                {{-- <td> <a class="btn btn-primary btn-sm" href="/activities/{{$activity->id}}">Ver</a></td>--}}
                {{-- <td> <a class="btn btn-primary btn-sm" href="/activities/{{$activity->id}}/edit">Editar</a></td>--}}
                {{-- </tr>--}}
                {{-- @empty--}}
                {{-- <tr>--}}
                {{-- <td colspan="3">No hay estudios registrados</td>--}}
                {{-- </tr>--}}
                {{-- @endforelse--}}
            </table>





        </div>
    </div>
</div>
@endsection

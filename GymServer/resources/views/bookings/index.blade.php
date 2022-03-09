@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <h1>Reservas<br>
                <a href="/bookings/create" class="btn btn-primary float-right">
                    Nueva reserva
                </a>
                <a href="/bookings/search" class="btn btn-secondary float-right">
                    Buscar reserva
                </a>
            </h1>

            <table class="table table-striped" border="1">
                <tr>
                    <th>Reserva</th>
                    <th>Usuario</th>
                    <th>Sesion</th>
                    <th>Actividad</th>
                    <th>Fecha de actividad</th>
                    <th></th>
                    <th></th>
                </tr>
                @forelse ($bookings as $booking)
                <tr>
                    <td>{{$booking->id}} </td>
                    <td>{{$booking->user_id}} </td>
                    <td>{{$booking->ssession_id}} </td>
                    <td>{{$booking->activity_id}} </td>
                    <td>{{$booking->activity_id->date}} </td>
                    <td>...</td>
                    <td> <a class="btn btn-primary btn-sm" href="/bookings/{{$booking->id}}">Ver</a></td>
                    <td> <a class="btn btn-primary btn-sm" href="/bookings/{{$booking->id}}/edit">Editar</a></td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">No hay reservas registradas</td>
                </tr>
                @endforelse
            </table>
        </div>
    </div>
</div>
@endsection
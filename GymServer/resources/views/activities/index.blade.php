@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-8">


            <h1>Lista de actividades.<br>
                @auth
                @if (Auth::user()->role_name == 'admin' )
                <a href="/activities/create" class="btn btn-primary float-right">
                    Nueva actividad
                </a>
                @endif

                @endauth

                <a href="/activities/search" class="btn btn-secondary float-right">
                    Buscar actividades
                </a>
            </h1>

            <table class="table table-striped" border="1">
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Duración</th>
                    <th>MaxParticipantes</th>
                    <th>Sesiones</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                @forelse ($activities as $activity)
                <tr>
                    <td>{{$activity->name}} </td>
                    <td>{{$activity->description}} </td>
                    <td>{{$activity->duration}} </td>
                    <td>{{$activity->participants}} </td>
                    <td>...</td>
                    <td> <a class="btn btn-primary btn-sm" href="/activities/{{$activity->id}}">Ver</a></td>

                    @auth
                    @if (Auth::user()->role_name == 'admin' )
                    <td> <a class="btn btn-primary btn-sm" href="/activities/{{$activity->id}}/edit">Editar</a></td>
                    <td>
                        <form action="/activities/{{$activity->id}}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <input class="btn btn-primary btn-sm" type="submit" value="Borrar">
                        </form>
                    </td>

                    @endif
                    <td> </td>
                    <td> </td>
                    @endauth

                </tr>
                @empty
                <tr>
                    <td colspan="3">No hay actividades registradas</td>
                </tr>
                @endforelse
            </table>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-8">


            <h1>Lista de sesiones.<br></h1>

            @auth
            @if (Auth::user()->role_name == 'admin' )
            <input type="button" value="Crear" onclick="location.href='/sesions/create'">
            @endif

            @endauth



            <table class="table table-striped" border="1">
                <tr>
                    <th>Fecha</th>
                    <th>Inicio</th>
                    <th>Fin</th>
                    <th>Actividad Id</th>
                    <th></th>
                    <th></th>
                </tr>
                @forelse ($sesions as $sesion)
                <tr>
                    <td>{{$sesion->date}} </td>
                    <td>{{$sesion->startime}} </td>
                    <td>{{$sesion->endtime}} </td>
                    <td>{{$sesion->activity_id}} </td>
                    <td> <a class="btn btn-primary btn-sm" href="/sesions/{{$sesion->id}}">Ver</a></td>
                    @auth
                    @if (Auth::user()->role_name == 'admin' )
                    <td> <a class="btn btn-primary btn-sm" href="/sesions/{{$sesion->id}}/edit">Editar</a></td>
                    @endif
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


        {{--<div>
        <h1>Lista de sesiones. </h1>
            <table class="table table-striped" border="1">
                <tr>
                    <th>Dias de dicha actividad</th>
                        </tr>
                @forelse ($arrDays as $day)
                <tr>
                    <td>{{$day->format('d-m-Y')}} </td>
        </tr>
        @empty
        <tr>
            <td colspan="3">No hay sesiones registradas</td>
        </tr>
        @endforelse
        </table>
    </div>--}}
</div>


@endsection
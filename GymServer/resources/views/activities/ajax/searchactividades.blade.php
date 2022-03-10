{{-- <h1>filtro: {{ var_dump($sesions) }}</h1> --}}
<table class="table table-striped">
    <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Duración</th>
        <th>Max. Participantes</th>
        <th></th>
    </tr>
    <tr>
        <td>{{$actividad['name']}} </td>
        <td>{{$actividad['description']}} </td>
        <td>{{$actividad['duration']}} </td>
        <td>{{$actividad['participants']}} </td>
        <td> <a class="btn btn-primary btn-sm" href="/activities/{{$actividad['id']}}">Ver</a></td>
    </tr>
</table>
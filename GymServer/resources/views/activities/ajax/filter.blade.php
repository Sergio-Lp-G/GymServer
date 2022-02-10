{{-- <h1>filtro: {{ var_dump($sesions) }}</h1> --}}
<table class="table table-striped">
<tr>
    <th>Código</th>
    <th>Día</th>
    <th>Hora inicio</th>
    <th>Hora final</th>
</tr>
 @foreach ($sesions as $sesion)
<tr>
    <td>{{$sesion['id']}} </td>
    <td>{{$sesion['date']}} </td>
    <td>{{$sesion['startime']}} </td>
    <td>{{$sesion['endtime']}} </td>
    <td> <a class="btn btn-primary btn-sm" href="/sesions/{{$sesion['id']}}">Ver</a></td>
    <td> <a class="btn btn-primary btn-sm" href="/sesions/{{$sesion['id']}/edit">Editar</a></td>
</tr>

@endforeach 
</table>



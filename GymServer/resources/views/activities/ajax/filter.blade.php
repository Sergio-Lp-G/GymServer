{{--<h1>filtro: {{ dd($filter) }}</h1>--}}
<table class="table table-striped">
<tr>
    <th>Código</th>
    <th>Día</th>
    <th>Hora inicio</th>
    <th>Hora final</th>
</tr>
@forelse ($sesions as $sesion)
<tr>
    <td>{{$sesion->id}} </td>
    <td>{{$sesion->date}} </td>
    <td>{{$sesion->startime}} </td>
    <td>{{$sesion->endtime}} </td>
    <td> <a class="btn btn-primary btn-sm" href="/studies/{{$sesion->id}}">Ver</a></td>
    <td> <a class="btn btn-primary btn-sm" href="/studies/{{$sesion->id}}/edit">Editar</a></td>
</tr>
@empty
<tr>
    <td colspan="3">No hay estudios registrados</td>
</tr>

@endforelse
</table>



<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-8">


            <h1>Lista de sesiones.<br>

            </h1>

            <table class="table table-striped" border="1">
                <tr>
                    <th>inicio</th>
                    <th>fin</th>
                    <th>Duración</th>
                    <th>MaxParticipantes</th>
                    <th>Sesiones</th>
                    <th></th>
                    <th></th>
                </tr>
                @forelse ($sesions as $sesion)
                <tr>
                    <td>{{$sesion->startime}} </td>
                    <td>{{$sesion->endtime}} </td>
                    <td>{{$sesion->duration}} </td>
                    <td>{{$sesion->participants}} </td>
                    <td>...</td>
                    <td> <a class="btn btn-primary btn-sm" href="/sesions/{{$sesion->id}}">Ver</a></td>
                    <td> <a class="btn btn-primary btn-sm" href="/sesions/{{$sesion->id}}/edit">Editar</a></td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">No hay actividades registradas</td>
                </tr>
                @endforelse
            </table>
        </div>
        <div>
            <h1>Lista de sesiones. </h1>
            <table class="table table-striped" border="1">
                <tr>
                    <th>inicio</th>
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
        </div>
    </div>
</div>
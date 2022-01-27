<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-8">


            <h1>Lista de actividades.<br>
                <a href="/activities/create" class="btn btn-primary float-right">
                    Nueva actividad.
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
                </tr>
                @forelse ($activities as $activity)
                <tr>
                    <td>{{$activity->name}} </td>
                    <td>{{$activity->description}} </td>
                    <td>{{$activity->duration}} </td>
                    <td>{{$activity->participants}} </td>
                    <td>...</td>
                    <td> <a class="btn btn-primary btn-sm" href="/activities/{{$activity->id}}">Ver</a></td>
                    <td> <a class="btn btn-primary btn-sm" href="/activities/{{$activity->id}}/edit">Editar</a></td>
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
<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-8">


            <h1>Lista de actividades.<br>
                <a href="/activities/create" class="btn btn-primary float-right">
                    Nueva actividad.
                </a>
            </h1>

<<<<<<< HEAD
            <table class="table table-striped">
                    <tr>
                        <th>Nombre</th>
                        <th>Días</th>
                        <th>Nº Sesiones</th>
                        <th>Horario/Sesión</th>
                        <th>Duración</th>
                        <th>MaxParticipantes</th>
                    </tr>
                     @forelse ($activities as $activity)
                     <tr>
                     <td>{{$activity->code}} </td>
                     <td>{{$activity->name}} </td>
                     <td>{{$activity->abreviation}} </td>
                     <td> <a class="btn btn-primary btn-sm" href="/activities/{{$activity->id}}">Ver</a></td>
                     <td> <a class="btn btn-primary btn-sm" href="/activities/{{$activity->id}}/edit">Editar</a></td>
                     </tr>
                     @empty
                     <tr>
                     <td colspan="3">No hay estudios registrados</td>
                     </tr>
                     @endforelse
                </table>






=======
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
>>>>>>> f5c2e6c32446f551f498edbd59c0f21e5e4bf952
        </div>
    </div>
</div>
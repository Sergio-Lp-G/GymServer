<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-8">


            <h1>Lista de usuarios
                <a href="/users/create" class="btn btn-primary float-right">
                    Nuevo
                </a>
            </h1>

            <table class="table table-striped">
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Duración</th>
                    <th>MaxParticipantes</th>
                </tr>
                @forelse ($users as $user)
                <tr>
                    <td>{{$user->name}} </td>
                    <td>{{$user->description}} </td>
                    <td>{{$user->duration}} </td>
                    <td>{{$user->participants}} </td>
                    <td> <a class="btn btn-primary btn-sm" href="/users/{{$user->id}}">Ver</a></td>
                    <td> <a class="btn btn-primary btn-sm" href="/users/{{$user->id}}/edit">Editar</a></td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">No hay user registrados</td>
                </tr>
                @endforelse
            </table>






        </div>
    </div>
</div>
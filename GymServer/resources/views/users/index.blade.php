@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-8">


            <h1>Lista de usuarios
                <a href="/users/create" class="btn btn-primary float-right">
                    Nuevo
                </a>
            </h1>
            <br>
            <table class="table table-striped">
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>

                    <th> </th>
                    <th> </th>
                </tr>
                @forelse ($users as $user)
                <tr>
                    <td>{{$user->name}} </td>
                    <td>{{$user->email}} </td>
                    <td>{{$user->role_name}} </td>

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
@endsection
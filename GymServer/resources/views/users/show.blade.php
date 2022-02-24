@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Usuario {{$user->name}}</h1>

    <ul>
        <li>
            <strong>Nombre</strong>
            {{ $user->name }}
        </li>
        <li>
            <strong>Dni</strong>
            {{ $user->dni }}
        </li>
        <li>
            <strong>Email</strong>
            {{ $user->email }}
        </li>
        <li>
            <strong>Peso</strong>
            {{ $user->weight }} kg
        </li>
        <li>
            <strong>Altura</strong>
            {{ $user->weight }} cm
        </li>
        <li>
            <strong>Cumpleaños</strong>
            {{ $user->birthday }}
        </li>
        <li>
            <strong>Genero</strong>
            {{ $user->gender }}
        </li>
        <li>
            <strong>Rol</strong>
            {{ $user->role_name}}
        </li>
    </ul>
</div>


@endsection
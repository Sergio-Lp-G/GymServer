<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Sesion nº {{$sesion->id}}</h1>

    <ul>
        <li>
            <strong>Código</strong>
            {{ $sesion->id }}
        </li>
        <li>
            <strong>Inicio</strong>
            {{ $sesion->startime }}
        </li>
        <li>
            <strong>Fin</strong>
            {{ $sesion->endtime }}
        </li>
        <li>
            <strong>Actividad</strong>
            {{ $activity->name }}
        </li>
    </ul>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin</title>
</head>
<body>
    <h1>Panel principal del Admin</h1>
    <h3>Elija la opción que desee</h3>
    <dl>
        <dt>Gestion de películas</dt>
        <dd>
        <a href="{{ route('annadirPeli') }}">Añadir película</a>
        </dd>
        <dd>
        <a href="{{ route('quitarPeli') }}">Quitar película</a>
        </dd>
        <br>

        <dt>Gestion de sesiones</dt>
        <dd>
        <a href="{{ route('annadirSesion') }}">Añadir sesion</a>
        </dd>
        <dd>
        <a href="{{ route('quitarSesion') }}">Quitar sesion</a>
        </dd>
        <br>

        <dt>Gestion de usuarios</dt>
        <dd>
        <a href="{{ route('quitarUser') }}">Dar de baja a un usuario
        </a>
        </dd>
    </dl>
</body>
</html>
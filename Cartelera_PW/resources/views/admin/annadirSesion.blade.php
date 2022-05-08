<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear sesion</title>
</head>
<body>
    <form action="{{ route('crearSesion') }}" method="post">
        @csrf
        <label for="sala">Elegir sala</label>
        <select name="sala">
            @forelse($salas as $salasItems)
                <option value="{{ $salasItems->id_sala }}">
                    {{ $salasItems->id_sala }}
                </option>
            @empty
                <p>No hay salas</p>
            @endforelse
        </select>
        <br>
        <br>
        <label for="pelicula">Elegir pelicula</label>
        <select name="pelicula">
            @forelse($peliculas as $peliculasItems)
                <option value="{{ $peliculasItems->id }}">
                    {{ $peliculasItems->titulo }} - {{$peliculasItems->duracion}} minutos
                </option>
            @empty
                <p>No hay peliculas</p>
            @endforelse
        </select>         
        <br>
        <br>
        <label for="hora_inicio">Elegir hora de inicio</label>
        <input type="time" name="hora_inicio">
        <br>
        <br>
        <label for="hora_fin">Elegir hora de finalización</label>
        <input type="time" name="hora_fin">
        <br>
        <br>
        <label for="dia">Elegir dia</label>
        <input type="date" name="dia">
        <br>
        <br>
        <input type="submit" value="Crear sesion">
    </form>
    <a href="{{ route('mainAdmin') }}"><button>Volver</button></a>
</body>
</html>
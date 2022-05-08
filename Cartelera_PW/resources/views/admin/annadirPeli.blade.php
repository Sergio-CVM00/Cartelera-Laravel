<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir pelicula</title>
</head>
<body>
<h1>Añadir pelicula</h1>

<form action="{{ route('crearPeli') }}" method="post">
    @csrf
    <label for="titulo">Titulo:</label>
    <input type="text" name="titulo">
    <br>
    <br>
    <label for="titulo">Duracion:</label>
    <input type="number" name="duracion">
    <br>
    <br>
    <label for="titulo">Director:</label>
    <input type="text" name="director">
    <br>
    <br>
    <label for="titulo">Genero:</label>
    <input type="text" name="genero">
    <br>
    <br>
    <label for="titulo">Estreno:</label>
    <input type="date" name="estreno">
    <br>
    <br>
    <label for="titulo">Portada(Link):</label>
    <input type="text" name="portada">
    <br>
    <br>
    <label for="titulo">Sinopsis:</label>
    <textarea name="sinopsis" cols="30" rows="10"></textarea>
    <br>
    <br>
    <input type="submit" value="Crear pelicula">
</form>
<br>
<a href="{{ route('mainAdmin') }}"><button>Volver</button></a>
</body>
</html>
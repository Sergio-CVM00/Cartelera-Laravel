<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<h1>Elegir hora de la película {{$peli->titulo}}</h1>

<form action="{{ route('confirmarReserva') }}" method="POST">
    @csrf
    <select class="form-select" aria-label="Elija la hora que desee" name="hora">
    @forelse($sesion as $sesionItems)
        <option value="{{ $sesionItems->id_sesion }}">{{$sesionItems->hora_inicio}} - {{$sesionItems->hora_fin}}</option>
    @empty
        <p>No hay horas disponibles</p>
    @endforelse
    </select>

    <input type="hidden" value="{{ $peli->id }}" name="id_peli">
    <br>
    <br>
    <input class="btn btn-success" type="submit" value="Elegir hora">
    <br>
    <br>
    <a href="{{ route('cartelera') }}"><button type="button" class="btn btn-danger">Volver</button></a>
</form>
</body>
</html>
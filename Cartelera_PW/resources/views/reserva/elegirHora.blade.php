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
<body class="bg-info">
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-bold fs-5">Elegir hora para {{$peli->titulo}}</h5>

            <form action="{{ route('confirmarReserva') }}" method="POST">
              @csrf
                  <div class="form-floating mb-3">
                    <select class="form-select" aria-label="Elija la hora que desee" name="hora">
                      @forelse($sesion as $sesionItems)
                        <option value="{{ $sesionItems->id_sesion }}">{{$sesionItems->hora_inicio}} - {{$sesionItems->hora_fin}}</option>
                      @empty
                        <option value="0">No hay horas disponibles</option>
                      @endforelse
                    </select>
                  </div>

                  <input type="hidden" value="{{ $peli->id }}" name="id_peli"> 
                  @if(!$sesion->isEmpty())
                  <hr class="my-4">
                  <div class="d-grid mb-2">
                    <input class="btn btn-success btn-block" type="submit" value="Elegir hora">
                  </div>
                  <div class="d-grid">
                    <a href="{{ route('mostrar_pelicula', $peli['id']) }}"><button type="button" class="btn btn-danger btn-block">Volver</button></a>
                  </div>
                  @else
                  <hr class="my-4">
                  <div class="d-grid">
                    <a href="{{ route('mostrar_pelicula', $peli['id']) }}"><button type="button" class="btn btn-danger btn-block">Volver</button></a>
                  </div>
                  @endif                 
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
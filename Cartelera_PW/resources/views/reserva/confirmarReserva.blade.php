<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body class="bg-info">
    @forelse($sesion as $sesionItems)
    <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-bold fs-5">Resumen de la reserva</h5>

              <div class="form-floating mb-3">
                <p for="floatingInput">Titulo: {{ $peli['titulo'] }}</p>
              </div>
              <div class="form-floating mb-3">
                <p for="floatingInput">Dia: {{ $sesionItems->dia }}</p>
              </div>
              <div class="form-floating mb-3">
                <p for="floatingInput">Hora de inicio: {{ $sesionItems->hora_inicio }}</p>
              </div>

              <hr class="my-4">
              <div class="d-grid mb-2">
                <a href="{{ route('crearEntrada', ['sesion' => $sesionItems->id_sesion, 'titulo' => $peli['titulo']]) }}">
                    <button class="btn btn-success btn-login text-uppercase fw-bold">
                        Confirmar reserva
                    </button>
                </a>
              </div>
              <div class="d-grid">
                <a href="{{ route('mostrar_pelicula', $peli['id']) }}">
                    <button class="btn btn-danger btn-login text-uppercase fw-bold">
                        Cancelar
                    </button>
                </a>
              </div>
          </div>
        </div>
      </div>
    </div>    
  </div>
  @empty
    <p>La reserva no se ha podido realizar</p>
  @endforelse
</body>
</html>


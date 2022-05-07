<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $peliculas['titulo']}}</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Page Content -->
  <div class="container">

  <!-- Portfolio Item Heading -->
  <h1 class="my-4">
  {{ $peliculas['titulo'] }}
  </h1>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
      <img class="img-fluid" src="{{ $peliculas['portada'] }}" alt="">
    </div>

    <div class="col-md-4">
      <h3 class="my-3">Sinopsis</h3>
      <p>{{ $peliculas['sinopsis'] }}</p>
      <h3 class="my-3">Detalles</h3>
      <ul>
        <li>Duración: {{ $peliculas['duracion']}} minutos</li>
        <li>Género: {{ $peliculas['genero']}}</li>
        <li>Estreno: {{ $peliculas['estreno'] }}</li>
        <li>Director: {{ $peliculas['director']}}</li>
      </ul>

      @if (Auth::check())
        <a href="{{ route('elegirFecha', $peliculas['id']) }}"><button type="button" class="btn btn-dark">Reservar</button></a>
      @else
        <h3>Inicia sesión para reservar tu entrada</h3>
        <a href="{{ route('login') }}"><button type="button" class="btn btn-dark">Iniciar sesion</button></a>
      @endif
      <br>
      <br>
      <a href="{{ route('cartelera') }}"><button type="button" class="btn btn-danger">Volver</button></a>
    </div>

  </div>
  <!-- /.row -->
  </div>
  <!-- /.container -->
  <!-- Copyright Section-->
  <section class="copyright py-4 text-center">
            <div class="container"><small class="pre-wrap">UCARTELERA©</small></div>
  </section>

  
</body>
</html>





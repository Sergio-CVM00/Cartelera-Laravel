<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<h1>{{$peliculas['titulo']}}</h1>

<h1>Información:</h1>
<ul>
  <li>Duración: {{ $peliculas['duracion']}} minutos</li>
  <li>Género: {{ $peliculas['genero']}}</li>
  <li>Estreno: {{ $peliculas['estreno'] }}</li>
  <li>Director: {{ $peliculas['director']}}</li>
</ul>

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

@if (Auth::check())
  <h1><a href="{{ route('elegirFecha', $peliculas['id']) }}"><input type="button" value="Reservar"></a></h1>
@else
  <h3>Inicia sesión para reservar tu entrada</h3>
  <a href="{{ route('login') }}"><input type="button" value="Iniciar sesion"></a>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartelera</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Header -->
    <header class="bg-dark text-center py-5 mb-4">
    <div class="container">
        <h1 class="fw-light text-white">Cartelera</h1>
    </div>
    </header>

    <!-- Page Content -->
    <div class="container">
            <div class="row">   
            @forelse($peliculas as $peliculasItems)        
                <!-- Team Member 1 -->
                <div class="col-3 mb-4 mt-4">
                    <a href="{{ route('mostrar_pelicula', $peliculasItems['id']) }}">
                        <div class="card border-0 shadow">
                            <img src="{{ $peliculasItems['portada'] }}" class="card-img-top" alt="..." >
                            <div class="card-body text-center">
                            <h5 class="card-title mb-0">{{ $peliculasItems['titulo'] }}</h5>
                        </div>
                    </a>
                </div>  
            </div>
            <!-- /.row -->           
            @empty
                <p>No hay peliculas disponibles</p>
            @endforelse            
    <a href="{{ route('inicio') }}"><button type="button" class="btn btn-danger mb-4">Volver</button></a>
    </div>
    <!-- /.container -->
</body>
</html>

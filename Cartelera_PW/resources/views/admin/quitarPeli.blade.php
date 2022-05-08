<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar pelicula</title>
    <link href="index/css/perfil.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class="osahan-account-page-right shadow-sm bg-white p-4 h-100">
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane  fade  active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
            <h4 class="font-weight-bold mt-0 mb-4">Lista de películas</h4>
            @forelse($peliculas as $peliculasItems)
            <div class="bg-white card mb-4 order-list shadow-sm">
                <div class="gold-members p-4">
                    <div class="media">
                        <div class="media-body">
                            <p class="text-gray mb-1"><i class="icofont-location-arrow"></i> Titulo: {{$peliculasItems->titulo}}
                            </p>
                            <hr>
                            <div class="float-right">
                                <a href="{{ route('borrarPeli', $peliculasItems->id) }}"><button class="btn btn-sm btn-warning">Borrar película</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <p>No hay películas</p>
            @endforelse
        </div>
    </div>
</div>
<a href="{{ route('mainAdmin') }}"><button type="button" class="btn btn-danger">Volver</button></a>
</body>
</html>
<h1>Cartelera sin posibilidad de reservar</h1>

<h1>@lang('peliculas')</h1>
<ul>
    @forelse($peliculas as $peliculasItems)
        <li>
            <a href="{{ route('mostrar_pelicula',$peliculasItems) }}">{{ $peliculasItems['titulo'] }}</a>
        </li>
    @empty
        <li>
            No hay proyectos para mostrar
        </li>
    @endforelse
</ul>

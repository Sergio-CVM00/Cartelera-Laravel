<h1>Resumen de la reserva</h1>

<ul>
    @forelse($sesion as $sesionItems)
    <li>Titulo: {{ $peli['titulo'] }}</li>
    <li>Dia: {{ $sesionItems->dia }}</li>
    <li>Hora: {{ $sesionItems->hora_inicio }}</li>
</ul>

<br>
<a href="{{ route('crearEntrada', $sesionItems->id_sesion) }}"><input type="button" value="Confirmar"></a>
<br>
<a href="{{ route('mostrar_pelicula', $peli['id']) }}"><input type="button" value="Cancelar"></a>
@empty
        <p>No hay horas disponibles</p>
@endforelse


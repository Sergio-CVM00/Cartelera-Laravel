<h1>Resumen de la reserva</h1>

<ul>
    <li>Titulo: {{ $peli['titulo'] }}</li>
    <li>Dia: {{ $sesion['dia'] }}</li>
    <li>Hora: {{ $sesion['hora_inicio']}}</li>
</ul>

<br>
<a href="{{ route('crearEntrada', $sesion['id_sesion']) }}"><input type="button" value="Confirmar"></a>
<br>
<a href="{{ route('mostrar_pelicula', $peli['id'] }}"><input type="button" value="Cancelar"></a>



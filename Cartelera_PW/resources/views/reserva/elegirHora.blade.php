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
    <input type="submit" value="Reservar">
</form>
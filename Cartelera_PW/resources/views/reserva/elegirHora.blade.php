<h1>Elegir hora de la película</h1>

<form action="/" method="POST">
    @csrf
    <select class="form-select" aria-label="Elije la hora que desee" name="hora">
    @forelse($sesion as $sesionItems)
    <option value="{{ $sesionItems->id_sesion }}">{{$sesionItems->hora_inicio}} - {{$sesionItems->hora_fin}}</option>
    @empty
    <p>No hay horas disponibles</p>
    @endforelse
    </select>

    <br>
    <input type="submit" value="Reservar">
</form>
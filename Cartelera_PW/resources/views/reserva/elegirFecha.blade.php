<h1>Elegir dia de la película {{$peli->titulo}}</h1>

<form action="{{ route('elegirHora') }}" method="POST">
  @csrf
  <select class="form-select" aria-label="Elije el dia que desee" name="fecha">
  @forelse($fechas as $fechasItems)
    <option value="{{ $fechasItems->dia }}">{{$fechasItems->dia}}</option>
  @empty
    <p>No hay salas disponibles</p>
  @endforelse
  </select>

  <input type="hidden" value="{{ $peli->id }}" name="id_peli">

  <br>
  <br>
  <input type="submit" value="Elegir dia">
</form>
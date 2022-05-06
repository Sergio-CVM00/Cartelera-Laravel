<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu perfil</title>
</head>
<body>
@if (Auth::check())
<h1>Main usuario</h1>
    <h1> Bienvenido {{Auth::user()->name}}</h1>
        
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-jet-dropdown-link href="{{ route('login') }}"
            onclick="event.preventDefault() 
            this.closest('form').submit();">
            <img alt="" src="/img/cerrarSesion.png" width="45" height="45" />
        </x-jet-dropdown-link>
    </form>

    <h2>Tus datos</h2>
    <ul>
        <li>Correo: {{ Auth::user()->email }}</li>
    </ul>
    <br>
    @forelse($entradas as $entradasItems)
    <ul>
        <li>Entrada nº: {{ $entradasItems->id_entrada }}</li>
        <li>Titulo: {{ $entradasItems->titulo }}</li>
    </ul>
    @empty
        <p>No tienes entradas</p>
    @endforelse
    

    <a href="{{ route('cartelera') }}"><input type="button" value="Hacer una reserva"></a>
    <br>
    <a href="{{ route('inicio') }}"><input type="button" value="Volver al inicio"></a>
@endif
</body>
</html>
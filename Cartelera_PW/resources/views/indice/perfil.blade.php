<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu perfil</title>
    <link href="index/css/perfil.css" rel="stylesheet" type="text/css">
    
</head>
<body>
<h2>Tus entradas</h2>
        @forelse($entradas as $entradasItems)
        <p>-----------------------</p>
        <ul>
            <li>Entrada nº: {{ $entradasItems->id_entrada }}</li>
            <li>Titulo: {{ $entradasItems->titulo }}</li>
        </ul>
        <p>-----------------------</p>
        @empty
            <p>No tienes entradas</p>
        @endforelse
        

        <a href="{{ route('cartelera') }}"><input type="button" value="Hacer una reserva"></a>
        <a href="{{ route('inicio') }}"><input type="button" value="Volver al inicio"></a>
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

    
@endif

<!-- this is the markup. you can change the details (your own name, your own avatar etc.) but don’t change the basic structure! -->

<aside class="profile-card">

    <header>
    
        <!-- here’s the avatar -->
        <a href="">
            <img src="https://i.ibb.co/Zx02bSq/Funny-head.jpg"/>
        </a>
        
        <!-- the username -->
        <h1>{{Auth::user()->name}}</h1>
        
        <!-- and role or location -->
        <h2>{{Auth::user()->email}}</h2>        
    
    </header>

</aside>
<!-- that’s all folks! -->
</body>
</html>
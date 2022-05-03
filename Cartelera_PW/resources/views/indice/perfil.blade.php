<h1>Main usuario</h1>
@if (Auth::check())
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
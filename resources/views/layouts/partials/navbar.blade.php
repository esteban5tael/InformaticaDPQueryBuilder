<nav class="navbar navbar-expand-sm navbar-light bg-light">

    <ul class="navbar-nav me-auto mt-2 mt-lg-0">

        <li class="nav-item">
            <a class="nav-link active" href="{{ route('index') }}">Index</a>
        </li>
        @if (Route::has('login'))
            @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('dashboard') }}">{{ Auth::user()->name }}'s {{ __('Dashboard') }}</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('login') }}">{{ __('Login') }}</a>
                </li>


                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @endauth
        @endif


        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Options</a>
            <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="dropdown-item" href="{{ route('players.index') }}">Players</a>
                <a class="dropdown-item" href="#">Action 2</a>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>

    </ul>



</nav>

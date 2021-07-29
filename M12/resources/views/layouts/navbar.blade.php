@if (Route::has('login'))
                <nav align="left" class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
                <div class="collapse navbar-collapse" id="navbarNav">
                    @auth
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}@if(Request::hasCookie('role')) - <?php echo Cookie::get('role') ?> @endif</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                                <a class="dropdown-item text-danger"href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">Quit</a> 
                        </form>
                         
                        </div>

                        <a class="nav-link" href="{{ route('teams.index') }}" class="nav-link">All Teams</a>
                        <a class="nav-link" href="{{ route('games.index') }}" class="nav-link">All Games</a>
                        
                    @else

                        <a class="nav-link" href="{{ route('login') }}" class="nav-link">Log in</a>

                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}" class="nav-link">Register</a>
                        @endif
                    @endauth
                    <a class="nav-link align-self-end" href="{{ route('info') }}" class="nav-link">Info</a>
                    </div>
                    
                    </nav>
            @endif
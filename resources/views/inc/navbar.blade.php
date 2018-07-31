<nav class="navbar navbar-expand-md navbar-inverse navbar-laravel navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('pages.index') }}">Početna <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('pages.about') }}">O nama</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('pages.services') }}">Usluge</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('articles.index') }}">Artikli</a>
              </li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          @if(Auth::user()->role == 'admin')
                            <a class="dropdown-item" style="text-decoration:none;"href="{{ route('home') }}">Admin Panel</a>
                          @endif
                            <a class="dropdown-item" style="text-decoration:none;"href="{{ route('profile.index') }}">Moj Profil</a>
                            <a class="dropdown-item" style="text-decoration:none;"href="{{ route('profile.orders') }}">Moje Narudžbe</a>
                            <a class="dropdown-item" style="text-decoration:none;"href="{{ route('profile.card') }}"><i class="fas fa-shopping-cart"></i> Košarica <span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span></a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header id="header">
    <h1 id="logo"><a href="/">Valhalla Gaming</a></h1>
    <nav id="nav">
        <ul>
            <li><a href="/products">Products</a></li>
            <li>
                <a href="/products">Products</a>
                {{-- <ul>
                    <li><a href="left-sidebar.html">Left Sidebar</a></li>
                    <li><a href="right-sidebar.html">Right Sidebar</a></li>
                    <li><a href="no-sidebar.html">No Sidebar</a></li>
                    <li>
                        <a href="#">Submenu</a>
                        <ul>
                            <li><a href="#">Option 1</a></li>
                            <li><a href="#">Option 2</a></li>
                            <li><a href="#">Option 3</a></li>
                            <li><a href="#">Option 4</a></li>
                        </ul>
                    </li>
                </ul> --}}
            </li>
            <li><a href="elements.html">Elements</a></li>
            <li><a href="/register" class="button primary">Registrer</a></li>
            <li><a href="/login" class="button ">Login</a></li>
        </ul>
    </nav>
</header>
{{-- 
<li><a href="elements.html">Elements</a></li>
            @guest
            <li><a href="/register" class="button primary">Registrer</a></li>
            <li><a href="/login" class="button ">Login</a></li>
            @else
            <li><a href="/users/{{ Auth::user()->id }}" class="button ">{{ Auth::user()->name }}</a></li>
            @endguest --}}

{{-- <!-- Authentication Links -->
@guest
<li class="nav-item">
    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
</li>
<li class="nav-item">
    @if (Route::has('register'))
    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> @endif
</li>
@else
<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
</nav> --}}


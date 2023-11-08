
<nav class="navbar navbar-expand-lg bg-primary ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">BANGLA LIBRARY</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start " id="demo">
            <div class="offcanvas-header">
                <h1 class="offcanvas-title">BANGLA LIBRARY</h1>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body text-black">

                       <ul class="navbar-nav">
                           <li class="nav-item">
                               <a class="nav-link" href="#">Link</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="#">Link</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="#">Link</a>
                           </li>
                       </ul>
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                           <button  id="navbarDropdown" class="nav-link dropdown-toggle bg-light rounded" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </button>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
                </div>
        </div>
    </div>
</nav>

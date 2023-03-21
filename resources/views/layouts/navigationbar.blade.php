    {{-- navigation bar --}}


    <nav class="navbar navbar-expand-sm bg-body-tertiary px-md-5 px-sm-1 my-2">
        <div class="container-fluid">
            <a class="navbar-brand px-2" href="/">
                <img src="\images\logo.png" alt="Logo" width="120" height="50"
                    class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-4">
                    <li class="nav-item px-1">
                        <a class="nav-link active fs-5 fw-semibold" aria-current="page" href="/contact">Contact Us</a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link fs-5 fw-semibold" href="{{ route('tech') }}">Tech News</a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link fs-5 fw-semibold" href="{{ route('national') }}">National</a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link fs-5 fw-semibold" href="{{ route('international') }}">International</a>
                    </li>
                </ul>
                @if (Route::has('login'))
                    @auth

                        <a href="{{ url('/dashboard') }}" class="btn btn-outline-success fs-5 fw-semibold">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-success fs-5 fw-semibold">Login</a>

                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif --}}
                    @endauth
                @endif

            </div>
        </div>
    </nav>

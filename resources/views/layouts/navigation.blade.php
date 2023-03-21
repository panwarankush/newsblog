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

                <a class="nav-link fs-5 fw-semibold p-3" href="{{ route('dashboard') }}"
                active="request()->routeIs('dashboard')">Dashboard</a>

                <div class="dropdown ms-auto">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu shadow">
                        <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>

                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();">Logout</a></li>

                        </form>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>

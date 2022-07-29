<header>
    <div class="px-3 py-2 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                <a class="navbar-brand d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none" href="#">
                    <span class="text-capitalize" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; {{ $user->username }}</span>
                </a>

                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                    <li>
                        <a href="{{ route('portfolio') }}" class="nav-link text-white text-center">
                            <i class="fa-solid fa-house-chimney "></i><br>
                            {{ __('Portfolio') }}
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="{{ asset('storage/users/'.$user->profileImage) }}" alt="MOHAB" style="width: 40px;height: 40px;border-radius: 100%" >
                        </a>

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
                </ul>
            </div>
        </div>
    </div>
</header>

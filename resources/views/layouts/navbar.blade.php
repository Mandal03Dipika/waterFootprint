<nav class="navbar navbar-expand-lg bg-info-subtle">
    <div class="px-4 container-fluid">
        <a class="navbar-brand" href="{{route('land')}}"><img class="object-fit-contain"
                style="width: 75px; height:75px;" src="{{asset('images/logo_1.png')}}"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse float justify-content-end" id="navbarSupportedContent">
            <ul class="mb-2 navbar-nav mb-lg-0">
                <li class="p-1 nav-item">
                    <a class="nav-link btn btn-outline-info" aria-current="page" href="{{route('land')}}">Home</a>
                </li>
                <li class="p-1 nav-item dropdown">
                    <a class="nav-link btn btn-outline-info" href="{{route('about')}}">About Us</a>
                    {{-- <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Our Aims</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Our Team</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Contact Us</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Support Us</a></li>
                    </ul> --}}
                </li>
                <li class="p-1 nav-item dropdown">
                    <a class="nav-link btn btn-outline-info" href="{{route('water_footprint')}}">Water Footprint</a>
                    {{-- <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">What is Water Footprint?</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Why do we need this?</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">What is Water Footprint assement?</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Dictionary</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Frequently Asked Questions</a></li>
                    </ul> --}}
                </li>
                <li class="p-1 nav-item dropdown">
                    <a class="nav-link btn btn-outline-info" href="{{route('action')}}">Time For Action</a>
                    {{-- <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">What can consumers do?</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">What can you do?</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Why can companies do?</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">What can goverment do?</a></li>
                    </ul> --}}
                </li>
                <li class="p-1 nav-item">
                    <a class="nav-link btn btn-outline-info" aria-current="page" href="{{route('login_main')}}">Log
                        In</a>
                </li>
            </ul>
            {{-- <form class="p-1 d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> --}}
        </div>
    </div>
</nav>
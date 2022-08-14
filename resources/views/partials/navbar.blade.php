<nav class="navbar navbar-expand-lg shadow-sm" style="background-color: #f3f4f6">
    <div class="container w-70">
        <a class="navbar-brand mx-lg-0 text-bold" href="#">KRISDEWA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link {{ ($title === "HOME") ? 'active' : '' }}" aria-current="page" href="/">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === "ABOUT") ? 'active' : '' }}" href="/about">ABOUT</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($title === "BLOG") ? 'active' : '' }}" href="/blog">BLOG</a>
            </li>
            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown link
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li> --}}
        </ul>
        </div>
    </div>
</nav>
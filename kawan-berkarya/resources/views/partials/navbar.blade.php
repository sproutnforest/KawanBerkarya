<!-- resources/views/navbar.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #171738; color: #FFFBF0;">
    <div class="container">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 40px;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
             <form class="d-flex mx-auto" role="search" style="width: 50%;">
                <div class="input-group" style="border-radius: 50rem; overflow: hidden;">
                    <input class="form-control border-0" type="search" placeholder="   Search..." aria-label="Search" style="border-radius: 50rem; padding-left: 2.5rem;">
                    <span class="input-group-text bg-transparent border-0 position-absolute" style="left: 10px; top: 50%; transform: translateY(-50%);">
                        <i class="bi bi-search" style="font-size: 1.2rem;"></i>
                    </span>
                </div>
            </form>
            <ul class="navbar-nav ms-auto d-flex align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="/" style="color: #FFFBF0;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/explore" style="color: #FFFBF0;">Explore</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about" style="color: #FFFBF0;">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/help" style="color: #FFFBF0;">Help</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-bell" style="font-size: 2rem; color: #FFFBF0;"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-cart2" style="font-size: 2rem; color: #FFFBF0;"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-person-circle" style="font-size: 2rem; color: #FFFBF0;"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

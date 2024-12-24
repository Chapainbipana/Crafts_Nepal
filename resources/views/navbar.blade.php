
<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="class-navbar bg-light sticky-top shadow-sm">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <!-- Logo -->
                <a class="navbar-brand d-flex align-items-center" href="#" style="margin-left: 10rem; margin-right: 7rem;">
                    <img src="{{ asset('storage/images/Logo_Crafts.png') }}" alt="logo" width="100" height="70" class="d-inline-block align-text-top me-2">
                </a>
    
                <!-- Toggler Button for Mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <!-- Navigation Links -->
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <!-- Home -->
                        <li class="nav-item">
                            <a class="nav-link fw-semibold" href="#">Home</a>
                        </li>
                        <!-- Product -->
                        <li class="nav-item">
                            <a class="nav-link fw-semibold" href="/product">Product</a>
                        </li>
                        <!-- Blog -->
                        <li class="nav-item">
                            <a class="nav-link fw-semibold" href="#">Blog</a>
                        </li>
                    </ul>
    
                    <!-- Search Bar -->
                    <form class="d-flex align-items-center me-4" style="width: 300px;">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
    
                    <ul class="navbar-nav">
                        <!-- Cart -->
                        <li class="nav-item">
                            <a class="nav-link position-relative" href="{{route('add.to.cart')}}">
                                <i class="bi bi-cart fs-3"></i>
                                <span class="badge bg-danger position-absolute top-0 start-100 translate-middle rounded-pill">3</span>
                            </a>
                        </li>
                        <!-- Sign Up -->
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2 text-dark fw-bold" href="register" style="text-decoration: none;">
                                <i class="bi bi-person-circle fs-2"></i>
                                <span style="font-size: 1.2rem;">Sign Up</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    
</nav>

    
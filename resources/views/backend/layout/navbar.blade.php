<nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="{{Route('dashboard.index')}}">
                        <i class="bi-speedometer2"></i>
                        <span>Dashboard</span>
                    </a>

                    <div class="d-lg-none ms-auto me-4">
                        <a href="#" class="navbar-icon bi-person"></a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{Route('dashboard.index')}}">Dashboard</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{Route('books.index')}}">Buku</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link" href="#">Artikel</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{Route('categories.index')}}">Kategori</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pengaturan</a>
                            </li>
                        </ul>

                       <div class="d-none d-lg-block">
                        @auth
                            <div class="dropdown">
                                <button class="btn custom-btn dropdown-toggle d-flex align-items-center px-4 py-2 shadow" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi-person-circle me-2"></i>
                                    <span class="fw-bold text-white">{{ Auth::user()->name }}</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 mt-2" aria-labelledby="userDropdown">
                                    <li><a class="dropdown-item py-2 px-4" href="{{Route('home')}}"><i class="bi-house me-2"></i>Halaman Utama</a></li>
                                    <li><a class="dropdown-item py-2 px-4" href="#"><i class="bi-gear me-2"></i>Pengaturan Akun</a></li>
                                    <li><hr class="dropdown-divider mx-2"></li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item text-danger py-2 px-4">
                                                <i class="bi-box-arrow-right me-2"></i>Keluar
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @endauth
                    </div>
                    </div>
                </div>
            </nav>
<nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="{{Route('home')}}">
                        <i class="bi-back"></i>
                        <span>Topic</span>
                    </a>

                    <div class="d-lg-none ms-auto me-4">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">Browse Topics</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">How it works</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">FAQs</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Contact</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <li><a class="dropdown-item" href="topics-listing.html">Topics Listing</a></li>

                                    <li><a class="dropdown-item" href="contact.html">Contact Form</a></li>
                                </ul>
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
                                    @if(Auth::user()->role == 'admin')
                                    <li><a class="dropdown-item py-2 px-4" href="{{Route('dashboard.index')}}"><i class="bi-speedometer me-2"></i>Dashboard</a></li>
                                    @endif
                                    <li><a class="dropdown-item py-2 px-4" href="#"><i class="bi-gear me-2"></i>Pengaturan</a></li>
                                    <li><hr class="dropdown-divider mx-2"></li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item text-danger py-2 px-4 shadow-sm">
                                                <i class="bi-box-arrow-right me-2"></i>Keluar
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @else
                            <a href="{{ route('login') }}" class="btn custom-btn d-flex align-items-center px-4 py-2 shadow">
                                <i class="bi-person me-2"></i>
                                <span class="text-white">Masuk</span>
                            </a>
                        @endauth
                    </div>
                    </div>
                </div>
            </nav>
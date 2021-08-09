    <!--
Fixed Navigation
==================================== -->
    <header class="navigation fixed-top">
        <div class="container">
            <!-- main nav -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- logo -->
                <a class="navbar-brand logo" href="index.html">
                    <img class="logo-default" src="{{ asset('_template/images/logo  .png') }}" alt="logo" />
                    <img class="logo-white" src="{{ asset('_template/images/logo-white.png') }}" alt="logo" />
                </a>
                <!-- /logo -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('services') }}">Layanan</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a>
                        </li>
                        {{-- <li class="nav-item ">
                            <a class="nav-link" href="{{ route('team') }}">Tim</a>
                        </li> --}}
                        {{-- <li class="nav-item ">
                            <a class="nav-link" href="pricing.html">Pricing</a>
                        </li> --}}
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('contact') }}">Kontak</a>
                        </li>
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="404.html">404 Page</a>
                                <a class="dropdown-item" href="blog.html">Blog Page</a>
                                <a class="dropdown-item" href="single-post.html">Blog Single Page</a>
                            </div>
                        </li> --}}
                    </ul>
                </div>
            </nav>
            <!-- /main nav -->
        </div>
    </header>
    <!--
End Fixed Navigation
==================================== -->
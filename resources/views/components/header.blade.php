@php
    $formationsArr = \App\Models\Formation::all();
@endphp

<header class="header">
    <!-- header top -->
    <div class="header-top">
        <div class="container">
            <div class="header-top-wrap">
                <div class="header-top-left">
                    <div class="header-top-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="header-top-right">
                    <div class="header-top-contact">
                        <ul>
                            <li>
                                <a href="#"><i class="far fa-location-dot"></i> 03, Bismarck, Golf Gombe
                                    Kinshasa</a>
                            </li>
                            <li>
                                <a href="#"><i class="far fa-envelopes"></i> <span>info@mosala.site</span></a>
                            </li>
                            <li>
                                <a href="tel:+243 833 002 021"><i class="far fa-phone-volume"></i> +(243) 833 002 021</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navigation">
        <nav class="navbar navbar-expand-lg">
            <div class="container position-relative">
                <a class="navbar-brand" href="/">
                    <h1 class="logo"><i class="far fa-graduation-cap" style="color: #1877f2;"></i>mosala</h1>
                </a>
                <div class="mobile-menu-right">
                    <div class="search-btn">
                        <button type="button" class="nav-right-link search-box-outer"><i
                                class="far fa-search"></i></button>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="/">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url("/about") }}">A propos</a>
                        </li>

                        <li class="nav-item mega-menu dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Formations</a>
                            <div class="dropdown-menu fade-down">
                                <div class="mega-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12 col-sm-4 col-md-4">
                                                <div class="menu-about">
                                                    <a href="#" class="menu-about-logo">
                                                        <h1 class="logo-light"><i class="far fa-graduation-cap"
                                                                                  style="color: #5c9ef5;"></i>mosala</h1>
                                                    </a>
                                                    <p>Nous offrons une large gamme de formations couvrant divers
                                                        domaines. Notre mission est de fournir des
                                                        connaissances pratiques et adaptées aux besoins actuels,
                                                        afin d'accompagner chacun vers la réussite.</p>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-8 col-md-8">
                                                <ul class="mega-menu-item">
                                                    @foreach($formationsArr as $f)
                                                    <li><a class="dropdown-item" href="/course-details?slug={{$f->slug}}">{{$f->title}}</a></li>
                                                    <li>
                                                    @endforeach
                                                </ul>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Livres</a>
                        </li> -->
                        
                        <li class="nav-item"><a class="nav-link" href="{{url("/contact-us")}}">Contact</a></li>
                    </ul>
                    <div class="nav-right">
                        <div class="search-btn">
                            <button type="button" class="nav-right-link search-box-outer"><i
                                    class="far fa-search"></i></button>
                        </div>
                        <div class="nav-right-btn mt-2">
                            <a href="#" class="theme-btn"><span
                                    class="fal fa-user-plus"></span>S'inscrire</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

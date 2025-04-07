@extends("layouts.web")

@section("content")
    <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/students/page.avif)">
            <div class="container">
                <h2 class="breadcrumb-title">Nos Formations</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">Accueil</a></li>
                    <li class="active">Formations</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- course-area -->
        <div class="course-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="row">
                            <div class="row">
                                @foreach($formations as $f)
                                    <div class="col-md-6 col-lg-6">
                                        <div class="course-item wow fadeInUp" data-wow-delay=".75s">
                                            <div class="course-img">
                                                <span class="course-tag"><i class="far fa-bookmark"></i> {{ $f["domaine"] }}</span>
                                                <img src="{{ $f["media"] }}" alt="">
                                                <a href="/course-details?slot={{$f['slot']}}" class="btn"><i class="far fa-link"></i></a>
                                            </div>
                                            <div class="course-content">
                                                <div class="course-meta">
                                                    <span class="course-meta-left"><i class="far fa-book"></i> {{ $f["module"] }} Modules</span>
                                                    <div class="course-rating">

                                                    </div>
                                                </div>
                                                <h4 class="course-title">
                                                    <a href="{{ url("/course-details") }}">{{ $f["title"] }}</a>
                                                    {{--<a href="{{ $link }}">{{ $title }}</a>--}}
                                                </h4>
                                                {{--        <p class="course-text">{{ Str::limit($description, 50) }}</p>--}}
                                                <div class="course-bottom">
                                                    <div class="course-bottom-left">
                                                        <span><i class="far fa-calendar-clock"></i>{{ $f["date"] }}</span>
                                                        <span><i class="far fa-clock"></i>{{ $f["duree"] }}</span>
                                                    </div>
                                                    <span class="course-price">{{ $f["price"] }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- pagination -->
                        <div class="pagination-area">
                            <div aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><i class="far fa-arrow-left"></i></span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
{{--                                    <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true"><i class="far fa-arrow-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- pagination end -->
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="course-sidebar">
                            <div class="widget search">
                                <h5 class="widget-title">Recherche</h5>
                                <form class="search-form">
                                    <input type="text" class="form-control" placeholder="Recherchez ici...">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                            <div class="widget category">
                                <h4 class="widget-title">Domaines</h4>
                                <div class="category-list">
                                    <a href="#"><i class="far fa-long-arrow-right"></i>Affaires & Finances</a>
                                    <a href="#"><i class="far fa-long-arrow-right"></i>Nouvelles Technologies</a>
                                    <a href="#"><i class="far fa-long-arrow-right"></i>Informatique appliquée</a>
                                    <a href="#"><i class="far fa-long-arrow-right"></i>Réseau et télécommunication</a>
                                    <a href="#"><i class="far fa-long-arrow-right"></i>Art & Design</a>
                                    <a href="#"><i class="far fa-long-arrow-right"></i>Ressources humaines</a>
                                    <a href="#"><i class="far fa-long-arrow-right"></i>Domotique</a>
                                </div>
                            </div>
                            <div class="widget">
                                <h5 class="widget-title">Type de lieu</h5>
                                <form action="#">
                                    <select class="form-select" name="location">
                                        <option value="" selected hidden="">Choisir un lieu</option>
                                        <option value="1">En salle</option>
                                        <option value="2">En ligne</option>
                                    </select>
                                </form>
                            </div>
                            <div class="widget">
                                <h5 class="widget-title">Niveau de programme</h5>
                                <form action="#">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="program" value="1" id="level1" checked>
                                        <label class="form-check-label" for="level1">
                                            Avec Certification
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="program" value="2" id="level2">
                                        <label class="form-check-label" for="level2">
                                            Sans Certification
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- course-area end-->

    </main>
@endsection

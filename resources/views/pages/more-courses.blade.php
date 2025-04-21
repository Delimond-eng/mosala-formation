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
                        @forelse($formations as $f)
                        <div class="col-md-6 col-lg-6">
                            <div class="course-item wow fadeInUp" data-wow-delay=".75s">
                                <div class="course-img">
                                    <span class="course-tag"><i class="far fa-bookmark"></i> {{ $f->domaine->libelle }}</span>
                                    <img src="{{ $f->media }}" alt="">
                                    <a href="/course-details?slug={{$f->slug}}" class="btn"><i class="far fa-link"></i></a>
                                </div>
                                <div class="course-content">
                                    <div class="course-meta">
                                        <span class="course-meta-left"><i class="far fa-book"></i> {{ $f->module }} Modules</span>
                                        <div class="course-rating">
                                            <i class="far fa-clock-desk me-1"></i>Durée {{ $f->duree . ' ' . $f->duree_unite }}
                                        </div>
                                    </div>
                                    <h4 class="course-title">
                                        <a href="/course-details?slug={{$f->slug}}">{{ $f["title"] }}</a>
                                    </h4>
                                    <div class="course-bottom">
                                        @if($f->date)
                                        <div class="course-bottom-left">
                                            <span><i class="far fa-calendar-clock"></i>{{ $f->date }}</span>
                                            <span><i class="far fa-clock"></i>{{ $f->time }}</span>
                                        </div>
                                        @else
                                        <div class="course-bottom-left">
                                            <span>Formation en continue</span>
                                        </div>
                                        @endif
                                        <span class="course-price">{{ $f->price }} $</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-12">
                            <div class="alert alert-warning text-center">
                               <i class="fa fa-search"></i> Aucune formation disponible pour le moment.
                            </div>
                        </div>
                        @endforelse

                    </div>
                    <!-- pagination -->
                    <div class="pagination-area">
                        <div aria-label="Page navigation example">
                            {{ $formations->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                    <!-- pagination end -->
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="course-sidebar">
                        <div class="widget search">
                            <h5 class="widget-title">Recherche</h5>
                            <form action="{{ route('more-courses') }}" method="GET" class="search-form">
                                <input type="text" name="title" class="form-control" placeholder="Recherchez ici..." value="{{ request('title') }}">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget category">
                            <h4 class="widget-title">Domaines</h4>
                            <div class="category-list">
                                <a href="{{ route('more-courses')  }}">
                                    <i class="far fa-long-arrow-right"></i> Tout le domaine
                                </a>
                                @foreach($domaines as $d)
                                <a href="{{ route('more-courses', ['domaine' => $d->id]) }}">
                                    <i class="far fa-long-arrow-right"></i>{{ $d->libelle }}
                                </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title">Type de lieu</h5>
                            <form action="#">
                                <select class="form-select" name="location">
                                    <option value="" selected hidden="">Choisir un lieu</option>
                                    <option value="En salle & En ligne">En salle & En ligne</option>
                                    <option value="En salle">En salle</option>
                                    <option value="En ligne">En ligne</option>
                                </select>
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
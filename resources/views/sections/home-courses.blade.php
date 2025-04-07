<div class="course-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-graduation-cap"></i> Nos
                                formations</span>
                    <h2 class="site-title">Découvrez nos différentes
                        <span>formations</span>
                    </h2>
                    <p>Une large gamme de formations pour enrichir davantage votre expertise dans le monde
                        professionnel.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach(array_slice($formations, 0, 3) as $f)
                <div class="col-md-6 col-lg-4">
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
        <div class="d-flex justify-content-center align-items-center">
            <a href="{{ url('/more-courses') }}" class="theme-btn">Voir plus des formations<i class="fas fa-arrow-right-long"></i></a>
        </div>
    </div>
</div>

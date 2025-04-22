<div class="hero-section">
    <div class="hero-slider owl-carousel owl-theme">
        @foreach ($sliders as $slider)
        <div class="hero-single" style="background: url({{$slider->media}})">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-10">
                        <div class="hero-content">
                            <h6 class="hero-sub-title" data-animation="fadeInDown" data-delay=".25s">
                                <i class="far fa-graduation-cap"></i>Bievenue sur mosala!
                            </h6>
                            <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                {{ $slider->title }} <!-- <span>la TVA.</span> -->
                            </h1>
                            <p data-animation="fadeInLeft" data-delay=".75s">
                                {{ $slider->desc }}
                            </p>
                            <h5 data-animation="fadeInRight" data-delay="1s" class="text-white"><i class="far fa-calendar-clock me-1"></i>A partir du {{ $slider->datedebut->format("d/m") }} | <span class="text-warning">Formation en continue</span> </h5>

                            <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                <a href="/contact-us" class="theme-btn theme-btn2">En Savoir plus<i
                                        class="fas fa-arrow-right-long"></i></a>
                                <a href="/course-details?slug={{ $slider->formation->slug }}" class="theme-btn">S'Inscrire<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

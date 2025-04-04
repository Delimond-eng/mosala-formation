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
            @for($i=0; $i<3; $i++)
                <div class="col-md-6 col-lg-4">
                    <x-course-item
                        category="Finance"
                        image="assets/img/students/8.avif"
                        link="#"
                        lessons="10"
                        rating="4"
                        title="Syscohada informatisé "
                        description="Maitrisez la comptabilité informatisée"
                        date="07 avril"
                        duration="04 Jours"
                        price="100"
                    />
                </div>
            @endfor
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <a href="{{ url('/more-courses') }}" class="theme-btn">Voir plus des formations<i class="fas fa-arrow-right-long"></i></a>
        </div>
    </div>
</div>

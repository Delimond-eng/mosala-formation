@extends("layouts.web")


@section("content")
    <main class="main">

    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url(assets/img/students/page.avif)">
        <div class="container">
            <h2 class="breadcrumb-title">Nous Contacter</h2>
            <ul class="breadcrumb-menu">
                <li><a href="/">Accueil</a></li>
                <li class="active">Contact</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!-- contact area -->
    <div class="contact-area py-120">
        <div class="container">
            <div class="contact-content">
                <div class="row">
                    <div class="col-md-3">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-map-location-dot"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Adresse</h5>
                                <p>03, Av. Bismarck, Q.Golf C.Gombe. Ref: Immeuble Startup. Kinshasa</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-phone-volume"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Nous appeller au</h5>
                                <p>+(243) 833 002 021</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-envelopes"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Nous écrire </h5>
                                <p><a href="">contact@mosala.site</a></p>
                                <p><a href="">info@mosala.site</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-alarm-clock"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Heure ouvrable</h5>
                                <p>Lundi - Vendredi (08:30' - 16h30')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-img">
                            <img src="{{ asset('assets/img/students/9.jpg') }}" style="object-fit: cover" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 align-self-center">
                        <div class="contact-form">
                            <div class="contact-form-header">
                                <h2>Laissez nous votre message</h2>
                                <p>Veuillez nous écrire pour avoir plus des détails sur nos activités </p>
                            </div>
                            <form method="post" id="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name"
                                                   placeholder="Nom complet" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email"
                                                   placeholder="Email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject"
                                           placeholder="Objet" required>
                                </div>
                                <div class="form-group">
                                        <textarea name="message" cols="30" rows="5" class="form-control"
                                                  placeholder="Ecrire un message"></textarea>
                                </div>
                                <button type="submit" class="theme-btn">Envoyer
                                    Message <i class="far fa-paper-plane"></i></button>
                                <div class="col-md-12 mt-3">
                                    <div class="form-messege text-success"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact area -->

    <!-- map -->
    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96708.34194156103!2d-74.03927096447748!3d40.759040329405195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4a01c8df6fb3cb8!2sSolomon%20R.%20Guggenheim%20Museum!5e0!3m2!1sen!2sbd!4v1619410634508!5m2!1sen!2s"
                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

</main>
@endsection

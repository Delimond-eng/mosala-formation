@extends("layouts.web")


@section("content")
<main class="main">
    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url(assets/img/students/page.avif)">
        <div class="container">
            <h2 class="breadcrumb-title">{{$formation->title}}</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index-2.html">Accueil</a></li>
                <li class="active">{{$formation->title}}</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!-- course-single -->
    <div class="course-single-area py-120">
        <div class="container">
            <div class="course-single-wrapper">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="course-single-sidebar">
                            <div class="widget">
                                <h4 class="widget-title">Formation info détaillée</h4>
                                <div class="course-single-info">
                                    <div class="single-info author">
                                        <div class="author-img">
                                            <img src="{{ !empty($formation->formateur->photo) ? $formation->formateur->photo : asset("assets/img/avatar.png") }}" alt="#">
                                        </div>
                                        <div class="single-info-content">
                                            <h4>Formateur</h4>
                                            <span>{{$formation->formateur->name . ' '.$formation->formateur->nickname}}</span>
                                        </div>
                                    </div>
                                    <div class="single-info category">
                                        <i class="far fa-bolt"></i>
                                        <div class="single-info-content">
                                            <h4>Domaine</h4>
                                            <span>{{$formation->domaine->libelle}}</span>
                                        </div>
                                    </div>
                                    <!-- <div class="single-info s-enroll">
                                            <i class="far fa-users"></i>
                                            <div class="single-info-content">
                                                <h4>Participants inscrits</h4>
                                                <span>50 Participants</span>
                                            </div>
                                        </div> -->
                                    <div class="single-info rattings">
                                        <i class="far fa-clock"></i>
                                        <div class="single-info-content">
                                            <h4>Durée de la formation</h4>
                                            <span>{{$formation->duree .''.$formation->duree_unite}}</span>
                                        </div>
                                    </div>
                                    <div class="single-info rattings">
                                        <i class="far fa-dollar"></i>
                                        <div class="single-info-content">
                                            <h4>Frais de participation</h4>
                                            <span>{{$formation->price}}$</span>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="theme-btn">S'Inscrire maintenant<i class="fas fa-arrow-right-long"></i></a>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Cours Spécificités</h4>
                                <div class="course-feature-list">
                                    <a href="#"><i class="far fa-book-open"></i> Modules <span>{{$formation->module}}</span></a>
                                    <a href="#"><i class="far fa-pencil"></i> Quizes <span>{{ $formation->quize }}</span></a>
                                    <a href="#"><i class="far fa-clock"></i> Durée <span>{{$formation->duree}} {{$formation->duree_unite}}</span></a>
                                    <a href="#"><i class="far fa-globe"></i> Langue <span>{{$formation->lang}}</span></a>
                                    <a href="#"><i class="far fa-location-dot"></i> Lieu <span>{{ $formation->place }}</span></a>

                                    <a href="#"><i class="far fa-graduation-cap"></i> Certificat
                                        <span>Oui</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="course-details">
                            <div class="course-details-img mb-30">
                                <img src="{{$formation->media}}" alt="thumb">
                                <a class="play-btn popup-youtube" href="{{ $formation->spotlink }}">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                            <div class="course-details">
                                <h3 class="mb-20">{{$formation->title}}</h3>
                                <p class="mb-20">
                                    {{$formation->description}}
                                </p>

                                <div class="my-4">
                                    <div class="mb-3">
                                        <h3 class="mb-3">Inscrivez vous dès maintenant</h3>
                                        <p class="mb-20">
                                            Veuillez vous inscrire pour ne rien manquer.
                                        </p>
                                    </div>
                                </div>

                                <div class="contact-form mt-0 my-0 p-0">
                                    {{-- Succès --}}
                                    @if(session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif

                                    {{-- Erreur générale --}}
                                    @if(session('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ session('error') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif

                                    {{-- Erreurs de validation --}}
                                    @if ($errors->any())
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif
                                    <form method="post" method="post" action="{{ route('souscrire') }}">
                                        @csrf
                                        <input type="text" name="formation_id" value="{{ $formation->id }}" hidden>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="fullname"
                                                        placeholder="Votre nom complet." required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="tel" class="form-control" name="phone"
                                                        placeholder="Téléphone" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="Votre email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="pays" class="form-control">
                                                        <option value="RDC">Rép. Dém. du Congo</option>
                                                        <option value="Congo Brazza">République du Congo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="ville"
                                                        placeholder="Ville..." required>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="theme-btn">M'Inscrire <i class="far fa-user-plus"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- course-single end-->
</main>
@endsection
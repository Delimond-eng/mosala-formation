<div class="enroll-area pt-80 pb-80">
    <div class="container">
        <div class="col-lg-12">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="enroll-left wow fadeInLeft" data-wow-delay=".25s">
                        <div class="enroll-form">
                            <div class="enroll-form-header">
                                <h3>Inscription</h3>
                                <p>Inscrivez-vous à la formation de votre choix.</p>
                            </div>

                            <form method="post" method="post" action="{{ route('souscrire') }}">
                                @csrf
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
                                <div class="form-group">
                                    <input type="text" name="fullname" class="form-control" placeholder="Nom complet">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control"
                                           placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="phone" class="form-control"
                                           placeholder="+24381000000">
                                </div>
                                <div class="form-group">
                                    <select class="form-select" name="formation_id">
                                        <option value="" selected hidden="">Choisir une formation</option>
                                        @foreach($formations as $f)
                                            <option value="{{$f->id}}">{{$f->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="pays" class="form-control">
                                        <option value="RDC">Rép. Dém. du Congo</option>
                                        <option value="Congo Brazza">République du Congo</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="ville" class="form-control" placeholder="ex:Kinshasa" value="Kinshasa">
                                </div>
                                <button class="theme-btn" type="submit">S'Inscrire<i
                                        class="fas fa-arrow-right-long"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="enroll-right wow fadeInUp" data-wow-delay=".25s">
                        <div class="skill-content">
                            <div class="site-heading mb-3">
                                        <span class="site-title-tagline"><i class="far fa-user-plus"></i>Inscription
                                            rapide</span>
                                <h2 class="site-title text-white">
                                    Explorez vos differents <span>Centre d'Intêret</span>
                                </h2>
                            </div>
                            <p class="text-white">
                                Inscrivez-vous dès maintenant et choisissez la formation qui vous convient pour
                                enrichir vos connaissances et booster votre carrière.
                            </p>
                            <div class="skills-section">
                                <div class="progress-box">
                                    <h5>Etudiants inscrits <span class="pull-right">85%</span></h5>
                                    <div class="progress" data-value="85">
                                        <div class="progress-bar" role="progressbar"></div>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <h5>Formateurs passionnés<span class="pull-right">65%</span></h5>
                                    <div class="progress" data-value="65">
                                        <div class="progress-bar" role="progressbar"></div>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <h5>Formations disponibles <span class="pull-right">75%</span></h5>
                                    <div class="progress" data-value="75">
                                        <div class="progress-bar" role="progressbar"></div>
                                    </div>
                                </div>
                            </div>
                            <a href="/contact-us" class="theme-btn mt-5">En savoir plus<i
                                    class="fas fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

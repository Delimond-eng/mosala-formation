@extends('layouts.admin')

@section('content')
<div class="page-content">
    
    <div class="container-xxl">
        <div class="card position-relative">
            <div class="card-body d-flex justify-content-between p-3">
                <h2>Liste des formations</h2>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add-formation"> <i class="fa fa-plus me-1"></i> Nouvelle formation </button>
            </div>
        </div>
        <div class="row">
            @forelse ($formations as $fo)
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="">
                                <img src="{{ $fo->media }}" alt="" class="img-fluid rounded">
                                <div class="mt-3">
                                    <span class="badge bg-purple-subtle text-purple px-2 py-1 fw-semibold ">{{ $fo->domaine->libelle }}</span> |
                                    <p class="mb-0 text-muted fs-12 d-inline-block">{{ $fo->created_at->format("d/m/y") }}</p>
                                </div>
                                <a href="#" class="d-block fs-18 fw-medium text-body my-2 text-truncate">{{ $fo->title }}</a>
                                <p class="text-muted text-truncate">{{ $fo->description }}</p>
                                <hr class="hr-dashed">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset('admin/images/users/avatar-8.jpg') }}" alt="" class="thumb-md rounded-circle">
                                        </div>
                                        <div class="flex-grow-1 ms-2 text-truncate text-start">
                                            <h6 class="m-0 text-dark">{{ $fo->user->name}}</h6>
                                            <p class="mb-0 text-muted"><a href="#">{{ $fo->user->role}}</a></p>
                                        </div><!--end media-body-->
                                    </div>
                                    <div class="align-self-center">
                                        <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fa fa-pencil-alt"></i></button>
                                        <form action="{{ route('delete', ['table' => 'formations', 'val' => $fo->id]) }}" method="GET" style="display: inline;" class="delete-form">
                                            <button type="button" class="btn btn-outline-danger btn-sm delete-btn">
                                                <i class="fa fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div><!--end blog-card-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div>
            @empty
                <div class="col-12 text-center">
                    <h2 class="text-muted fw-light">Aucune formation disponible pour le moment.</h2>
                </div>
            @endforelse
            <div class="col-md-12">
                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-2">
                    {{ $formations->links('pagination::bootstrap-5') }}
                </div>
            </div>

        </div><!--end row-->
    </div><!-- container -->

    <!--Start Footer-->

    @include("components.admin.footer")

    <!--end footer-->
</div>


<div class="modal fade" id="modal-add-formation" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-modal="true">
    <div class="modal-dialog modal-xl" role="document">
        <form id="form" class="modal-content" method="post" action="{{ route("admin.formation.create") }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h6 class="modal-title m-0" id="myExtraLargeModalLabel">Création de la nouvelle formation</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body">
                <div class="row g-2">
                    <div class="col-md-4">
                        <div class="h-100 w-100 border-dashed border-2 border-secondary rounded d-flex justify-content-center align-items-center p-3"
                            id="media-preview" style="background-size: cover; background-position: center; position: relative;">
                            <button type="button" class="btn btn-light" id="btn-upload" style="z-index: 2;">Charger une image</button>
                            <input type="file" name="media" id="mediaInput" accept="image/*" style="display: none;">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="form-group col-12">
                                <label class="form-label">Titre de la formation <sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="Entrer un titre" required>
                            </div><!--end form-group-->
                            <div class="form-group col-12">
                                <label class="form-label mt-2" for="pro-message">Déscription <sup class="text-danger">*</sup></label>
                                <textarea class="form-control" rows="5" name="description" placeholder="Déscrit de manière explicite la formation" required></textarea>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 col-xl-3  mb-2 mb-lg-1">
                                <label class="form-label mt-2" for="pro-start-date">Frais de participation <sup class="text-danger">*</sup></label>
                                <input type="number" class="form-control" name="price" placeholder="0,00$" required>
                            </div><!--end col-->
                            <div class="col-12 col-md-6 col-lg-6 col-xl-3  mb-2 mb-lg-1">
                                <label class="form-label mt-2" for="pro-end-date">NBRE Module<sup class="text-danger">(optionnel)</sup></label>
                                <input type="text" class="form-control" name="module" placeholder="ex: 10">
                            </div><!--end col-->
                            <div class="col-12 col-md-6 col-lg-6 col-xl-3  mb-2 mb-lg-1">
                                <label class="form-label mt-2" for="pro-rate">Date<sup class="text-danger">(optionnel)</sup></label>
                                <input type="date" class="form-control" name="date" id="date">
                            </div><!--end col-->
                            <div class="col-12 col-md-6 col-lg-6 col-xl-3  mb-2 mb-lg-1">
                                <label class="form-label mt-2" for="pro-rate">Heure<sup class="text-danger">(optionnel)</sup></label>
                                <input type="time" class="form-control" name="time" id="time">
                            </div><!--end col-->
                        </div>
                    </div>
                    <div class="col-lg-3 mb-2 mb-lg-1">
                        <label class="form-label mt-2">Durée par session <sup class="text-danger">*</sup></label>
                        <div class="d-flex">
                            <input type="number" class="form-control me-1 flex-fill" name="duree" id="duree" placeholder="ex:10" required>
                            <select class="form-select" name="duree_unite" style="width: 100px;">
                                <option value="jours">Jours</option>
                                <option value="mois">Mois</option>
                            </select>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-3 col-6">
                        <label class="form-label mt-2">Type de diffusion <sup class="text-danger">(optionnel)</sup></label>
                        <select class="form-select" name="place">
                            <option value="En ligne & En salle">En ligne & En salle</option>
                            <option value="En ligne">En ligne</option>
                            <option value="En salle">En salle</option>
                        </select>
                    </div><!--end col-->
                    <div class="col-lg-3 col-6">
                        <label class="form-label mt-2">Langue <sup class="text-danger">(optionnel)</sup></label>
                        <select class="form-select" name="lang">
                            <option value="Français">Français</option>
                            <option value="Anglais">Anglais</option>
                        </select>
                    </div><!--end col-->
                    <div class="form-group col-lg-3 col-12">
                        <label class="form-label mt-2" for="pro-message">Lien spot youtube <sup class="text-danger">(optionnel)</sup></label>
                        <input type="text" name="spotlink" class="form-control" placeholder="https://www.youtube.com/shared...">
                    </div>
                    <div class="form-group col-lg-2 col-6">
                        <label class="form-label mt-2" for="pro-message">Quizes <sup class="text-danger">*</sup></label>
                        <input type="number" name="quize" class="form-control" placeholder="ex:10">
                    </div>
                    <div class="col-lg-5 col-6">
                        <label class="form-label mt-2">Domaine <sup class="text-danger">*</sup></label>
                        <select class="form-select" name="domaine_id">
                            <option hidden selected>--Sélectionnez un domaine--</option>
                            @foreach ($domaines as $d)
                            <option value="{{ $d->id }}">{{ $d->libelle }}</option>
                            @endforeach
                        </select>
                    </div><!--end col-->
                    <div class="col-lg-5 col-6">
                        <label class="form-label mt-2">Formateur <sup class="text-danger">*</sup></label>
                        <select class="form-select" name="formateur_id">
                            <option hidden selected>--Sélectionnez un formateur--</option>
                            @foreach ($formateurs as $f)
                            <option value="{{ $f->id }}">{{ $f->name }} {{ $f->nickname }}</option>
                            @endforeach
                        </select>
                    </div><!--end col-->
                    <!--end form-group-->
                </div><!--end modal-body-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary btn-sm">Sauvegarder</button>
                </div><!--end modal-footer-->
            </div><!--end modal-content-->
        </form><!--end modal-dialog-->
    </div>
</div>
@endsection

@push("scripts")
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const mediaInput = document.getElementById("mediaInput");
            const uploadBtn = document.getElementById("btn-upload");
            const previewDiv = document.getElementById("media-preview");
            const modalEl = document.getElementById('modal-add-formation');
            const form = document.getElementById("form");

            modalEl.addEventListener('show.bs.modal', function() {
                previewDiv.style.backgroundImage = 'none';
            });

            // Ouvre le sélecteur de fichier
            uploadBtn.addEventListener("click", function(e) {
                mediaInput.click();
            });

            // Gère le chargement et l'affichage de l'image
            mediaInput.addEventListener("change", function() {
                const file = this.files[0];
                if (file && file.type.startsWith("image/")) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        previewDiv.style.backgroundImage = `url('${e.target.result}')`;
                    };

                    reader.readAsDataURL(file);
                } else {
                    previewDiv.style.backgroundImage = 'none';
                    alert("Le fichier sélectionné n'est pas une image valide.");
                }
            });
        
        });
    </script>
@endpush
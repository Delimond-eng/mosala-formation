@extends("layouts.admin")


@section("content")
<!-- Page Content-->
<div class="page-content">
    <div class="container-xxl">
        @if(session('error'))
        <div class="alert alert-dark alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

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
        <div class="row">
        @foreach ($sliders as $s)
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-5 offset-lg-1 align-self-center">
                                <div class="p-3">
                                    <h1 class="my-4 font-weight-bold">{{ $s->title }}</h1>
                                    <p class="fs-14 text-muted">{{ $s->desc }}
                                    </p>
                                    <button type="button" class="btn btn-outline-primary btn-sm me-1"><i class="fa fa-pencil-alt"></i></button>
                                    <form action="{{ route('delete', ['table' => 'sliders', 'val' => $s->id]) }}" method="GET" style="display: inline;" class="delete-form">
                                        <button type="button" class="btn btn-outline-secondary btn-sm delete-btn">
                                            <i class="fa fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-5 offset-lg-1 text-center">

                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ $s->media }}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ $s->media }}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ $s->media }}" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
            @endforeach
        </div><!--end row-->
    </div><!-- container -->
    <!--Start Rightbar-->
    <!--Start Footer-->

    @include("components.admin.footer")

    <!--end footer-->
</div>
<!-- end page content -->

<div class="modal fade" id="modal-add-slider" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-modal="true">
    <div class="modal-dialog modal-xl" role="document">
        <form id="form" class="modal-content" method="post" action="{{ route("admin.slider.create") }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h6 class="modal-title m-0" id="myExtraLargeModalLabel">Création de slider show</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body">
                <div class="row g-2">
                    <div class="col-md-5">
                        <div class="h-100 w-100 border-dashed border-2 border-secondary rounded d-flex justify-content-center align-items-center p-3"
                            id="media-preview" style="background-size: cover; background-position: center; position: relative;">
                            <button type="button" class="btn btn-light" id="btn-upload" style="z-index: 2;">Charger une image</button>
                            <input type="file" name="media" id="mediaInput" accept="image/*" style="display: none;">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="row">
                            <div class="form-group col-12">
                                <label class="form-label">Titre publicitaire du slider<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="Entrer un titre" required>
                            </div><!--end form-group-->
                            <div class="form-group col-12">
                                <label class="form-label mt-2" for="pro-message">Brève déscription <sup class="text-danger">*</sup></label>
                                <textarea class="form-control" rows="5" name="desc" placeholder="Déscrit de manière brève la formation" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-lg-4 mb-2">
                        <label class="form-label">Date du début de la formation<sup class="text-danger">*</sup></label>
                        <input type="date" class="form-control" name="datedebut" required>
                    </div>
                    <div class="form-group col-lg-8 mb-2">
                        <label class="form-label">Formation concernée<sup class="text-danger">*</sup></label>
                        <select name="formation_id" class="form-select">
                            <option hidden selected>--Sélectionnez une formation--</option>
                            @foreach ($formations as $f)
                            <option value="{{ $f->id }}">{{ $f->title }}</option>
                            @endforeach
                        </select>
                    </div>
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

<button class="btn-add" data-bs-toggle="modal" data-bs-target="#modal-add-slider"><i class="fa fa-plus"></i></button>
@endsection
@push("styles")
<style>
    .btn-add {
        height: 60px;
        width: 60px;
        border-radius: 100%;
        border: none;
        color: #fff;
        background-color: #000;
        z-index: 999;
        position: fixed;
        bottom: 20px;
        right: 20px;
        transition: ease-in .5s;
    }

    .btn-add:hover {
        background-color: rgb(73, 61, 176) !important;
    }
</style>
@endpush
@push("scripts")
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const mediaInput = document.getElementById("mediaInput");
        const uploadBtn = document.getElementById("btn-upload");
        const previewDiv = document.getElementById("media-preview");
        const modalEl = document.getElementById('modal-add-slider');

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
@extends('layouts.admin')

@section('content')
<div class="page-content">

    <div class="container-xxl">

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Liste des domaines</h4>
                            </div><!--end col-->
                        </div> <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Libellé</th>
                                        <th>Description</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($domaines as $d)
                                    <tr>
                                        <td>
                                            {{ $d->libelle }}
                                        </td>
                                        <td>{{ $d->description }}</td>
                                        <td>
                                            <button id="btn-edit" class="btn btn-outline-info btn-sm me-1 shadow-none rounded-pill me-1"><i class="fa fa-pencil-alt"></i></button>
                                            <form action="{{ route('delete', ['table' => 'domaines', 'val' => $d->id]) }}" method="GET" style="display: inline;" class="delete-form">
                                                <button type="button" class="btn btn-outline-danger btn-sm me-1 shadow-none rounded-pill delete-btn">
                                                    <i class="fa fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div><!--end table-responsive-->
                    </div><!--end card-body-->
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Création d'un utilisateur</h4>
                            </div><!--end col-->
                        </div> <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body pt-0">
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
                            <div class="d-inline-flex justify-content-center align-items-center thumb-xxs bg-success rounded-circle mx-auto me-1">
                                <i class="fas fa-check-double align-self-center mb-0 text-white "></i>
                            </div>
                            <strong>Succès !</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show  border-start border-danger mb-0" role="alert">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 ms-2 text-truncate">
                                    <h5 class="mb-1 fw-bold mt-0 text-danger">Erreurs </h5>
                                    @foreach ($errors->all() as $error)
                                    <p class="mb-0">{{ $error }}</p>
                                    @endforeach
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div><!--end media-body-->
                            </div>
                        </div>
                        @endif
                        <form class="form" method="post" action="{{ route("admin.domaine.create") }}">
                            @csrf
                            <input type="text" name="domaine_id" hidden>
                            <div class="mb-2">
                                <label for="username" class="form-label">Libellé</label>
                                <input class="form-control border-dark" type="text" name="libelle" placeholder="Ex: Informatique">
                            </div>
                            <div class="mb-2">
                                <label for="email" class="form-label">Description</label>
                                <textarea name="description" class="form-control" placeholder="Entrer une description"></textarea>
                            </div>
                            <button type="submit" id="btn-submit" class="btn btn-primary">Créer</button>
                            <button type="button" class="btn btn-dark" id="btn-cancel">Annuler</button>
                        </form><!--end form-->
                    </div><!--end card-body-->
                </div>
            </div>
        </div> <!-- end row -->
    </div><!-- container -->

    <!--Start Footer-->

    @include("components.admin.footer")

    <!--end footer-->
</div>
@endsection

@push("scripts")
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const editButtons = document.querySelectorAll('#btn-edit');
        const form = document.querySelector('.form');
        const btnSubmit = document.getElementById('btn-submit');
        const btnCancel = document.getElementById('btn-cancel');

        function resetForm() {
            form.reset(); // réinitialise tous les champs
            form.querySelector('input[name="domaine_id"]').value = ''; // vide le champ caché user_id
            btnSubmit.textContent = 'Créer';
        }

        editButtons.forEach((button, index) => {
            button.addEventListener('click', function() {
                const row = this.closest('tr');
                const libelle = row.querySelector('td:nth-child(1)').innerText.trim();
                const description = row.querySelector('td:nth-child(2)').innerText.trim();
                let domaines = <?= json_encode($domaines) ?>;
                const domaineId = domaines[index].id;

                form.querySelector('input[name="libelle"]').value = libelle;
            form.querySelector('textarea[name="description"]').value = description ?? '';
                form.querySelector('input[name="domaine_id"]').value = domaineId
                btnSubmit.textContent = 'Mettre à jour';
            });
        });

        btnCancel.addEventListener('click', function() {
            resetForm();
        });
    });
</script>
@endpush
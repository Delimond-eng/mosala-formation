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
                                <h4 class="card-title">Liste des utilisateurs</h4>
                            </div><!--end col-->
                        </div> <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Nom d'utilisateur</th>
                                        <th>Email</th>
                                        <th>Rôle</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            <img src="{{ asset("assets/img/avatar.png") }}" alt="" class="thumb-sm rounded me-2 d-inline-block">
                                            {{ $user->name }}
                                        </td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>
                                            <button id="btn-edit" class="btn btn-outline-info btn-sm me-1 shadow-none rounded-pill"><i class="fa fa-pencil-alt"></i></button>
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
                        <form class="form" method="post" action="{{ route("admin.user.create") }}">
                            @csrf
                            <input type="text" name="user_id" hidden>
                            <div class="mb-2">
                                <label for="username" class="form-label">Nom d'utilisateur</label>
                                <input class="form-control border-dark" type="text" name="name" placeholder="Ex: Bill Joe">
                            </div>
                            <div class="mb-2">
                                <label for="username" class="form-label">Adresse Email</label>
                                <input class="form-control border-dark" type="text" name="email" placeholder="ex: billjoe@domain">
                            </div>
                            <div class="mb-2">
                                <label for="username" class="form-label">Mot de passe</label>
                                <input class="form-control border-dark" type="password" name="password" placeholder="***************">
                            </div>
                            <div class="mb-2">
                                <label for="email" class="form-label">Role</label>
                                <select name="role" class="form-select border-dark">
                                    <option value="ADMIN">Administrateur</option>
                                </select>
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
            form.querySelector('input[name="user_id"]').value = ''; // vide le champ caché user_id
            btnSubmit.textContent = 'Créer';
        }

        editButtons.forEach((button, index) => {
            button.addEventListener('click', function() {
                const row = this.closest('tr');
                const name = row.querySelector('td:nth-child(1)').innerText.trim();
                const email = row.querySelector('td:nth-child(2)').innerText.trim();
                const role = row.querySelector('td:nth-child(3)').innerText.trim();
                let users = <?= json_encode($users) ?>;
                const userId = users[index].id;

                form.querySelector('input[name="name"]').value = name;
                form.querySelector('input[name="email"]').value = email;
                form.querySelector('input[name="password"]').value = '';
                form.querySelector('select[name="role"]').value = role;
                form.querySelector('input[name="user_id"]').value = userId;
                btnSubmit.textContent = 'Mettre à jour';
            });
        });

        btnCancel.addEventListener('click', function() {
            resetForm();
        });
    });
</script>
@endpush
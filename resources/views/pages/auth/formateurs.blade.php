@extends('layouts.admin')

@section('content')
<div class="page-content">
    <div class="container-xxl">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Liste des formateurs</h4>
                            </div><!--end col-->
                            <div class="col-auto">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add-teacher"><i class="fas fa-plus me-1"></i>Nouveau formateurs</button>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table mb-0" id="datatable_1">
                                <thead class="table-light">
                                    <tr>
                                        <th>Nom complet & email</th>
                                        <th>Téléphone</th>
                                        <th>Genre</th>
                                        <th>Créer par</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($formateurs as $f)
                                    <tr>
                                        <td class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <img src="{{!empty($f->photo)  ? $f->photo : asset("assets/img/avatar.png")}}" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                <div class="flex-grow-1 text-tr uncate">
                                                    <h6 class="m-0">{{ $f->name .' '.$f->nickname }}</h6>
                                                    <a href="#" class="fs-12 text-primary">{{ $f->email }}</a>
                                                </div><!--end media body-->
                                            </div>
                                        </td>

                                        <td>{{ $f->phone }}</td>
                                        <td>{{ $f->gender }}</td>
                                        <td>{{ $f->user->name }}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fa fa-pencil-alt"></i></button>
                                                <form action="{{ route('delete', ['table' => 'formateurs', 'val' => $f->id]) }}" method="GET" style="display: inline;" class="delete-form">
                                                    <button type="button" class="btn btn-outline-secondary btn-sm delete-btn">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div><!-- container -->


    <!--Start Rightbar-->
    <!--end Rightbar-->
    <!--Start Footer-->

    @include("components.admin.footer")
    <!--end footer-->
</div>


<div class="modal fade" id="modal-add-teacher" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-modal="true">
    <div class="modal-dialog modal-lg" role="document">
        <form class="modal-content" method="post" action="{{ route("admin.formateur.create") }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h6 class="modal-title m-0" id="myExtraLargeModalLabel">Création d'un formateur</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body">
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
                <div class="form-group mb-2 mb-lg-1">
                    <label for="projectName" class="form-label">Photo(Optionnel)</label>
                    <input type="file" class="form-control" name="photo">
                </div><!--end form-group-->
                <div class="row">
                    <div class="form-group mb-2 mb-lg-1 col-md-6">
                        <label for="projectName" class="form-label">Nom :</label>
                        <input type="text" class="form-control" id="projectName" name="name" aria-describedby="emailHelp" placeholder="ex: Obumue">
                    </div>
                    <div class="form-group mb-2 mb-lg-1 col-md-6">
                        <label for="projectName" class="form-label">Prenom :</label>
                        <input type="text" class="form-control" id="projectName" name="nickname" aria-describedby="emailHelp" placeholder="ex: Patrick">
                    </div>
                </div><!--end form-group-->
                <div class="form-group mb-2 mb-lg-1">
                    <label for="projectName" class="form-label">Téléphone (Optionnel)</label>
                    <input type="text" class="form-control" id="projectName" name="phone" aria-describedby="emailHelp" placeholder="ex: +2438100000">
                </div><!--end form-group-->
                <div class="form-group mb-2 mb-lg-1">
                    <label for="projectName" class="form-label">Email (Optionnel)</label>
                    <input type="email" class="form-control" id="projectName" name="email" aria-describedby="emailHelp" placeholder="ex: patrickobumue@domain">
                </div><!--end form-group-->
                <div class="form-group mb-lg-1 mt-2">
                    <label class="form-label me-2 mb-0">Genre : </label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Homme">
                        <label class="form-check-label" for="inlineRadio1">Homme</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" name="gender" type="radio" id="inlineRadio2" value="Femme">
                        <label class="form-check-label" for="inlineRadio2">Femme</label>
                    </div>
                </div><!--end form-group-->
            </div><!--end modal-body-->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary btn-sm">Sauvegarder</button>
            </div><!--end modal-footer-->
        </form><!--end modal-content-->
    </div><!--end modal-dialog-->
</div>
@endsection
@push("scripts")
<script src="{{ asset('admin/libs/simple-datatables/umd/simple-datatables.js') }}"></script>
<script src="{{ asset('admin/js/pages/datatable.init.js') }}"></script>
<script src="{{ asset('admin/js/app.js') }}"></script>
@endpush
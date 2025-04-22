@extends("layouts.admin")

@section("content")
<div class="page-content">
    <div class="container-xxl">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Liste des candidats inscrits</h4>
                            </div><!--end col-->
                            <div class="col-auto">
                                <form class="row g-2">
                                    <div class="col-auto">
                                        <a class="btn bg-primary-subtle text-primary dropdown-toggle d-flex align-items-center arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" data-bs-auto-close="outside">
                                            <i class="iconoir-filter-alt me-1"></i> Filter
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-start">
                                            <div class="p-2">
                                                <div class="form-check mb-2">
                                                    <input type="checkbox" class="form-check-input" checked id="filter-all">
                                                    <label class="form-check-label" for="filter-all">
                                                        All
                                                    </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input type="checkbox" class="form-check-input" checked id="filter-one">
                                                    <label class="form-check-label" for="filter-one">
                                                        New
                                                    </label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input type="checkbox" class="form-check-input" checked id="filter-two">
                                                    <label class="form-check-label" for="filter-two">
                                                        Active
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" checked id="filter-three">
                                                    <label class="form-check-label" for="filter-three">
                                                        Inactive
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-auto">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addBoard"><i class="fa-solid fa-plus me-1"></i>Nouveau inscrit</button>
                                    </div><!--end col-->
                                </form>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body pt-0">

                        <div class="table-responsive">
                            <table class="table mb-0 checkbox-all" id="datatable_1">
                                <thead class="table-light">
                                    <tr>
                                        <th style="width: 16px;">
                                            <div class="form-check mb-0 ms-n1">
                                                <input type="checkbox" class="form-check-input" name="select-all" id="select-all">
                                            </div>
                                        </th>
                                        <th class="ps-0">Nom complet</th>
                                        <th>Email</th>
                                        <th>Téléphone</th>
                                        <th>Pays</th>
                                        <th>Ville</th>
                                        <th>Formation</th>
                                        <th>Paiement</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subscriptions as $sub)
                                    <tr>
                                        <td style="width: 16px;">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="check" id="customCheck1">
                                            </div>
                                        </td>
                                        <td class="ps-0">
                                            <img src="{{ asset('assets/img/avatar.png') }}" alt="" class="thumb-md d-inline rounded-circle me-1">
                                            <p class="d-inline-block align-middle mb-0">
                                                <span class="font-13 fw-medium">{{ $sub->fullname }}</span>
                                            </p>
                                        </td>
                                        <td><a href="#" class="d-inline-block align-middle mb-0 text-body">{{ $sub->email }}</a> </td>
                                        <td>{{ $sub->phone }}</td>
                                        <td>{{ $sub->pays }}</td>
                                        <td>{{ $sub->ville }}</td>
                                        <td class="text-truncate">{{ substr($sub->formation->title,0, 20) }}...</td>
                                        <td>{{ $sub->paiement }}$</td>
                                        <td class="text-end">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fa fa-pencil-alt"></i></button>
                                                <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fa fa-trash-alt"></i></button>
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
        </div> <!-- end row -->
    </div><!-- container -->

    @include("components.admin.footer")
    <!--end footer-->
</div>
@endsection

@push("scripts")
<script src="{{ asset('admin/libs/simple-datatables/umd/simple-datatables.js') }}"></script>
<script src="{{ asset('admin/js/pages/datatable.init.js') }}"></script>
<script src="{{ asset('admin/js/app.js') }}"></script>
@endpush
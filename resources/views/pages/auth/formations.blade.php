@extends('layouts.admin')

@section('content')
<div class="page-content">
    <div class="container-xxl">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body d-flex justify-content-between">
                        <h2>Liste des formations</h2>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add-formation"> <i class="fa fa-plus me-1"></i> Nouvelle formation </button>
                    </div>
                </div>
            </div>
            @for ($i=0; $i<6; $i++)
            <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="">
                        <img src="{{ asset('admin/images/extra/card/img-1.jpg') }}" alt="" class="img-fluid rounded">
                        <div class="mt-3">
                            <span class="badge bg-purple-subtle text-purple px-2 py-1 fw-semibold ">Finance</span> |
                            <p class="mb-0 text-muted fs-12 d-inline-block">15 Sep 2024</p>
                        </div>
                        <a href="#" class="d-block fs-18 fw-medium text-body my-2 text-truncate">How does cancer grow and spread?</a>
                        <p class="text-muted">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <hr class="hr-dashed">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('admin/images/users/avatar-10.jpg') }}" alt="" class="thumb-md rounded-circle">
                                </div>
                                <div class="flex-grow-1 ms-2 text-truncate text-start">
                                    <h6 class="m-0 text-dark">Billy Pearson</h6>
                                    <p class="mb-0 text-muted">by <a href="#">admin</a></p>
                                </div><!--end media-body-->
                            </div>
                            <div class="align-self-center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fa fa-pencil-alt"></i></button>
                                    <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fa fa-trash-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    </div><!--end blog-card-->
                </div><!--end card-body-->
            </div><!--end card-->
            </div>
            @endfor

    </div><!--end row-->
</div><!-- container -->

<!--Start Rightbar-->
<!--end Rightbar-->
<!--Start Footer-->

@include("components.admin.footer")

<!--end footer-->
</div>


<div class="modal fade" id="modal-add-formation" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-modal="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0" id="myExtraLargeModalLabel">Création de la nouvelle formation</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body">
                <form class="p-4 pt-3">
                    <div class="form-group mb-2 mb-lg-1">
                        <label for="projectName" class="form-label">Project Name :</label>
                        <input type="text" class="form-control" id="projectName" aria-describedby="emailHelp" placeholder="Enter project name">
                    </div><!--end form-group-->
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6 col-xl-3  mb-2 mb-lg-1">
                                <label class="form-label mt-2" for="pro-start-date">Start Date</label>
                                <input type="text" class="form-control datepicker-input" name="startdate" id="pro-start-date" placeholder="Enter start date">
                            </div><!--end col-->
                            <div class="col-12 col-md-6 col-lg-6 col-xl-3  mb-2 mb-lg-1">
                                <label class="form-label mt-2" for="pro-end-date">End Date</label>
                                <input type="text" class="form-control datepicker-input" name="enddate" id="pro-end-date" placeholder="Enter end date">
                            </div><!--end col-->
                            <div class="col-12 col-md-6 col-lg-6 col-xl-3  mb-2 mb-lg-1">
                                <label class="form-label mt-2" for="pro-rate">Rate</label>
                                <input type="text" class="form-control" id="pro-rate" placeholder="Enter rate">
                            </div><!--end col-->
                            <div class="col-12 col-md-6 col-lg-6 col-xl-3  mb-2 mb-lg-1">
                                <label class="form-label mt-2" for="pro-price-type">Price Type</label>
                                <select class="form-select">
                                    <option>Hourly</option>
                                    <option>Daily</option>
                                    <option>Fix</option>
                                </select>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end form-group-->
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6 mb-2 mb-lg-1">
                                <label class="form-label mt-2">Required</label>
                                <select class="form-select">
                                    <option>--Select--</option>
                                    <option>UI/UX Design</option>
                                    <option>Payment System </option>
                                    <option>Android 10</option>
                                </select>
                            </div><!--end col-->
                            <div class="col-lg-3 col-6">
                                <label class="form-label mt-2">Invoice Time</label>
                                <select class="form-select">
                                    <option>30 Day</option>
                                    <option>3 Month</option>
                                    <option>1 Year</option>
                                </select>
                            </div><!--end col-->
                            <div class="col-lg-3 col-6">
                                <label class="form-label mt-2">Priority</label>
                                <select class="form-select">
                                    <option>-- select --</option>
                                    <option>High</option>
                                    <option>Medium</option>
                                    <option>Low</option>
                                </select>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end form-group-->
                    <div class="form-group">
                        <label class="form-label mt-2" for="pro-message">Message</label>
                        <textarea class="form-control" rows="5" id="pro-message" placeholder="writing here.."></textarea>
                    </div><!--end form-group-->
                </form>
            </div><!--end modal-body-->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary btn-sm">Sauvegarder</button>
            </div><!--end modal-footer-->
        </div><!--end modal-content-->
    </div><!--end modal-dialog-->
</div>
@endsection
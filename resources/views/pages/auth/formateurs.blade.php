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
                                <button class="btn btn-primary"><i class="fas fa-plus me-1"></i>Nouveau formateurs</button>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table mb-0" id="datatable_1">
                                <thead class="table-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>ID</th>
                                        <th>Roal</th>
                                        <th>Last activity</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset('admin/images/users/avatar-1.jpg')}}" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                <div class="flex-grow-1 text-truncate">
                                                    <h6 class="m-0">Unity Pugh</h6>
                                                    <a href="#" class="fs-12 text-primary">dummy@gmail.com</a>
                                                </div><!--end media body-->
                                            </div>
                                        </td>
                                        <td>#9958</td>
                                        <td><a href="#" class="text-body text-decoration-underline">Manager</a></td>
                                        <td>Today, 02:30pm</td>
                                        <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fa fa-pencil-alt"></i></button>
                                                <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fa fa-trash-alt"></i></button>
                                            </div>
                                        </td>
                                    </tr>
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
@push("scripts")
<script src="{{ asset('admin/libs/simple-datatables/umd/simple-datatables.js') }}"></script>
<script src="{{ asset('admin/js/pages/datatable.init.js') }}"></script>
<script src="{{ asset('admin/js/app.js') }}"></script>
@endpush
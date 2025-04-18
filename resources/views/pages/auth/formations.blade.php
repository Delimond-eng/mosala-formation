@extends('layouts.admin')

@section('content')
<div class="page-content">
    <div class="container-xxl">
        <div class="row">
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
    <!--Start Rightbar/offcanvas-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
        <div class="offcanvas-header border-bottom justify-content-between">
            <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
            <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <h6>Account Settings</h6>
            <div class="p-2 text-start mt-3">
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="settings-switch1">
                    <label class="form-check-label" for="settings-switch1">Auto updates</label>
                </div><!--end form-switch-->
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                    <label class="form-check-label" for="settings-switch2">Location Permission</label>
                </div><!--end form-switch-->
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="settings-switch3">
                    <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                </div><!--end form-switch-->
            </div><!--end /div-->
            <h6>General Settings</h6>
            <div class="p-2 text-start mt-3">
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="settings-switch4">
                    <label class="form-check-label" for="settings-switch4">Show me Online</label>
                </div><!--end form-switch-->
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                    <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                </div><!--end form-switch-->
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="settings-switch6">
                    <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                </div><!--end form-switch-->
            </div><!--end /div-->
        </div><!--end offcanvas-body-->
    </div>
    <!--end Rightbar/offcanvas-->
    <!--end Rightbar-->
    <!--Start Footer-->

    @include("components.admin.footer")

    <!--end footer-->
</div>
@endsection
@extends("layouts.admin")


@section("content")
<!-- Page Content-->
<div class="page-content">
    <div class="container-xxl">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-5 offset-lg-1 align-self-center">
                                <div class="p-3">
                                    <span class="bg-pink-subtle p-1 rounded text-pink fw-medium">Basic Examples </span>
                                    <h1 class="my-4 font-weight-bold">Manage Your Work With <span class="text-primary">Rizz</span>.</h1>
                                    <p class="fs-14 text-muted">Rizz is a Bootstrap 5 admin dashboard,
                                        It is fully responsive and included awesome features
                                        to help build web applications fast and easy.
                                    </p>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-outline-primary"><i class="fa fa-pencil-alt me-1"></i>Editer</button>
                                        <button type="button" class="btn btn-outline-danger"><i class="fa fa-trash-alt"></i> Supprimer</button>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-5 offset-lg-1 text-center">

                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset("admin/images/extra/card/img-2.jpg") }}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset("admin/images/extra/card/img-2.jpg") }}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset("admin/images/extra/card/img-2.jpg") }}" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg-5 text-center">
                                <div id="carouselExample" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset("admin/images/extra/card/img-4.jpg") }}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset("admin/images/extra/card/img-4.jpg") }}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset("admin/images/extra/card/img-4.jpg") }}" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-5 offset-lg-1 align-self-center">
                                <div class="p-3">
                                    <span class="bg-pink-subtle p-1 rounded text-pink fw-medium">Indicators</span>
                                    <h1 class="my-4 font-weight-bold">Manage Your Work With <span class="text-primary">Rizz</span>.</h1>
                                    <p class="fs-14 text-muted">Rizz is a Bootstrap 5 admin dashboard,
                                        It is fully responsive and included awesome features
                                        to help build web applications fast and easy.
                                    </p>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-outline-primary"><i class="fa fa-pencil-alt me-1"></i>Editer</button>
                                        <button type="button" class="btn btn-outline-danger"><i class="fa fa-trash-alt me-1"></i>Supprimer</button>
                                    </div>
                                </div>
                            </div><!--end col-->

                        </div><!--end row-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!-- container -->
    <!--Start Rightbar-->
    <!--Start Footer-->

    @include("components.admin.footer")

    <!--end footer-->
</div>
<!-- end page content -->
@endsection
@extends("layouts.admin")

@section("content")
<div class="main-content app-content">
    <div class="container-fluid"> <!-- Start::page-header -->
        <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
            <div>
                <h1 class="page-title fw-medium fs-18 mb-2">Tableau de bord</h1>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"> <a href="javascript:void(0);"> Home </a> </li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </div>
            <div class="d-flex gap-2"> <button class="btn btn-white btn-wave border-0 me-0 fw-normal waves-effect waves-light"> <i class="ri-filter-3-fill me-2"></i>Filter </button> <button type="button" class="btn btn-primary btn-wave waves-effect waves-light"> <i class="ri-upload-2-line me-2"></i> Export report </button> </div>
        </div> <!-- End::page-header --> <!-- Start:: row-1 -->
        <div class="row">
            <div class="col-xxl-6 col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card card-bg-primary border-0 shadow-none visitors-search-card">
                            <div class="card-body p-4">
                                <div class="row">
                                    <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-7">
                                        <h4 class="text-fixed-white mb-3">Premium Course In Matrix Redox.</h4>
                                        <p class="mb-4 op-8">Join us on a journey where every electron tells a story, and every molecule holds a secret waiting to be unveiled.</p><button class="btn bg-white-transparent btn-wave me-2 waves-effect waves-light">Join Now</button> <button class="btn text-fixed-white border border-white border-opacity-25 btn-wave waves-effect waves-light">Lean More</button>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-5 d-md-block d-none">
                                        <div> <img src="admin/images/media/media-76.png" alt="" class="position-absolute course-img"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-12">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="card custom-card course-main-card overflow-hidden">
                            <div class="card-body p-4 d-flex gap-3">
                                <div> <span class="avatar avatar-md bg-primary svg-white"> <i class="ti ti-school fs-22"></i> </span> </div>
                                <div> <span class="d-block mb-2 fs-14 text-muted">Total Students</span>
                                    <h4 class="fw-semibold mb-2">23,768</h4> <span class="fs-12"> This Month <span class="text-success fs-12 fw-medium ms-2 d-inline-block"><i class="ri-arrow-up-line me-1"></i>2.45%</span> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="card custom-card course-main-card overflow-hidden ">
                            <div class="card-body p-4 d-flex gap-3">
                                <div><span class="avatar avatar-md bg-primary svg-white"> <i class="ti ti-users fs-22"></i> </span></div>
                                <div> <span class="d-block mb-2 fs-14 text-muted">Total Instructors</span>
                                    <h4 class="fw-semibold mb-2">1,673</h4> <span class="fs-12"> This Month <span class="text-danger fs-12 fw-medium ms-2 d-inline-block"><i class="ri-arrow-down-line me-1"></i>0.62%</span> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="card custom-card course-main-card overflow-hidden ">
                            <div class="card-body p-4 d-flex gap-3">
                                <div><span class="avatar avatar-md bg-primary svg-white"> <i class="ti ti-certificate-2 fs-22"></i> </span></div>
                                <div> <span class="d-block mb-2 fs-14 text-muted">Total Courses</span>
                                    <h4 class="fw-semibold mb-2">526</h4> <span class="fs-12"> This Month <span class="text-success fs-12 fw-medium ms-2 d-inline-block"><i class="ri-arrow-up-line me-1"></i>3.75%</span> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="card custom-card course-main-card overflow-hidden ">
                            <div class="card-body p-4 d-flex gap-3">
                                <div><span class="avatar avatar-md bg-primary svg-white"> <i class="ti ti-wallet fs-22"></i> </span></div>
                                <div> <span class="d-block mb-2 fs-14 text-muted">Total Revenue</span>
                                    <h4 class="fw-semibold mb-2">$1,26,553</h4> <span class="fs-12"> This Month <span class="text-success fs-12 fw-medium ms-2 d-inline-block"><i class="ri-arrow-up-line me-1"></i>21.54%</span> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End:: row-1 --> <!-- Start:: row-2 -->
    </div>
</div> <!-- End::app-content --> <!-- Footer Start -->
@endsection
@extends('layouts.admin')

@section('content')
<div class="page-content">
    <div class="container-xxl">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-4">
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-xl-12">
                        <div class="card">
                            <div class="card-body border-dashed-bottom pb-3">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-auto">
                                        <div class="d-flex justify-content-center align-items-center thumb-xl border border-secondary rounded-circle">
                                            <i class="icofont-money-bag h1 align-self-center mb-0 text-secondary"></i>
                                        </div>
                                        <h5 class="mt-2 mb-0 fs-14">Total Revenue</h5>
                                    </div><!--end col-->
                                    <div class="col align-self-center">
                                        <div id="line-1" class="apex-charts float-end"></div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                            <div class="card-body">
                                <div class="row d-flex justify-content-center ">
                                    <div class="col-12 col-md-6">
                                        <h2 class="fs-22 mt-0 mb-1 fw-bold">$0.00</h2>
                                        <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i>8.5%</span> New Sessions Today</p>
                                    </div><!--end col-->
                                    <div class="col-12 col-md-6 align-self-center text-start text-md-end">
                                        <button type="button" class="btn btn-primary btn-sm px-2 mt-2 mt-md-0 ">View Report</button>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-md-12 col-lg-6 col-xl-12">
                        <div class="card">
                            <div class="card-body border-dashed-bottom pb-3">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-auto">
                                        <div class="d-flex justify-content-center align-items-center thumb-xl border border-secondary rounded-circle">
                                            <i class="icofont-opencart h1 align-self-center mb-0 text-secondary"></i>
                                        </div>
                                        <h5 class="mt-2 mb-0 fs-14">Inscriptions</h5>
                                    </div><!--end col-->
                                    <div class="col align-self-center ">
                                        <div id="line-2" class="apex-charts float-end"></div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                            <div class="card-body">
                                <div class="row d-flex justify-content-center ">
                                    <div class="col-12 col-md-6">
                                        <h2 class="fs-22 mt-0 mb-1 fw-bold">0</h2>
                                        <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i>0</span> Pour aujourd'hui</p>
                                    </div><!--end col-->
                                    <div class="col-12 col-md-6 align-self-center text-start text-md-end">
                                        <button type="button" class="btn btn-outline-secondary btn-sm px-2 mt-2 mt-md-0 ">Voir Rapport</button>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div> <!--end row-->
            </div> <!--end col-->
            <div class="col-md-12 col-lg-12 col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Progression des inscriptions mensuelles</h4>
                            </div><!--end col-->
                            <div class="col-auto">
                                <div class="dropdown">
                                    <a href="#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icofont-calendar fs-5 me-1"></i> This Year<i class="las la-angle-down ms-1"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Last Week</a>
                                        <a class="dropdown-item" href="#">Last Month</a>
                                        <a class="dropdown-item" href="#">This Year</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div> <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body pt-0">
                        <div id="monthly_income" class="apex-charts"></div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="card shadow-none border mb-3 mb-lg-0">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col text-center">
                                                <span class="fs-18 fw-semibold">0,00</span>
                                                <h6 class="text-uppercase text-muted mt-2 m-0">INSCRIPTIONS</h6>
                                            </div><!--end col-->
                                        </div> <!-- end row -->
                                    </div><!--end card-body-->
                                </div> <!--end card-body-->
                            </div><!--end col-->
                            <div class="col-md-6 col-lg-6">
                                <div class="card shadow-none border mb-3 mb-lg-0">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col text-center">
                                                <span class="fs-18 fw-semibold">0,00</span>
                                                <h6 class="text-uppercase text-muted mt-2 m-0">FORMATION ACTIVE</h6>
                                            </div><!--end col-->
                                        </div> <!-- end row -->
                                    </div><!--end card-body-->
                                </div> <!--end card-body-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
        </div><!--end row-->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Formations actives en ligne</h4>
                            </div><!--end col-->
                        </div> <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body pt-0">
                        <div class="accordion card-bg " id="task-1">
                            <div class="task-accordion rounded  border-dashed border-theme-color mb-3 p-2">
                                <div class="cursor-pointer collapsed" data-bs-toggle="collapse" data-bs-target="#task-one" aria-expanded="false" aria-controls="task-one">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <i class="iconoir-calendar fs-2 me-2"></i>
                                                            <div class="flex-grow-1 text-truncate">
                                                                <h6 class="m-0 mb-1 fw-semibold">Start from to end</h6>
                                                                <div class="fw-semibold"><span>20 Mar 2024</span> - <span class="text-danger"> 30 Nov 2024</span></div>
                                                            </div><!--end media body-->
                                                        </div>
                                                    </td>
                                                    <td class="text-start">
                                                        <h6 class="m-0 mb-1 fw-semibold">Task</h6>
                                                        <span class="fs-13 fw-semibold">Working API issue</span>
                                                    </td>
                                                    <td class="text-start">
                                                        <h6 class="m-0 mb-1 fw-semibold">Priority</h6>
                                                        <span class="text-danger"><i class="fa-solid fa-stop fs-10"></i> High</span>
                                                    </td>

                                                    <td class="text-start">
                                                        <h6 class="m-0 mb-1 fw-semibold">Team</h6>
                                                        <span class="text-secondary">React development team</span>
                                                    </td>

                                                    <td class="text-end">
                                                        <h6 class="m-0 mb-1 fw-semibold">Status</h6>
                                                        <span class="badge rounded text-blue bg-transparent border border-blue p-1">In progress</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="task-one" class="accordion-collapse collapse" data-bs-parent="#task-1" style="">
                                    <div class="accordion-body  bg-body border-dashed-top  p-3 p-3">
                                        <h6 class="fw-semibold">Task Info</h6>
                                        <p class="mt-2 mb-3">
                                            Outline common error scenarios that team members may encounter when using the APIs.
                                            Provide guidance on how to handle these errors gracefully and troubleshoot issues effectively.
                                            Offer examples of typical API requests and corresponding responses.
                                            These examples can help team members understand how to interact with the APIs and interpret the data they receive.
                                        </p>
                                        <div class="row row-cols-auto">
                                            <div class="col col-md-3">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images/users/avatar-6.jpg" class="thumb-md align-self-center rounded-circle" alt="...">
                                                    <div class="flex-grow-1 ms-2">
                                                        <h6 class="m-0 mb-1 fw-semibold">Elliott Snyder</h6>
                                                        <p class="text-muted mb-0">Client</p>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col col-md-3">
                                                <h6 class="m-0 mb-1 fw-semibold">Project type</h6>
                                                <p class="text-muted mb-0">Bank data Management</p>
                                            </div><!--end col-->
                                            <div class="col col-md-2 text-end align-self-center">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="m-0 mb-1 fw-semibold">Progress</h6>
                                                    <small class="text-end">70%</small>
                                                </div>
                                                <div class="progress bg-secondary-subtle" style="height:5px;">
                                                    <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15% " aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col col-md-2">
                                                <h6 class="m-0 mb-1 fw-semibold">Total Report</h6>
                                                <p class="text-muted mb-0">12</p>
                                            </div><!--end col-->
                                            <div class="col col-md-2">
                                                <h6 class="m-0 mb-1 fw-semibold">Assigned To</h6>
                                                <p class="text-muted mb-0">Kylie Bishop</p>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end accordion-body-->
                                </div><!--end task-->
                            </div> <!--end -->
                            <div class="task-accordion rounded  border-dashed border-theme-color mb-3 p-2">
                                <div class="cursor-pointer collapsed" data-bs-toggle="collapse" data-bs-target="#task-two" aria-expanded="false" aria-controls="task-two">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <i class="iconoir-calendar fs-2 me-2"></i>
                                                            <div class="flex-grow-1 text-truncate">
                                                                <h6 class="m-0 mb-1 fw-semibold">Start from to end</h6>
                                                                <div class="fw-semibold"><span>10 Jan 2024</span> - <span class="text-danger"> 30 Apr 2024</span></div>
                                                            </div><!--end media body-->
                                                        </div>
                                                    </td>
                                                    <td class="text-start">
                                                        <h6 class="m-0 mb-1 fw-semibold">Task</h6>
                                                        <span class="fs-13 fw-semibold">Add Product page</span>
                                                    </td>
                                                    <td class="text-start">
                                                        <h6 class="m-0 mb-1 fw-semibold">Priority</h6>
                                                        <span class="text-warning"><i class="fa-solid fa-stop fs-10"></i> Low</span>
                                                    </td>

                                                    <td class="text-start">
                                                        <h6 class="m-0 mb-1 fw-semibold">Team</h6>
                                                        <span class="text-secondary">Flutter development team</span>
                                                    </td>

                                                    <td class="text-end">
                                                        <h6 class="m-0 mb-1 fw-semibold">Status</h6>
                                                        <span class="badge rounded text-success bg-transparent border border-success p-1">Done</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="task-two" class="accordion-collapse collapse" data-bs-parent="#task-1">
                                    <div class="accordion-body  bg-body border-dashed-top  p-3">
                                        <h6 class="fw-semibold">Task Info</h6>
                                        <p class="mt-2 mb-3">
                                            Outline common error scenarios that team members may encounter when using the APIs.
                                            Provide guidance on how to handle these errors gracefully and troubleshoot issues effectively.
                                            Offer examples of typical API requests and corresponding responses.
                                            These examples can help team members understand how to interact with the APIs and interpret the data they receive.
                                        </p>
                                        <div class="row row-cols-auto">
                                            <div class="col col-md-3">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images/users/avatar-1.jpg" class="thumb-md align-self-center rounded-circle" alt="...">
                                                    <div class="flex-grow-1 ms-2">
                                                        <h6 class="m-0 mb-1 fw-semibold">Daniel Baldwin</h6>
                                                        <p class="text-muted mb-0">Client</p>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col col-md-3">
                                                <h6 class="m-0 mb-1 fw-semibold">Project type</h6>
                                                <p class="text-muted mb-0">Ecommerce</p>
                                            </div><!--end col-->
                                            <div class="col col-md-2 text-end align-self-center">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="m-0 mb-1 fw-semibold">Progress</h6>
                                                    <small class="text-end">85%</small>
                                                </div>
                                                <div class="progress bg-secondary-subtle" style="height:5px;">
                                                    <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 45% " aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col col-md-2">
                                                <h6 class="m-0 mb-1 fw-semibold">Total Report</h6>
                                                <p class="text-muted mb-0">15</p>
                                            </div><!--end col-->
                                            <div class="col col-md-2">
                                                <h6 class="m-0 mb-1 fw-semibold">Assigned To</h6>
                                                <p class="text-muted mb-0">Pearl Carlson</p>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end accordion-body-->
                                </div><!--end task-->
                            </div> <!--end -->
                            <div class="task-accordion rounded  border-dashed border-theme-color p-2">
                                <div class="cursor-pointer collapsed" data-bs-toggle="collapse" data-bs-target="#task-three" aria-expanded="false" aria-controls="task-three">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <i class="iconoir-calendar fs-2 me-2"></i>
                                                            <div class="flex-grow-1 text-truncate">
                                                                <h6 class="m-0 mb-1 fw-semibold">Start from to end</h6>
                                                                <div class="fw-semibold"><span>15 jun 2024</span> - <span class="text-danger"> 15 Aug 2024</span></div>
                                                            </div><!--end media body-->
                                                        </div>
                                                    </td>
                                                    <td class="text-start">
                                                        <h6 class="m-0 mb-1 fw-semibold">Task</h6>
                                                        <span class="fs-13 fw-semibold">Form submit page</span>
                                                    </td>
                                                    <td class="text-start">
                                                        <h6 class="m-0 mb-1 fw-semibold">Priority</h6>
                                                        <span class="text-info"><i class="fa-solid fa-stop fs-10"></i> Medium</span>
                                                    </td>

                                                    <td class="text-start">
                                                        <h6 class="m-0 mb-1 fw-semibold">Team</h6>
                                                        <span class="text-secondary">Agular development team</span>
                                                    </td>

                                                    <td class="text-end">
                                                        <h6 class="m-0 mb-1 fw-semibold">Status</h6>
                                                        <span class="badge rounded text-secondary bg-transparent border border-secondary p-1">Pending</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="task-three" class="accordion-collapse collapse" data-bs-parent="#task-1">
                                    <div class="accordion-body  bg-body border-dashed-top  p-3">
                                        <h6 class="fw-semibold">Task Info</h6>
                                        <p class="mt-2 mb-3">
                                            Outline common error scenarios that team members may encounter when using the APIs.
                                            Provide guidance on how to handle these errors gracefully and troubleshoot issues effectively.
                                            Offer examples of typical API requests and corresponding responses.
                                            These examples can help team members understand how to interact with the APIs and interpret the data they receive.
                                        </p>
                                        <div class="row row-cols-auto">
                                            <div class="col col-md-3">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images/users/avatar-3.jpg" class="thumb-md align-self-center rounded-circle" alt="...">
                                                    <div class="flex-grow-1 ms-2">
                                                        <h6 class="m-0 mb-1 fw-semibold">Unity Pugh</h6>
                                                        <p class="text-muted mb-0">Client</p>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col col-md-3">
                                                <h6 class="m-0 mb-1 fw-semibold">Project type</h6>
                                                <p class="text-muted mb-0">AI Chat &amp; Images</p>
                                            </div><!--end col-->
                                            <div class="col col-md-2 text-end align-self-center">
                                                <div class="d-flex justify-content-between">
                                                    <h6 class="m-0 mb-1 fw-semibold">Progress</h6>
                                                    <small class="text-end">30%</small>
                                                </div>
                                                <div class="progress bg-secondary-subtle" style="height:5px;">
                                                    <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15% " aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col col-md-2">
                                                <h6 class="m-0 mb-1 fw-semibold">Total Report</h6>
                                                <p class="text-muted mb-0">8</p>
                                            </div><!--end col-->
                                            <div class="col col-md-2">
                                                <h6 class="m-0 mb-1 fw-semibold">Assigned To</h6>
                                                <p class="text-muted mb-0">Theodore Duran</p>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end accordion-body-->
                                </div><!--end task-->
                            </div> <!--end -->
                        </div><!--end accordion-->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- container -->

    <!--Start Rightbar-->
    <!--end Rightbar-->
    <!--Start Footer-->
    @include("components.admin.footer")
    <!--end footer-->
</div>
@endsection

@push("scripts")
<script src="{{ asset('admin/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('admin/js/pages/ecommerce-index.init.js') }}"></script>
@endpush
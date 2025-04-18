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
                                        <h2 class="fs-22 mt-0 mb-1 fw-bold">$8365.00</h2>
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
                                        <h5 class="mt-2 mb-0 fs-14">New Order</h5>
                                    </div><!--end col-->
                                    <div class="col align-self-center ">
                                        <div id="line-2" class="apex-charts float-end"></div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                            <div class="card-body">
                                <div class="row d-flex justify-content-center ">
                                    <div class="col-12 col-md-6">
                                        <h2 class="fs-22 mt-0 mb-1 fw-bold">722</h2>
                                        <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i>8.5%</span> New Sessions Today</p>
                                    </div><!--end col-->
                                    <div class="col-12 col-md-6 align-self-center text-start text-md-end">
                                        <button type="button" class="btn btn-outline-secondary btn-sm px-2 mt-2 mt-md-0 ">View Report</button>
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
                                <h4 class="card-title">Monthly Avg. Income</h4>
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
                            <div class="col-md-6 col-lg-3">
                                <div class="card shadow-none border mb-3 mb-lg-0">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col text-center">
                                                <span class="fs-18 fw-semibold">$24,500</span>
                                                <h6 class="text-uppercase text-muted mt-2 m-0">Today's Revenue</h6>
                                            </div><!--end col-->
                                        </div> <!-- end row -->
                                    </div><!--end card-body-->
                                </div> <!--end card-body-->
                            </div><!--end col-->
                            <div class="col-md-6 col-lg-3">
                                <div class="card shadow-none border mb-3 mb-lg-0">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col text-center">
                                                <span class="fs-18 fw-semibold">82.8%</span>
                                                <h6 class="text-uppercase text-muted mt-2 m-0">Conversion Rate</h6>
                                            </div><!--end col-->
                                        </div> <!-- end row -->
                                    </div><!--end card-body-->
                                </div> <!--end card-body-->
                            </div><!--end col-->

                            <div class="col-md-6 col-lg-3">
                                <div class="card shadow-none border mb-3 mb-lg-0">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col text-center">
                                                <span class="fs-18 fw-semibold">$9982.00</span>
                                                <h6 class="text-uppercase text-muted mt-2 m-0">Total Expenses</h6>
                                            </div><!--end col-->
                                        </div> <!-- end row -->
                                    </div><!--end card-body-->
                                </div> <!--end card-->
                            </div><!--end col-->
                            <div class="col-md-6 col-lg-3">
                                <div class="card shadow-none border mb-3 mb-lg-0">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col text-center">
                                                <span class="fs-18 fw-semibold">$80.5</span>
                                                <h6 class="text-uppercase text-muted mt-2 m-0">Avg. Value</h6>
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
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Formations actives</h4>
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
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="border-top-0">Product</th>
                                        <th class="border-top-0">Price</th>
                                        <th class="border-top-0">Sell</th>
                                        <th class="border-top-0">Status</th>
                                        <th class="border-top-0">Action</th>
                                    </tr><!--end tr-->
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="admin/images/products/01.png" height="40" class="me-3 align-self-center rounded" alt="...">
                                                <div class="flex-grow-1 text-truncate">
                                                    <h6 class="m-0">History Book</h6>
                                                    <a href="#" class="fs-12 text-primary">ID: A3652</a>
                                                </div><!--end media body-->
                                            </div>
                                        </td>
                                        <td>$50 <del class="text-muted fs-10">$70</del></td>
                                        <td>450 <small class="text-muted">(550)</small></td>
                                        <td><span class="badge bg-primary-subtle text-primary px-2">Stock</span></td>
                                        <td>
                                            <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="admin/images/products/02.png" height="40" class="me-3 align-self-center rounded" alt="...">
                                                <div class="flex-grow-1 text-truncate">
                                                    <h6 class="m-0">Colorful Pots</h6>
                                                    <a href="#" class="fs-12 text-primary">ID: A5002</a>
                                                </div><!--end media body-->
                                            </div>
                                        </td>
                                        <td>$99 <del class="text-muted fs-10">$150</del></td>
                                        <td>750 <small class="text-muted">(00)</small></td>
                                        <td><span class="badge bg-danger-subtle text-danger px-2">Out of Stock</span></td>
                                        <td>
                                            <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="admin/images/products/04.png" height="40" class="me-3 align-self-center rounded" alt="...">
                                                <div class="flex-grow-1 text-truncate">
                                                    <h6 class="m-0">Pearl Bracelet</h6>
                                                    <a href="#" class="fs-12 text-primary">ID: A6598</a>
                                                </div><!--end media body-->
                                            </div>
                                        </td>
                                        <td>$199 <del class="text-muted fs-10">$250</del></td>
                                        <td>280 <small class="text-muted">(220)</small></td>
                                        <td><span class="badge bg-primary-subtle text-primary px-2">Stock</span></td>
                                        <td>
                                            <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="admin/images/products/06.png" height="40" class="me-3 align-self-center rounded" alt="...">
                                                <div class="flex-grow-1 text-truncate">
                                                    <h6 class="m-0">Dancing Man</h6>
                                                    <a href="#" class="fs-12 text-primary">ID: A9547</a>
                                                </div><!--end media body-->
                                            </div>
                                        </td>
                                        <td>$40 <del class="text-muted fs-10">$49</del></td>
                                        <td>500 <small class="text-muted">(1000)</small></td>
                                        <td><span class="badge bg-danger-subtle text-danger px-2">Out of Stock</span></td>
                                        <td>
                                            <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="admin/images/products/05.png" height="40" class="me-3 align-self-center rounded" alt="...">
                                                <div class="flex-grow-1 text-truncate">
                                                    <h6 class="m-0">Fire Lamp</h6>
                                                    <a href="#" class="fs-12 text-primary">ID: A2047</a>
                                                </div><!--end media body-->
                                            </div>
                                        </td>
                                        <td>$80 <del class="text-muted fs-10">$59</del></td>
                                        <td>800 <small class="text-muted">(2000)</small></td>
                                        <td><span class="badge bg-danger-subtle text-danger px-2">Out of Stock</span></td>
                                        <td>
                                            <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                </tbody>
                            </table> <!--end table-->
                        </div><!--end /div-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
        </div><!--end row-->

    </div><!-- container -->

    <!--Start Rightbar-->
    <!--end Rightbar-->
    <!--Start Footer-->

    @include("components.admin.footer")

    <!--end footer-->
</div>
@endsection
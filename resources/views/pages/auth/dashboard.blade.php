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
                                        <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i></span>Toutes les formations</p>
                                    </div><!--end col-->
                                    <div class="col-12 col-md-6 align-self-center text-start text-md-end">
                                        <button type="button" class="btn btn-primary btn-sm px-2 mt-2 mt-md-0 ">Voir le rapport</button>
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
                                        <h2 class="fs-22 mt-0 mb-1 fw-bold">{{ $count3 }}</h2>
                                        <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i></span> Pour aujourd'hui</p>
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
                                        <i class="icofont-calendar fs-5 me-1"></i>2025<i class="las la-angle-down ms-1"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">2025</a>
                                        <a class="dropdown-item" href="#">2024</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div> <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body pt-0">
                        <div id="subscription-stats" class="apex-charts"></div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="card shadow-none border mb-3 mb-lg-0">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col text-center">
                                                <span class="fs-18 fw-semibold text-blue">0{{ $count1 }}</span>
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
                                                <span class="fs-18 fw-semibold text-success">0{{ $count2 }}</span>
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
<script>
const colors = ["#556ee6", "#34c38f", "#f46a6a", "#f1b44c", "#50a5f1", "#0ca678", "#fd7e14", "#845ef7", "#2c3e50", "#e74c3c", "#9b59b6", "#16a085"];
fetch('/adm/souscriptions-stats')
    .then(response => response.json())
    .then(data => {
        const options = {
            chart: {
                height: 270,
                type: "bar",
                toolbar: { show: false },
                dropShadow: {
                    enabled: true,
                    top: 0,
                    left: 5,
                    bottom: 5,
                    right: 0,
                    blur: 5,
                    color: "#45404a2e",
                    opacity: 0.35,
                },
            },
            colors: colors,
            plotOptions: {
                bar: {
                    borderRadius: 6,
                    dataLabels: { position: "top" },
                    columnWidth: "20",
                    distributed: true,
                },
            },
            dataLabels: {
                enabled: true,
                formatter: function (val) {
                    return val + "";
                },
                offsetY: -20,
                style: { fontSize: "12px", colors: ["#8997bd"] },
            },
            series: [
                {
                    name: "Souscriptions",
                    data: data, // Injecté depuis Laravel
                },
            ],
            xaxis: {
                categories: [
                    "Janv", "Fév", "Mars", "Avr", "Mai", "Juin",
                    "Juil", "Août", "Sept", "Oct", "Nov", "Déc",
                ],
                position: "top",
                axisBorder: { show: false },
                axisTicks: { show: false },
                crosshairs: {
                    fill: {
                        type: "gradient",
                        gradient: {
                            colorFrom: "#D8E3F0",
                            colorTo: "#BED1E6",
                            stops: [0, 100],
                            opacityFrom: 0.4,
                            opacityTo: 0.5,
                        },
                    },
                },
                tooltip: { enabled: true },
            },
            yaxis: {
                axisBorder: { show: false },
                axisTicks: { show: false },
                labels: {
                    show: true,
                    formatter: function (val) {
                        return val + "";
                    },
                },
            },
            grid: {
                row: { colors: ["transparent", "transparent"], opacity: 0.2 },
                strokeDashArray: 2.5,
            },
            legend: { show: false },
        };
        const chart = new ApexCharts(document.querySelector("#subscription-stats"), options);
        chart.render();
    });
</script>
@endpush
@extends("layouts.web")

@section("content")
    <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/students/page.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Nos Formations</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">Accueil</a></li>
                    <li class="active">Formations</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- course-area -->
        <div class="course-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="row">
                            @for($i=0; $i<6; $i++)
                                <div class="col-md-6 col-12">
                                    <x-course-item
                                        category="Finance"
                                        image="assets/img/students/8.jpg"
                                        link="course-single.html"
                                        lessons="10"
                                        rating="4"
                                        title="Accounting And Finance"
                                        description="There are many variations of passages of Lorem Ipsum available..."
                                        seats="75"
                                        duration="04 Years"
                                        price="750"
                                    />
                                </div>
                            @endfor
                        </div>
                        <!-- pagination -->
                        <div class="pagination-area">
                            <div aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><i class="far fa-arrow-left"></i></span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true"><i class="far fa-arrow-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- pagination end -->
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="course-sidebar">
                            <div class="widget search">
                                <h5 class="widget-title">Recherche</h5>
                                <form class="search-form">
                                    <input type="text" class="form-control" placeholder="Recherchez ici...">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                            <div class="widget category">
                                <h4 class="widget-title">Domaines</h4>
                                <div class="category-list">
                                    <a href="#"><i class="far fa-long-arrow-right"></i>Business And Finance</a>
                                    <a href="#"><i class="far fa-long-arrow-right"></i>Law And Criminology</a>
                                    <a href="#"><i class="far fa-long-arrow-right"></i>IT And Data Science</a>
                                    <a href="#"><i class="far fa-long-arrow-right"></i>Health And Medicine</a>
                                    <a href="#"><i class="far fa-long-arrow-right"></i>Art And Design</a>
                                    <a href="#"><i class="far fa-long-arrow-right"></i>Information Technology</a>
                                    <a href="#"><i class="far fa-long-arrow-right"></i>Acting And Drama</a>
                                    <a href="#"><i class="far fa-long-arrow-right"></i>Human Resource</a>
                                </div>
                            </div>
                            <div class="widget">
                                <h5 class="widget-title">Location Type</h5>
                                <form action="#">
                                    <select class="form-select" name="location">
                                        <option value="" selected hidden="">Choose Location</option>
                                        <option value="1">En salle</option>
                                        <option value="2">En ligne</option>
                                    </select>
                                </form>
                            </div>
                            <div class="widget">
                                <h5 class="widget-title">Program Level</h5>
                                <form action="#">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="program" value="1" id="level1" checked>
                                        <label class="form-check-label" for="level1">
                                            Avec Certification
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="program" value="2" id="level2">
                                        <label class="form-check-label" for="level2">
                                            Sans Certification
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- course-area end-->

    </main>
@endsection

@extends("layouts.web")


@section("content")
    <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/students/page.avif)">
            <div class="container">
                <h2 class="breadcrumb-title">A propos de nous</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Accueil</a></li>
                    <li class="active">A propos</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- about area -->
        @include("sections.home-about")
        <!-- about area end -->


        <!-- counter area -->
        @include("sections.home-counter")
        <!-- counter area end -->

        <!-- faqs-area -->
        @include("sections.home-faqs")
        <!-- end faqs -->

        <!-- choose-area -->
        @include("sections.home-chooseArea")
        <!-- choose-area end -->


        <!-- video-area -->
        @include("sections.home-spot")
        <!-- video-area end -->


        <!-- enroll area-->
        @include("sections.home-enrollArea")
        <!-- enroll area end -->

        <!-- team-area -->
        @include("sections.home-teams")
        <!-- team-area end -->


        <!-- testimonial area -->
        @include("sections.home-testimonial")
        <!-- testimonial area end -->

    </main>
@endsection
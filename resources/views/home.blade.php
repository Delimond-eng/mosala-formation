@extends("layouts.web")

@section("content")
    <main class="main">

        <!-- hero slider -->
        @include("sections.home-slider")
        <!-- hero slider end -->


        <!-- feature area -->
        @include("sections.home-feature")
        <!-- feature area end -->


        <!-- about area -->
        @include("sections.home-about")
        <!-- about area end -->


        <!-- counter area -->
        @include("sections.home-counter")
        <!-- counter area end -->


        <!-- course-area -->
        @include("sections.home-courses")
        <!-- course-area -->



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


        <!-- partner area -->
        @include("sections.home-partener")
        <!-- partner area end -->
    </main>
@endsection

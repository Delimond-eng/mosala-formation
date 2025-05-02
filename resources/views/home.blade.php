@extends("layouts.web")

@section("content")
    <main class="main">

        <!-- hero slider -->
        @include("sections.home-slider")
        <!-- hero slider end -->

        <!-- feature area -->
        @include("sections.home-feature")
        <!-- feature area end -->

        <!-- courses area -->
        @include("sections.home-search")
        <!-- end courses area -->

        <!-- partner area -->
        <!-- @include("sections.home-partener") -->
        <!-- partner area end -->
    </main>
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- title -->
    <title>Mosala</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo/blue-cap.png">

    <!-- css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<!-- preloader -->
<div class="preloader">
    <div class="loader-book">
        <div class="loader-book-page"></div>
        <div class="loader-book-page"></div>
        <div class="loader-book-page"></div>
    </div>
</div>
<!-- preloader end -->


<!-- header area -->
@include("components.header")
<!-- header area end -->


<!-- popup search -->
<div class="search-popup">
    <button class="close-search"><span class="far fa-times"></span></button>
    <form action="#">
        <div class="form-group">
            <input type="search" name="search-field" placeholder="Recherche de la formation..." required>
            <button type="submit"><i class="far fa-search"></i></button>
        </div>
    </form>
</div>
<!-- popup search end -->


@yield("content")


<!-- footer area -->
@include("components.footer")
<!-- footer area end -->


<!-- scroll-top -->
<a href="#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>
<!-- scroll-top end -->


<!-- js -->
<script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/counter-up.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/main.js"></script>

</body>

</html>

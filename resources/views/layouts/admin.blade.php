<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-width="default" data-menu-styles="dark" loader="disable" data-vertical-style="overlay">

<head><!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VERTIX - Bootstrap 5 Premium Admin &amp; Dashboard Template</title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="bootstrap html template, dashboard html css, dashboard, html, admin dashboard template, crm dashboard, bootstrap admin, sales dashboard, html and css template, html admin template, admin, bootstrap dashboard template, html and css, projects dashboard, html css js templates"> <!-- Favicon -->
    <link rel="icon" href="admin/images/brand-logos/toggle-logo.png" type="image/x-icon"> <!-- Choices JS -->
    <script src="admin/libs/choices.js/public/assets/scripts/choices.min.js"></script> <!-- Main Theme Js -->
    <script src="admin/js/main.js"></script> <!-- Bootstrap Css -->
    <link id="style" href="admin/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet"> <!-- Style Css -->
    <link href="admin/css/styles.css" rel="stylesheet"> <!-- Icons Css -->
    <link href="admin/css/icons.css" rel="stylesheet"> <!-- Node Waves Css -->
    <link href="admin/libs/node-waves/waves.min.css" rel="stylesheet"> <!-- Simplebar Css -->
    <link href="admin/libs/simplebar/simplebar.min.css" rel="stylesheet"> <!-- Color Picker Css -->
    <link rel="stylesheet" href="admin/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="admin/libs/@simonwep/pickr/themes/nano.min.css"> <!-- Choices Css -->
</head>

<body>
    <div class="page"> <!-- app-header -->
        @include("components.admin.header")
        @include("components.admin.sidebar")
        @yield("content")
        <footer class="footer mt-auto py-3 bg-white text-center">
            <div class="container"> <span class="text-muted"> Copyright © <span id="year">2025</span> <a href="javascript:void(0);" class="text-dark fw-medium">Millenium horizon</a>.</div>
        </footer> <!-- Footer End -->
        <div class="modal fade" id="header-responsive-search" tabindex="-1" aria-labelledby="header-responsive-search" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="input-group"> <input type="text" class="form-control border-end-0" placeholder="Search Anything ..." aria-label="Search Anything ..." aria-describedby="button-addon2"> <button class="btn btn-primary" type="button" id="button-addon2"><i class="bi bi-search"></i></button> </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Scroll To Top -->
    <div class="scrollToTop"> <span class="arrow lh-1"><i class="ti ti-caret-up fs-20"></i></span> </div>
    <script src="admin/libs/@popperjs/core/umd/popper.min.js"></script>
    <script src="admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="admin/js/defaultmenu.min.js"></script>
    <script src="admin/libs/node-waves/waves.min.js"></script>
    <script src="admin/js/sticky.js"></script>
    <script src="admin/libs/simplebar/simplebar.min.js"></script>
    <script src="admin/js/simplebar.js"></script>
    <script src="admin/js/custom.js"></script>

</body>

</html>
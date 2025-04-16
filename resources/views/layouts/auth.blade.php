<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">
<head><!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mosala site admin | {{ Route::currentRouteName() }}</title>
    <meta name="Description" content="Admin Panel Mosala.site">
    <meta name="adminor" content="Millenium Horizon ">
    <meta name="keywords" content="Admin Panel"> <!-- Favicon -->
    <link rel="icon" href="admin/images/brand-logos/favicon.ico" type="image/x-icon"> <!-- Main Theme Js -->
    <script src="admin/js/authentication-main.js"></script> <!-- Bootstrap Css -->
    <link id="style" href="admin/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet"> <!-- Style Css -->
    <link href="admin/css/styles.css" rel="stylesheet"> <!-- Icons Css -->
    <link href="admin/css/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="admin/libs/toastify-js/src/toastify.css">

</head>

<body class="authentication-background">
    @yield("content")
    <script src="admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="admin/js/show-password.js"></script>
    <link rel="stylesheet" href="admin/libs/toastify-js/src/toastify.js">
    @stack("scripts")
</body>

</html>
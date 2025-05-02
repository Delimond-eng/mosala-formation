<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="dark" data-bs-theme="light">
    
<head>
        

        <meta charset="utf-8" />
        <title>Mosala admin | {{ Route::currentRouteName() }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link href="{{ asset('admin/libs/simple-datatables/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
       
         <!-- App css -->
        <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        @stack("styles")


    </head>

    
    <!-- Top Bar Start -->
    <body>
        <!-- Top Bar Start -->
        @include("components.admin.header")
        <!-- Top Bar End -->
        <!-- leftbar-tab-menu -->
        @include("components.admin.sidebar")
        <!--end startbar-->
        <div class="startbar-overlay d-print-none"></div>
        <!-- end leftbar-tab-menu-->


        <div class="page-wrapper">
            <!-- Page Content-->
            @yield("content")
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- Javascript  -->  
        <!-- vendor js -->
        
        <script src="{{ asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('admin/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('admin/js/app.js') }}"></script>
        <script src="{{ asset("admin/libs/sweetalert2/sweetalert2.min.js") }}"></script>
        @stack("scripts")
        <script>
            document.addEventListener("DOMContentLoaded", function(e){
                const deleteButtons = document.querySelectorAll('.delete-btn');
                deleteButtons.forEach(button => {
                    button.addEventListener('click', function () {
                        const form = this.closest('form');

                        Swal.fire({
                            title: 'Êtes-vous sûr ?',
                            text: "Cette action est irréversible !",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#d33',
                            cancelButtonColor: '#3085d6',
                            confirmButtonText: 'Oui, supprimer',
                            cancelButtonText: 'Annuler'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                form.submit();
                            }
                        });
                    });
                });
            });
        </script>
    </body>
    <!--end body-->
</html>
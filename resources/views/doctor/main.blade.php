<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>Doctor</title>

        <!-- App css -->
        <link href="<?php echo url('/doctor/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="doctor/css/core.css" rel="stylesheet" type="text/css" />
        <link href="doctor/css/components.css" rel="stylesheet" type="text/css" />
        <link href="doctor/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="doctor/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="doctor/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="doctor/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/main.css">  

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                  <div class="spinner-wrapper">
                    <div class="rotator">
                      <div class="inner-spin"></div>
                      <div class="inner-spin"></div>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            @include('doctor.partials._topbar')
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            @include('doctor.partials._leftbar')
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            
            @yield('container')

            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="doctor/js/jquery.min.js"></script>
        <script src="doctor/js/bootstrap.min.js"></script>
        <script src="doctor/js/detect.js"></script>
        <script src="doctor/js/fastclick.js"></script>
        <script src="doctor/js/jquery.blockUI.js"></script>
        <script src="doctor/js/waves.js"></script>
        <script src="doctor/js/jquery.slimscroll.js"></script>
        <script src="doctor/js/jquery.scrollTo.min.js"></script>
        <script src="doctor/js/switchery.min.js"></script>

        <!-- Counter js  -->
        <script src="doctor/js/jquery.counterup.min.js"></script>
        <script src="doctor/js/jquery.waypoints.min.js"></script>

        <script src="doctor/js/moment.js"></script>
        <script src="doctor/js/daterangepicker.js"></script>


        <!-- Dashboard init -->
        <script src="doctor/js/jquery.dashboard_2.js"></script>

        <!-- App js -->
        <script src="doctor/js/jquery.core.js"></script>
        <script src="doctor/js/jquery.app.js"></script>

        

    </body>
</html>
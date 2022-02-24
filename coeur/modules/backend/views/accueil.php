<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="fr"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Administration</title>


        <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Icons -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/admin/img/favicons/favicon.png">
        <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/admin/img/favicons/favicon-16x16.png" sizes="16x16">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/js/plugins/slick/slick.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/js/plugins/slick/slick-theme.min.css">

        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="<?php echo base_url() ?>assets/admin/css/main.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="<?php echo base_url() ?>assets/admin/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->

 <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>

    </head>
    <body>

        <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">

            <!-- Sidebar -->
            <?php include 'inc/aside_admin_inc.php'; ?>
            <!-- END Sidebar -->

            <!-- Header -->
            <?php include 'inc/header_admin_inc.php'; ?>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-image overflow-hidden" style="background-image: url('<?php echo base_url() ?>assets/admin/img/photos/photo3@2x.jpg');">
                    <div class="push-50-t push-15">
                        <h1 class="h2 text-white animated zoomIn " style="text-transform: uppercase;">Administration du site web de  DELISSA </h1>
                        <h2 class="h5 text-white-op animated zoomIn">Bienvenue</h2>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Stats -->
 <!--                <div class="content bg-white border-b">
     <div class="row items-push text-uppercase">
         <div class="col-xs-6 col-sm-3">
             <div class="font-w700 text-gray-darker animated fadeIn">Product Sales</div>
             <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Today</small></div>
             <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">300</a>
         </div>
         <div class="col-xs-6 col-sm-3">
             <div class="font-w700 text-gray-darker animated fadeIn">Product Sales</div>
             <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> This Month</small></div>
             <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">8,790</a>
         </div>
         <div class="col-xs-6 col-sm-3">
             <div class="font-w700 text-gray-darker animated fadeIn">Total Earnings</div>
             <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> All Time</small></div>
             <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">$ 93,880</a>
         </div>
         <div class="col-xs-6 col-sm-3">
             <div class="font-w700 text-gray-darker animated fadeIn">Average Sale</div>
             <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> All Time</small></div>
             <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">$ 270</a>
         </div>
     </div>
 </div> -->
                <!-- END Stats -->


            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <?php include 'inc/footer_admin_inc.php'; ?>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->



        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="<?php echo base_url() ?>assets/admin/js/core/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/js/core/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/js/core/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/js/core/jquery.scrollLock.min.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/js/core/jquery.appear.min.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/js/core/jquery.countTo.min.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/js/core/jquery.placeholder.min.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/js/core/js.cookie.min.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/js/app.js"></script>

        <!-- Page Plugins -->
        <script src="<?php echo base_url() ?>assets/admin/js/plugins/slick/slick.min.js"></script>
        <script src="<?php echo base_url() ?>assets/admin/js/plugins/chartjs/Chart.min.js"></script>

        <!-- Page JS Code -->
        <script src="<?php echo base_url() ?>assets/admin/js/pages/base_pages_dashboard.js"></script>
        <script>
            jQuery(function () {
                // Init page helpers (Slick Slider plugin)
                App.initHelpers('slick');
            });
        </script>
    </body>
</html>
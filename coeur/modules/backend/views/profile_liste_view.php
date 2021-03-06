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
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/js/plugins/datatables/jquery.dataTables.min.css">

        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="<?php echo base_url() ?>assets/admin/css/main.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="<?php echo base_url() ?>assets/admin/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
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
                        <h1 class="h2 text-white animated zoomIn text-uppercase">MON PROFIL</h1>
                        <h2 class="h5 text-white-op animated zoomIn">Gestion de mon profil</h2>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content">

                   <!-- Partial Table -->
                   <div class="block">

                   <div class="block">
                                    <div class="block-content">
                                        <div class="row items-push">

                                            <div class="col-md-2">
                                                <a href="frontend_blog_story.html">
                                                    <img class="img-responsive" src="<?php echo base_url() ?>assets/admin/img/avatars/avatar1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-10">

                                                <h4 class="text-uppercase push-10">
                                                    <a class="text-primary-dark" href="#">
                                                        <?php echo $this->session->userdata('libelle') ?>
                                                    </a>
                                                </h4>

                                                <p class="push-20">



                                                </p>
                                                <p class="push-20">
                                                    <strong>E-mail :</strong> <?php echo $monprofil->email; ?><br>
                                                    <strong>Nom :</strong> <?php echo $monprofil->libelle; ?><br>
                                                    <strong>Niveau :</strong>
                                                   <?php switch ($monprofil->niveau) {
                                                        case '3':
                                                            echo "Administrateur";
                                                            break;

                                                        default:
                                                            echo "Webmaster";
                                                            break;
                                                    } ?><br>



                                                     <br>


                                                </p>




                                                <div class="form-group">
                                                    <a class="btn btn-danger" href="<?php echo site_url('backend/password_change') ; ?>">Changer mon mot de passe</a>
                                                </div>










                                                </p>










                                            </div>
                                        </div>
                                    </div>
                                </div>




                   </div>
                    <!-- END Partial Table -->


                </div>
                <!-- END Page Content -->



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

        <!-- Page JS Plugins -->
        <script src="<?php echo base_url() ?>assets/admin/js/plugins/datatables/jquery.dataTables.min.js"></script>

        <!-- Page JS Code -->
        <script src="<?php echo base_url() ?>assets/admin/js/pages/base_tables_datatables.js"></script>


    </body>
</html>
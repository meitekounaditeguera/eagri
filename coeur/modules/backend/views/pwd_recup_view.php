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

        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="<?php echo base_url() ?>assets/admin/css/main.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="<?php //echo base_url() ?>assets/admin/css/themes/flat.min.css"> -->
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
                        <h2 class="h5 text-white-op animated zoomIn">Changement de mon mot de passe</h2>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content content-narrow">


                    <!-- Bootstrap Design -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Default Elements -->
                            <div class="block">
                               <?php




                                  $verif = $this->session->flashdata('verifcompte'); //old mot de passe non valide
                                   if($verif == 'success'){
                                           echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                          <strong>Désolé , Ancien mot de passe entré pas valide</strong>
                                           </div>';
                                         }



                                 $modif = $this->session->flashdata('passmodif'); //mot de passe modifié OK
                                   if($modif == 'success'){
                                           echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                          <strong>BRAVO, mot de passe modifié avec succès</strong>
                                           </div>';
                                         }
                               ?>

                               <div class="block-content block-content-narrow">
                                    <form class="form-horizontal" action="<?php echo site_url('backend/password_change') ?>" method="post" id="add_admin">

                                       <div class="form-group">
                                            <label class="col-xs-12" for="pwd" style="color: #0040FF">Ancien mot de passe</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="password"   name="passworda" placeholder="Ancien Password..">
                                                 <?php //echo form_error('passwordn','<span class="error">','</span>'); ?>
                                            </div>
                                        </div>


                                      <div class="form-group">
                                            <label class="col-xs-12" for="pwd">Nouveau Mot de passe</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="password"   name="passwordn" placeholder="Password..">
                                                 <?php echo form_error('passwordn','<span class="error">','</span>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-xs-12" for="confirmpwd">Confirmation mot de passe</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="password"  name="passwordc" placeholder="Confirm Password">
                                                <?php echo form_error('passwordc','<span class="error">','</span>'); ?>
                                                <span class="error confirm"></span>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <button class="btn btn-sm btn-primary" type="submit">Modifier</button>

                                                 <input type="hidden" name="idbackend" id="idbackend" class="form-control" value="<?php echo $this->session->userdata('idbackend'); ?>">

                                                  <input type="hidden" name="email"   class="form-control" value="<?php echo $this->session->userdata('email'); ?>">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Default Elements -->
                        </div>

                    </div>

                    <!-- END Bootstrap Design -->

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

        <!-- Custom JS -->
        <script src="<?php echo base_url() ?>assets/admin/js/script.js"></script>
    </body>
</html>
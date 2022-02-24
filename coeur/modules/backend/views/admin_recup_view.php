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
                        <h1 class="h2 text-white animated zoomIn text-uppercase">Administrateur</h1>
                        <h2 class="h5 text-white-op animated zoomIn">Modification d'un administrateur</h2>
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
                                    $modif = $this->session->flashdata('modif');
                                    if($modif == 'success'){
                                       echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                      <strong>Administrateur  modifié avec succès</strong>
                                       </div>';

                                    }
                                ?>
                                <div class="block-content block-content-narrow">
                                    <form class="form-horizontal" action="<?php echo site_url('dashboard/Admin/admin_modif') ?>" method="post" id="add_admin">

                                        <div class="form-group">
                                            <label class="col-xs-12" for="niveau">Type d'administrateur</label>
                                            <div class="col-sm-12">
                                                <select class="form-control" id="niveau" required="required" name="niveau" size="1">
                                                    <option value="">----</option>
                                                    <option value="3" <?php if($get->niveau==3) {echo ' selected="selected"';}  ?> > Super admin</option>

                                                    <option value="2" <?php if($get->niveau==2) {echo ' selected="selected"';}  ?>>Admin standart</option>


                                                </select>
                                                <?php echo form_error('niveau','<span class="error">','</span>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-xs-12" for="libelle">Nom & Prénom(s) / Nom de la structure</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" id="libelle" name="libelle" placeholder="Libellé" value="<?php echo $get->libelle;?>">
                                                <?php echo form_error('libelle','<span class="error">','</span>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-xs-12" for="email">Email</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="email" id="email" name="email" placeholder="Email.."  value="<?php echo $get->email;?>">
                                                <?php echo form_error('email','<span class="error">','</span>'); ?>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <button class="btn btn-sm btn-primary" type="submit">Créer</button>

                                                 <input type="hidden" name="idorg" id="idorg" class="form-control" value="<?php echo $get->idorg ?>">
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
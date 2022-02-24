<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="fr"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Administration</title>



        <meta name="description" content="OneUI - Admin dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
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
                        <h1 class="h2 text-white animated zoomIn">Modification dans la rubrique </h1>

                        <h2 class="h5 text-white-op animated zoomIn" style="color: yellow;">
                      PROJETS


                        </h2>
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
                                    $img_error = $this->session->flashdata('img_error');

                                    if($modif == 'success'){
                                       echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                      <strong>Article modifié avec succès</strong>
                                       </div>';
                                    }

                                    if (!empty($img_error)) {
                                       echo " <div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'></button><strong>Erreur !</strong>".$img_error."</div>";
                                    }
                                ?>

                                <div class="block-content block-content-narrow">


<a href="<?php echo site_url('backend/projet/projet_liste/')?>" class="btn btn-sm btn-primary" >Retour</a><br><br>

                                 <form class="form-horizontal" action="<?php echo site_url('backend/projet/projet_modif/') ?>" method="post" enctype="multipart/form-data">







                                        <div class="form-group">
                                            <div class="col-sm-12">
                                            <label class="english">Titre projet *</label>
                                                <input class="form-control" required="required" type="text" id="titre_actu" name="titre_actu" value="<?php echo $get->titre_actu;?>">
                                            </div>

                                        </div>


                                        <div class="form-group">
                                            <div class="col-sm-12">
                                            <label class="english">Date </label>
                                                <input class="form-control" required="required" type="date" id="date_actu" name="date_actu" value="<?php echo $get->date_actu;?>">
                                            </div>


                                        </div>



                                        <div class="form-group">
                                            <div class="col-sm-12">
                                            <label>Texte *</label>
                                                <textarea id="js-ckeditor"  cols="30" name="texte_actu" id="texte_actu"><?php echo $get->texte_actu;?></textarea>
                                            </div>


                                        </div>





                                        <div class="form-group">
                                         <img src="<?php echo base_url() ?>uploads/projet/<?php echo $get->fichier;?>" style="max-width: 220px" alt="<?php echo $get->fichier;?>">
                                            <label class="col-xs-12" for="image">Image de l'article</label>
                                            <div class="col-xs-12">
                                                <input id="userfile" name="userfile" type="file">
                                            </div>
                                        </div>

                                        <input type="hidden" name="idprojet" id="idprojet" class="form-control" value="<?php echo $get->id; ?>">

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <button class="btn btn-sm btn-primary" type="submit">Modifier</button>
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

        <!-- Page JS Plugins -->
        <script src="<?php echo base_url() ?>assets/admin/js/plugins/ckeditor/ckeditor.js"></script>

        <!-- Page JS Code -->
        <script>
            jQuery(function () {
                // Init page helpers (Summernote + CKEditor + SimpleMDE plugins)
                App.initHelpers(['ckeditor']);
            });
        </script>
    </body>
</html>
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

       <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/js/plugins/datatables/jquery.dataTables.min.css">


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
                        <h1 class="h2 text-white animated zoomIn">Les enregistrements</h1>
                        <h2 class="h5 text-white-op animated zoomIn" style="color: yellow;">                        CATEGORIES


                        </h2>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content">

                   <!-- Partial Table -->
                    <div class="block">

                       <?php
                                    $del = $this->session->flashdata('del');
                                    if($del == 'success'){
                                       echo '<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                      <strong>article supprimée avec succès</strong>
                                       </div>';

                                    }


                                    $modif = $this->session->flashdata('modif');
                                    if($modif == 'success'){
                                       echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                      <strong>article modifiée avec succès</strong>
                                       </div>';

                                    }


                                ?>



                   <div class="block-content table-responsive">




<a href="<?php echo site_url('backend/galerie/galerieevent_ajout/')?>" class="btn btn-sm btn-primary" >Ajouter</a>


<br><br>
         <table class="table table-striped table-bordered table-vcenter js-dataTable-full-pagination">
                <thead>
                    <tr>
                        <th>N</th>
                        <th>Titre</th>
                        <th>Produits contenus dans cette catégorie</th>
                        <th class="text-center" style="width: 100px;">Actions</th>
                    </tr>
                </thead>

                   <?php if ($liste_galerieevent != null): ?>
                        <?php $i = 1; ?>
                        <?php foreach ($liste_galerieevent as $row): ?>

                               <tr>

                                    <td class="font-w600"><?php echo $i; ?></td>
                                    <td class="font-w600"><?php echo $row->titre_actu; ?></td>
                                    <td>

                                   <?php
                                    $nbre=$this->galerie_model->sql_nombrephoto($row->id);

                                    echo $nbre;

                                    ?>


                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                             <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Editer" onClick="javascript:location.href='<?php echo site_url('backend/galerie/galerieevent_recup/'.$row->id) ; ?>'"><i class="fa fa-pencil"></i></button>

                                       <?php if($nbre==0) { //si aucun enregistrement de photo ?>

                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" onClick="javascript:if(window.confirm('Voulez-vous supprimer ?')){location.href='<?php echo site_url('backend/galerie/galerieevent_supp/'.$row->id) ; ?>'; return true;} else {return false;}" title="Supprimer"><i class="fa fa-times"></i></button>
                                       <?php }?>

                                         <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Ajouter des produits" onClick="javascript:location.href='<?php echo site_url('backend/galerie/galeriephoto_liste/'.$row->id) ; ?>'"><i class="fa fa-picture-o"></i></button>

                                        </div>
                                    </td>
                                </tr>
                         <?php $i++; endforeach ?>
                    <?php endif ?>


                </tbody>
            </table>
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
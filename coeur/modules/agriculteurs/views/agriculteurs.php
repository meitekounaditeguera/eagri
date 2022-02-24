<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="<?php echo base_url() ?>assets/img/favicon.png" type="image/gif" sizes="16x16">

        <title>DELISSA - Les délices ASSAMELAN</title>

        <!-- Custom CSS -->
        <link href="<?php echo base_url() ?>assets/css/styles.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" type="text/css" media="all" />


        <style>

            .sample {
                font-family: 'AlexBrush-Regular';
                font-size: 44px !important;
                padding: 10px;
            }
        </style>
    </head>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/img/favicon.png">

    <body class="grocery-theme">

        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>


        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">

            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
             <?php $this->load->view('inc/header_inc'); ?>

            <div class="clearfix"></div>
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->

            <!-- =========================== Breadcrumbs =================================== -->
            <div class="breadcrumbs_wrap dark">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="text-center">
                                <h2 class="breadcrumbs_title"><?php  echo $pre->titre;?></h2>
                                <nav aria-label="breadcrumb">
                                  <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php  echo $pre->titre;?></li>
                                  </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- =========================== Breadcrumbs =================================== -->


            <!-- =========================== About Us =================================== -->
            <section>
                <div class="container">
                    <div class="row">

          <?php  if($pre->fichier!='') {?>

                        <div class="col-lg-7 col-md-7 col-sm-12" align="justify" style="margin-top: 15px;">
                            <h2 class="woo_pr_title"><?php  echo $pre->titre;?></h2>
                            <?php  echo $pre->texte;?>

                        </div>

                        <div class="col-lg-5 col-md-5 col-sm-12 ml-auto" style="margin-top: 15px;">
                            <div class="about_video">
                                <div class="thumb">
                                    <img class="pro_img img-fluid w100" src="<?php echo base_url();?>/uploads/fichier/<?php echo $pre->fichier; ?>" >

                                </div>
                            </div>
                        </div>
            <?php  }else{?>
                        <div class="col-lg-12 col-md-12 col-sm-12" align="justify" style="margin-top: 15px;">
                            <h2><?php  echo $pre->titre;?></h2>
                            <?php  echo $pre->texte;?>

                        </div>
            <?php  }?>


                    </div>
                </div>
            </section>
            <!-- =========================== About Us =================================== -->
             <?php $this->load->view('inc/footer_inc'); ?>


        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/metisMenu.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/owl-carousel.js"></script>
        <script src="<?php echo base_url() ?>assets/js/ion.rangeSlider.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/smoothproducts.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery-rating.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jQuery.style.switcher.js"></script>
        <script src="<?php echo base_url() ?>assets/js/custom.js"></script>

        <script>
            function openRightMenu() {
                document.getElementById("rightMenu").style.display = "block";
            }
            function closeRightMenu() {
                document.getElementById("rightMenu").style.display = "none";
            }
        </script>

        <script>
            function openLeftMenu() {
                document.getElementById("leftMenu").style.display = "block";
            }
            function closeLeftMenu() {
                document.getElementById("leftMenu").style.display = "none";
            }
        </script>

        <!-- ============================================================== -->
        <!-- This page plugins -->
        <!-- ============================================================== -->

    </body>
</html>
<!DOCTYPE html>
<html lang="en">
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

                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="text-center">
                                <h2 class="breadcrumbs_title">Produits référencés</h2>
                                <nav aria-label="breadcrumb">
                                  <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo $produit->titre_actu; ?></li>
                                  </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- =========================== Breadcrumbs =================================== -->


            <!-- =========================== Product Detail =================================== -->
            <section>
                <div class="container">
                    <div class="row">



                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="sp-loading"><img src="<?php echo base_url() ?>uploads/galerie/<?php echo $produit->fichier; ?>" alt=""><br>LOADING IMAGES</div>
                            <div class="sp-wrap">
                                <a href="<?php echo base_url() ?>uploads/galerie/<?php echo $produit->fichier; ?>"><img src="<?php echo base_url() ?>uploads/galerie/<?php echo $produit->fichier; ?>" alt=""></a>
                                <a href="<?php echo base_url() ?>uploads/galerie/<?php echo $produit->fichier; ?>"><img src="<?php echo base_url() ?>uploads/galerie/<?php echo $produit->fichier; ?>" alt=""></a>

                            </div>
                        </div>


                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="woo_pr_detail">

                                <div class="woo_cats_wrps">
                                    <a href="#" class="woo_pr_cats">&nbsp;</a>
                                    <!-- <span class="woo_pr_trending">Trending</span> -->
                                </div>
                                <h2 class="woo_pr_title"><?php echo $produit->titre_actu; ?></h2>


                                <div class="woo_pr_short_desc">
                                    <?php echo $produit->detail; ?>
                                </div>

                                <div class="woo_pr_price">
                                    <div class="woo_pr_offer_price">
                                        <h4 class="mb-0">Conditionnement : &nbsp;</h4><h3><?php echo $produit->conditionnement; ?></h3>
                                    </div>

                                </div>


                                <div class="woo_btn_action">

                                    <div class="col-12 col-lg-auto">
                                        <button type="submit" class="btn btn-block btn-dark mb-2">Appeler pour commander</button>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>



                </div>
            </section>
            <!-- =========================== Product Detail =================================== -->





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
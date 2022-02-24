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

                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="text-center">
                                Catégorie : <h2 class="breadcrumbs_title"><?php echo $event->titre_actu; ?></h2>
                                <nav aria-label="breadcrumb">
                                  <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo $event->titre_actu; ?></li>
                                  </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- =========================== Breadcrumbs =================================== -->



            <!-- =========================== Search Products =================================== -->
            <section>
                <div class="container">

                    <div class="row">

                        <div class="col-lg-12 col-md-12">

                          <br>





                   <div class="row">


                   <?php if($listes_produit!=null):?>
                         <?php foreach($listes_produit as $row):?>

                        <!-- Single Item -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="woo_product_grid">
                                <div class="woo_product_thumb">

                                              <?php  if($row->fichier!='') {?>


                                    <img src="<?php echo base_url() ?>uploads/galerie/<?php echo $row->fichier; ?>" class="img-fluid" alt="">

                                                <?php  }else{?>

                                    <img src="<?php echo base_url() ?>uploads/galerie/default.png" class="img-fluid" alt="">

                                            <?php  }?>
                                </div>
                                <div class="woo_product_caption center">

                                    <div class="woo_title">
                                        <h4 class="woo_pro_title"><a href="detail-1.html"><?php echo $row->titre_actu; ?></a></h4>
                                    </div>
                                            <div class="woo_price">
                                                Condt : <h6><?php echo $row->conditionnement; ?> </h6>
                                            </div>
                                </div>
                                <div class="woo_product_cart hover">
                                    <ul>

                                        <li><a href="<?php echo base_url() ?>produit/detail/<?php echo $row->id; ?>" class="woo_cart_btn btn_save"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    <?php  endforeach ?>
               <?php  endif ;?>



                    </div>




                            <div class="row">
                                <div class="col-lg-12">



<!--                                     <nav aria-label="Page navigation example">
                                      <ul class="pagination">
                                        <li class="page-item left">
                                          <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><i class="ti-arrow-left mr-1"></i>Prev</span>
                                          </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item right">
                                          <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true"><i class="ti-arrow-right mr-1"></i>Next</span>
                                          </a>
                                        </li>
                                      </ul>
                                    </nav> -->
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </section>
            <!-- =========================== Search Products =================================== -->





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
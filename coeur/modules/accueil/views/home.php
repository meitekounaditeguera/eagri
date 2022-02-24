<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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



<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/img/favicon.png">

<meta content="fr" http-equiv="Content-Language" />
<meta content="DELISSA" name="organization" />
<meta content="General" name="Audience" />
<meta content="2020 DELISSA" name="copyright" />
<meta content="search engine" name="Classification" />
<META NAME="Robots" CONTENT="all, index, follow">
<meta http-equiv="Cache-control" content="public">
<META NAME="Revisit-after" CONTENT="15">
<META NAME="DESCRIPTION" CONTENT="DELISSA, le site web des délices ASSAMELAN">
<META NAME="KEYWORDS" CONTENT="delices, DELISSA, bonoua, agriculture, huile rouge, manioc, atieke, produits frais, placali, exportation produits, produits naturels, fruits, ananas, banane, gombo, igname, aubergine,bio, naturel, huiles, feuille, taro, gingimbre ">






    </head>

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

            <!-- ======================== Offer Banner Start ==================== -->
            <section class="offer-banner-wrap gray pt-4">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="owl-carousel banner-offers owl-theme">





                                 <!-- Single Item -->
                                <div class="item">
                                    <div class="offer_item">
                                        <div class="offer_item_thumb">
                                            <div class="offer-overlay"></div>
                                            <img src="<?php echo base_url() ?>assets/img/offer-3.jpg" alt="">
                                        </div>
                                        <div class="offer_caption">
                                            <div class="offer_bottom_caption">
                                                <p>100% Naturel</p>
                                                <div class="offer_title">Produits du manioc</div>
                                                <!-- <span>Drinking is Goodness for Health</span> -->
                                            </div>
                                            <a href="<?php echo base_url() ?>produit/liste/1" class="btn offer_box_btn">Produits du manioc</a>
                                        </div>
                                    </div>
                                </div>




                                 <!-- Single Item -->
                                <div class="item">
                                    <div class="offer_item">
                                        <div class="offer_item_thumb">
                                            <div class="offer-overlay"></div>
                                            <img src="<?php echo base_url() ?>assets/img/offer-4.jpg" alt="">
                                        </div>
                                        <div class="offer_caption">
                                            <div class="offer_bottom_caption">
                                                <p>100% Naturel</p>
                                                <div class="offer_title">Les huiles </div>
                                            </div>
                                            <a href="<?php echo base_url() ?>produit/liste/1" class="btn offer_box_btn">Les huiles</a>
                                        </div>
                                    </div>
                                </div>



                                <!-- Single Item -->
                                <div class="item">
                                    <div class="offer_item">
                                        <div class="offer_item_thumb">
                                            <div class="offer-overlay"></div>
                                            <img src="<?php echo base_url() ?>assets/img/offer-2.jpg" alt="">
                                        </div>
                                        <div class="offer_caption">
                                            <div class="offer_bottom_caption">
                                                <p>100% Naturel</p>
                                                <div class="offer_title">Légumes frais</div>
                                            </div>
                                            <a href="<?php echo base_url() ?>produit/liste/7" class="btn offer_box_btn">Légumes frais</a>
                                        </div>
                                    </div>
                                </div>



                                 <!-- Single Item -->
                                <div class="item">
                                    <div class="offer_item">
                                        <div class="offer_item_thumb">
                                            <div class="offer-overlay"></div>
                                            <img src="<?php echo base_url() ?>assets/img/offer-1.jpg" alt="">
                                        </div>
                                        <div class="offer_caption">
                                            <div class="offer_bottom_caption">
                                                <p>100% Naturel</p>
                                                <div class="offer_title">Fruits frais</div>
                                            </div>
                                            <a href="<?php echo base_url() ?>produit/liste/7" class="btn offer_box_btn">Fruits frais</a>
                                        </div>
                                    </div>
                                </div>





                            </div>
                        </div>
                    </div>
                </div>
                <div class="ht-25"></div>
            </section>
            <div class="clearfix"></div>
            <!-- ======================== Offer Banner End ==================== -->


            <!-- ======================== Fresh Start ==================== -->
            <section class="pt-0 pb-5">
                <div class="container"><br>

<!--                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="sec-heading-flex pl-2 pr-2">
                                <div class="sec-heading-flex-one">
                                    <h2>Fresh</h2>
                                </div>
                                <div class="sec-heading-flex-last">
                                    <a href="#" class="btn btn-theme">View More<i class="ti-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="owl-carousel products-slider owl-theme">


                <?php if ($produit != null) :  ?>
                  <?php foreach ($produit as $row) :  ?>



                                <!-- Single Item -->
                                <div class="item">
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
                                                <h4 class="woo_pro_title"><a href="<?php echo base_url() ?>produit/detail/<?php echo $row->id; ?>"><?php echo $row->titre_actu; ?> </a></h4>
                                            </div>
                                            <div class="woo_price" title="Conditionnement">
                                                Condt : <h6><?php echo $row->conditionnement; ?> </h6>
                                            </div>
                                        </div>
                                        <div class="woo_product_cart hover">
                                            <ul>

                                                <li><a href="<?php echo base_url() ?>produit/detail/<?php echo $row->id; ?>" class="woo_cart_btn btn_view"><i class="ti-eye"></i></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>


                  <?php endforeach ?>
                <?php endif ?>





                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
            <!-- ======================== Fresh End ==================== -->





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
        <!-- ============================================================== -->
        <!-- This page plugins -->
        <!-- ============================================================== -->

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

    </body>
</html>
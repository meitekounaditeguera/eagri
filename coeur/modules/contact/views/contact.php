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

      <!-- =========================== Breadcrumbs =================================== -->
      <div class="breadcrumbs_wrap dark">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="text-center">
                <h2 class="breadcrumbs_title">Contacts</h2>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Contacts</li>
                  </ol>
                </nav>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- =========================== Breadcrumbs =================================== -->


      <!-- =========================== Contact Us =================================== -->
      <section class="gray">
        <div class="container">



          <div class="row mt-5 align-items-center">

            <div class="col-lg-5 col-md-12">


      <div class="row mb-4">

            <div class="col-lg-12 col-md-12">
              <div class="contact-box">
                <h4>Téléphones</h4>

             <?php echo $conta->tel;?>
              </div>
            </div>

            <div class="col-lg-12 col-md-12">
              <div class="contact-box">
                <h4>E-mail</h4>
            <?php echo $conta->email;?>
              </div>
            </div>

            <div class="col-lg-12 col-md-12">
              <div class="contact-box">
                <h4>Boite postale</h4>
                <?php echo $conta->bp;?>

              </div>
            </div>

          </div>






            </div>








            <div class="col-lg-7 col-md-12">
              <div class="contact-form">


     <form  class="contact-form-wrapper" action="<?php echo base_url() ?>contact" method="post">



                                  <?php
                                   $add = $this->session->flashdata('add');
                                  if($add == 'success'){
                                   echo '


                                    <div class="alert alert-success" role="alert"><strong>Félicitations!</strong> votre message a été envoyé
                    <button class="close" data-dismiss="alert" type="button" aria-label="Close"><span aria-hidden="true">x</span></button>
                  </div>
                                   ';
                                  }

                                  if($add == 'nosuccess'){
                                   echo '



                                    <div class="alert alert-danger" role="alert">Message non envoyé.
                    <button class="close" data-dismiss="alert" type="button" aria-label="Close"><span aria-hidden="true">x</span></button>
                  </div>

                                   ';
                                  }



                                $captcha = $this->session->flashdata('captcha');
                                if($captcha == 'empty'){
                                 echo "<div class='alert alert-danger role='alert'>Veuillez confirmer que vous n'êtes pas un robot.</div>";
                                }


                                  ?>


                  <div class="form-row">

                    <div class="form-group col-md-6">
                      <label>Nom</label>
                      <input type="text" class="form-control" placeholder="Nom" name="nom">
                    </div>

                    <div class="form-group col-md-6">
                      <label>Email</label>
                      <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                  </div>

                  <div class="form-group col-lg-12 col-md-12">
                    <label>Objet</label>
                    <input type="text" class="form-control" placeholder="Objet" name="objet">
                  </div>

                  <div class="form-group col-lg-12 col-md-12">
                    <label>Message</label>
                    <textarea name="message" class="form-control" placeholder="Message"></textarea>
                  </div>

                  <div class="form-group col-lg-12 col-md-12">
                  <button type="submit" class="btn btn-primary">Envoyer</button>
                  </div>

                </form>
              </div>
            </div>

          </div>

        </div>
      </section>
      <!-- =========================== Contact Us =================================== -->


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
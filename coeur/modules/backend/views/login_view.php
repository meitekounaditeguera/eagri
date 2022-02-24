<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Administration</title>


        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/bootstrap.min.css">
        <!-- flaticon CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/fonts/flaticon/flaticon.css">
        <!-- login CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/login.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>
    <body>
        <div class="content">
            <div class="logo text-center mb30">
                <a href="<?php echo site_url('backend') ?>"><img src="<?php echo base_url() ?>assets/admin/img/logo.png" alt="Logo" class="img-responsive"></a>
            </div>
            <h1 class="text-center h1-title mb30">Accès sécurisé</h1>

            <?php
                $login = $this->session->flashdata('login');
                if($login == 'error'){
                   echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Login ou Mot de passe incorrect, Ressayez SVP
                   </div>';

                }
            ?>

            <form action="<?php echo site_url('login') ?>" method="post">

              <div class="form-group">
                <input type="text" class="form-control" required="required" value="<?php echo set_value('email'); ?>" name="email" placeholder="Email">
                <?php echo form_error('email','<span class="error">','</span>'); ?>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" required="required" name="password" placeholder="Mot de passe">
                <?php echo form_error('password','<span class="error">','</span>'); ?>
              </div>

              <button type="submit" class="btn btn-block btn-success">Connexion</button>
              <!--<a data-toggle="modal" href='#forget' class="forget-pass mb30">Mot de passe oublié ?</a>-->

            </form>


                     <?php



                                  $verifno = $this->session->flashdata('verifno'); //coompte inexistant

                                   if($verifno == 'success'){
                                           echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                          <strong>Désolé , compte e-mail non valide ...</strong>
                                           </div>';
                                         }


                                  $passoublie = $this->session->flashdata('passoublie'); //mot de passe oublie  OK

                                   if($passoublie == 'success'){
                                           echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                          <strong>MODIFICATION, un nouveau mot de passe vient de vous être envoyé sur votre E-mail avec succès...</strong>
                                           </div>';
                                    }
                               ?>

            <span class="text-center copyright">© <?php echo date('Y') ?> | Tous droits réservés</span>

        </div>

        <div class="modal fade" id="forget">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Entrez votre email et rcevez votre mot de passe</h4>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo site_url('backend/forgetpwd') ?>" method="post">

                          <div class="form-group" >
                            <input type="text" class="form-control" required="required" name="email" placeholder="Entrez votre email">
                            <?php //echo form_error('email','<span class="error">','</span>'); ?>
                          </div>

                          <!-- <button type="submit" class="btn btn-block btn-success">Envoyez</button> -->


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Envoyez</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery-2.1.4.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="<?php echo base_url() ?>assets/admin/js/bootstrap.min.js"></script>

    </body>
</html>
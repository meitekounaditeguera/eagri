<!DOCTYPE html>
<html lang="fr">
    <head>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Plateforme E-agri</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>assets/administration/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    </head>

    <body class="sb-nav-fixed">

        <?php include 'inc/entete.php'; ?>

        <?php include 'inc/gauche.php'; ?>


            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Administration</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Enregistrement des administrateurs</li>
                        </ol>

                                   <?php
                                    $ajout = $this->session->flashdata('ajout');
                                  

                                    if($ajout == '1'){

                                       echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                      <strong>Administrateur enregistré avec succès</strong>
                                       </div>';
                                    }
                                ?>



                        <form action="<?php  echo base_url()?>administration/administrateurs/ajouter_administrateur" method="post">
                          
                          <div class="form-group">
                            <label for="exampleFormControlInput1">NOM</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="nom">
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlInput1">PRENOM</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="prenom">
                          </div>

                           <div class="form-group">
                            <label for="exampleFormControlInput1">EMAIL</PRE></label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlInput1">MOT DE PASSE</PRE></label>
                            <input type="pwd" class="form-control" id="exampleFormControlInput1" name="mot_de_passe">
                          </div>

                           <div class="form-group">
                            <label for="exampleFormControlInput1">NUMERO TELEPHONE</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" name="numero_telephone">
                          </div>


                              
                              <div class="form-check">
                              <input class="form-check-input" type="radio" value="1" id="1" name="privilege" checked>
                              <label class="form-check-label" for="1"> Administrateur général</label>
                              </div>

                              <div class="form-check">
                              <input class="form-check-input" type="radio" value="2" id="2" name="privilege">
                              <label class="form-check-label" for="2">utilisateur</label>
                              </div>

                            <input class="btn btn-primary" type="submit" value="ENREGISTRER">
                            <input class="btn btn-primary" type="reset" value="ANNULER">


                      </form>


                    </div>
                </main>

<?php include 'inc/pied.php'; ?>


            </div>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url();?>assets/administration/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url();?>assets/administration/assets/demo/chart-area-demo.js"></script>
        <script src="<?php echo base_url();?>assets/administration/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="<?php echo base_url();?>assets/administration/js/datatables-simple-demo.js"></script>
    </body>
</html>
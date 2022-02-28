<!DOCTYPE html>
<html lang="fr">
    <head>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
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
                            <li class="breadcrumb-item active"> Modification des administrateurs</li>
                        </ol>


                              <?php
                                    $mod = $this->session->flashdata('mod');
                                  

                                    if($mod == '1'){
                                       echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                      <strong>administrateur modifié avec succès</strong>
                                       </div>';
                                    }
                                ?>


                     


                        <form action="<?php  echo base_url()?>administration/administrateurs/modifier_administrateur/<?php echo $get->idadmin;  ?>" method="post">
                          
                          <div class="form-group">
                            <label for="exampleFormControlInput1">NOM</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="nom" value="<?php echo  $get->nom;  ?>">
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlInput1">PRENOM</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="prenom" value="<?php echo $get->prenom;  ?>">
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlInput1">EMAIL</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="email" value="<?php echo $get->email;  ?>">
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlInput1">MOT DE PASSE</label>
                            <input type="pwd" class="form-control" id="exampleFormControlInput1" name="mot_de_passe" value="<?php echo $get->mot_de_passe;  ?>">
                          </div>

                           <div class="form-group">
                            <label for="exampleFormControlInput1">NUMERO TELEPHONE</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" name="numero_telephone" value="<?php echo $get->numero_telephone;  ?>">
                          </div>
 
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="privilege" id="1" value="1" <?php if($get->privilege =='1'){ echo "checked=''";}?> >
                                <label class="form-check-label" for="1">
                                 Administrateur général
                                </label>
                              </div>

                             <div class="form-check">
                                <input class="form-check-input" type="radio" name="privilege" id="2" value="2" <?php if($get->privilege =='2'){ echo "checked=''";}?>>
                                <label class="form-check-label" for="2">
                                 Utilisateur
                                </label>

                              </div>


                              

                 <!-- $idadmin=$this->uri->segment(4);
                  $this->administrateurs_model->update_administrateur($data,$idadmin);
                  $this->session->set_flashdata('mod', '1');
                  redirect_back();-->


                              
                              

                             <input type="hidden" name="idadmin" value="<?php echo $get->idadmin;?>">

                             <input class="btn btn-primary" type="submit" value="MODIFIER">
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
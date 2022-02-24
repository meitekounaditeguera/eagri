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
                            <li class="breadcrumb-item active"> Modification des agriculteurs</li>
                        </ol>


                              <?php
                                    $mod = $this->session->flashdata('mod');
                                  

                                    if($mod == '1'){
                                       echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                      <strong>Agriculteur modifié avec succès</strong>
                                       </div>';
                                    }
                                ?>




                        <form action="<?php  echo base_url()?>administration/agriculteurs/modifier_agriculteur/<?php echo $get->idagri;  ?>" method="post">

                          
                          <div class="form-group">
                            <label for="exampleFormControlInput1">NOM</label>
                       <input type="text" class="form-control" id="exampleFormControlInput1" name="nom" value="<?php echo $get->nom;  ?>">
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlInput1">PRENOM</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="prenom" value="<?php echo $get->prenom;  ?>">
                          </div>

                           <div class="form-group">
                            <label for="exampleFormControlInput1">EMAIL</PRE></label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="email" value="<?php echo $get->email;  ?>">
                          </div>

                           <div class="form-group">
                            <label for="exampleFormControlInput1">DATE DE NAISSANCE</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" name="date_naissance" value="<?php echo $get->date_naissance;  ?>">
                          </div>

                           <div class="form-group">
                            <label for="exampleFormControlInput1">LIEU DE NAISSANCE</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="lieu_naissance" value="<?php echo $get->lieu_naissance;  ?>">
                          </div>

                           <div class="form-group">
                            <label for="exampleFormControlInput1">TELEPHONE</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" name="telephone" value="<?php echo $get->telephone;  ?>">
                          </div>

                           <div class="form-group">
                            <label for="exampleFormControlInput1">BOITE POSTALE</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="boite_postale" value="<?php echo $get->boite_postale;  ?>">
                          </div>
                          
                           <div class="form-group">
                            <label for="exampleFormControlInput1">NOMBRE ANNEE</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" name="nombre_annee" value="<?php echo $get->nombre_annee;  ?>">
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlInput1">GENRE</label>
                               <select class="form-control" name="genre" >
                                 <option value="M" <?php if($get->genre =='M'){ echo "selected=''";}?>>Masculin</option>
                                 <option value="F" <?php if($get->genre =='F'){ echo "selected=''";}?>>Feminin</option>
                               </select>
                          </div>




                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">BIOGRAPHIE</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="biographie" rows="3"><?php echo $get->biographie;?></textarea>
                          </div>
                     


                             <input type="hidden" name="idagri" value="<?php echo $get->idagri;?>">

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
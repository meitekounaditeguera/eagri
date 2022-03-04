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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
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
                            <li class="breadcrumb-item active"> INFORMATION DE L'AGRICULTEUR </li>
                        </ol>


                              <?php
                                    $supp = $this->session->flashdata('supp');
                                  

                                    if($supp == '1'){
                                       echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                      <strong>Agriculteur supprimé avec succès</strong>
                                       </div>';
                                    }
                                ?>




                      
                        <form action="<?php  echo base_url()?>administration/agriculteurs/agriculteur_detail" method="post">
                      

                          
                          <div class="form-group">
                            <label for="exampleFormControlInput1"> <strong> Nom </strong> : </label> <?php echo $get->nom; ?>
                          </div>


                          <div class="form-group">
                            <label for="exampleFormControlInput1"> <strong> Prenom </strong>: </label> <?php echo $get->prenom; ?>
                          </div>

                           <div class="form-group">
                            <label for="exampleFormControlInput1"> <strong> Email </strong>: </label> <?php echo $get->email;  ?>
                          </div>

                           <div class="form-group">
                            <label for="exampleFormControlInput1"> <strong> Date de naissance </strong> : </label> <?php echo $get->date_naissance;  ?>
                          </div>

                           <div class="form-group">
                            <label for="exampleFormControlInput1"> <strong> Lieu de naissance </strong> : </label> <?php echo $get->lieu_naissance;  ?>
                          </div>

                           <div class="form-group">
                            <label for="exampleFormControlInput1"> <strong> Telephone </strong> : </label> <?php echo $get->telephone;  ?>
                          </div>

                           <div class="form-group">
                            <label for="exampleFormControlInput1"> <strong> Boite postale </strong> : </label> <?php echo $get->boite_postale;  ?>
                          </div>
                          
                           <div class="form-group">
                            <label for="exampleFormControlInput1"> <strong> Nombre annee </strong> : </label> <?php echo $get->nombre_annee;  ?>
                          </div>

                          <div class="form-group">
                          <label for="exampleFormControlInput1"> <strong> Genre </strong> : </label><?php if($get->genre =='M'){ echo "Masculin";}?>                                                      <?php if($get->genre =='F'){ echo "Feminin";}?>
                          </div>




                          <div class="form-group">
                            <label for="exampleFormControlTextarea1"> <strong> BIOGRAPHIE </strong> : </label> <?php echo $get->biographie;?>
                          </div>
                     


                             <input type="hidden" name="idagri" value="<?php echo $get->idagri;?>">
                             <input type="hidden" name="iddep" value="<?php echo $get->iddep;?>">



                             <a class="nav-link" href="<?php  echo base_url()?>administration/plantations/ajouter_plantation/<?php echo $get->idagri;?>"> <button type="button" class="btn btn-primary">  Ajouter un nouvel plantation </button> </a>


                        



                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               Liste des plantations
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>

                                            <th>NUM</th>
                                            <th>CULTURE</th>
                                            <th>SUPERFICIE</th>
                                            <th>LATITUDE</th>
                                            <th>LONGITUDE</th>
                                            <th>DEPARTEMENT</th>
                                            <th>TYPE CULTURE</th>
                                            <th>TACHES</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>

                                            <th>NUM</th>
                                            <th>CULTURE</th>
                                            <th>SUPERFICIE</th>
                                            <th>LATITUDE</th>
                                            <th>LONGITUDE</th>
                                            <th>DEPARTEMENT</th>
                                            <th>TYPE CULTURE</th>
                                            <th>TACHES</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>


         <?php
        $i=1;
         foreach($liste_plantation as $ligne) { ?>

                    <tr>

                        <td><?php echo $i; ?></td>
                        <td><?php echo $ligne->culture?></td>
                        <td><?php echo $ligne->superficie?> ha</td>
                        <td><?php echo $ligne->latitude?></td>
                        <td><?php echo $ligne->longitude?></td>
                        <td><?php echo $ligne->nomdep?></td>

                        <td>
                            <?php

                      if($ligne->type_culture =='T')
                    {
                        echo "Traditionnelle";
                    }

                      elseif ($ligne->type_culture =='M') 
                    {
                        echo "Moderne";
                    }
                     else
                    {
                        echo "n'affiche rien";
                    }

                    ?>

                        </td>
                          <td align="center">

                                <div class="d-flex">

                                 <a title="Modifier" href="<?php echo base_url()?>administration/plantations/plantation_recup/<?php echo $ligne->idplant?>" class="btn btn-primary shadow btn-xs sharp mr-1"> <i class="bi bi-pencil-square"></i> </a><br>&nbsp; 


                                 <button  type="button" title="Supprimer"
                                 onClick="javascript:if(window.confirm('Voulez-vous supprimer ?')){location.href='<?php echo site_url('administration/plantations/plantation_supp/'.$ligne->idplant) ; ?>'; return true;} else {return false;}"class="btn btn-secondary shadow btn-xs sharp">
                                <i class="bi bi-trash-fill"> </i> </a>

                                </div>
                                </td> 






                    </tr>
         <?php $i++;} ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>

                          


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
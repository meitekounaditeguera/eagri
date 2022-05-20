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
                            <li class="breadcrumb-item active"> Modification des plantations</li>
                        </ol>


                              <?php
                                    $mod = $this->session->flashdata('mod');
                                  

                                    if($mod == '1'){
                                       echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                      <strong>Plantation modifiée avec succès</strong>
                                       </div>';
                                    }
                                ?>




                          <form action="<?php  echo base_url()?>administration/plantations/modifier_plantation/<?php echo $get->idplant;  ?>" method="post">


                            <div class="form-group">
                            <label for="exampleFormControlSelect1">CULTURE</label>
                            <select class="form-control" id="culture" name="culture" value="<?php echo $get->culture;  ?>">
                             
                                <option value="cacoa">ccaoa</option>
                                <option value="mais">mais</option>
                                <option value="manioc">manioc</option>
                                <option value="banane">banane</option>
                                <option value="riz">riz</option>
                                <option value="cafe">cafe</option>
                                <option value="hevea">hevea</option>
                              

                             </select>



                                    <p>Veuillez choisir votre type de culture :</p>
                


                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="type_culture" id="Moderne" value="M" <?php if($get->type_culture =='M'){ echo "checked=''";}?> >
                                <label class="form-check-label" for="Moderne">
                                 Moderne
                                </label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="type_culture" id="Traditionnelle" value="T" <?php if($get->type_culture =='T'){ echo "checked=''";}?>>
                                <label class="form-check-label" for="Traditionnelle">
                                  Traditionnelle
                                </label>

                              </div>






                          <div class="form-group">
                            <label for="exampleFormControlInput1">SUPERFICIE</label>
                            <input type="text" class="form-control" id="superficie" name="superficie" value="<?php echo $get->superficie;  ?>">
                          </div>



                          <div class="form-group">
                            <label for="exampleFormControlInput1">LATITUDE</PRE></label>
                            <input type="text" class="form-control" id="latitude" name="latitude" value="<?php echo $get->latitude;  ?>">
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlInput1">LONGITUDE</label>
                            <input type="text" class="form-control" id="longitude" name="longitude" value="<?php echo $get->longitude;  ?>">
                          </div>


                           <div class="form-group">
                          <label for="exampleFormControlSelect1"><DATA>DEPARTEMENT</DATA></label>
                            <select class="form-control" id="departement" name="departement" >
                              
                               <?php

                               foreach($dep as $ligne) { ?>

                                <option value="<?php echo $ligne->iddep;?>" <?php if($get->iddep == $ligne->iddep){ echo "selected=''";}?>> <?php echo $ligne->nomdep;?></option>
                          
                                <?php } ?>
                                 
                               
                             </select><br>


                            <input type="hidden" name="idplant" value="<?php echo $get->idplant;?>">

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
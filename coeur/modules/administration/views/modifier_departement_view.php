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
                            <li class="breadcrumb-item active"> Modification des administrateurs</li>
                        </ol>


                              <?php
                                    $mod = $this->session->flashdata('mod');
                                  

                                    if($mod == '1'){
                                       echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                      <strong>departement modifié avec succès</strong>
                                       </div>';
                                    }
                                ?>


                     


                        <form action="<?php  echo base_url()?>administration/departements/modifier_departement/<?php echo $get->iddep;  ?>" method="post">
                          
                          <div class="form-group">
                            <label for="exampleFormControlInput1">NOM</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="nom" value="<?php echo  $get->nomdep;;  ?>">
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlInput1">SUPERFICIE</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="superficie" value="<?php echo $get->superficie;  ?>">
                          </div>



                              

                 <!-- $idddep=$this->uri->segment(4);
                  $this->ddepistrateurs_model->update_ddepistrateur($data,$idddep);
                  $this->session->set_flashdata('mod', '1');
                  redirect_back();-->


                              
                              

                             <input type="hidden" name="iddep" value="<?php echo $get->iddep;?>">

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
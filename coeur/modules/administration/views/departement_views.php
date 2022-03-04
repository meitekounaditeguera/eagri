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
                            <li class="breadcrumb-item active">Liste des departements</li>
                        </ol>

                          <a class="nav-link" href="<?php  echo base_url()?>administration/departements/ajouter_departement"> <button type="button" class="btn btn-primary">  Ajouter un nouveau departement </button> </a>


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               Liste des departements
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                           
                                                <th>NUM</th>
                                                <th>NOM</th>
                                                <th>SUPERFICIE</th>
                                                <th>TACHE</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                               <th>NUM</th>
                                                <th>NOM</th>
                                                <th>SUPERFICIE</th>
                                                <th>TACHE</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>


         <?php
        $i=1;
  foreach($abc as $ligne) { ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $ligne->nomdep?></td>
                        <td><?php echo $ligne->superficie?> Km2</td>
                      

                        
                            <td align="center">

                                <div class="d-flex">

                                 <a title="Modifier" href="<?php echo base_url()?>administration/departements/departement_recup/<?php echo $ligne->iddep?>" class="btn btn-primary shadow btn-xs sharp mr-1"> <i class="bi bi-pencil-square"> </i> </a>&nbsp;  



                                <button  type="button" title="Supprimer" 
                                 onClick="javascript:if(window.confirm('Voulez-vous supprimer ?')){location.href='<?php echo site_url('administration/departements/departement_supp/'.$ligne->iddep) ; ?>'; return true;} else {return false;}"class="btn btn-secondary shadow btn-xs sharp">
                               <i class="bi bi-trash-fill"> </i> </a>

                                </div>
                                </td>

                                                    


                    </tr>
         <?php $i++;} ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
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
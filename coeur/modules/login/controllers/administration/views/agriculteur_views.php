<!DOCTYPE html>
<html lang="en">
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
                            <li class="breadcrumb-item active">Liste des agriculteurs</li>
                        </ol>



                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               Liste des agriculteurs
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>NUM</th>
                                            <th>NOM</th>
                                            <th>PRENOM</th>
                                            <th>EMAIL</th>
                                            <th>DATE_NAISSANCE</th>
                                            <th>LIEU_NAISSANCE</th>
                                            <th>TELEPHONE </th>
                                            <th>GENRE</th>
                                            <th>TACHES</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>NUM</th>
                                            <th>NOM</th>
                                            <th>PRENOM</th>
                                            <th>EMAIL</th>
                                            <th>DATE_NAISSANCE</th>
                                            <th>LIEU_NAISSANCE</th>
                                            <th>TELEPHONE </th>
                                            <th>GENRE</th>
                                            <th>TACHES</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>


         <?php
        $i=1;
         foreach($abc as $ligne) { ?>

                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $ligne->nom?></td>
                        <td><?php echo $ligne->prenom?></td>
                        <td><?php echo $ligne->email?></td>
                        <td><?php echo $ligne->date_naissance?></td>
                        <td><?php echo $ligne->lieu_naissance?></td>
                        <td><?php echo $ligne->telephone?></td>
                        <td>
                            <?php

                              if($ligne->genre =='M')
                            {
                                echo "Masculin";
                            }

                              else
                            {
                                echo "Feminin";
                            }

                            ?>

                        </td>

                        <td>
                           <a href="<?php base_url()?>modifier_agriculteur/<?php echo $ligne->idagri?>"> MOD</a>

                        - <button  type="button"
                            onClick="javascript:if(window.confirm('Voulez-vous supprimer ?')){location.href='<?php echo site_url('agriculteurs/agriculteur_supp/'.$ligne->idagri) ; ?>'; return true;} else {return false;}" >SUPP</button></td>



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
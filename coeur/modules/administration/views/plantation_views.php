<!DOCTYPE html>
<html lang="en">
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
                            <li class="breadcrumb-item active">Liste des plantations</li>
                        </ol>
                     
                      

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
                                           
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>


         <?php
        $i=1;
         foreach($abc as $ligne) { ?>

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
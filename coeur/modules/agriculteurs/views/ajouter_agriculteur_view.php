<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <title>Liste des agriculteurs</title>
    </head>


    <body >


                        <?php
                            $ajout = $this->session->flashdata('ajout');
                             if($ajout == '1'){
                                 echo 'Agriculteur ajouté avec succès';
                             }
                        ?>

<BR><BR>
           <a href="<?php base_url();?>agriculteur"> AFFICHER LES AGRICULTEURS</a>
<BR><BR>


        <form action="<?php base_url();?>ajouter_agriculteur" method="post">

            NOM : <input type="text" name="nom"><br><br>
            PRENOMS : <input type="text" name="prenom"><br><br>
            EMAIL : <input type="email" name="email">
            <?php echo form_error('email'); ?><br><br>
            DATE NAISSANCE : <input type="date" name="date_naissance"><br><br>
            LIEU NAISSANCE : <input type="text" name="lieu_naissance"><br><br>
            BOITE POSTALE : <input type="text" name="boite_postale"><br><br>
            TELEPHONE : <input type="number" name="telephone">
            <?php echo form_error('telephone'); ?><br><br>
            NOMBRE ANNEE : <input type="text" name="nombre_annee"><br><br>
            BIOGRAPHIE :  <!--permet de faire une zone de texte-->
            <textarea cols="70" rows="7" placeholder="ceci est une zone de texte " name="biographie"></textarea> <br/>

           


            <br>
            GENRE :<select name="genre">
                
                    <option value="M">Masculin</option>
                    <option value="F">Feminin</option>

                </select><br><br>

            <input type="submit" name="bouton" value="ENREGISTRER">
            <input type="reset" name="bouton" value="ANNULER">


        </form>









    </body>
</html>
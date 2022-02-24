<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <title>Modifier des agriculteurs</title>
    </head>


    <body >


                        <?php
                            $mod = $this->session->flashdata('mod');
                             if($mod == '1'){
                                 echo 'Agriculteur modifié avec succès';
                             }
                        ?>

<BR><BR>
           <a href="<?php base_url();?>agriculteur"> AFFICHERS LES AGRICULTEURS </a>
<BR><BR>
            MODIFICATION DE L'AGRICULTEUR <strong><em><mark><?php echo $agri->nom;?></mark></em></strong>
<BR><BR>

        <form action="<?php base_url();?>modifier_agriculteur/<?php echo $agri->idagri;?>" method="post">

            NOM : <input type="text" name="nom" value="<?php echo $agri->nom;?>"><br><br>
            PRENOMS : <input type="text" name="prenom" value="<?php echo $agri->prenom;?>"><br><br>
            EMAIL : <input type="email" name="email" value="<?php echo $agri->email;?>">
            <?php echo form_error('email'); ?><br><br>
            DATE NAISSANCE : <input type="date" name="date_naissance"  value="<?php echo $agri->date_naissance;?>"><br><br>
            LIEU NAISSANCE : <input type="text" name="lieu_naissance" value="<?php echo $agri->lieu_naissance;?>"><br><br>
            BOITE POSTALE : <input type="text" name="boite_postale" value="<?php echo $agri->boite_postale;?>"><br><br>
            TELEPHONE : <input type="number" name="telephone" value="<?php echo $agri->telephone;?>">
           <br><br>
            NOMBRE ANNEE : <input type="number" name="nombre_annee" value="<?php echo $agri->nombre_annee;?>"><br><br>
            BIOGRAPHIE :  <!--permet de faire une zone de texte-->
            <textarea cols="70" rows="7" placeholder="ceci est une zone de texte " name="biographie" ><?php echo $agri->biographie;?></textarea> <br/>

           


            <br>
            GENRE :<select name="genre">
                
<option value="M" <?php if($agri->genre =='M') { echo "selected=''";}?>>Masculin</option>
<option value="F" <?php if($agri->genre =='F') { echo "selected=''";}?>>Feminin</option>

                </select><br><br>

            <input type="hidden" name="idagri" value="<?php echo $agri->idagri;?>">

            <input type="submit" name="bouton" value="ENREGISTRER">
            <input type="reset" name="bouton" value="ANNULER">


        </form>









    </body>
</html>
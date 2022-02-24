<?php



tcpdf();
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = "Demande_".$demande->numero_demande;
$obj_pdf->SetTitle($title);
$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title, $demande->email_demande."\nDu ".date('d-m-Y H:i:s',strtotime($demande->date_demande)));
//$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title, PDF_HEADER_STRING);
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$obj_pdf->SetFont('helvetica', '', 9);
$obj_pdf->setFontSubsetting(false);
$obj_pdf->AddPage();
ob_start();
    // we can have any view part here like HTML, PHP etc


          // $content='';
           //if ($listdemande_new != null){
               // foreach ($listdemande_new as $row){

                $nature=$demande->nature_demande;
                $email=$demande->email_demande;
                $datedemande=date('d-m-Y H:i:s',strtotime($demande->date_demande));
                $datesouhaite=date('d-m-Y',strtotime($demande->date_souhaitee));
                $duree=$demande->duree_sejour;
                $voie=$demande->voie_demande;
                $avis=$demande->statut_demande;
                $doc=$demande->doc_manque;

$content="<strong>Nature de la demande:</strong> ".$nature."<br><br>"."<strong>Email du demandeur:</strong> ".$email."<br><br>";
$content.="<strong>Date de voyage souhaitée:</strong> ".$datesouhaite."<br><br>"."<strong>Durée du séjour:</strong> ".$duree."<br><br>";
$content.="<strong>Voie de voyage:</strong> ".$voie."<br><br>";

if($avis==3){$av="FAVORABLE";}
if($avis==1){$av="FAVORABLE";}
if($avis==2){$av="FAVORABLE";}
if($avis==4){$av="REPORT";
  if(!empty($doc)) { $docm="<br><br><strong>Document(s) manquant(s):</strong> ".$doc."<br><br>";  }else{ $docm="";}

}
if($avis==0){$av="NON ENCORE DONNE";}
$content.="<strong><u>Avis de la commission</u>:</strong>".$av.$docm;

                //}
         // }

ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');
$obj_pdf->Output($title.'.pdf', 'D');


?>
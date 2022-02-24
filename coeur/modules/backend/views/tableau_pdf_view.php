<?php


             if ($liste_tableau != null) {
              $header="<table><tr> <td>NUMERO DEMANDE</td><td>EMAIL</td><td>NATURE DEMANDE</td><td>DATE-DEMANDE</td><td>PAYS</td><td>DATE-DE-VOTAGE-SOUHAITEE</td><td>DUREE DU SEJOUR</td> <td>VOIE</td></tr>";
              $content1="";
             foreach ($liste_tableau as $row){

              $content1.="<tr> <td>$row->numero_demande</td> <td>$row->email_demande</td> <td>$row->nature_demande</td> <td>$row->date_demande</td> <td>$row->pays_demande</td> <td>$row->date_souhaitee</td> <td>$row->duree_sejour</td> <td>$row->voie_demande</td></tr>";

                }
               }

               $footer="</table>";
               $content=$header.$content1.$footer;



tcpdf();
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = "Liste-des-Demandes";
$obj_pdf->SetTitle($title);
$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title,date("d-m-Y H:i:s"));
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
$obj_pdf->AddPage("L");
ob_start();
    // we can have any view part here like HTML, PHP etc



ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');
$obj_pdf->Output($title.'.pdf', 'D');


?>
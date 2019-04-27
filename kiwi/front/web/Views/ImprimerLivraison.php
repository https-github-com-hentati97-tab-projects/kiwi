<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 21/04/2018
 * Time: 23:51
 */

require_once ('../pdf/mc_table.php');
$id=$_GET["id"];
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Times","I",12);
$pdf->SetTextColor(124,112,103);
$pdf->MultiCell(0,10,"\n\n\n\n Details sur la livraison: \n\n");
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Times","",12);
$dbConnection = mysqli_connect('localhost', 'root', 'root', 'Yasmine');

$query  = "SELECT * FROM Livraison WHERE ID_Livraison=$id";
$result = mysqli_query($dbConnection, $query);

if (mysqli_num_rows($result) > 0) {


    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $idLivraison = $row['ID_Livraison'];
        $idLivreur = $row['ID_Livreur'];
        $Date = $row['Date'];
        $Montant = $row['Montant'];

        $pdf->Cell(50,10,"Livraison Numero :",1,0);
        $pdf->Cell(95,10,"{$idLivraison} ",1,1);
        $pdf->Cell(50,10,"ID livreur: ",1,0);
        $pdf->Cell(95,10,"{$idLivreur} ",1,1);
        $pdf->Cell(50,10,"Le Date : ",1,0);
        $pdf->Cell(95,10,"{$Date} ",1,1);
        $pdf->Cell(50,10,"Le Montant : ",1,0);
        $pdf->Cell(95,10,"{$Montant} ",1,1);

    } }


$pdf->SetFont("Courier","B",9);
$pdf->MultiCell(0,10," Signature du Responsable");

$pdf->output("Seif.pdf","");


header("Content-Type: application/pdf");
header("Content-Disposition: attachment;filename=Seif".$_GET['id'].".pdf");
readfile("Seif.pdf");
unlink("Seif.pdf");

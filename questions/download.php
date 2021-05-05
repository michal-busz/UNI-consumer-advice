<?php
require('../lib/fpdf/fpdf.php');

class PDF extends FPDF
{
// Page header
    function Header()
    {
        // Logo

        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(30,10,'Refund Letter',0,0,'C');
        // Line break
        $this->Ln(20);
    }

// Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}
//date_format($_POST['purchaseDate'],"d/m/Y ");;

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',11);
$pdf->Cell(0,5,$_POST['company'],0,1);
$pdf->Cell(0,5,$_POST['stNo']." ".$_POST['address1']." ".$_POST['address2'],0,1);
//
$pdf->Cell(0,5,$_POST['town']." ".$_POST['postCode'],0,1);
$pdf->Cell(0,10,date("d/m/Y"),0,1);
$pdf->Cell(0,5,"Dear Sir or Madam, ",0,1);
$pruchaseDate = new DateTime($_POST['purchaseDate']);
$deliveryDate = new DateTime($_POST['deliveryDate']);
$pdf->Cell(0,5,"On ".date_format($pruchaseDate,"d/m/Y").", I purchased an ".$_POST['productName']."  and received it on ".date_format($deliveryDate,"d/m/Y")." I have since discovered that the ".$_POST['productName'],0,1);
$pdf->Cell(0,5,"has the following problems:",0,1);
$pdf->Cell(0,10,$_POST['problems'],0,1);
$pdf->Cell(0,5,"The Consumer Rights Act makes it an implied term of the contract that goods be as described, fit for purpose",0,1);
$pdf->Cell(0,5,"and of satisfactory quality. As you are in breach of contract, I am returning the ".$_POST['productName']." and request that you refund",0,1);
define('POUND', chr(163));
$pdf->Cell(0,5,"the sum paid to you of ".$_POST['price'].POUND,0,1);
$pdf->Cell(0,5,"",0,1);
$pdf->Cell(0,5,"If I do not receive a response or acceptable proposals for settlement of my claim in the next seven days of the date",0,1);
$pdf->Cell(0,5,"of this letter, I intend to issue a claim against you in the county court. ",0,1);
$pdf->Cell(0,5,"",0,1);
$pdf->Cell(0,5,"Yours sincerely,  ".$_POST['name'],0,1);
$pdf->Cell(0,5,'Email: '.$_POST['email'],0,1);
$pdf->Cell(0,5,'Number: '.$_POST['number'],0,1);
$pdf->Cell(0,5,"",0,1);
$pdf->Cell(0,5,"My proof of purchase attached below",0,1);
$pdf->Image($_FILES["image"]["name"],0,140,240,150);

$pdf->Output();
unlink($_FILES["image"]["name"]);
?>
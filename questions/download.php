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
$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,5,$_POST['company'],0,1);
$pdf->Cell(0,5,$_POST['stNo'],0,1);
$pdf->Cell(0,5,$_POST['address1'],0,1);
$pdf->Cell(0,5,$_POST['address2'],0,1);
$pdf->Cell(0,5,$_POST['town'],0,1);
$pdf->Cell(0,5,$_POST['postCode'],0,1);
$pdf->Cell(0,5,date("Y/m/d"),0,1);
$pdf->Cell(0,5,$_POST['subject'],0,1);
$pdf->Cell(0,5,"Dear Sir or Madam, ",0,1);
$pdf->Cell(0,5,"Legal text ",0,1);
$pdf->Cell(0,5,"",0,1);
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
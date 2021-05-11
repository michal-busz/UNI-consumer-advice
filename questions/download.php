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
        if($_POST['pdf'] == 'repair')
            $this->Cell(30,10,'Request repair/replacement letter',0,0,'C');
        else
            $this->Cell(30,10,'Request refund letter',0,0,'C');
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

$pdf->Cell(0,5,$_POST['town']." ".$_POST['postCode'],0,1);
$pdf->Cell(0,10,date("d/m/Y"),0,1);
$pdf->Cell(0,5,"Dear Sir or Madam, ",0,1);
$pruchaseDate = new DateTime($_POST['purchaseDate']);
if(isset($_POST['deliveryDate']))
$deliveryDate = new DateTime($_POST['deliveryDate']);
define('POUND', chr(163));
// generic template END
if($_POST['pdf']== "refund") {
    $pdf->Cell(0, 5, "On " . date_format($pruchaseDate, "d/m/Y") . ", I purchased " . $_POST['productName'] . "  and received it on " . date_format($deliveryDate, "d/m/Y") . " I have since discovered that the " . $_POST['productName'], 0, 1);
    $pdf->Cell(0, 5, "has the following problems:", 0, 1);
    $pdf->Cell(0, 10, $_POST['problems'], 0, 1);
    $pdf->Cell(0, 5, "The Consumer Rights Act makes it an implied term of the contract that goods be as described, fit for purpose ", 0, 1);
    $pdf->Cell(0, 5, "and of satisfactory quality. As you are in breach of contract, I am returning the " . $_POST['productName'] , 0, 1);
    $pdf->Cell(0, 5, "and request that you refund the sum paid to you of " . $_POST['price'] . POUND, 0, 1);
    $pdf->Cell(0, 5, "", 0, 1);
    $pdf->Cell(0, 5, "If I do not receive a response or acceptable proposals for settlement of my claim in the next seven days of the date", 0, 1);
    $pdf->Cell(0, 5, "of this letter, I intend to issue a claim against you in the county court. ", 0, 1);
}elseif($_POST['pdf']== "repair"){
    $pdf->Cell(0, 5, "On " . date_format($pruchaseDate, "d/m/Y") . ", I purchased " . $_POST['productName'] . " and received it on " . date_format($deliveryDate, "d/m/Y") . " I have since found the following problems", 0, 1);
    $pdf->Cell(0, 5, "on " . $_POST['productName'], 0, 1);

    $pdf->Cell(0, 10, $_POST['problems'], 0, 1);
    $pdf->Cell(0, 5, "The Consumer Rights Act makes it an implied term of the contract that goods be as described, of satisfactory ", 0, 1);
    $pdf->Cell(0, 5, "quality and fit for purpose. As you are in breach of contract, I am entitled to have the " . $_POST['productName'] . " either replaced", 0, 1);
    $pdf->Cell(0, 5, "or repaired, I hope to be able to receive a REPAIR/REPLACEMENT and I would like to hear from you to confirm", 0, 1);
    $pdf->Cell(0, 5, "you will do this within the 14 days from the date of this letter. I look forward to hearing from you and your proposals", 0, 1);
    $pdf->Cell(0, 5, "for settlement of my claim within seven days of the date of this letter.", 0, 1);

}elseif($_POST['pdf']== "digital"){
    $pdf->Cell(0, 5, "Date of purchase of download: " . date_format($pruchaseDate, "d/m/Y") , 0, 1);
    $pdf->Cell(0, 5, "Reference of download: " . $_POST['reference'] , 0, 1);
    $pdf->Cell(0, 5, "On " . date_format($pruchaseDate, "d/m/Y") . ", I purchased " . $_POST['productName'] . " (".$_POST['reference'].")  from your online store.", 0, 1);
    $pdf->Cell(0, 5, "This download was faulty since", 0, 1);
    $pdf->Cell(0, 10, $_POST['problems'], 0, 1);
    $pdf->Cell(0, 5, "I am therefore requesting under the Consumer Rights Act 2015 that you REPAIR OR REPLACE THE ".$_POST['productName'], 0, 1);
    $pdf->Cell(0, 5, "or if that is not possible provide a refund of ".$_POST['price'].POUND." PAID AT THE TIME and would ask for your confirmation that ", 0, 1);
    $pdf->Cell(0, 5, "this will be provided in the next seven days.", 0, 1);
}elseif($_POST['pdf']== "vehicle"){
    $pdf->Cell(0, 5, "On " . date_format($pruchaseDate, "d/m/Y") . ", I purchased " . $_POST['productName'] . " (".$_POST['vehcileModel'].")  from ".$_POST['company'] , 0, 1);
    $pdf->Cell(0, 5, "This vehicle was faulty since", 0, 1);
    $pdf->Cell(0, 10, $_POST['problems'], 0, 1);
    $pdf->Cell(0, 5, "I am therefore requesting under the Consumer Rights Act 2015 that you REPAIR OR REPLACE THE ITEM", 0, 1);
    $pdf->Cell(0, 5, " AT YOUR OWN COST. If the vehicle is still faulty after the first attempt, please provide a refund of ", 0, 1);
        $pdf->Cell(0, 5, $_POST['price'].POUND." PAID AT THE TIME and would ask for your confirmation that this will be provided in the next seven days. ", 0, 1);

}

// proof of purchase
$pdf->Cell(0, 5, "", 0, 1);
$pdf->Cell(0, 5, "Yours sincerely,  " . $_POST['name'], 0, 1);
$pdf->Cell(0, 5, 'Email: ' . $_POST['email'], 0, 1);
$pdf->Cell(0, 5, 'Number: ' . $_POST['number'], 0, 1);
$pdf->Cell(0, 5, "", 0, 1);
$pdf->Cell(0,5,"My proof of purchase attached below",0,1);
$pdf->Image($_FILES["image"]["name"],0,140,240,130);

$pdf->Output();
unlink($_FILES["image"]["name"]);
?>
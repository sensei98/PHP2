<?php 

require_once  '../../PHP-2/vendor/autoload.php';
require_once('../../PHP-2/phpqrcode/qrlib.php');

//grabbing variables
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

//creating a pdf instance
$pdf = new FPDF();

$pdf->AddPage('P', 'A4');
$pdf->SetAutoPageBreak(true, 10);
$pdf->SetFont('Arial', '', 12);
$pdf->SetTopMargin(10);
$pdf->SetLeftMargin(10);
$pdf->SetRightMargin(10);

//TITLE
$pdf->SetFont('Arial', 'B', 20);
$pdf->Text(27, 24, 'Your Details');


//firstname //lastname
$pdf->SetFont('', 'B', 12);
$pdf->Text(10, 50, 'First Name: ');

$pdf->SetXY(60, 50);
$pdf->Cell(0, 4, $fname. ' ' .$lname, 0, 1, 'C', false);


//email
$pdf->SetFont('', 'B', 12);
$pdf->Text(10, 60, 'Email: ');

$pdf->SetXY(60, 60);
$pdf->Cell(0, 4, $email, 0, 1, 'C', false);

//phone
$pdf->SetFont('', 'B', 12);
$pdf->Text(10, 70, 'Phone: ');

$pdf->SetXY(60, 70);
$pdf->Cell(0, 4, $phone, 0, 1, 'C', false);



//message
if($message){
    $pdf->SetFont('', 'B', 12);
    $pdf->Text(10, 80, 'Message: ');

    $pdf->SetXY(60, 80);
    $pdf->Cell(0, 4, $message, 0, 1, 'C', false);
}

$pdf->SetXY(50, 100);
$pdf->Image('../../PHP-2/public/img/qrcode/p-img.jpg',60,120,90,0,'JPG');

QRcode::png('$data',"../../PHP-2/public/img/qrcode/code.png");    

//adding qr code

$data = "ThankYou".$fname . "" .$lname;

$pdf ->image("http://localhost:8888/php/PHP/PHP-2/controller/generateQR.php?code=$data"  ,160,10,20,20, "png" ); //replace the http with address when deployed 

$pdf->Output();
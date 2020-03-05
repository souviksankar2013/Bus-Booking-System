<?php

require('fpdf/mem_image.php');
include('config.php');
$id2=$_GET['id2'];
$history=mysqli_query($con,"SELECT * FROM history WHERE id2='$id2'");
if($history)
{
	$bag=mysqli_fetch_array($history);
}
$carlicence=$bag['carlicence'];
$busname=mysqli_query($con,"SELECT * FROM car WHERE licenceno='$carlicence'");
if($busname)
{
	$bagcar=mysqli_fetch_array($busname);
}

$driver=mysqli_query($con,"SELECT * FROM driver WHERE carlicence = '$carlicence'") or die(mysqli_error($con));
$bagdriver= mysqli_fetch_array($driver);


$route=mysqli_query($con,"SELECT * FROM route WHERE carlicence = '$carlicence'") or die(mysqli_error($con));
$bagroute= mysqli_fetch_array($route);
$company=$bagcar['company_name'];
$admin=mysqli_query($con,"SELECT * FROM admin WHERE company_name = '$company'") or die(mysqli_error($con));
$bagadmin= mysqli_fetch_array($admin);
$image='ADMINS/'.$bagadmin['fpath'];
$pdf = new PDF_MemImage();





$pdf->AddPage();
$pdf->SetFont('Arial','',18);
$pdf->Cell(34,5,' ',0,0);
$pdf->Cell(155,5,'Bus4You Private Limited',0,0);
$pdf->Image("images/logo.png",5,5,40,20);
$pdf->Image("images/sig.png",145,195,40,20);

$pdf->Cell(34,5,' ',0,0);
$pdf->Cell(155,5,'Bus4You Private Limited',0,1);

$pdf->SetFont('Arial','',10);
$pdf->Cell(34,5,' ',0,0);
$pdf->Cell(155,5,'BrandNext, Silpangan',0,1);

$pdf->SetFont('Arial','',10);
$pdf->Cell(34,5,' ',0,0);
$pdf->Cell(155,5,'Salt Lake, Kolkata-700091',0,1);

$pdf->Line(0,27,219,27);
$pdf->Cell(34,5,' ',0,0);
$pdf->Cell(155,5,' ',0,1);


$pdf->SetFont('Arial','',18);
$pdf->Cell(60,0,' ',0,0);
$pdf->Cell(129,3,'Booking Invoice Copy',0,1);
$pdf->Line(70,36,135,36);

$pdf->Cell(60,9,' ',0,0);
$pdf->Cell(129,9,' ',0,1);

$pdf->SetFont('Arial','',14);
$pdf->Cell(1,0,' ',0,0);
$pdf->Cell(188,3,'Personal Details:-',0,1);
$pdf->Line(12,46,47,46);

$pdf->Cell(60,8,' ',0,0);
$pdf->Cell(129,8,' ',0,1);

$pdf->SetFont('Arial','',12);
$pdf->Cell(30,0,' ',0,0);
$pdf->Cell(19,3,'Name:-',0,0);
$pdf->Cell(141,3,$bag['name'],0,1);




$pdf->Cell(60,4,' ',0,0);
$pdf->Cell(129,4,' ',0,1);


$pdf->Cell(30,0,' ',0,0);
$pdf->Cell(20,3,'Address:-',0,0);
$pdf->Cell(150,3,$bag['address'],0,1);



$pdf->Cell(60,4,' ',0,0);
$pdf->Cell(129,4,' ',0,1);


$pdf->Cell(30,0,' ',0,0);
$pdf->Cell(20,3,'Email:-',0,0);
$pdf->Cell(154,3,$bag['email'],0,1);



$pdf->Cell(60,4,' ',0,0);
$pdf->Cell(129,4,' ',0,1);


$pdf->Cell(30,0,' ',0,0);
$pdf->Cell(20,3,'Phone:-',0,0);
$pdf->Cell(154,3,$bag['mob'],0,1);



$pdf->Cell(60,9,' ',0,0);
$pdf->Cell(129,9,' ',0,1);

$pdf->SetFont('Arial','',14);
$pdf->Cell(1,0,' ',0,0);
$pdf->Cell(188,3,'Booking Details:-',0,1);
$pdf->Line(12,90,47,90);


$pdf->Cell(60,8,' ',0,0);
$pdf->Cell(129,8,' ',0,1);


$pdf->SetFont('Arial','',12);
$pdf->Cell(30,0,' ',0,0);
$pdf->Cell(20,3,'Route:-',0,0);
$pdf->Cell(154,3,$bag['source'].' - '.$bag['destination'],0,1);


$pdf->Cell(60,4,' ',0,0);
$pdf->Cell(129,4,' ',0,1);


$pdf->Cell(30,0,' ',0,0);
$pdf->Cell(58,3,'Journey Date (mm-dd-yyyy):-',0,0);
$pdf->Cell(114,3,$bag['journeydate'],0,1);



$pdf->Cell(60,4,' ',0,0);
$pdf->Cell(129,4,' ',0,1);


$pdf->Cell(30,0,' ',0,0);
$pdf->Cell(30,3,'Booking Date:-',0,0);
$pdf->Cell(114,3,$bag['time'],0,1);


$pdf->Cell(60,4,' ',0,0);
$pdf->Cell(129,4,' ',0,1);


$pdf->Cell(30,0,' ',0,0);
$pdf->Cell(30,3,'Seats Booked:-',0,0);
$pdf->Cell(154,3,$bag['noofseat'],0,1);



$pdf->Cell(60,4,' ',0,0);
$pdf->Cell(129,4,' ',0,1);



$pdf->Cell(30,0,' ',0,0);
$pdf->Cell(30,3,'Seat No.:-',0,0);
$pdf->Cell(154,3,$bag['seatname'],0,1);



$pdf->Cell(60,4,' ',0,0);
$pdf->Cell(129,4,' ',0,1);


$pdf->Cell(30,0,' ',0,0);
$pdf->Cell(30,3,'Bus Name:-',0,0);
$pdf->Cell(154,3,$bagcar['name'],0,1);



$pdf->Cell(60,4,' ',0,0);
$pdf->Cell(129,4,' ',0,1);


$pdf->Cell(30,0,' ',0,0);
$pdf->Cell(30,3,'Company:-',0,0);
$pdf->Cell(154,3,$bag['company'],0,1);


$pdf->Cell(60,4,' ',0,0);
$pdf->Cell(129,4,' ',0,1);


$pdf->Cell(30,0,' ',0,0);
$pdf->Cell(35,3,'Bus Licence No.:-',0,0);
$pdf->Cell(154,3,$bag['carlicence'],0,1);


$pdf->Cell(60,4,' ',0,0);
$pdf->Cell(129,4,' ',0,1);


$pdf->Cell(30,0,' ',0,0);
$pdf->Cell(30,3,'Driver Name:-',0,0);
$pdf->Cell(154,3,$bagdriver['name'],0,1);



$pdf->Cell(60,9,' ',0,0);
$pdf->Cell(129,9,' ',0,1);

$pdf->SetFont('Arial','',14);
$pdf->Cell(1,0,' ',0,0);
$pdf->Cell(188,3,'Payment Details:-',0,1);
$pdf->Line(12,170,47,170);


$pdf->Cell(60,9,' ',0,0);
$pdf->Cell(129,9,' ',0,1);

$pdf->SetFont('Arial','',12);
$pdf->Cell(30,0,' ',0,0);
$pdf->Cell(32,3,'Cost per seat:-',0,0);
$pdf->Cell(154,3,$bagroute['cost'],0,1);


$pdf->Cell(60,4,' ',0,0);
$pdf->Cell(129,4,' ',0,1);

$pdf->Cell(30,0,' ',0,0);
$pdf->Cell(32,3,'GST:-',0,0);
$pdf->Cell(154,3,'',0,1);


$pdf->Cell(60,4,' ',0,0);
$pdf->Cell(129,4,' ',0,1);

$pdf->Cell(30,0,' ',0,0);
$pdf->Cell(32,3,'Total Cost:-',0,0);
$pdf->Cell(154,3,$bag['noofseat']*$bagroute['cost'],0,1);




















$pdf->Line(140,210,189,210);


$pdf->Cell(160,20,' ',0,0);
$pdf->Cell(28,20,' ',0,1);

$pdf->SetFont('Arial','',11);
$pdf->Cell(140,3,' ',0,0);
$pdf->Cell(49,3,'(Mr. Abhijit Bhattacharya)',0,1);




$pdf->Cell(160,2,' ',0,0);
$pdf->Cell(28,2,' ',0,1);

$pdf->SetFont('Arial','',11);
$pdf->Cell(145,3,' ',0,0);
$pdf->Cell(44,3,'CEO,Bus4u' ,0,1);


$pdf->Output();






?>

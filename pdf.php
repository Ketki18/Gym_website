<?php
 if(!empty($_POST['submit']))
{
  $fullname =  $_POST['fullname'];
  $email =  $_POST['email'];
  $address =  $_POST['address'];
  $phone =  $_POST['phone'];
  $city =  $_POST['city'];
  $state =  $_POST['state'];
  $date =  $_POST['date'];

  require("fpdf/fpdf.php");

  $pdf = new FPDF();
  $pdf->AddPage();



  $pdf -> SetFont("Arial", "", 14);
  
  $pdf->Cell(130 ,5,'VigourZone Gym',0,0);
$pdf->Cell(59 ,5,'INVOICE',0,1);

$pdf->SetFont('Arial','',12);

$pdf->Cell(130 ,5,'Street Address : Balaji Heights ',0,0);
$pdf->Cell(59 ,5,'',0,1);
$pdf->Cell(130 ,5,'Near Sonu Corner, Vazirabad Nanded',0,0);
$pdf->Cell(25 ,5,'Joining Date :',0,0);
$pdf->Cell(34 ,5,"$date",0,1);

$pdf->Cell(130 ,5,'Phone [7058861507]',0,0);
$pdf->Cell(25 ,5,'Invoice #',0,0);
$pdf->Cell(34 ,5,'[1234567]',0,1);

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Customer ID',0,0);
$pdf->Cell(34 ,5,'[1234567]',0,1);

//  empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);

//billing address
$pdf->Cell(100 ,5,'Bill to',0,1);//end of line

$pdf->Cell(90 ,5,"$fullname",0,1);


$pdf->Cell(90 ,5,"$email",0,1);

$pdf->Cell(90 ,5,"$address",0,1);

$pdf->Cell(90 ,5,"$phone",0,1);
$pdf->Cell(90 ,5,"$city",0,1);
$pdf->Cell(90 ,5,"$state",0,1);




// empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line


//invoice contents
$pdf->SetFont('Arial','B',12);
$pdf->Cell(130 ,5,'Description',1,0);
$pdf->Cell(25 ,5,'Taxable',1,0);
$pdf->Cell(34 ,5,'Amount',1,1);//end of line

$pdf->SetFont('Arial','',12);
$pdf->Cell(130 ,5,'Basic 3-Months Membership',1,0);
$pdf->Cell(25 ,5,'-',1,0);
$pdf->Cell(34 ,5,'6,000',1,1,'R');//end of line

//summary
$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Subtotal',0,0);
$pdf->Cell(4 ,5,'$',1,0);
$pdf->Cell(30 ,5,'5,000',1,1,'R');//end of line

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Taxable',0,0);
$pdf->Cell(4 ,5,'$',1,0);
$pdf->Cell(30 ,5,'0',1,1,'R');//end of line

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Tax Rate',0,0);
$pdf->Cell(4 ,5,'$',1,0);
$pdf->Cell(30 ,5,'10%',1,1,'R');//end of line

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Total Paid',0,0);
$pdf->Cell(4 ,5,'$',1,0);
$pdf->Cell(30 ,5,'6,000',1,1,'R');//end of line


  $pdf->output();


}


?>
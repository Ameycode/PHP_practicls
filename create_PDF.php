<?php
require('C:\xampp\htdocs\FPDF-master\fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','BI',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();
?>

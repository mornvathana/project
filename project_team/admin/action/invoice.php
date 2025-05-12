<?php
    include("../../fpdf/fpdf.php");


    $pdf = new FPDF("P","mm","A4");

    $pdf->AddPage();

    $pdf->SetFont("Arial","B",20);

    $pdf->Image('../assets/img/default.jpg',10,10,20,20);
    $pdf->cell(65,10,"",0,0);
    $pdf->cell(59,5,"En Lin Smart Phone",0,0);
    $pdf->cell(59,10,"",0,1);

    $pdf->Output();

?>
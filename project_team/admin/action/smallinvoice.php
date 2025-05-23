<?php
    session_start();
    include("../../fpdf/fpdf.php");
    include('../../config/dbcon.php');
 

                $pdf = new FPDF("P","mm",array(80,150));

                $pdf->SetAutoPageBreak(false);

                $pdf->AddPage();

                $pdf->SetFont("Arial","B",16);

                $pdf->Image('../assets/img/cart.png',5,10,8,8);

                 $pdf->Image('../assets/img/invoiceword.png',50,10,30,6);
                
                $pdf->SetFont("Arial","B",7);
                $pdf->Cell(3,10,"",0,0);
                $pdf->Cell(59,8,"En Lin Smart Phone",0,0);
                $pdf->Cell(59,8,"",0,1);

                $pdf->SetFont("Arial","B",6);
                $pdf->Cell(-3,7,"",0,0);
                $pdf->Cell(59,5,"invoice Number: 1330",0,0);
                $pdf->Cell(59,3,"",0,1);

                $pdf->SetFont("Arial","B",6);
                $pdf->Cell(-3,7,"",0,0);
                $pdf->Cell(59,5,"Date: 02/02/2022",0,0);
                $pdf->Cell(59,7,"",0,1);

                $pdf->SetFillColor(50,55,57);
                $pdf->Rect(0,30,90,1,'F');
                // 
                $pdf->SetFont("Arial","B",6);
                $pdf->Cell(-3,3,"",0,0);
                $pdf->Cell(59,12,"Bill from:",0,0);
                $pdf->Cell(59,3,"",0,1);

                $pdf->SetFont("Arial","B",6);
                $pdf->Cell(40,0,"",0,0);
                $pdf->Cell(59,6,"Bill to:",0,0);
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","",6);
                $pdf->Cell(40,0,"",0,0);
                $pdf->Cell(59,14,"Customer:",0,0);
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","",6);
                $pdf->Cell(40,0,"",0,0);
                $pdf->Cell(59,22,"Phone Number:",0,0);
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","",6);
                $pdf->Cell(-3,3,"",0,0);
                $pdf->Cell(59,14,"Shop Name",0,0);
                $pdf->Cell(59,3,"",0,1);

                $pdf->SetFont("Arial","",6);
                $pdf->Cell(-3,3,"",0,0);
                $pdf->Cell(59,16,"Phone Number",0,0);
                $pdf->Cell(59,3,"",0,1);

                // 

                $pdf->SetFillColor(50,55,57);
                $pdf->Rect(0,45,90,1,'F');

                $pdf->SetFont("Arial","B",6);
                $pdf->Cell(-3,0,"",0,0);
                $pdf->Cell(59,23,"Item",0,0);
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","B",6);
                $pdf->Cell(20,0,"",0,0);
                $pdf->Cell(59,23,"Quantity",0,0);
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","B",6);
                $pdf->Cell(40,0,"",0,0);
                $pdf->Cell(59,23,"Shipping",0,0);
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","B",6);
                $pdf->Cell(58,0,"",0,0);
                $pdf->Cell(59,23,"Amount",0,0);
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFillColor(50,55,57);
                $pdf->Rect(0,51,90,1,'F');

                // body

                $pdf->SetFont("Arial","",0);
                $pdf->Cell(-3,1,"",0,0);
                $pdf->Cell(59,35,"Phone 16 Pro Max",0,0);
                $pdf->Cell(59,1,"",0,1);

                $pdf->SetFont("Arial","",0);
                $pdf->Cell(24,1,"",0,0);
                $pdf->Cell(59,33,"1",0,0);
                $pdf->Cell(59,1,"",0,1);

                $pdf->SetFont("Arial","",0);
                $pdf->Cell(44,1,"",0,0);
                $pdf->Cell(59,31,"3$",0,0);
                $pdf->Cell(59,1,"",0,1);

                $pdf->SetFont("Arial","",0);
                $pdf->Cell(59,1,"",0,0);
                $pdf->Cell(59,29,"$100",0,0);
                $pdf->Cell(59,1,"",0,1);

                $pdf->SetFont("Arial","",0);
                $pdf->Cell(-3,1,"",0,0);
                $pdf->Cell(59,35,"Phone 16 Pro Max",0,0);
                $pdf->Cell(59,1,"",0,1);

                $pdf->SetFont("Arial","",0);
                $pdf->Cell(24,1,"",0,0);
                $pdf->Cell(59,33,"1",0,0);
                $pdf->Cell(59,1,"",0,1);

                $pdf->SetFont("Arial","",0);
                $pdf->Cell(44,1,"",0,0);
                $pdf->Cell(59,31,"3$",0,0);
                $pdf->Cell(59,1,"",0,1);

                $pdf->SetFont("Arial","",0);
                $pdf->Cell(59,1,"",0,0);
                $pdf->Cell(59,29,"$100",0,0);
                $pdf->Cell(59,1,"",0,1);


                $pdf->SetFillColor(50,55,57);
                $pdf->Rect(0,100,80,1,'F');
                // end body
                $pdf->SetFont("Arial","",6);
                $pdf->Cell(-3,0,"",0,0);
                $pdf->Cell(59,120,"Terms & conditions:",0,0);
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","",7);
                $pdf->Cell(40,1,"",0,0);
                $pdf->Cell(59,120,"Subtotal:",0,0);
                $pdf->Cell(59,1,"",0,1);
                

                $pdf->SetFont("Arial","",7);
                $pdf->Cell(55,1,"",0,0);
                $pdf->Cell(59,118,"$100",0,0);
                $pdf->Cell(59,1,"",0,1);

                $pdf->SetFont("Arial","",7);
                $pdf->Cell(40,1,"",0,0);
                $pdf->Cell(59,125,"Shipping:",0,0);
                $pdf->Cell(59,1,"",0,1);

                $pdf->SetFont("Arial","",7);
                $pdf->Cell(55,1,"",0,0);
                $pdf->Cell(59,123,"$100",0,0);
                $pdf->Cell(59,1,"",0,1);

                $pdf->SetFont("Arial","",7);
                $pdf->Cell(40,1,"",0,0);
                $pdf->Cell(59,130,"Discount:",0,0);
                $pdf->Cell(59,1,"",0,1);

                $pdf->SetFont("Arial","",7);
                $pdf->Cell(55,1,"",0,0);
                $pdf->Cell(59,127,"$100",0,0);
                $pdf->Cell(59,1,"",0,1);

                $pdf->SetFont("Arial","",7);
                $pdf->Cell(40,1,"",0,0);
                $pdf->Cell(59,133,"Paid:",0,0);
                $pdf->Cell(59,1,"",0,1);

                $pdf->SetFont("Arial","",7);
                $pdf->Cell(55,1,"",0,0);
                $pdf->Cell(59,130,"$100",0,0);
                $pdf->Cell(59,1,"",0,1);

                $pdf->SetFillColor(50,55,57);
                $pdf->Rect(0,130,80,1,'F');

                $pdf->SetFillColor(36, 62, 85);
                $pdf->Rect(52, 137, 30, 7, 'F');

                $pdf->SetTextColor(255, 255, 255); 
                $pdf->SetFont("Arial", "B", 8);
                $pdf->SetXY(55, 137); 
                $pdf->Cell(30, 7, "Total: $3000", 0, 0, 'L');

                $pdf->Output();

?>
<?php
    session_start();
    include("../fpdf/fpdf.php");
    include('../config/dbcon.php');
    
    if(isset($_GET['id']) && isset($_GET['cartId'])){
        
        $id = $_GET['id'];
        $cartId = $_GET['cartId'];

        $stmt = $conn->prepare("SELECT 
                                    orders.id,
                                    orders.first_name,
                                    orders.last_name,
                                    orders.phone_number,
                                    orders.total_price,
                                    cart.product_name,
                                    cart.product_qty,
                                    cart.product_price,
                                    cart.shipping_id,
                                    cart.barcode FROM orders INNER JOIN cart ON cart.id  = orders.cart_id WHERE orders.cart_id = ? ");
        $stmt->bind_param("i",$cartId);
        
        if($stmt->execute() > 0){
            $result = $stmt->get_result();
            while( $row = $result->fetch_assoc()){
                $id = $row['id'];
                $shippingId = 3;
                $firstNamme = $row['first_name'];
                $lastName = $row['last_name'];
                $phone = $row['phone_number'];
                $qty = $row['product_qty'];
                $productName = $row['product_name'];
                $product_price = $row['product_price'];
                $barcode = $row['barcode'];
                $total_price = $row['total_price'];
                // handle shipping 
                $stmt = $conn->prepare("SELECT shipping_price FROM shipping WHERE id = ?");
                $stmt->bind_param("i", $shippingId);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $shippingMethod = $result->fetch_assoc()['shipping_price'];
                }

                $pdf = new FPDF("P","mm","A4");

                $pdf->AddPage();

                $pdf->SetFont("Arial","B",16);

                $pdf->Image('../uploads/default/default1.jpg',15,10,15,15);
                $pdf->Cell(65,8,"",0,0);
                $pdf->Cell(59,5,"En Lin Smart Phone",0,0);
                $pdf->Cell(59,8,"",0,1);

                $pdf->SetFont("Arial","B",10);
                $pdf->Cell(46,7,"",0,0);
                $pdf->Cell(59,5,"Prasaut village,Kandengray Commune ,Svay teab district",0,0);
                $pdf->Cell(59,7,"",0,1);

                $pdf->SetFont("Arial","B",10);
                $pdf->Cell(75,6,"",0,0);
                $pdf->Cell(59,4,"Svay rieng province ",0,0);
                $pdf->Cell(59,6,"",0,1);

                $pdf->SetFillColor(50,55,57);
                $pdf->Rect(15,32,90,1,'F');

                $pdf->SetFont("Arial","B",11);  
                $pdf->SetFillColor(255,255,255);
                $pdf->SetDrawColor(50,55,57);
                $pdf->SetLineWidth(0.5);
                $pdf->Rect(15,38,90,15,'DF');

                $pdf->SetFont("Arial","B",10);
                $pdf->Cell(96,2,"",0,0);
                $pdf->Cell(59,2,"Form information",0,0);
                $pdf->Cell(59,2,"",0,1);

                $pdf->SetFont("Arial","B",9);
                $pdf->Cell(4,5,"",0,0);
                $pdf->Cell(59,5,"Saleman",0,0);    
                $pdf->Cell(59,5,"",0,1);

                $pdf->SetFont("Arial","B",9);
                $pdf->Cell(5,0,"",0,0);
                $pdf->Cell(59,8,"Name",0,0);    
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","",9);
                $pdf->Cell(40,8,"",0,0);
                $pdf->Cell(59,8,": En Rathana",0,0);    
                $pdf->Cell(59,8,"",0,1);

                $pdf->SetFont("Arial","B",9);
                $pdf->Cell(5,0,"",0,0);
                $pdf->Cell(59,3,"Phone number",0,0);    
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","",9);
                $pdf->Cell(40,0,"",0,0);
                $pdf->Cell(59,3,": 088 97 97 022",0,0);    
                $pdf->Cell(59,0,"",0,1);

                // 

                $pdf->SetFont("Arial","B",11);
                $pdf->SetFillColor(255,255,255);
                $pdf->SetDrawColor(50,55,57);
                $pdf->SetLineWidth(0.5);
                $pdf->Rect(106,38,90,15,'DF');

                $pdf->SetFont("Arial","B",9);
                $pdf->Cell(96,5,"",0,0);
                $pdf->Cell(59,-21,"Customer",0,0);    
                $pdf->Cell(59,5,"",0,1);

                $pdf->SetFont("Arial","B",9);
                $pdf->Cell(96,0,"",0,0);
                $pdf->Cell(59,-20,"Name",0,0);    
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","",9);
                $pdf->Cell(130,8,"",0,0);
                $pdf->Cell(59,-20,": Morn sovathana",0,0);    
                $pdf->Cell(59,8,"",0,1);

                $pdf->SetFont("Arial","B",9);
                $pdf->Cell(96,0,"",0,0);
                $pdf->Cell(59,-27,"Date",0,0);    
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","",9);
                $pdf->Cell(130,0,"",0,0);
                $pdf->Cell(59,-27,": 23/02/2025 10:00",0,0);    
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","B",9);
                $pdf->Cell(96,0,"",0,0);
                $pdf->Cell(59,-18,"Status",0,0);    
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","",9);
                $pdf->Cell(130,0,"",0,0);
                $pdf->Cell(59,-18,": Finished",0,0);    
                $pdf->Cell(59,0,"",0,1);

                // table 
                $pdf->SetFont("Arial","B",9);
                $pdf->SetDrawColor(50,55,57);
                $pdf->Cell(5);
                $pdf->Cell(30,6,'ID',1,0,'C');
                $pdf->Cell(30,6,'Shipping',1,0,'C');
                $pdf->Cell(30,6,'Quantity',1,0,'C');
                $pdf->Cell(30,6,'Product Price',1,0,'C');
                $pdf->Cell(30,6,'Payment Method',1,0,'C');
                $pdf->Cell(30,6,'Total',1,1,'C');

                $pdf->SetFont("Arial","",9);
                $pdf->Cell(5);
                $pdf->Cell(30,6,$id,1,0,'L');
                $pdf->Cell(30,6,$shippingMethod,1,0,'L');
                $pdf->Cell(30,6,$qty,1,0,'R');
                $pdf->Cell(30,6,$product_price,1,0,'R');
                $pdf->Cell(30,6,'Bank',1,0,'R');
                $pdf->Cell(30,6,$total_price,1,1,'R');

                // 
                $pdf->SetFont("Arial","B",9);
                $pdf->Cell(125,6,'',0,0);
                $pdf->Cell(30,6,"Subtotal",0,0,'C');
                $pdf->Cell(30,6,$total_price,1,0,'R');
                

                $pdf->Output();
            }
        }
       

    }

?>
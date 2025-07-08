<?php
    session_start();
    include('../fpdf/fpdf.php');
    include('../config/dbcon.php');
    include('../function/userfunction.php');

    if(isset($_GET['orderid']) || isset($_GET['userid'])){

        $orderId = $_GET['orderid'];
        $userId = $_GET['userid'];

        // body
        $order = getOrders1($userId,$orderId);

        if($order->num_rows > 0){
            foreach($order as $data){

                $numId = $data['id'];
                $name = $data['product_name'] ?? "Hello";
                $firstName = $data['first_name'];
                $lastName = $data['last_name'];
                $phoneNumber = $data['phone_number'];
                $date = $data['created_at'] ?? 1;
                $qty = $data['product_qty'] ?? 1;
                $productPrice = $data['product_price'] ?? 1;
                $city = $data['city'];
                $province = $data['province'];
                $shippingValue = 0;
                $totalPrice = $data['total_price'];

                $methodPayment = '';

                if(!empty($totalPrice)){
                    $methodPayment = 'Bank';
                }else{
                    $methodPayment = 'On Delivery';
                }


                $pdf = new FPDF("P","mm","A4");

                $pdf->AddPage();

                $pdf->SetFont("Arial","B",16);

                $pdf->Image('../uploads/logo/logo-removebg-preview.png',15,10,15,15);
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
                $pdf->Cell(59,-20,$firstName . ' ' . $lastName,0,0);    
                $pdf->Cell(59,8,"",0,1);

                $pdf->SetFont("Arial","B",9);
                $pdf->Cell(96,0,"",0,0);
                $pdf->Cell(59,-27,"Date ",0,0);    
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","",9);
                $pdf->Cell(130,0,"",0,0);
                $pdf->Cell(59,-27,$date,0,0);    
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","B",9);
                $pdf->Cell(96,0,"",0,0);
                $pdf->Cell(59,-18,"Status Payment",0,0);    
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","",9);
                $pdf->Cell(130,0,"",0,0);
                $pdf->Cell(59,-18,"Finished",0,0);    
                $pdf->Cell(59,0,"",0,1);

                // table 
                $pdf->SetFont("Arial","B",9);
                $pdf->SetDrawColor(50,55,57);
                $pdf->Cell(5);
                $pdf->Cell(30,6,'ID',1,0,'C');
                $pdf->Cell(30,6,'Name',1,0,'C');
                $pdf->Cell(30,6,'Quantity',1,0,'C');
                $pdf->Cell(30,6,'Product Price',1,0,'C');
                $pdf->Cell(30,6,'Payment Method',1,0,'C');
                $pdf->Cell(30,6,'Total',1,1,'C');

                ?>

                <?php
                    $shippingValue = 0;
                    $price = 0;
                    $totalSubPrice = 0;

                    $cart_arr = $data['cart_id'];
                    $cartiddata = explode(",",$cart_arr);
                    foreach($cartiddata as $num){
                    $data = getDataByUsers("cart",$userId,0,$num);
                    if($data->num_rows > 0){
                    foreach($data as $data1){
                    $id = $data1['id'];
                    $name = $data1['product_name'];
                    $price += $data1['product_price'];
                    $productPrice = $data1['product_price'];
                    $shipping = getShipping1($data1['shipping_id']);
                    if($shipping->num_rows > 0){
                        foreach($shipping as $num){
                            $shippingValue = $num['shipping_price'];
                            $totalSubPrice = $price + $shippingValue;
                        }
                    }
                    $pdf->SetFont("Arial","",9);
                    $pdf->Cell(5);
                    $pdf->Cell(30,6,$id,1,0,'L');
                    $pdf->Cell(30,6,$name,1,0,'L');
                    $pdf->Cell(30,6,$qty,1,0,'R');
                    $pdf->Cell(30,6,'$' . $productPrice,1,0,'R');
                    $pdf->Cell(30,6,$methodPayment,1,0,'C');
                    $pdf->Cell(30,6,'$' . $productPrice,1,1,'R');
                    }
                    }
                }
                
                ?>

                <?php

                // 
                

                $pdf->SetFont("Arial","B",9);
                $pdf->Cell(125,6,'',0,0);
                $pdf->Cell(30,6,"Shipping",0,0,'C');
                $pdf->Cell(30,6,'$' . $shippingValue,1,1,'R');

                if($totalPrice == $totalSubPrice){
                    $discount = 0;
                }else{
                    $discount = $totalSubPrice - $totalPrice;
                }

                $pdf->SetFont("Arial","B",9);
                $pdf->Cell(125,6,'',0,0);
                $pdf->Cell(30,6,"Discount",0,0,'C');
                $pdf->Cell(30,6,'$' . $discount,1,1,'R');
                
                $pdf->SetFont("Arial","B",9);
                $pdf->Cell(125,6,'',0,0);
                $pdf->Cell(30,6,"Subtotal",0,0,'C');
                $pdf->Cell(30,6,'$' . $totalPrice,1,0,'R');
                

                $pdf->Output();

            }
        }
        
    }
 

    

?>
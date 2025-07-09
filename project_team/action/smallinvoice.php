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
                $firstName = $data['first_name'];
                $lastName = $data['last_name'];
                $phoneNumber = $data['phone_number'];
                $date = $data['created_at'];
                $city = $data['city'];
                $province = $data['province'];
                $shippingValue = 0;
                $totalPrice = $data['total_price'];


                $pdf = new FPDF("P","mm",array(80,150));

                $pdf->SetAutoPageBreak(false);

                $pdf->AddPage();

                $pdf->SetFont("Arial","B",16);

                $pdf->Image('../uploads/default/cart.png',5,10,8,8);

                $pdf->Image('../uploads/default/invoiceword.png',50,10,30,6);
                
                $pdf->SetFont("Arial","B",7);
                $pdf->Cell(3,10,"",0,0);
                $pdf->Cell(59,8,"En Lin Smart Phone",0,0);
                $pdf->Cell(59,8,"",0,1);

                $pdf->SetFont("Arial","B",6);
                $pdf->Cell(-3,7,"",0,0);
                $pdf->Cell(59,5,'invoice Number: ' . $numId,0,0);
                $pdf->Cell(59,3,"",0,1);

                $pdf->SetFont("Arial","B",6);
                $pdf->Cell(-3,7,"",0,0);
                $pdf->Cell(59,5,"Date: " . $date,0,0);
                $pdf->Cell(59,7,"",0,1);

                $pdf->SetFillColor(50,55,57);
                $pdf->Rect(0,30,90,0,'F');
                // 
                $pdf->SetFont("Arial","B",6);
                $pdf->Cell(-3,3,"",0,0);
                $pdf->Cell(59,10,"Bill from:",0,0);
                $pdf->Cell(59,3,"",0,1);

                $pdf->SetFont("Arial","B",6);
                $pdf->Cell(40,0,"",0,0);
                $pdf->Cell(59,4,"Bill to:",0,0);
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","",6);
                $pdf->Cell(40,0,"",0,0);
                $pdf->Cell(59,12,"Customer:",0,0);
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","",6);
                $pdf->Cell(52,0,"",0,0);
                $pdf->Cell(59,12,$firstName . ' ' . $lastName,0,0);
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","",6);
                $pdf->Cell(40,0,"",0,0);
                $pdf->Cell(59,19,"Phone Number:",0,0);
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","",6);
                $pdf->Cell(56,0,"",0,0);
                $pdf->Cell(59,19,$phoneNumber,0,0);
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","",6);
                $pdf->Cell(40,0,"",0,0);
                $pdf->Cell(59,27,"Address:",0,0);
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","",6);
                $pdf->Cell(49,0,"",0,0);
                $pdf->Cell(59,27,$province,0,0);
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","",6);
                $pdf->Cell(-3,0,"",0,0);
                $pdf->Cell(59,12,"Shop Name",0,0);
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","",6);
                $pdf->Cell(13,0,"",0,0);
                $pdf->Cell(59,12,"En Lin phone Shop",0,0);
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","",6);
                $pdf->Cell(-3,0,"",0,0);
                $pdf->Cell(59,20,"Phone Number",0,0);
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","",6);
                $pdf->Cell(13,0,"",0,0);
                $pdf->Cell(59,20,"0889797022",0,0);
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","",6);
                $pdf->Cell(-3,0,"",0,0);
                $pdf->Cell(59,27,"Address",0,0);
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","",6);
                $pdf->Cell(13,0,"",0,0);
                $pdf->Cell(59,27,"Svay Rieng",0,0);
                $pdf->Cell(59,0,"",0,1);

                // 

                $pdf->SetFillColor(50,55,57);
                $pdf->Rect(0,47,90,0,'F');

                $pdf->SetFont("Arial","B",6);
                $pdf->Cell(-3,0,"",0,0);
                $pdf->Cell(59,37,"Item",0,0);
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","B",6);
                $pdf->Cell(20,0,"",0,0);
                $pdf->Cell(59,37,"Quantity",0,0);
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","B",6);
                $pdf->Cell(40,0,"",0,0);
                $pdf->Cell(59,37,"Product Price",0,0);
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","B",6);
                $pdf->Cell(58,0,"",0,0);
                $pdf->Cell(59,37,"Amount",0,0);
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFillColor(50,55,57);
                $pdf->Rect(0,52,90,0,'F');

                ?>
                 <?php
                    $shippingValue = 0;
                    $price = 0;
                    $totalSubPrice = 0;
                    $totalProductPrice = 0;
                    $finalTotalProuctPrice = 0;
                    $finalTotalProuctPrice1 = 0;

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
                        $productqty = $data1['product_qty'];
                        $totalProductPrice = $data1['product_price'] * $data1['product_qty'];
                        $finalTotalProuctPrice += $totalProductPrice;
                        $shipping = getShipping1($data1['shipping_id']);
                        if($shipping->num_rows > 0){
                            foreach($shipping as $num){
                                $shippingValue = $num['shipping_price'];
                                $totalSubPrice = $price + $shippingValue;
                                $finalTotalProuctPrice1 = $finalTotalProuctPrice +  $shippingValue;

                            }
                        }
                        $pdf->SetFont("Arial","",0);
                        $pdf->Cell(-3,1,"",0,0);
                        $pdf->Cell(59,46,$name,0,0);
                        $pdf->Cell(59,1,"",0,1);

                        $pdf->SetFont("Arial","",0);
                        $pdf->Cell(24,1,"",0,0);
                        $pdf->Cell(59,44,$productqty,0,0);
                        $pdf->Cell(59,1,"",0,1);

                        $pdf->SetFont("Arial","",0);
                        $pdf->Cell(44,1,"",0,0);
                        $pdf->Cell(59,42,'$' . $productPrice,0,0);
                        $pdf->Cell(59,1,"",0,1);

                        $pdf->SetFont("Arial","",0);
                        $pdf->Cell(59,1,"",0,0);
                        $pdf->Cell(59,40,'$' . $totalProductPrice,0,0);
                        $pdf->Cell(59,1,"",0,1);
                        $pdf->SetFillColor(50,55,57);   
                        $pdf->Rect(0,100,80,0,'F');
                        }
                    }
                }
                ?>
                <?php

                // end body
                $pdf->SetFont("Arial","",6);
                $pdf->Cell(-3,0,"",0,0);
                $pdf->Cell(59,135,"Terms & conditions:",0,0);
                $pdf->Cell(59,0,"",0,1);

                $pdf->SetFont("Arial","",7);
                $pdf->Cell(40,1,"",0,0);
                $pdf->Cell(59,135,"Total price:",0,0);
                $pdf->Cell(59,1,"",0,1);
                

                $pdf->SetFont("Arial","",7);
                $pdf->Cell(55,1,"",0,0);
                $pdf->Cell(59,132,'$' . $finalTotalProuctPrice,0,0);
                $pdf->Cell(59,1,"",0,1);

                $pdf->SetFont("Arial","",7);
                $pdf->Cell(40,1,"",0,0);
                $pdf->Cell(59,140,"Shipping:",0,0);
                $pdf->Cell(59,1,"",0,1);

                $pdf->SetFont("Arial","",7);
                $pdf->Cell(55,1,"",0,0);
                $pdf->Cell(59,138,'$' . $shippingValue,0,0);
                $pdf->Cell(59,1,"",0,1);

                $pdf->SetFont("Arial","",7);
                $pdf->Cell(40,1,"",0,0);
                $pdf->Cell(59,145,"Discount:",0,0);
                $pdf->Cell(59,1,"",0,1);

                if($totalPrice == $finalTotalProuctPrice1){
                    $discount = 0;
                }else{
                    $discount = $totalSubPrice - $totalPrice;
                }

                $pdf->SetFont("Arial","",7);
                $pdf->Cell(55,1,"",0,0);
                $pdf->Cell(59,142,'$' . $discount,0,0);
                $pdf->Cell(59,1,"",0,1);

                $pdf->SetFont("Arial","",7);
                $pdf->Cell(40,1,"",0,0);
                $pdf->Cell(59,149,"Paid:",0,0);
                $pdf->Cell(59,1,"",0,1);

                $pdf->SetFont("Arial","",7);
                $pdf->Cell(55,1,"",0,0);
                $pdf->Cell(59,147,'$' . $totalPrice,0,0);
                $pdf->Cell(59,1,"",0,1);

                $pdf->SetFillColor(50,55,57);
                $pdf->Rect(0,130,80,0,'F');

                $pdf->SetFillColor(36, 62, 85);
                $pdf->Rect(52, 137, 30, 7, 'F');

                $pdf->SetTextColor(255, 255, 255); 
                $pdf->SetFont("Arial", "B", 8);
                $pdf->SetXY(55, 137); 
                $pdf->Cell(30, 7, 'Total: $' . $totalPrice, 0, 0, 'L');

                $pdf->Output();

            }
        }
        
    }
 

    

?>
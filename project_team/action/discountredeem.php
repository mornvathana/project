<?php
    session_start();
    include('../config/dbcon.php');
    // 

    $five = $_POST['five'];
    $userId = $_POST['userId'];
        
    $stmt = $conn->prepare("SELECT sum(score) as total FROM score_customer WHERE user_id = ?");
    $stmt->bind_param("i",$userId);

    if($stmt->execute()){

        $result = $stmt->get_result();

        while($row = $result->fetch_assoc()){

            $totalScore = $row['total'];

            if($totalScore >= $five){

                $finalScore = $totalScore - $five;

                $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

                $code = '';

                for($i = 0 ; $i < 6 ; $i++){
                    $code .=$characters[rand(0,strlen($characters) - 1)];
                }

                $redeemcode =  'SAVE-' . $code;

                $insert = $conn->prepare("INSERT INTO discount (user_redeem,dis_code,dis_per,created_by) VALUES(?,?,?,?)");
                $insert->bind_param('isii',$userId,$redeemcode,$five,$userId);
                $insert->execute();

                if($insert->affected_rows > 0){

                    $conn->query("UPDATE score_customer SET score = $finalScore WHERE user_id = $userId");

                    if($conn->affected_rows > 0){
                        echo json_encode([
                            "status" => 202,
                            "finalscore" => $finalScore
                        ]);
                    }else{
                        echo json_encode(["status" => 404]);
                    }
                    
                }else{
                    echo json_encode(["status" => 404]);
                }

            }
        }
    }
?>
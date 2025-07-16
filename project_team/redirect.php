<?php
    session_start();
    include("function/userfunction.php");
    include("config/dbcon.php");

    require __DIR__ . "/vendor/autoload.php";

    $client = new Google\Client;

    $client->setClientId("825786283493-o10g62f6am36o0rqfktft33emrnfrash.apps.googleusercontent.com");
    $client->setClientSecret("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");
    $client->setRedirectUri("http://localhost:8080/project/project_team/redirect.php");
    
    if(isset($_GET['code'])){
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    
    $client->setAccessToken($token['access_token']);

    $oauth = new Google\Service\Oauth2($client);

    $userinfo = $oauth->userinfo->get();
    $id = $userinfo->id;
    $email = $userinfo->email;
    $familyname = $userinfo->familyName;
    $givenname = $userinfo->givenName;
    $name = $userinfo->name;

    $checkid = $conn->query("SELECT * FROM users WHERE email = '$email' AND status = 1");

    if($checkid->num_rows > 0){

        $_SESSION['auth'] = true;

        foreach($checkid as $data){
            
            $_SESSION['auth_user'] = [
                'user_id' => $data['id'],
                'user_name' => $data['name'],
                'user_email' => $data['email'],
                'google_id' => $data['google_id']
            ];

        }
        $_SESSION['role_as'] = 0;
        redirect("index.php","Welcome to home page");
    }else{
         $sql = $conn->query("INSERT INTO users (name,email,google_id) VALUES ('$name','$email',$id)");
         if($sql){

            $lastid = $conn->insert_id;
            $_SESSION['auth'] = true;

            $_SESSION['auth_user'] = [
                'user_id' => $lastid,
                'user_name' => $name,
                'user_email' => $email,
                'google_id' => $id
            ];

            $_SESSION['role_as'] = 0;

            redirect("index.php","Welcome to home page");
         }else{
            redirect1("login.php","Something went wrong!");
         }
    }


    }else{
        redirect1("login.php","Something went wrong!");
    }
   
?>
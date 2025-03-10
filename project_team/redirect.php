<?php
    require __DIR__ . "/vendor/autoload.php";

    $client = new Google\Client;

    $client->setClientId("825786283493-ub18v7kqos3b4jevukrv7g2r3mv1pn7o.apps.googleusercontent.com");
    $client->setClientSecret("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");
    $client->setRedirectUri("http://localhost:8080/ecommerce_project_sarana/redirect.php");
    if(!isset($_GET['code'])){
        exit("Login Failed");
    }
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);

    $oauth = new Google\Service\Oauth2($client);

    $userinfo = @oauth->userinfo->get();

    var_dump(
        $userinfo->email,
        $userinfo->famillyName,
        $userinfo->givenName,
        $userinfo->name
    );
?>
<?php

require __DIR__ . "/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$clientId = $_ENV["API_CLIENT"];
$clientSecrete = $_ENV["API_SECRETE"];

$client = new Google\Client;

$client->setClientId($clientId);
$client->setClientSecret($clientSecrete);
$client->setRedirectUri("http://localhost/startup/callmydoc/redirect.php");

if ( ! isset($_GET["code"])) {

    session_start();
    $_SESSION['warning'] = 'Login failed';
    header('Location: login.php');

}

    $token = $client->fetchAccessTokenWithAuthCode($_GET["code"]);

    $client_token = $client->setAccessToken($token["access_token"]);

    $oauth = new Google\Service\Oauth2($client);

    $userinfo = $oauth->userinfo->get();

if ($userinfo) {
    
    $email = $userinfo->email;
    $picture = $userinfo->picture;
    $name = $userinfo->name;

    session_start();
    $_SESSION['session_id'] = $email;
    header('Location: http://localhost/startup/callmydoc/user');

} else {
    session_start();
    $_SESSION['error'] = 'Login failed';
    header('Location: login.php');
}

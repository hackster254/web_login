<?php
// Start session
if(!session_id()){
    session_start();
}

// Include Github client library 
require_once 'src/Github_OAuth_Client.php';


/*
 * Configuration and setup GitHub API
 */
$clientID         = '8b8ea3c72941b0cf8201';//'Your_App_Client_ID';
$clientSecret     = 'a6605d8e3b1c12f1aec6924dca9c3cc134870e19';//'Your_App_Client_Secret';
$redirectURL     = 'https://hackster254.github.io/web_login/';//https://www.codexworld.com/github-login/';

$gitClient = new Github_OAuth_Client(array(
    'client_id' => $clientID,
    'client_secret' => $clientSecret,
    'redirect_uri' => $redirectURL,
));


// Try to get the access token
if(isset($_SESSION['access_token'])){
    $accessToken = $_SESSION['access_token'];
}
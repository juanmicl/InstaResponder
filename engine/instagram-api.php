<?php

// require instagram-api
require __DIR__.'/../vendor/autoload.php';

/////// CONFIG ///////
$username = 'username';
$password = 'password';
$debug = false;
$truncatedDebug = false;
//////////////////////

$ig = new \InstagramAPI\Instagram($debug, $truncatedDebug);

?>
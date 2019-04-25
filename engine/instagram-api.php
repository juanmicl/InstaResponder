<?php

set_time_limit(0);

// require instagram-api
require __DIR__.'/../../../vendor/instagram-api/autoload.php';

// \InstagramAPI\Instagram::$allowDangerousWebUsageAtMyOwnRisk = true;

/////// CONFIG ///////
$username = 'username';
$password = 'password';
$debug = false;
$truncatedDebug = false;
//////////////////////

$ig = new \InstagramAPI\Instagram($debug, $truncatedDebug);

?>
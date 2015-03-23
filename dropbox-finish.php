<?php

ini_set('display_errors',1); ini_set('display_startup_errors',1); error_reporting(-1);

require_once "dropbox-sdk-php-1.1.5/lib/Dropbox/autoload.php";
use \Dropbox as dbx;

$appInfo = dbx\AppInfo::loadFromJson($setting);

//echo $setting;
//print_r($setting);
//echo json_encode($setting);

//print_r($appInfo);
//echo 'babok';

$webAuth = new dbx\WebAuthNoRedirect($appInfo, "PHP-SOPService/1.0");
//$authorizeUrl = $webAuth->start();

//echo $authorizeUrl;

$authCode = $_GET['code'];
list($accessToken, $dropboxUserId) = $webAuth->finish($authCode);
print "Access Token: " . $accessToken . "\n";

$dbxClient = new dbx\Client($accessToken, "PHP-Example/1.0");
$accountInfo = $dbxClient->getAccountInfo();
print_r($accountInfo);




?>

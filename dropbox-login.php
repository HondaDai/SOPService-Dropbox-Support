<?php

ini_set('display_errors',1); ini_set('display_startup_errors',1); error_reporting(-1);

include "setting.php";
require_once "dropbox-sdk-php-1.1.5/lib/Dropbox/autoload.php";
use \Dropbox as dbx;

print_r( $setting);

$appInfo = dbx\AppInfo::loadFromJson($setting);

//echo $setting;
//print_r($setting);
//echo json_encode($setting);

//print_r($appInfo);
//echo 'babok';

$webAuth = new dbx\WebAuthNoRedirect($appInfo, "PHP-SOPService/1.0");
$authorizeUrl = $webAuth->start();

echo $authorizeUrl;


echo json_encode($setting);
echo '...'.getenv('DROPBOX_KEY');


?>


<?php

ini_set('display_errors',1); ini_set('display_startup_errors',1); error_reporting(-1);

require_once "dropbox-setting.php";
require_once "dropbox-sdk-php-1.1.5/lib/Dropbox/autoload.php";
use \Dropbox as dbx;

$appInfo = dbx\AppInfo::loadFromJson($setting);
$webAuth = new dbx\WebAuthNoRedirect($appInfo, "PHP-SOPService/1.0");

?>

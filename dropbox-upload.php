<?php

ini_set('display_errors',1); ini_set('display_startup_errors',1); error_reporting(-1);

// require_once "dropbox-setting.php";
// require_once "dropbox-sdk-php-1.1.5/lib/Dropbox/autoload.php";
// use \Dropbox as dbx;

// $appInfo = dbx\AppInfo::loadFromJson($setting);
// $webAuth = new dbx\WebAuthNoRedirect($appInfo, "PHP-SOPService/1.0");

// $authCode = $_POST['code'];

// list($accessToken, $dropboxUserId) = $webAuth->finish($authCode);
// print "Access Token: " . $accessToken . "\n";

// $dbxClient = new dbx\Client($accessToken, "PHP-SOPService/1.0");
// $accountInfo = $dbxClient->getAccountInfo();
// print_r($accountInfo);

print_r($_POST);
print_r($_FILES);

// $uploadedFile = $_FILES['uploaded_file'];
// $f = fopen($uploadedFile['tmp_name'], "rb");
// $result = $dbxClient->uploadFile("/SOPService/".$uploadedFile['name'], dbx\WriteMode::force(), $f);
// fclose($f);
// print_r($result);

?>

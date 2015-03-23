<?php

include_once "dropbox-global.php";
use \Dropbox as dbx;

$authCode = $_POST['code'];

list($accessToken, $dropboxUserId) = $webAuth->finish($authCode);
print "Access Token: " . $accessToken . "\n";

$dbxClient = new dbx\Client($accessToken, "PHP-SOPService/1.0");
$accountInfo = $dbxClient->getAccountInfo();
print_r($accountInfo);


$uploadedFile = $_FILES['uploaded_file']
$f = fopen($uploadedFile['tmp_name'], "rb");
$result = $dbxClient->uploadFile("/SOPService/".$uploadedFile['name'], dbx\WriteMode::force(), $f);
fclose($f);
print_r($result);

?>

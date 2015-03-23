<?php

include_once "dropbox-global.php";

$authCode = $_GET['code'];
list($accessToken, $dropboxUserId) = $webAuth->finish($authCode);
print "Access Token: " . $accessToken . "\n";

$dbxClient = new dbx\Client($accessToken, "PHP-Example/1.0");
$accountInfo = $dbxClient->getAccountInfo();
print_r($accountInfo);

?>

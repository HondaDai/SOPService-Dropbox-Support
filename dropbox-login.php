<?php

include_once "dropbox-global.php";

$authorizeUrl = $webAuth->start();

echo $authorizeUrl;


?>

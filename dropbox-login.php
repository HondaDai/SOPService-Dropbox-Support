<?php

include_once "dropbox-global.php";
use \Dropbox as dbx;

$authorizeUrl = $webAuth->start();
echo $authorizeUrl;


?>

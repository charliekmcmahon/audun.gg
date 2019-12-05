<?php

if(!$_GET['type'] == "w") || !$_GET['type'] == "h") {
die('Invalid image');
}

if($_GET['type'] == "w") {

if($_GET['ext'] == "gif") {
$im = imagecreatefromgif($_GET['url']);
}
elseif($_GET['ext'] == "png") {
$im = imagecreatefrompng($_GET['url']);
}

$lul = imagesx($im);
echo("".$lul."");
}
elseif($_GET['type'] == "h") {

if($_GET['ext'] == "gif") {
$im = imagecreatefromgif($_GET['url']);
}
elseif($_GET['ext'] == "png") {
$im = imagecreatefrompng($_GET['url']);
}

$lul = imagesy($im);
echo("".$lul."");
}



?>
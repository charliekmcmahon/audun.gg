<?php
header("Content-Type: image/gif");
// We create the banner image to use the sites site name, etc.

$im = imagecreatefromgif("../images/center_power.gif");

//The numbers are the RGB values of the color you want to use
$black = ImageColorAllocate($im, 255, 255, 255);

//The canvas's (0,0) position is the upper left corner
//So this is how far down and to the right the text should start
$start_x = 10;
$start_y = 50;
$start_x2 = 10;
$start_y2 = 65;

//This writes your text on the image in 12 point using verdana.ttf
//For the type of effects you quoted, you'll want to use a truetype font
//And not one of GD's built in fonts. Just upload the ttf file from your
//c: windows fonts directory to your web server to use it.
imagettftext($im, 22, 0, $start_x, $start_y, $black, 'Myraid Pro.ttf', "lol");

imagegif($im);
imagedestroy($im);

?>
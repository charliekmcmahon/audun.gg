<? include("../includes/config.php"); ?>
<?php

if($_GET['image'] == "create") {
header("Content-Type: image/gif");


$im = imagecreatefrompng("images/spotlight.png");

// Get habbo name

$loll = mysql_fetch_array(mysql_query("SELECT * FROM spotlight"));
$name = $loll[habbo];
$name2 = urldecode($name);
$name = ucfirst($name);

// We have to get the habbo's image first! :)

$thumbWidth = "60";
$thumbHeight = "120";
$url = "http://www.habbohotel.co.uk/habbo-imaging/collagepr?name_2_txt=0&name_2_y=-117&name_2_x=-491&h_2_dir=1&h_2_name=0&h_2_frame=0&h_2_gesture=0&h_2_action=0&h_2_y=0&h_2_x=0&name_1_txt=No%20Such%20User!&name_1_y=-597&name_1_x=-471&stampY=-1048&stampX=-1019&h_1_dir=4&h_1_name=". $name2 ."&h_1_frame=0&h_1_gesture=sml&h_1_action=std&h_1_y=1&h_1_x=0&overlay=0&overlayY=-95&overlayX=-39&logoY=-300&logoX=-300&bkg=0&bkgY=-95&bkgX=-38&bkgColor=ffffff&picH=320&picW=61&quality5&img-format=png&xml-template=imageCreator_1_name";
$srcImg = imagecreatefrompng($url);
$origWidth = imagesx($srcImg); 
$origHeight = imagesy($srcImg);  
$thumbImg = imagecreate($thumbWidth, $thumbHeight);
imagecopyresized($thumbImg, $srcImg, 0, 0, 0, 0, $thumbWidth, $thumbHeight, imagesx($thumbImg), imagesy($thumbImg));
$ImgWhite = imagecolorallocate($thumbImg, 255, 255, 255);
imagefill($thumbImg, 0, 0, $ImgWhite);
imagecolortransparent($thumbImg, $ImgWhite);  
						
$habbo2 = imagecopy($im, $thumbImg, 28, 19, 5, 8, 50, 100);
// We have placed their habbo on the spotlight o;

$font = "Volter-Bold (Goldfish).ttf"; // This font should be included in the folder, SOZ if i forgot to add xox.
$size = "6.5";
$black = imagecolorallocate($im, 0, 0, 0);
$text = $name;
	$img_w = imagesx($im);
	$img_h = imagesy($im);

imagettftext($im, $size, 0, ($img_w / 2)-(strlen($name)*imagefontwidth($font) /2), 130, $black, $font, $name);


imagegif($im);
imagedestroy($im);

die();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Spotlight</title>
<style type="text/css">
<!--
body {
		font-family: Verdana, Arial, Helvetica, sans-serif;
		font-size: 10px;
}
-->
</style>
</head>

<body>
<table width="23%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="63%" height="87" align="left" valign="top">We're taking sneaky photos of random Habbos and making them famous by placing them right here on the <? echo("". $site[sitename] .""); ?> homepage.<br />
      <br />
    So, watch this space for <strong>your face</strong> as you could be next! </td>
    <td width="37%" align="left" valign="top"><img src="spotlight.php?image=create" width="105" height="143" /></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
</body>
</html>

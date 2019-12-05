<?php
## CREDIT TO ASHLEY FOR NOTICING THE ERROR<3
## CREDIT TO ASHLEY FOR NOTICING THE ERROR<3
## CREDIT TO ASHLEY FOR NOTICING THE ERROR<3
## CREDIT TO ASHLEY FOR NOTICING THE ERROR<3
include('../config_radio.php'); //you may edit this path to fit your server environment otherwise leave it alone
$scfp = fsockopen("$scip", $scport, &$errno, &$errstr, 30);
if(!$scfp) {
$scsuccs=1;
echo''.$scdef.' is Offline';
}
if($scsuccs!=1){
fputs($scfp,"GET /admin.cgi?pass=$scpass&mode=viewxml HTTP/1.0\r\nUser-Agent: SHOUTcast Song Status (Mozilla Compatible)\r\n\r\n");
while(!feof($scfp)) {
$page .= fgets($scfp, 1000);
}

###########################################################
///////////////////////// Part 1 \\\\\\\\\\\\\\\\\\\\\\\\\
###########################################################

//define xml elements
$loop = array("STREAMSTATUS", "BITRATE", "SERVERTITLE", "CURRENTLISTENERS");
$y=0;
while($loop[$y]!=''){
$pageed = ereg_replace(".*<$loop[$y]>", "", $page);
$scphp = strtolower($loop[$y]);
$$scphp = ereg_replace("</$loop[$y]>.*", "", $pageed);
if($loop[$y]==SERVERGENRE || $loop[$y]==SERVERTITLE || $loop[$y]==SONGTITLE || $loop[$y]==SERVERTITLE)
$$scphp = urldecode($$scphp);

// uncomment the next line to see all variables
//echo'$'.$scphp.' = '.$$scphp.'<br>';
$y++;
}
//end intro xml elements

###########################################################
///////////////////////// Part 2 \\\\\\\\\\\\\\\\\\\\\\\\\
###########################################################

//get song info and history
$pageed = ereg_replace(".*<SONGHISTORY>", "", $page);
$pageed = ereg_replace("<SONGHISTORY>.*", "", $pageed);
$songatime = explode("<SONG>", $pageed);
$r=1;
while($songatime[$r]!=""){
$t=$r-1;
$playedat[$t] = ereg_replace(".*<PLAYEDAT>", "", $songatime[$r]);
$playedat[$t] = ereg_replace("</PLAYEDAT>.*", "", $playedat[$t]);
$song[$t] = ereg_replace(".*<TITLE>", "", $songatime[$r]);
$song[$t] = ereg_replace("</TITLE>.*", "", $song[$t]);
$song[$t] = urldecode($song[$t]);
$dj[$t] = ereg_replace(".*<SERVERTITLE>", "", $page);
$dj[$t] = ereg_replace("</SERVERTITLE>.*", "", $pageed);
$r++;
}
//end song info

fclose($scfp);
}

//display stats
if($streamstatus == "1"){
//you may edit the html below, make sure to keep variable intact

echo'
<html>

<head>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<META HTTP-EQUIV="REFRESH" CONTENT="30;URL=radio_stats.php">
<link rel=stylesheet href="../css/inside.css" type="text/css">
<style type="text/css">
<!--
body { margin: 10px; }
-->
</style>
<title>'.$scdef.'</title>
</head>

<body>

<div id="content_title" style="margin-bottom: 10px;">
Radio Statistics
</div>';

$check = mysql_query("SELECT * FROM users");
while($account = mysql_fetch_array($check)) {

if(preg_match("/". $account["username"] ."/i", $servertitle)) {
?>
<img src="<?php
$avatar = $account["avatar"];

if($avatar == "") {
echo("../images/no_ava.gif");
}
elseif($avatar == "images/no_ava.gif") {
echo("../images/no_ava.gif");
}
else {
echo("". $avatar ."");
}
?>" alt="<? echo("". $account["username"] .""); ?>\'s avatar" align="left" />
<?php
}
}

echo '<div id="content" style="margin-left: 10px;">

<b>&nbsp;Server Name:</b>&nbsp;'.$servertitle.'</p>
<b>&nbsp;Listeners:</b>&nbsp;'.$currentlisteners.' </p>

<b>

Current Song:</b> '.$song[0].'</p>
<b>



Past Songs:</b><br />
<b>1.</b> '.$song[1].'<BR>
<b>2.</b> '.$song[2].'<BR>
<b>3.</b> '.$song[3].'<BR>
</body>

</html>';
}
if($streamstatus == "0")
{
//you may edit the html below, make sure to keep variable intact
echo'
<html>

<head>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<META HTTP-EQUIV="REFRESH" CONTENT="30;URL=radio_stats.php">
<link rel=stylesheet href="../css/inside.css" type="text/css">
<style type="text/css">
<!--
body { margin: 10px; }
-->
</style>
<title>Server Offline!</title>
</head>

<body>

<div id="content_title" style="margin-bottom: 10px;">
Radio Statistics
</div>
<div id="content">
Sorry! The radio is currently offline :(
</div>
</body>

</html>';
}
## CREDIT TO ASHLEY FOR NOTICING THE ERROR<3
?> 
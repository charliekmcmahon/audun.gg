<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);


$query = mysql_query("SELECT * FROM threads");

?>
<link href="../css/inside.css" rel="stylesheet" type="text/css">

<div id="content_title">DJ Message Board</div>
<br />
<table width="695" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td id="forum" height="33" colspan="3" style="background-image: url(forum/images/bot.gif); background-repeat: no-repeat; padding: 4px; font-family: 'Trebuchet MS'; font-size: 13px; color: #333333; text-align: left;"><a href="?page=forum/post" target="_self">&raquo; Post a thread</a></td>
  </tr>
  <tr>
    <td width="15%">&nbsp;</td>
  </tr>
<?php
$num = mysql_num_rows($query);

if($num == "0") {
?>
  <tr id="forum2" style="font-family: 'Tahoma', Verdana; font-size: 11px; color: #000000;">
    <td colspan="3" valign="top">There are currently <strong>no</strong> threads!</td>
  </tr>
  <tr style="font-family: 'Tahoma', Verdana; font-size: 11px; color: #000000;">
    <td colspan="3" valign="top" style="background-image: url(images/horz_bg.gif); background-repeat: repeat-x">&nbsp;</td>
  </tr>
<?php
}
?>
<?php
while($rows = mysql_fetch_array($query)) {
?>
  <tr id="forum2" style="font-family: 'Tahoma', Verdana; font-size: 11px; color: #000000;">
    <td colspan="3" valign="top"><a href="?page=forum/forumdisplay&f=<? echo("". $rows["id"] .""); ?>"><strong>&raquo; <? echo("". $rows["title"] .""); ?> </strong></a>- Posted by <? echo("". $rows["thread_starter"] .""); ?> -
	<span style="font-size:9px;" >
<?php
$get = mysql_num_rows(mysql_query("SELECT * FROM posts WHERE thread = '$rows[id]'"));
echo("". $get ."");
?> Post(s)</span></td>
  </tr>
  <tr style="font-family: 'Tahoma', Verdana; font-size: 11px; color: #000000;">
    <td colspan="3" valign="top" style="background-image: url(images/horz_bg.gif); background-repeat: repeat-x">&nbsp;</td>
  </tr>
<?php
}
?>
</table>
<?
} else {
header('location: index.php');
die();
}
?>
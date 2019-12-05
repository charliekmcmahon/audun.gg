<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);

?>
<link href="../css/inside.css" rel="stylesheet" type="text/css">
<div id="content_title">DJ Message Board</div>
<div id="content">
<?php
## Check the thread exists firsts!

$idx = $_GET['id'];

$check = mysql_num_rows(mysql_query("SELECT * FROM threads WHERE id = '$idx'"));

if($check == "0" || $check == "0") {
echo("<br /><strong>Error!</strong> That thread doesn't exist, silly!");
}
else {

## CHECK THEY ARE ADMIN OR ITS THEIR THREAD

$id = $_GET['id'];

$checking = mysql_fetch_array(mysql_query("SELECT * FROM threads WHERE id = '$id'"));

if(!$checking[thread_starter] == $_SESSION['username'] && $_SESSION['level'] != "admin") {
echo("<br /><strong>Error!</strong> You don't have permission to do this! Sorry...");
}
else {


?>
<?php
if(isset($_POST['submit']) && $_POST['id'] && !empty($_POST['id'])) {
## Posting

$id = $_POST['id'];


## DELETE UM

$insety = mysql_query("DELETE FROM threads WHERE id = '$id'") or die('Could not delete thread, Error: '.mysql_error());
$insety = mysql_query("DELETE FROM posts WHERE thread = '$id'") or die('Could not delete thread, Error: '.mysql_error());

echo("<br /><strong>Thanks!</strong> Your thread has been deleted.<br /><br /><div id='link'><a href='?page=forum/index'>Click here to view the current threads</a></div>");
}
else {
?>
<br />
<table width="695" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="33" colspan="3" style="background-image: url(forum/images/bot.gif); background-repeat: no-repeat; padding: 4px; font-family: 'Trebuchet MS'; font-size: 13px; color: #666666; text-align: left;"><span id="forum"><a href="?page=forum/index" target="_self">Forum Index</a></span> &gt; Delete a thread</td>
  </tr>
  <tr>
    <td width="15%">&nbsp;</td>
  </tr>
  <tr id="content">
    <td colspan="3" valign="top">
	<form name="" method="post" action="">
	<input type="hidden" name="id" value="<? echo("". $_GET['id'] .""); ?>" />
        <strong>Are you sure you want to delete the thread? </strong><br>
        <br>
        <label>
        <input name="submit" type="submit" id="submit" value="Yes">
        </label>
    </form>    </td>
  </tr>
  <tr style="font-family: 'Tahoma', Verdana; font-size: 11px; color: #000000;">
    <td colspan="3" valign="top" style="background-image: url(images/horz_bg.gif); background-repeat: repeat-x">&nbsp;</td>
  </tr>
</table>
<?
}
}
}
} else {
header('location: index.php');
die();
}
?>
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

$check = mysql_num_rows(mysql_query("SELECT * FROM posts WHERE id = '$idx'"));

if($check == "0" || $check == "0") {
echo("<br /><strong>Error!</strong> That post doesn't exist, silly!");
}
else {

## CHECK THEY ARE ADMIN OR ITS THEIR POST

$checking = mysql_fetch_array(mysql_query("SELECT * FROM posts WHERE id = '$id'"));

if(!$checking[username] == $_SESSION['username'] && $_SESSION['level'] != "admin") {
echo("<br /><strong>Error!</strong> You don't have permission to do this! Sorry...");
}
else {


?>
<?php
if(isset($_POST['submit']) && $_POST['id'] && !empty($_POST['id'])) {
## Posting

$id = $_POST['id'];

## GET THREAD ID

$getumz = mysql_fetch_array(mysql_query("SELECT * FROM posts WHERE id = '$id'"));

$thread_id = $getumz["thread"];

## DELETE UM

$insety = mysql_query("DELETE FROM posts WHERE id = '$id'") or die('Could not post thread, Error: '.mysql_error());

echo("<br /><strong>Thanks!</strong> Your post has been deleted.<br /><br /><div id='link'><a href='?page=forum/forumdisplay&f=". $thread_id ."'>Click here to view the thread</a></div>");
}
elseif(isset($_POST['id']) && isset($_POST['message']) && empty($_POST['message'])) {
echo("<br /><strong>Error!</strong> You must fill in the message form.<br /><br /><span id='link'><a href='?page=forum/reply&id=". $id ."' target='_self'>Go back</a></span></div>");
}
elseif(isset($_POST['id']) && isset($_POST['message']) && empty($_POST['id'])) {
echo("<br /><strong>Error!</strong> The thread ID was missing<br /><br /><span id='link'><a href='?page=forum/reply&id=". $id ."' target='_self'>Go back</a></span></div>");
}
else {
?>
<br />
<table width="695" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="33" colspan="3" style="background-image: url(forum/images/bot.gif); background-repeat: no-repeat; padding: 4px; font-family: 'Trebuchet MS'; font-size: 13px; color: #666666; text-align: left;"><span id="forum"><a href="?page=forum/index" target="_self">Forum Index</a></span> Delete a post</td>
  </tr>
  <tr>
    <td width="15%">&nbsp;</td>
  </tr>
  <tr id="content">
    <td colspan="3" valign="top">
	<form name="" method="post" action="">
	<input type="hidden" name="id" value="<? echo("". $_GET['id'] .""); ?>" />
        <strong>Are you sure you want to delete the post? </strong><br>
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
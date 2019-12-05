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

$invo = mysql_num_rows(mysql_query("SELECT * FROM posts WHERE id = '$idx'"));

if($invo["username"] == $_SESSION['username'] || $_SESSION['level'] == "admin") {
?>
<?php
if(isset($_POST['message']) && $_POST['id'] && !empty($_POST['id']) && !empty($_POST['message'])) {
## Posting

$id = $_POST['id'];

$message = $_POST['message'];

## CLEAN UM.

$message = clean($message);
$message = censor($message);
$message = bbcode($message);

## ADD UM.

$insety = mysql_query("UPDATE posts SET message = '$message' WHERE id = '$id'") or die('Could not update thread, Error: '.mysql_error());

$gets = mysql_fetch_array(mysql_query("SELECT * FROM posts WHERE id = '$id'"));

echo("<br /><strong>Thanks!</strong> Your post has been updated.<br /><br /><div id='link'><a href='?page=forum/forumdisplay&f=". $gets["thread"] ."'>Click here to review your post</a></div>");
}
elseif(isset($_POST['id']) && isset($_POST['message']) && empty($_POST['message'])) {
echo("<br /><strong>Error!</strong> You must fill in the message form.<br /><br /><span id='link'><a href='?page=forum/reply&id=". $id ."' target='_self'>Go back</a></span></div>");
}
elseif(isset($_POST['id']) && isset($_POST['message']) && empty($_POST['id'])) {
echo("<br /><strong>Error!</strong> The post ID was missing<br /><br /><span id='link'><a href='?page=forum/reply&id=". $id ."' target='_self'>Go back</a></span></div>");
}
else {
?>
<br />
<table width="695" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="33" colspan="3" style="background-image: url(forum/images/bot.gif); background-repeat: no-repeat; padding: 4px; font-family: 'Trebuchet MS'; font-size: 13px; color: #666666; text-align: left;"><span id="forum"><a href="?page=forum/index" target="_self">Forum Index</a></span> > Update your post</td>
  </tr>
  <tr>
    <td width="15%">&nbsp;</td>
  </tr>
  <tr id="content">
    <td colspan="3" valign="top">
	<form name="" method="post" action="">
	<input type="hidden" name="id" value="<? echo("". $_GET['id'] .""); ?>" />
        <strong>Message:</strong><br>
        <label>
        <textarea name="message" cols="50" rows="5" id="message">
<?php
$grabs = mysql_fetch_array(mysql_query("SELECT * FROM posts WHERE id = '$_GET[id]'"));

$message = $grabs["message"];

$string = $message;

$string = str_replace("<strong>", "[b]", $string);
$string = str_replace("</strong>", "[/b]", $string);
$string = str_replace("<u>", "[u]", $string);
$string = str_replace("</u>", "[/u]", $string);
$string = str_replace("<i>", "[i]", $string);
$string = str_replace("</i>", "[/i]", $string);
$string = str_replace("<strike>", "[s]", $string);
$string = str_replace("</strike>", "[/s]", $string);

$string = str_replace('<div style="margin-left: 5px; margin-top: 5px;">Quote:<br /><div style="border: dotted 1px #000000; padding: 4px;"><!-- Quote -->', "[quote]", $string);
$string = str_replace('<div style="margin-left: 5px; margin-top: 5px;">Code:<br /><div style="border: dotted 1px #000000; padding: 4px;"><!-- Code -->', "[code]", $string);
$string = str_replace('<!-- / Quote --></div></div>', "[/quote]", $string);
$string = str_replace('<!-- / Code --></div></div>', "[/code]", $string);

$message = $string;


echo("". $message ."");
?></textarea>
        </label>
        <br>
        <br />
        <a onclick="o2c('ppcode'); toggle('lol');"><strong>Click here to view 'PPCode' tags.</strong></a>
        <div id="ppcode" style="display: none;"> <strong>[b]</strong>Message<strong>[/b]</strong> - Bold <br />
            <strong>[i]</strong>Message<strong>[/i]</strong> - Italics<br />
            <strong>[u]</strong>Message<strong>[/u]</strong> - Underline<br />
            <strong>[s]</strong>Message<strong>[/s]</strong> - Strikeout<br />
            <strong>[code]</strong>Message<strong>[/code]</strong> - Code wrapper<br />
		<br />
		<strong>NOTE:</strong> PPCode is <strong>case-sensitive!</strong>
            <span id="lol"><br />
          </span> </div>
        <br />
        <br>
        <label>
        <input type="submit" name="Submit" value="Update">
        </label>
    </form>    </td>
  </tr>
  <tr style="font-family: 'Tahoma', Verdana; font-size: 11px; color: #000000;">
    <td colspan="3" valign="top" style="background-image: url(images/horz_bg.gif); background-repeat: repeat-x">&nbsp;</td>
  </tr>
</table>
<?
}
}else {
echo("<br /><strong>Error!</strong> You don't have permission to do this! Sorry...");
}
}
} else {
header('location: index.php');
die();
}
?>
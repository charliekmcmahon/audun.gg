<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);

?>
<link href="../css/inside.css" rel="stylesheet" type="text/css">
<div id="content_title">DJ Message Board</div>
<div id="content">
<?php
if(isset($_POST['title']) && isset($_POST['message']) && !empty($_POST['title']) && !empty($_POST['message'])) {
## Posting

$title = $_POST['title'];
$message = $_POST['message'];

## CLEAN UM.

$title = clean($title);
$message = clean($message);
$message = censor($message);
$message = bbcode($message);

## RAND ID
$rand = rand(0, 99999);

## ADD UM.

$insertual = mysql_query("INSERT INTO threads (`title`, `thread_starter`, `thread_message`, `rand`) VALUES ('$title', '$_SESSION[username]', '$message', '$rand')") or die('Could not post thread, Error: '.mysql_error());

$grabttt = mysql_fetch_array(mysql_query("SELECT * FROM threads WHERE title = '$title' AND rand = '$rand'"));

$thread_id = $grabttt["id"];

$insety = mysql_query("INSERT INTO posts (`thread`, `message`, `username`, `key`) VALUES ('$thread_id', '$message', '$_SESSION[username]', 'yes')") or die('Could not post thread, Error: '.mysql_error());

echo("<br /><strong>Thanks!</strong> Your thread has been posted.<br /><br /><div id='link'><a href='?page=forum/forumdisplay&f=". $thread_id ."'>Click here to view your thread</a></div>");
}
elseif(isset($_POST['title']) && isset($_POST['message']) && empty($_POST['title'])) {
echo("<br /><strong>Error!</strong> You must fill in the title form.<br /><br /><span id='link'><a href='?page=forum/post' target='_self'>Go back</a></span></div>");
}
elseif(isset($_POST['title']) && isset($_POST['message']) && empty($_POST['message'])) {
echo("<br /><strong>Error!</strong> You must fill in the message form.<br /><br /><span id='link'><a href='?page=forum/post' target='_self'>Go back</a></span></div>");
}
else {
?>
<br />
<table width="695" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="33" colspan="3" style="background-image: url(forum/images/bot.gif); background-repeat: no-repeat; padding: 4px; font-family: 'Trebuchet MS'; font-size: 13px; color: #666666; text-align: left;"><span id="forum"><a href="?page=forum/index" target="_self">Forum Index</a></span> &gt; Post a thread</td>
  </tr>
  <tr>
    <td width="15%">&nbsp;</td>
  </tr>
  <tr id="content">
    <td colspan="3" valign="top">
	<form name="" method="post" action="">
        <label>
          <strong>Thread Title:</strong><br>
        <input name="title" type="text" id="title">
        </label>
        <br>
        <br>
        <strong>Message:</strong><br>
        <label>
        <textarea name="message" cols="50" rows="5" id="message"></textarea>
        </label>
        <br />
        <br />
        <a onClick="o2c('ppcode'); toggle('lol');"><strong>Click here to view 'PPCode' tags.</strong></a>
        <div id="ppcode" style="display: none;">
		<strong>[b]</strong>Message<strong>[/b]</strong> - Bold <br />
        <strong>[i]</strong>Message<strong>[/i]</strong> - Italics<br />
        <strong>[u]</strong>Message<strong>[/u]</strong> - Underline<br />
        <strong>[s]</strong>Message<strong>[/s]</strong> - Strikeout<br />
        <strong>[code]</strong>Message<strong>[/code]</strong> - Code wrapper<br />
		<br />
		<strong>NOTE:</strong> PPCode is <strong>case-sensitive!</strong>
		<span id="lol"><br />
        </span>
        </div><br /><br />
        <label>
        <input type="submit" name="Submit" value="Post Thread">
        </label>
    </form>    </td>
  </tr>
  <tr style="font-family: 'Tahoma', Verdana; font-size: 11px; color: #000000;">
    <td colspan="3" valign="top" style="background-image: url(images/horz_bg.gif); background-repeat: repeat-x">&nbsp;</td>
  </tr>
</table>
<?
}
} else {
header('location: index.php');
die();
}
?>
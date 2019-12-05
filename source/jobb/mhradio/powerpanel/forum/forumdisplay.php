<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);

?>
<div id="content_title">DJ Message Board</div>
<?php
if(isset($_GET['f']) && !empty($_GET['f'])) {

$id = $_GET['f'];

$query = mysql_query("SELECT * FROM threads WHERE id = '$id'");

$grz = mysql_fetch_array($query);


if(mysql_num_rows($query) == "0" || "") {
echo("<div id='content'><strong>Error!</strong> There is no thread associated with this id</div>");
}
?>
<br />
<table width="695" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="33" colspan="3" style="background-image: url(forum/images/top.gif); background-repeat: no-repeat; padding: 4px; font-family: 'Trebuchet MS'; font-size: 13px; color: #999999; text-align: left;"><span id="forum"><a href="?page=forum/index" target="_self">Forum Index</a></span> &raquo; <? echo("". $grz["title"] .""); ?> - 
	
<?php
if($grz["thread_starter"] == $_SESSION['username'] || $_SESSION['level'] == "admin") {
?>
<span id="forum">
<a href="?page=forum/del&id=<? echo("". $grz["id"] .""); ?>" target="_self">Delete Thread</a>
</span>
<? } ?></td>
  </tr>

<?php
## THREAD STUFF ##

$lol = mysql_query("SELECT * FROM posts WHERE thread = '$id' ORDER BY id");
while($yuh = mysql_fetch_array($lol)) {

$username = $yuh["username"];

##### USER INFORMATION #####

$grab = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE username = '$username'"));

$avatar = $grab["avatar"];

if($avatar == "") {
$avatar = "images/no_ava.gif"; // Set a default avatar
}
?>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr style="font-family: 'Tahoma', Verdana; font-size: 11px; color: #000000;">
    <td width="15%" valign="top"><strong>Posted by: </strong><br /><? echo("". $yuh["username"] .""); ?><br />
      <br />
    <strong>DJ Avatar:</strong>
	<br />
	<img src="<? echo("". $avatar .""); ?>" alt="<? echo("". $yuh["username"] .""); ?>'s Avatar" border="0" />
	</td>
    <td width="5%" valign="top" style="background-image: url(forum/images/vert_break.gif); background-position: left; background-repeat: repeat-y">&nbsp;</td>
    <td width="80%" valign="top"><? echo("". nl2br($yuh["message"]) .""); ?>
      <br />
    <br /></td>
  </tr>
  <tr style="font-family: 'Tahoma', Verdana; font-size: 11px; color: #000000;">
    <td colspan="3" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td id="forum2" height="33" valign="middle" colspan="3" style="background-image: url(forum/images/bot.gif); background-repeat: no-repeat; padding: 4px; font-family: 'Trebuchet MS'; font-size: 13px; color: #333333; text-align: right;"><a href="?page=forum/reply&id=<? echo("". $id .""); ?>" target="_self"><img src="images/new_comment.gif" alt="Post Reply" width="16" height="16" border="0" /></a> &nbsp;<a href="?page=forum/reply&amp;id=<? echo("". $id .""); ?>&amp;p=<? echo("". $yuh["id"] .""); ?>" target="_self"></a><a href="?page=forum/delete&amp;id=<? echo("". $yuh["id"] .""); ?>" target="_self"><img src="images/speach.gif" alt="Quote" width="16" height="16" border="0" /></a><?php
if($yuh["username"] == $_SESSION['username'] || $_SESSION['level'] == "admin") {
?>
 &nbsp;<a href="?page=forum/edit&amp;id=<? echo("". $yuh["id"] .""); ?>" target="_self"><img src="images/page_edit.gif" alt="Edit" width="16" height="16" border="0" /> </a>
<? } ?>
<?php

$waffles = mysql_num_rows(mysql_query("SELECT * FROM posts WHERE thread = '$id'"));

if($waffles == "1") {
}
else {

## check it isnt the key post

$doghair = mysql_fetch_array(mysql_query("SELECT * FROM posts WHERE id = '$yuh[id]'"));

if($doghair['key'] == "yes") {
}
else {

if($yuh["username"] == $_SESSION['username'] || $_SESSION['level'] == "admin") {
?>
&nbsp;<a href="?page=forum/delete&id=<? echo("". $yuh["id"] .""); ?>" target="_self"><img src="images/delete.gif" alt="Delete" width="16" height="16" border="0" /></a>
<? } } }?></td>
  </tr>
<?php
}
?>
</table>
<?
}
} else {
header('location: index.php');
die();
}
?>
<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);

?>

<link href="../css/inside.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
td, a, a:link, a:active, input, select, textarea
{
	font-size: 12px;
	font-family: Trebuchet MS;
	color: #6d6d6d;
	text-decoration: none;
}
-->
</style>
		<div id="content_title">Reply To A PM</div>
		
		<div id="content">
		<br />
<?php

## SEND A PERSONAL MESSAGE ##

if(isset($_POST['subject']) && isset($_POST['message']) && isset($_POST['sendto']) && !empty($_POST['subject']) && !empty($_POST['message']) && !empty($_POST['sendto'])) {

## DEFINE VARIABLES ##

$subject = $_POST['subject'];
$message = $_POST['message'];
$sendto = $_POST['sendto'];
$sendfrom = $_SESSION['username'];
$date = date("d/m/y");

## CLEAN VARIABLES ##

$subject = clean($subject);
$subject = censor($subject);
$message = clean($message);
$message = censor($message);
$sendto = clean($sendto);
$sendto = clean($sendto);
$message = nl2br($message);

## EXECUTE MYSQL SEND QUERY ##

$insert = mysql_query("INSERT INTO pms (subject, message, sendto, sendfrom, date) VALUES ('$subject', '$message', '$sendto', '$sendfrom', '$date')") or die('Could not send PM!, Error: '.mysql_error());

## GIVE THEM THE SUCCESS MESSAGE ##

echo("Your PM has been sent to <strong>". $sendto ."</strong>! Thanks!<br />");

} elseif(isset($_POST['subject']) && isset($_POST['message']) && isset($_POST['sendto']) && empty($_POST['subject']) && empty($_POST['message']) && empty($_POST['sendto'])) {

echo("<strong>Error:</strong> You left one or move fields empty!<br /<br /><span id='link'><a href='?page=pms/send'>Go back</a></span");	

}
?>
<form method="post" action="">
  <label>
  <strong>Recipitent:<br />
  </strong>
  <select name="sendto">
<?php
if($_POST['type'] == "reply") {

$id = $_POST['id'];

$query = mysql_query("SELECT * FROM pms WHERE id = '$id'");
$f = mysql_fetch_array($query);


echo("<option value='". $f["sendfrom"] ."'>". $f["sendfrom"] ."</option>");

} else {

$query = mysql_query("SELECT * FROM users");
while($fetch = mysql_fetch_array($query)) {
echo("<option value='". $fetch[username] ."'>". $fetch[username] ."</option>");
}
}

?>
  </select>
  </label>
  <br />
  <br />
  <strong>Subject:</strong><br />
  <label>
  <input name="subject" type="text" id="subject" <?php

if($_POST['type'] == "reply") {

$id = $_POST['id'];

$query = mysql_query("SELECT * FROM pms WHERE id = '$id'");
$f = mysql_fetch_array($query);
?>
value="RE: <? echo("". $f["subject"] .""); ?>"
<? }
elseif($_POST['type'] == "fwd") {
$id = $_POST['id'];

$query = mysql_query("SELECT * FROM pms WHERE id = '$id'");
$f = mysql_fetch_array($query);
?>
value="FWD: <? echo("". $f["subject"] .""); ?>" <? } ?>
/>
  </label>
  <br />
  <br />
  <strong>Message:</strong><br />
<label>
<textarea name="message" cols="50" rows="8" id="message">
<?php

if($_POST['type'] == "reply") {

$id = $_POST['id'];

$query = mysql_query("SELECT * FROM pms WHERE id = '$id'");
$f = mysql_fetch_array($query);

echo("\n\n*------------ ORIGINAL MESSAGE BY ". $f["sendfrom"] ." ------------*\n\n");

echo("". $f[message] ."");

}
elseif($_POST['type'] == "fwd") {

$id = $_POST['id'];

$query = mysql_query("SELECT * FROM pms WHERE id = '$id'");
$f = mysql_fetch_array($query);

echo("*------------ ORIGINALLY SENT BY ". $f["sendfrom"] ." ------------*\n\n");

echo("". $f[message] ."");

}
?>
</textarea>
</label>
<br />
<br />
<label>
<input type="submit" name="Submit" value="Send PM" />
</label>
</form>
</div>
        <?
} else {
header('location: index.php');
die();
}
?>
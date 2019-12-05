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
		<div id="content_title">Send A PM</div>
		
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

if($sendto == "everyone" && $_SESSION['level'] == "admin") {

$query = mysql_query("SELECT * FROM users");
while($rows = mysql_fetch_array($query)) {

$insert = mysql_query("INSERT INTO pms (subject, message, sendto, sendfrom, date) VALUES ('$subject', '$message', '$rows[username]', '$sendfrom', '$date')") or die('Could not send PM!, Error: '.mysql_error());

echo("PM sent to <strong>$rows[username]</strong><br />");

}
## GIVE THEM THE SUCCESS MESSAGE ##

echo("<br />Your PM has been sent to <strong>All DJ's</strong>! Thanks!<br /><br />");





}
else {

## EXECUTE MYSQL SEND QUERY ##

$insert = mysql_query("INSERT INTO pms (subject, message, sendto, sendfrom, date) VALUES ('$subject', '$message', '$sendto', '$sendfrom', '$date')") or die('Could not send PM!, Error: '.mysql_error());

## GIVE THEM THE SUCCESS MESSAGE ##

echo("Your PM has been sent to <strong>". $sendto ."</strong>! Thanks!<br />");
}
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

$query = mysql_query("SELECT * FROM users");
while($fetch = mysql_fetch_array($query)) {
echo("<option value='". $fetch[username] ."'>". $fetch[username] ."</option>");
}

if($_SESSION['level'] == "admin") {
echo("<option value='everyone'>All DJ's</option>");
}
?>
  </select>
  </label>
  <br />
  <br />
  <strong>Subject:</strong><br />
  <label>
  <input name="subject" type="text" id="subject" />
  </label>
  <br />
  <br />
  <strong>Message:</strong><br />
<label>
<textarea name="message" cols="50" rows="8" id="message"></textarea>
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
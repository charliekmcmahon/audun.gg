<html>
<head>
<title>Request lines.</title>
<style type="text/css">
.nav
{
	width: 200px;
	padding: 13px;
	vertical-align: top;
	text-align: left;
}
.main
{
	padding: 13px;
	vertical-align: top;
	text-align: left;
}
.title
{
	font-size: 22px;
	font-family: Trebuchet MS;
	color: #145574;
}
.verdanatext
{
	font-size: 10px;
	font-family: Verdana;
}
.subtitle
{
	font-size: 14px;
	font-weight: bold;
}
td, a, a:link, a:active, input, select, textarea, body
{
	font-size: 12px;
	font-family: Trebuchet MS;
	color: #000000;
	text-decoration: none;
}
a:hover
{
	font-weight: bold;
	cursor: hand;
	cursor: pointer;
}
input, textarea, fieldset, select
{
	border: 1px solid #e3e3e3;
	background: transparent;
}
option
{
	background: #ffffff;
}
legend
{
	color: #145574;
}
fieldset
{
	text-align: left;
	padding: 7px;
}
hr
{
	border: 0px;
	color: #e3e3e3;
	background: #e3e3e3;
	height: 1px;
}

</style>
</head>
<body>
<?php
include("functions.php");
include("../connector.php");
include("requeststats.php");
if(isset($_POST["name"]) && isset($_POST["message"]))
{
	$username = clean($_POST["name"]);
	$message = clean($_POST["message"]);
	$dj = clean($_POST["DJ"]);
	$type = clean($_POST["type"]);
	if($username == "" || $message == "")
	{
		echo("Sorry, you have left a field blank, please click <a href=\"request.php\" target=\"_self\">here</a> to go back.");
		unset($_POST["name"]);
		unset($_POST["message"]);
		exit;
	}
	mysql_query("INSERT INTO `requests` (`sender`, `dj`, `message`, `date`, `type`, `ip`) VALUES ('$username', '$dj', '$message', '".gmdate("d/m/Y - h:i:s")."', '$type', '".$_SERVER["REMOTE_ADDR"]."')");
	echo("Thanks for sending in a request, $username.<br />Please feel free to navigate away from this page, or return to the request line by clicking <a onclick=\"dopage('request.php', 'content');\">here</a>");
	exit;
}
else
{
	?>
	<form action="" method="post">
	<b>Your name:</b><br /><input type="text" name="name"><br /><br />
	<b>The Current DJ:</b><br />
	<select name="DJ">
	<?php
	$sql = mysql_query("SELECT `username` FROM `users`");
	while($fetch = mysql_fetch_array($sql))
	{
	if(preg_match("/{$fetch["username"]}/i", $djsplit))
	{
		echo("<option value=\"{$fetch["username"]}\" selected>DJ {$fetch["username"]}</option>\n");
	}
	else 
	{
		echo("<option value=\"{$fetch["username"]}\">DJ {$fetch["username"]}</option>\n");
	}
	}
	?>
	</select>
	<br /><br />
	<b>Type of Message:</b><br />
	<select name="type">
	<option selected>Song Request</option>
	<option>Listener Shoutout</option>
	<option>Competition Entry</option>
	<option>Joke Submission</option>
	<option>Other Submission</option>
	</select>
	<br /><br />
	<b>Your Message:</b><br />
	<textarea name="message" rows="8" cols="50"></textarea><br /><br />
	<input type="submit" name="submit" value="Send to the DJ">
	</form>
	<?php
}
?>
</body></html>
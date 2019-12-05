<?php
if(@file_exists("installer.php"))
{
	header("Location: installer.php?stage=1");
}
session_start();
include("includes/functions.php");
include("includes/config.php");

// Check for login
if($_GET['inside'] == "yes" || isset($_SESSION['username']) && isset($_SESSION['password']) && !$_SESSION['level'] == "banned") {
##### CHECK FOR FIRST-TIME USER #####
$checker = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE username = '$_SESSION[username]'"));

if($checker['firsttime'] == "") {
header('location: in.php?firstime=yes');
die();
} else {
header('location: in.php');
die();
}
}


elseif($_GET['method'] == "login") {

$username = $_POST['username'];
$password = $_POST['password'];

if(empty($username) || empty($password)) {
header('location: index.php?error=2');
die();
}

###############################################################
##															 ##
##           		 PANEL REPORT LOGS SENDER                ##
##															 ##
###############################################################################################################################
																															 ##
$logs = @mysql_fetch_array(mysql_query("SELECT `reports` FROM config"));													 ##
																															 ##
if($logs['reports'] != "true") {																							 ##
																															 ##
$a1 = $_SERVER['HTTP_HOST'];																								 ##
$a2 = $_SERVER['REQUEST_URI'];																								 ##
$report = @file_get_contents("http://www.powerpanel.duosystems.net/reports.php?callback=true&data=http://". $a1 ."". $a2."");##
																															 ##
}																															 ##
###############################################################################################################################
##															 ##
##                END OF PANEL REPORT LOGS SENDER            ##
##															 ##
###############################################################



// Clean out and encrypt strings

$username = clean($username);
$password = encrypt($password);

// We have encrypted and cleaned the strings.

$check = mysql_query("SELECT * FROM users WHERE username = '$username'");
while($rows = mysql_fetch_array($check)) {
$realpass = $rows[password];
$level = $rows[level];
$realuser = $rows[username];
}

$rows3 = mysql_num_rows($check);


if($rows3 == "0") {
header('location: index.php?error=1');
die();
}

if($password == $realpass) {
// Set the sessions
$_SESSION['username'] = $realuser;
$_SESSION['password'] = $password;
$_SESSION['level'] = $level;

##### CHECK FOR FIRST-TIME USER #####
$checker = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE username = '$_SESSION[username]'"));

if($checker['firsttime'] == "") {
header('location: in.php?firstime=yes');
die();
} elseif($_SESSION[level] == "banned") {
header('location: index.php?banned=true');
} else {
header('location: index.php?inside=yes');
die();
}
}
else {
session_destroy();
header('location: index.php?error=1');
die();
}



}
?>
<?
if(isset($_SESSION['username']) && isset($_SESSION['password']) && isset($_SESSION['level'])) {
header('location: in.php');
die();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><? echo("". $site[sitename] .""); ?> Radio Panel</title>
<link href="css/index.css" rel="stylesheet" type="text/css" title="original" />
<link href="css/index_oli.css" rel="alternate stylesheet" type="text/css" title="pro" />
<script language="javascript" src="includes/ajax.js"></script>
</head>

<body>

		<div id="top_fade">
		
					<div id="top_logo"></div>
		
		</div>
		
<div id="login"><form method="post" action="?method=login">
<label>username:<br />
		      <input name="username" type="text" id="username" onChange="check(this.value)" /><div id="results"></div>
  </label>
          <br />
		  <br />
	password:<br />
	<label>
	<input name="password" type="password" id="password" />
	</label>
	<br />
	<br />
	<label>
	<input type="submit" name="Submit" value="login" />
	</label>
</form>

		
		
<?php
if($_GET['error'] == "1") {
echo("		</div>
		<div id=\"error\">");
echo("<strong>Error:</strong> The username and/or password you entered was incorrect");
echo("		</div>");
}
elseif($_GET['error'] == "2") {
echo("		</div>
		<div id=\"error\">");
echo("<strong>Error:</strong> You must fill in both fields");
echo("		</div>");
}
elseif($_GET['banned'] == "true") {
echo("		</div>
		<div id=\"error\">");
echo("<strong>Error:</strong> It appears your account is disabled or banned! Please contact an administrator immediately");
echo("		</div>");
}
else {
echo("		</div>");
}
?>
		

<div id="poweredby"><a href="retreivepass.php" target="_self">Forgot your password? </a><br />
		    <br />
	      <a<? if(preg_match("/MSIE/i", $_SERVER['HTTP_USER_AGENT'])) { ?> href="#"<? } ?> onClick="setActiveStyleSheet('original');" style="cursor: pointer">Switch to original skin</a><br />
		  <a<? if(preg_match("/MSIE/i", $_SERVER['HTTP_USER_AGENT'])) { ?> href="#"<? } ?> onClick="setActiveStyleSheet('pro');" style="cursor: pointer">Switch to PowerPanel PRO Skin</a>
		<br />
		<br />
		Powered by <strong>PowerPanel</strong> BETA.<br />
</div>
</body>

</html>

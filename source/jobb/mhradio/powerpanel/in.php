<?php
session_start();
include("includes/config.php");
include("includes/functions.php");

if($_SESSION[level] == "banned") {
header('location: index.php?banned=true');
die();
}

if($_GET['firstime'] == "yes" && isset($_SESSION['username']) && isset($_SESSION['password']) && isset($_SESSION['level'])) {
##### CHECK FOR FIRST-TIME USER #####
$checker = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE username = '$_SESSION[username]'"));

if($checker['firsttime'] == "") {
include("firstime.php");
die();
} else {
}
}

if($_GET['logout'] == "true") {
session_destroy();
header('location: index.php');
}

if(isset($_SESSION['username']) && isset($_SESSION['password']) && isset($_SESSION['level'])) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><? echo("". $site[sitename] .""); ?> Radio Panel</title>
<link href="css/index.css" rel="alternate stylesheet" type="text/css" />
<link href="css/inside.css" rel="stylesheet" type="text/css" />
<link href="css/inside_oli.css" rel="alternate stylesheet" type="text/css" title="pro" />
<script language="javascript" src="includes/ajax.js"></script>
</head>

<body>
<div id="top_fade">
		
					<div id="top_logo"></div>
		
		</div>
		
		<table width="91%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="27%" valign="top"><div id="sidebar">
              <div id="section_1">
                <div id="sidebar_title">DJ Options</div>
                <div id="link"><a href="?page=home" target="_self">Welcome To PowerPanel </a></div>
                <div id="link"><a href="?page=announcements" target="_self">Announcements</a></div>
                <div id="link"><a href="?page=djlist">DJ List</a></div>
                <div id="link"><a href="?page=requests" target="_self">Requests and Shoutouts</a></div>
                <div id="link"><a href="?page=timetable/index">Timetable</a></div>
                <div id="link"><a href="?page=djsays">Update DJ Says</a></div>
                <div id="link"><a href="?page=shoutbox/index">Staff shoutbox</a></div>
                <div id="link"><a href="?page=alerts/site">Alert the website</a></div>
                <div id="link"><a href="?page=alerts/ip">Alert a single listener (IP)</a></div>
                <div id="link"><a href="?page=djemails">DJ Email's</a></div>
                <div id="link"><a href="?page=bannedsongs">Banned Songs</a>
                  <div id="div"><a href="?page=forum/index">Message Board (Forum) </a></div>
                </div>
              </div>
              <br />
              <div id="section_2">
                <div id="sidebar_title">Radio Options</div>
                <div id="link"><a href="?page=radioinfo">Radio connection information</a></div>
                <?php
// First we check if there is info and if there is we display link ;D
$check = mysql_query("SELECT * FROM radioinfo");
$rows1 = mysql_fetch_array($check);

if(!$rows1[ip] == "" && !$rows1[port] == "" && !$rows1[pass] == "") {
?>
<div id="link"><a href="
<?php
$query = mysql_query("SELECT * FROM radioinfo");
while($rows = mysql_fetch_array($query)) {
echo("http://". $rows[ip] .":". $rows[port] ."/admin.cgi?user=admin&password=". $rows[pass] ."");
}
?>" target="_blank">
Shoutcast admin login</a></div>
<? } ?>
              </div>
			  <br />
			    <div id="section_3">
                <div id="sidebar_title">Personal Messaging</div>
                <div id="link"><a href="?page=pms/index">Inbox
<?php
$que = mysql_query("SELECT * FROM pms WHERE sendto = '$_SESSION[username]'");
$num = @mysql_num_rows($que);

echo("(". $num .")");

?>
</a></div>
                <div id="link"><a href="?page=pms/send">Send a PM</a></div>
              </div>
              <br />
              <div id="section_4">
                <div id="sidebar_title">My PowerPanel</div>
                <div id="link"><a href="?page=cmpass">Change your password</a></div>
                <div id="link"><a href="?page=uprofile">Update your profile</a></div>
                <div id="link"><a href="?logout=true" target="_self">Logout</a></div>
              </div><? if($_SESSION['level'] == "admin") { ?>
              <br />
              <div id="section_5">
                <div id="sidebar_title">Administrator Options</div>
                <div id="link"><a href="?page=admin/config">PowerPanel configuration</a></div>
				<div id="link"><a href="?page=admin/radioinfo">Radio Connection Information</a></div>
                <div id="link"><a href="?page=admin/announcem">Announcement Manager</a> </div>
                <div id="link"><a href="?page=admin/bansong">Ban a song</a></div>
				<div id="link"><a href="?page=admin/unbansong">Unban a song</a></div>
                <div id="link"><a href="?page=admin/clevel">Change a user's level (rank)</a></div>
                <div id="link"><a href="?page=admin/cpass">Change a user's password</a></div>
                <div id="link"><a href="?page=admin/ban">Ban / Disable an account</a></div>
                <div id="link"><a href="?page=admin/unban">Unban / Undisable an account</a></div>
                <div id="link"><a href="?page=admin/addacc">Add an account</a></div>
                <div id="link"><a href="?page=admin/delacc">Remove an account </a></div>
              </div>
			  <br />
			 <div id="habbo_sec">
			  <div id="sidebar_title">Habbo Options</div>
			  <div id="link"><a href="?page=admin/spotlight" target="_self">Site spotlight</a></div>
			  </div>
<? } ?>
            </div></td>
            <td width="73%" valign="top">
<?php

	if(isset($_GET['page']) && $_GET['page'] != "") {
	
	$page = $_GET['page'];
	
	$page = str_replace(".", "", $page);
	$page = str_replace("firstime", "home", $page);
	
	$page = "". $page .".php";
	
	if(file_exists($page)) {
	
	include("$page");
	
	}
	
	else {
	
	include("404.php");
	
	}
	
	}
	else {
	
	include("home.php");
	
	}

?></td>
          </tr>
        </table>
		</div>

<div id="poweredby"><a<? if(preg_match("/MSIE/i", $_SERVER['HTTP_USER_AGENT'])) { echo(" href=\"#\""); } ?> onClick="setActiveStyleSheet('original');" style="cursor: pointer">Switch to original skin</a><br />
		  <a<? if(preg_match("/MSIE/i", $_SERVER['HTTP_USER_AGENT'])) { echo(" href=\"#\""); } ?> onClick="setActiveStyleSheet('pro');" style="cursor: pointer">Switch to PowerPanel PRO Skin</a>
		<br />
		<br />
		Powered by <strong>PowerPanel</strong> BETA.<br />
</div>

</body>

</html>
        <?php
} else {
header('location: index.php');
die();
}
?>
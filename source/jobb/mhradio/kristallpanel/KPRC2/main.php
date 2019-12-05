<?php
session_start();
require("functions.php");
require("connector.php");
define("kristall", 1);
login();
?>
<html>
<head>
<title><?php sitename(); ?> :: Kristall-Panel :: Welcome</title>
<style type="text/css">@import("default.css");</style>
<link href="default.css" rel="stylesheet" type="text/css" title="default">
<link href="redrose.css" rel="alternate stylesheet" type="text/css" title="red">
<link href="cleanwhite.css" rel="alternate stylesheet" type="text/css" title="white">
<script type="text/javascript" src="js.js"></script>
</head>

<body topmargin="0" leftmargin="0" rightmargin="0" bgcolor="#FFFFFF" onload="timetable()">

<div align="center">
	<table cellpadding="0" cellspacing="0" class="header">
		<tr>
			<td valign="top" align="center">
			<table cellpadding="0" cellspacing="0" width="430" height="150">
				<tr>
					<td class="logo">&nbsp;</td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
</div>
<div align="center">
	<table cellpadding="0" cellspacing="0" width="95%" align="center">
		<tr>
			<td width="213" style="padding-right: 9px;" valign="top">
			<span class="title">Navigation</span><br /><br />
			<span class="subtitle">General Links</span><br />
				<a href="?view=welcome">Homepage</a><br />
				<a href="?view=userlist">User List</a></br />
				<a href="?view=changedetails">Change Your Details</a><br />
				<a href="?view=chat">Chatbox</a><br />
				<a href="logout.php">Logout</a><br />
			<br />
			
			<span class="subtitle">DJ Links</span><br />
			<a href="?view=requests">Request Line <?php countrequests(); ?></a><br />
			<a href="?view=timetable">Timetable</a><br />
			<a href="?view=djsays">DJ Says</a><br />
			<a href="?view=viewinfo">Radio Information</a><br />
			<br />
			<span class="subtitle">Private Messaging</span><br />
			<a href="?view=pm&act=viewform">View Your Private Messages (<?php countpm(); ?>)</a><br />
			<a href="?view=pm&act=sendform">Send a Private Message</a><br />
			<?php
			if($_SESSION["kristall_level"] == "Senior DJ" || $_SESSION["kristall_level"] == "Administrator" || $_SESSION["kristall_level"] == "Super Administrator")
			{
				echo("<a href=\"?view=pm&act=massform\">Send a Mass Message</a><br />");
			}
			?>
			<?php
			if($_SESSION["kristall_level"] == "Administrator" || $_SESSION["kristall_level"] == "Super Administrator")
			{
				?>
				<hr>
				<span class="title">Administration</span><br />				
			<br />
			<span class="subtitle">General Administration</span><br />
				<a href="?view=kpupdates">Kristall-Panel Updates</a><br />	
				<a href="?view=settings">System Settings</a><br />
				<a href="?view=radioinfo">Update Radio Info</a><br />
				<a href="?view=viewlogs">View Login Logs</a><br />
				<br />
			<span class="subtitle">User Administration</span><br />
			<a href="?view=usermanage&act=addform">Add a User</a><br />
			<a href="?view=usermanage&act=choosedit">Edit a User</a><br />
			<a href="?view=usermanage&act=deleteform">Remove a User</a><br />
			<?php
			}
			?>
			<hr>
			<span class="title">User Details</span><br />
			<strong>Username:</strong> <?php echo("{$_SESSION["kristall_username"]}"); ?><br />
			<strong>Level:</strong> <?php echo("{$_SESSION["kristall_level"]}"); ?><br />
			<strong>Warnings:</strong> <?php warning(); ?><hr>
			<span class="title">Styles</span><br />
			<a onclick="setActiveStyleSheet('red');">Red Rose</a><br />
			<a onclick="setActiveStyleSheet('default');">Kristall Blue (Default)</a><br />
			<a onclick="setActiveStyleSheet('white');">Desaturated</a>
			<br />
			</td>
			
			
					<td class="main">
					<?php
						$url = clean($_GET["view"], "nofilter");
						if(isset($_GET["view"]) && $_GET["view"] != "")
						{
							if(file_exists("$url.php"))
							{
								include("$url.php");
							}
							else
							{
								include("404.php");
							}
						}
						else
						{
							include("welcome.php");
						}
					?>
					</td>
		</tr>
	</table>
</div>

</body>

</html>

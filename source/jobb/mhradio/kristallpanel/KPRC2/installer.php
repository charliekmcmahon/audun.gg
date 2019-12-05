<?php
include("connector.php");
include("functions.php");
errorheader("Kristall-Panel RC2 - Installer");
if(isset($_GET["act"]))
{
switch($_GET["act"])
{
	case "config":
		echo("Welcome to the installation for Kristall-Panel RC2.<br /><br />First, we need to collect your MySQL database information, please enter it into the boxes provided below:<hr>
		<form action=\"installer.php?act=doconfig\" method=\"post\">
		MySQL Username:<br />
		<input type=\"text\" name=\"username\" size=\"28\"><br /><br />
		MySQL Database:<br />
		<input type=\"text\" name=\"database\" size=\"28\"><br /><br />
		MySQL Password:<br />
		<input type=\"text\" name=\"password\" size=\"28\"><br /><br />
		<input type=\"submit\" value=\"Click to Continue\">");
	break;
	
	case "doconfig":
		echo("Now attempting connection to the server<hr>");
		@mysql_connect("localhost", $_POST["username"], $_POST["password"])
		or exit("Connection failed, please click back and try again.");
		echo("MySQL connection success!<hr>Attempting to connect to the database: {$_POST["database"]}<hr>");
		@mysql_select_db($_POST["database"])
		or exit("Connection failed, please click back and try again.");
		echo("MySQL Database selection success<hr>Attempting to write new configuration details to the configuration file<hr>");
		$file = "connector.php";
		$connection = @fopen($file, "w")
		or exit("Could not open file connector.php, or could not truncate the file to 0 length - Please chmod connector.php to 0666 (or 0777) then reload this page!");
		echo("Connector file opened and truncated successfully<hr>Now attempting to write new connection details<hr>");
		$configfile = "<?php
\$hostname = (\"localhost\");
\$database = (\"{$_POST["database"]}\");
\$username = (\"{$_POST["username"]}\");
\$password = (\"{$_POST["password"]}\");
@mysql_connect(\$hostname, \$username, \$password)
or exit(\"MySQL Connection Error\");
@mysql_selectdb(\$database)
or exit(\"MySQL Database Selection Error, please check your details!\");
?>";
		@fwrite($connection, $configfile)
		or exit("Could not write information to connector.php");
		echo("Wrote information successfully!<hr>Now closing file<hr>");
		@fclose($connection)
		or exit("Could not close connector.php");
		echo("Connector file closed successfully<hr>Click <a href=\"?act=details\">here</a> to continue");
		
	break;
	
	case "details":
		echo("Great, you've now made the connector file, it's time to get your configuration details. Please enter them into the boxes provided below!<hr>
		<form action=\"?act=doinstall\" method=\"post\">
		Your Super Administrator Username:<br />
		<input type=\"text\" name=\"username\" size=\"28\"><br /><br />
		Your Super Administrator Password:<br />
		<input type=\"text\" name=\"spassword\" size=\"28\"><br /><br />
		<input type=\"submit\" value=\"Submit details and finish installation\">");
	break;
	
	case "doinstall":
		echo("Your super administrator details are:<br />
		<b>Username:</b> {$_POST["username"]}<br />
		<b>Password:</b> {$_POST["spassword"]}<hr>Now creating the MySQL Tables.");
		mysql_query("CREATE TABLE `radioinfo` (
  `ip` text NOT NULL,
  `port` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=MyISAM ;");
		mysql_query("CREATE TABLE `requests` (
  `id` int(10) NOT NULL auto_increment,
  `sender` text NOT NULL,
  `dj` text NOT NULL,
  `type` text NOT NULL,
  `message` text NOT NULL,
  `date` text NOT NULL,
  `ip` text NOT NULL,
  `reported` varchar(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM ;");
		mysql_query("CREATE TABLE `djsays` (
  `username` text NOT NULL,
  `shoutout` text NOT NULL
) ENGINE=MyISAM ;");
		mysql_query("CREATE TABLE `settings` (
  `sitename` text NOT NULL,
  `totalwarnings` text NOT NULL,
  `filter` text NOT NULL,
  `welcome` text NOT NULL,
  `bbcode` varchar(3) NOT NULL,
  `haslogged` text NOT NULL
) ENGINE=MyISAM ;");
		mysql_query("CREATE TABLE `shoutbox` (
  `id` int(10) NOT NULL auto_increment,
  `name` text NOT NULL,
  `message` text NOT NULL,
  `ip` varchar(15) NOT NULL,
  `date` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  ;");
		mysql_query("CREATE TABLE `pm` (
  `id` int(10) NOT NULL auto_increment,
  `to` text NOT NULL,
  `from` text NOT NULL,
  `date` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `reported` varchar(1) NOT NULL default '0',
  `read` varchar(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM ;");
		mysql_query("CREATE TABLE `timetable` (
  `day` text NOT NULL,
  `1` text NOT NULL,
  `2` text NOT NULL,
  `3` text NOT NULL,
  `4` text NOT NULL,
  `5` text NOT NULL,
  `6` text NOT NULL,
  `7` text NOT NULL,
  `8` text NOT NULL,
  `9` text NOT NULL,
  `10` text NOT NULL,
  `11` text NOT NULL,
  `12` text NOT NULL,
  `13` text NOT NULL,
  `14` text NOT NULL,
  `15` text NOT NULL,
  `16` text NOT NULL,
  `17` text NOT NULL,
  `18` text NOT NULL,
  `19` text NOT NULL,
  `20` text NOT NULL,
  `21` text NOT NULL,
  `22` text NOT NULL,
  `23` text NOT NULL,
  `24` text NOT NULL
) ENGINE=MyISAM;");
		mysql_query("
CREATE TABLE `logs` (
  `id` int(10) NOT NULL auto_increment,
  `name` text NOT NULL,
  `date` text NOT NULL,
  `ip` text NOT NULL,
  `success` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM;");
		mysql_query("CREATE TABLE `users` (
  `id` int(10) NOT NULL auto_increment,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `level` varchar(19) NOT NULL,
  `skype` text NOT NULL,
  `msn` text NOT NULL,
  `warning` varchar(1) NOT NULL default '0',
  `ban` varchar(3) NOT NULL default 'No',
  `pin` int(4) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  ;");
		echo("MySQL Tables Created Successfully!<hr>Now moving onto inserting data into tables.");
		$username = clean($_POST["username"], "nofilter");
	$username = strtolower($username);
	$username = ucfirst($username);
		$password = clean($_POST["spassword"], "nofilter");
	$password = encrypt($password);
		mysql_query("INSERT INTO `djsays` VALUES ('Admin', 'Welcome to Kristall-Panel RC2!');");
		mysql_query("INSERT INTO `radioinfo` VALUES ('127.0.0.1', '8000', 'Default');");
		mysql_query("INSERT INTO `settings` VALUES ('Kristall-Panel RC2', '3', 'fuck;shit;wank;cunt;bitch;piss;meatspin;gnaa;lemonparty;nigger;nigga;asshole;dick;faggot;twat', 'Welcome to the default installation of Kristall-Panel, feel free to navigate into the Administration section then click System Settings<br />\r\n<br />\r\n<b>Kristall-Panel RC2 - www.kristall-services.com</b><br />\r\n<br />\r\nFeel free to get in touch with me on msn:<br />\r\n<b>dan@kristall-services.com</b><br />\r\n<br />\r\nOther methods of contact:<br />\r\n<br />\r\n<b>Voj</b> - Habbo Hotel UK<br />\r\n<b>Lolcopters</b> - HabboxForum.com<br />\r\n-----------<br />\r\n<br />\r\n<br />\r\nAlso, if you''d be so kind, please leave the powered by kristall-panel on the login page, gets me a small amount of advertisement, you don''t pay anything so it only seems fair :)', 'Yes', 'notlogged');");
		mysql_query("INSERT INTO `shoutbox` VALUES (2, '<span style=\"color: #941515\"><strong>Admin</strong></span>', 'Welcome to Kristall-Panel RC2!', '127.0.0.1', '1175747012');");
		mysql_query("INSERT INTO `timetable` VALUES ('Monday', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');");
mysql_query("INSERT INTO `timetable` VALUES ('Tuesday', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');");
mysql_query("INSERT INTO `timetable` VALUES ('Wednesday', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');");
mysql_query("INSERT INTO `timetable` VALUES ('Thursday', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');");
mysql_query("INSERT INTO `timetable` VALUES ('Friday', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');");
mysql_query("INSERT INTO `timetable` VALUES ('Saturday', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');");
mysql_query("INSERT INTO `timetable` VALUES ('Sunday', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');");
mysql_query("INSERT INTO `users` VALUES (1, '$username', '$password', 'Super Administrator', 'lolcopters', 'iH@e.spam', '0', 'No', '0');");
echo("<hr>MySQL queries completed, the panel is installed!<hr>Now attempting to DELETE installer.php");
@unlink("installer.php")
or exit("Could not remove installer.php, please delete this file manually!");
echo("<hr>File removed successfully!<hr>Your panel is now 100% installed, please click <a href=\"index.php\">here</a> to login!");
		
		
	break;
	
	default:
		echo("Welcome!<br />Please click <a href=\"?act=config\">here</a> to continue!");
	break;
}
}
elseif($username != "default" && !isset($_GET["act"]))
{
	echo("Sorry, the installer has detected that this panel has already been installed (Config file is not default) and installation will not continue, now attempting to delete installer.php<hr>");
	@unlink("installer.php")
or exit("Could not remove installer.php, please delete this file manually!");
echo("File deleted.");
}
elseif($username != "default")
{
	echo("Sorry, the installer has detected that this panel has already been installed (Config file is not default) and installation will not continue, now attempting to delete installer.php<hr>");
	@unlink("installer.php")
or exit("Could not remove installer.php, please delete this file manually!");
echo("File deleted.");
}
else 
{
echo("Click <a href=\"?act\">here</s> to start the installation.");
}
?>
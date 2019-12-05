<?php
session_start();
include("includes/config.php");
include("includes/sql.php"); // JUST FOR INSTALLER
include("includes/functions.php");

if($_GET['stage']) {

## STYLES ##

$style .= '<style type="text/css">';
$style .= '<!--';
$style .= 'body {';
$style .= '		font-family: Tahoma;';
$style .= '		font-size: 10px;';
$style .= '}';
$style .= '-->';
$style .= '</style>';

echo("". $style ."");

## // STYLES ##


switch ($_GET['stage']) {

		case '1':
			## FIRST STAGE
			
			echo("<strong>Welcome to the POWERpanel installation!</strong><br />You are currently at Stage 1 of the installation<br /><br />In stage 1 you will have to provide the installer with your mySQL Settings so that it. can install your database. Please fill in the following forms<br /><br />");
			
			## Forms
			echo('<form action="?stage=2" method="post">');
			##
			echo("<strong>MySQL Username:</strong><br /><input type='text' name='username' style='font-size: 10px; font-family: tahoma;' size='20'>"); // Username
			echo("<br /><br />"); // Break
			echo("<strong>MySQL Password:</strong><br /><input type='text' name='password' style='font-size: 10px; font-family: tahoma;' size='20'>"); // Password
			echo("<br /><br />"); // Break
			echo("<strong>MySQL Database:</strong><br /><input type='text' name='database' style='font-size: 10px; font-family: tahoma;' size='20'>"); // Database
			echo("<br /><br />"); // Break
			echo("<strong>MySQL Hostname:</strong><br /><input type='text' name='hostname' value='localhost' style='font-size: 10px; font-family: tahoma;' size='20'>"); // Hostname
			echo("<br /><br />"); // Break
			
			echo("<input type='submit' style='font-size: 10px; font-family: tahoma;' value='Connect to mySQL'>"); // Submit
			
			
		break;
		
		case '2':
			## STAGE TWO
						
			echo("<strong>Welcome to the POWERpanel installation!</strong><br />You are currently at Stage 2 of the installation<br /><br />In stage 2 we will try to connect to your MySQL server and database. If we can, we will make your configuration file<br /><br />");

			
			$username = $_POST['username'];
			$password = $_POST['password'];
			$database = $_POST['database'];
			$hostname = $_POST['hostname'];
			
			$_SESSION['sql_user'] = $username;
			$_SESSION['sql_pass'] = $password;
			$_SESSION['sql_db'] = $database;
			$_SESSION['hostname'] = $hostname;
			
			## CONNECT..WELL TRY TO..
		$connect = @mysql_connect($hostname, $username, $password) or exit("Sorry, we couldn't connect to the MySQL Server. Please ensure your details are correct");
			echo("<strong>Congratulations!</strong> We have successfully connected to the MySQL Server!");
			
			echo("<br /><br />");
			
			## CONNECT TO DATABASE
		if(!@mysql_select_db($database, $connect)){ 
		
		echo("<strong>Sorry!</strong> We couldn't connect to the database. Because of this we will make the database for you!");
		
		$creater = mysql_query("CREATE database $database") or exit("\n\nSorry! We couldn't create the database :( ".mysql_error());
		
		echo("<br /><br /><strong>The database has been created!");
		
		echo("<br /><br />");
		
		}
		
			echo("<strong>Congratulations!</strong> We have successfully connected to your MySQL Database");
			
			## CREATE CONFIG -2
			
			$data = "<?php

\$connectual = mysql_connect(\"$hostname\", \"$username\", \"$password\");
\$select_db_booyah = mysql_select_db(\"$database\", \$connectual);


?>";
			
		$file = @fopen("includes/sql.php", "w");
				
				@fwrite($file, $data) or exit("Could not write to configuration file. Please CHMOD the file 'includes/sql.php' to 0777 or 777!");
				
				fclose($file);
						
			## CONTINUE
			
			echo("<br /><br /><a href='?stage=3' target='_self'>Continue</a>");
			
		break;
		
		case '3':
		
			## STAGE 3
						
			echo("<strong>Welcome to the POWERpanel installation!</strong><br />You are currently at Stage 3 of the installation<br /><br />In stage 3 we will set the root administrator account for the DJ Panel<br /><br />");
			
			## Forms
			echo('<form action="?stage=4" method="post">');
			##
			echo("<strong>Root Username:</strong><br /><input type='text' name='username' style='font-size: 10px; font-family: tahoma;' size='20'>"); // Username
			echo("<br /><br />"); // Break
			echo("<strong>Root Password:</strong><br /><input type='text' name='password' style='font-size: 10px; font-family: tahoma;' size='20'>"); // Password
			echo("<br /><br />"); // Break
			
			echo("<input type='submit' style='font-size: 10px; font-family: tahoma;' value='Create Account'>"); // Submit			
		
		break;
		
		case '4':

			echo("<strong>Welcome to the POWERpanel installation!</strong><br />You are currently at Stage 4 of the installation<br /><br />In stage 4 we will import the administrator account into your SQL Database<br /><br />");
			
		$username = $_POST['username'];
		$password = $_POST['password'];
		$username = clean($username);
		$password = encrypt($password);
	
			mysql_query("CREATE TABLE `users` (
		  `id` int(255) NOT NULL auto_increment,
		  `username` varchar(500) collate latin1_general_ci NOT NULL,
		  `password` varchar(500) collate latin1_general_ci NOT NULL,
		  `level` varchar(500) collate latin1_general_ci NOT NULL,
		  `email` varchar(500) collate latin1_general_ci NOT NULL,
		  `firsttime` varchar(500) collate latin1_general_ci NOT NULL,
		  `pin` varchar(500) collate latin1_general_ci NOT NULL,
		  `habbo` varchar(500) collate latin1_general_ci NOT NULL,
		  `favhab` varchar(500) collate latin1_general_ci NOT NULL,
		  `avatar` longtext collate latin1_general_ci NOT NULL,
		  PRIMARY KEY  (`id`)
		) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=44 ;
		") or exit("Could not create the users table");
		
		echo("The users table was created with no issues");
		
		// CREATED USERS TABLE
			
		## IMPORT ACCOUNT
		
		mysql_query("INSERT INTO `users` VALUES (1, '$username', '$password', 'admin', '', '', '', '', '', '');") or exit("Could not create the administrator account");
		
		echo("<br /><br />The root administrator account was made with the details you specified!");
		
		echo("<br /><br />");
		
		echo("<br /><br /><a href='?stage=5' target='_self'>Continue</a>");
		
	  break;
	  
	  case '5':
	  
			echo("<strong>Welcome to the POWERpanel installation!</strong><br />You are currently at Stage 5 of the installation<br /><br />In stage 5 we will import the rest of the SQL into your SQL Database<br /><br />");
			
		mysql_query("CREATE TABLE `alerts` (
  `id` int(255) NOT NULL auto_increment,
  `ip` varchar(500) collate latin1_general_ci NOT NULL,
  `message` varchar(500) collate latin1_general_ci NOT NULL,
  `djname` varchar(500) collate latin1_general_ci NOT NULL,
  `type` varchar(500) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;
") or exit("Could not make alerts table");

			echo("The alerts table has been made");
			
		mysql_query("CREATE TABLE `announcements` (
  `id` int(255) NOT NULL auto_increment,
  `title` varchar(500) collate latin1_general_ci NOT NULL,
  `short` mediumtext collate latin1_general_ci NOT NULL,
  `by` varchar(500) collate latin1_general_ci NOT NULL,
  `view` varchar(500) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=12 ;
") or exit("Could not make announcements table");

			echo("<br />The announcements table has been made");
			
		mysql_query("CREATE TABLE `bansongs` (
  `id` int(255) NOT NULL auto_increment,
  `name` varchar(500) collate latin1_general_ci NOT NULL,
  `reason` varchar(500) collate latin1_general_ci NOT NULL,
  `by` varchar(500) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=11 ;
") or exit("Could not make banned songs table");

			echo("<br />The banned songs table has been made");
			
		mysql_query("CREATE TABLE `config` (
  `sitename` varchar(500) collate latin1_general_ci NOT NULL,
  `sitedesc` varchar(500) collate latin1_general_ci NOT NULL,
  `home` mediumtext collate latin1_general_ci NOT NULL,
  `title` longtext collate latin1_general_ci NOT NULL,
  `owners` longtext collate latin1_general_ci NOT NULL,
  `reports` varchar(5) collate latin1_general_ci NOT NULL default 'false',
  `avaw` varchar(500) collate latin1_general_ci NOT NULL,
  `avah` varchar(500) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
") or exit("Could not make configuration table");

			echo("<br />The configuration table has been made");
			
		mysql_query("INSERT INTO `config` VALUES ('POWERpanel BETA', 'The ULTIMATE Radio Panel!', 'Hey!\r\n\r\nWelcome to POWERpanel! The Radio DJ Panel created by Simon Fletcher A.K.A Invent! on Habbo Hotel UK and HabboxForum.\r\n\r\nIf you encounter any issues with the panel, just make a thread or message me on HabboxForum.com and I''ll be sure to help you :)\r\n\r\nThanks for using the panel!', 'Welcome to POWERpanel!', 'Simon Fletcher', '', '150', '150');
") or exit("Could not import configuration data");

			echo("<br />The configuration data has been imported");
			
		mysql_query("CREATE TABLE `djsays` (
  `message` varchar(500) collate latin1_general_ci NOT NULL,
  `by` varchar(500) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
") or exit("Could not make DJ Says table");

			echo("<br />The DJ Says table has been made");
			
		mysql_query("INSERT INTO `djsays` VALUES ('Welcome to POWERpanel!', 'Simon');") or exit("Could not import DJ Says data");
		
			echo("<br />The DJ Says data has been imported");
			
		mysql_query("CREATE TABLE `forgotpw` (
  `id` int(255) NOT NULL auto_increment,
  `string` varchar(500) collate latin1_general_ci NOT NULL,
  `username` varchar(500) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=12 ;
") or exit("Could not make forgot password table");

			echo("<br />The forgot your password table has been made");
			
		mysql_query("CREATE TABLE `pms` (
  `id` int(255) NOT NULL auto_increment,
  `subject` varchar(500) collate latin1_general_ci NOT NULL,
  `message` longtext collate latin1_general_ci NOT NULL,
  `sendto` varchar(500) collate latin1_general_ci NOT NULL,
  `sendfrom` varchar(500) collate latin1_general_ci NOT NULL,
  `date` varchar(500) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=21 ;
") or exit("Could not make the PM table");

			echo("<br />The PM table has been made");
			
		mysql_query("CREATE TABLE `posts` (
  `id` int(255) NOT NULL auto_increment,
  `thread` varchar(500) collate latin1_general_ci NOT NULL,
  `message` varchar(500) collate latin1_general_ci NOT NULL,
  `username` varchar(500) collate latin1_general_ci NOT NULL,
  `key` varchar(500) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=117 ;
") or exit("Could not create posts table");

			echo("<br />The posts table has been made");
			
		mysql_query("CREATE TABLE `radioinfo` (
  `ip` varchar(500) collate latin1_general_ci NOT NULL,
  `port` varchar(500) collate latin1_general_ci NOT NULL,
  `pass` varchar(500) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
") or exit("Could not make the radio info table");

			echo("<br />The radio information table has been made");
			
		mysql_query("INSERT INTO `radioinfo` VALUES ('IP Address', '1337', 'changeme');") or exit("Could not import radio info data");
		
			echo("<br />The radio information data has been imported");
			
		mysql_query("CREATE TABLE `requests` (
  `id` int(255) NOT NULL auto_increment,
  `name` varchar(500) collate latin1_general_ci NOT NULL,
  `dj` varchar(500) collate latin1_general_ci NOT NULL,
  `type` varchar(500) collate latin1_general_ci NOT NULL,
  `msg` longtext collate latin1_general_ci NOT NULL,
  `time` varchar(500) collate latin1_general_ci NOT NULL,
  `ip` varchar(500) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=22 ;
") or exit("Could not make requests table");

			echo("<br />The requests table has been made");
			
		mysql_query("CREATE TABLE `shoutbox` (
  `id` int(255) NOT NULL auto_increment,
  `username` varchar(500) collate latin1_general_ci NOT NULL,
  `message` longtext collate latin1_general_ci NOT NULL,
  `ip` varchar(500) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;") or exit("Could not make shoutbox table");

			echo("<br />The shoutbox table has been made");
			
		mysql_query("CREATE TABLE `spotlight` (
  `habbo` varchar(500) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
") or exit("Could not make spotlight table");

			echo("<br />The spotlight table has been made");
			
		mysql_query("INSERT INTO `spotlight` VALUES ('Invent!');") or exit("Could not import spotlight data");
		
			echo("<br />The spotlight data has been imported");
			
		mysql_query("CREATE TABLE `threads` (
  `id` int(255) NOT NULL auto_increment,
  `title` varchar(500) collate latin1_general_ci NOT NULL,
  `thread_starter` varchar(500) collate latin1_general_ci NOT NULL,
  `thread_message` varchar(500) collate latin1_general_ci NOT NULL,
  `rand` varchar(500) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=30 ;
") or exit("Could not make the threads table");

			echo("<br />The threads table has been made");
			
		mysql_query("CREATE TABLE `timefriday` (
  `time` varchar(500) collate latin1_general_ci NOT NULL,
  `slot` varchar(500) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

") or exit("Could not make the friday timetable table");

			echo("<br />The friday timetable table has been made");
			
		mysql_query("INSERT INTO `timefriday` VALUES ('00:00', '');") or exit("Could not import the friday timetable data");
		mysql_query("INSERT INTO `timefriday` VALUES ('01:00', '');") or exit("Could not import the friday timetable data");
		mysql_query("INSERT INTO `timefriday` VALUES ('02:00', '');") or exit("Could not import the friday timetable data");
		mysql_query("INSERT INTO `timefriday` VALUES ('03:00', '');") or exit("Could not import the friday timetable data");
		mysql_query("INSERT INTO `timefriday` VALUES ('04:00', '');") or exit("Could not import the friday timetable data");
		mysql_query("INSERT INTO `timefriday` VALUES ('05:00', '');") or exit("Could not import the friday timetable data");
		mysql_query("INSERT INTO `timefriday` VALUES ('06:00', '');") or exit("Could not import the friday timetable data");
		mysql_query("INSERT INTO `timefriday` VALUES ('07:00', '');") or exit("Could not import the friday timetable data");
		mysql_query("INSERT INTO `timefriday` VALUES ('08:00', '');") or exit("Could not import the friday timetable data");
		mysql_query("INSERT INTO `timefriday` VALUES ('09:00', '');") or exit("Could not import the friday timetable data");
		mysql_query("INSERT INTO `timefriday` VALUES ('10:00', '');") or exit("Could not import the friday timetable data");
		mysql_query("INSERT INTO `timefriday` VALUES ('11:00', '');") or exit("Could not import the friday timetable data");
		mysql_query("INSERT INTO `timefriday` VALUES ('12:00', '');") or exit("Could not import the friday timetable data");
		mysql_query("INSERT INTO `timefriday` VALUES ('13:00', '');") or exit("Could not import the friday timetable data");
		mysql_query("INSERT INTO `timefriday` VALUES ('14:00', '');") or exit("Could not import the friday timetable data");
		mysql_query("INSERT INTO `timefriday` VALUES ('15:00', '');") or exit("Could not import the friday timetable data");
		mysql_query("INSERT INTO `timefriday` VALUES ('16:00', '');") or exit("Could not import the friday timetable data");
		mysql_query("INSERT INTO `timefriday` VALUES ('17:00', '');") or exit("Could not import the friday timetable data");
		mysql_query("INSERT INTO `timefriday` VALUES ('18:00', '');") or exit("Could not import the friday timetable data");
		mysql_query("INSERT INTO `timefriday` VALUES ('19:00', '');") or exit("Could not import the friday timetable data");
		mysql_query("INSERT INTO `timefriday` VALUES ('20:00', '');") or exit("Could not import the friday timetable data");
		mysql_query("INSERT INTO `timefriday` VALUES ('21:00', '');") or exit("Could not import the friday timetable data");
		mysql_query("INSERT INTO `timefriday` VALUES ('21:00', '');") or exit("Could not import the friday timetable data");
		mysql_query("INSERT INTO `timefriday` VALUES ('23:00', '');") or exit("Could not import the friday timetable data");

			echo("<br />The friday timetable data has been imported");
			
		mysql_query("CREATE TABLE `timemonday` (
  `time` varchar(500) collate latin1_general_ci NOT NULL,
  `slot` varchar(500) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
") or exit("Could not make the monday timetable table");

			echo("<br />The monday timetable table has been made");
			
		mysql_query("INSERT INTO `timemonday` VALUES ('00:00', '');") or exit("Could not import the monday timetable data");
		mysql_query("INSERT INTO `timemonday` VALUES ('01:00', '');") or exit("Could not import the monday timetable data");
		mysql_query("INSERT INTO `timemonday` VALUES ('02:00', '');") or exit("Could not import the monday timetable data");
		mysql_query("INSERT INTO `timemonday` VALUES ('03:00', '');") or exit("Could not import the monday timetable data");
		mysql_query("INSERT INTO `timemonday` VALUES ('04:00', '');") or exit("Could not import the monday timetable data");
		mysql_query("INSERT INTO `timemonday` VALUES ('05:00', '');") or exit("Could not import the monday timetable data");
		mysql_query("INSERT INTO `timemonday` VALUES ('06:00', '');") or exit("Could not import the monday timetable data");
		mysql_query("INSERT INTO `timemonday` VALUES ('07:00', '');") or exit("Could not import the monday timetable data");
		mysql_query("INSERT INTO `timemonday` VALUES ('08:00', '');") or exit("Could not import the monday timetable data");
		mysql_query("INSERT INTO `timemonday` VALUES ('09:00', '');") or exit("Could not import the monday timetable data");
		mysql_query("INSERT INTO `timemonday` VALUES ('10:00', '');") or exit("Could not import the monday timetable data");
		mysql_query("INSERT INTO `timemonday` VALUES ('11:00', '');") or exit("Could not import the monday timetable data");
		mysql_query("INSERT INTO `timemonday` VALUES ('12:00', '');") or exit("Could not import the monday timetable data");
		mysql_query("INSERT INTO `timemonday` VALUES ('13:00', '');") or exit("Could not import the monday timetable data");
		mysql_query("INSERT INTO `timemonday` VALUES ('14:00', '');") or exit("Could not import the monday timetable data");
		mysql_query("INSERT INTO `timemonday` VALUES ('15:00', '');") or exit("Could not import the monday timetable data");
		mysql_query("INSERT INTO `timemonday` VALUES ('16:00', '');") or exit("Could not import the monday timetable data");
		mysql_query("INSERT INTO `timemonday` VALUES ('17:00', '');") or exit("Could not import the monday timetable data");
		mysql_query("INSERT INTO `timemonday` VALUES ('18:00', '');") or exit("Could not import the monday timetable data");
		mysql_query("INSERT INTO `timemonday` VALUES ('19:00', '');") or exit("Could not import the monday timetable data");
		mysql_query("INSERT INTO `timemonday` VALUES ('20:00', '');") or exit("Could not import the monday timetable data");
		mysql_query("INSERT INTO `timemonday` VALUES ('21:00', '');") or exit("Could not import the monday timetable data");
		mysql_query("INSERT INTO `timemonday` VALUES ('21:00', '');") or exit("Could not import the monday timetable data");
		mysql_query("INSERT INTO `timemonday` VALUES ('23:00', '');") or exit("Could not import the monday timetable data");
			echo("<br />The monday timetable data has been imported");
		
		mysql_query("CREATE TABLE `timesaturday` (
  `time` varchar(500) collate latin1_general_ci NOT NULL,
  `slot` varchar(500) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
") or exit("Could not make the saturday timetable table");

			echo("<br />The saturday timetable table has been made");
			
		mysql_query("INSERT INTO `timesaturday` VALUES ('00:00', '');") or exit("Could not import the saturday timetable data");
		mysql_query("INSERT INTO `timesaturday` VALUES ('01:00', '');") or exit("Could not import the saturday timetable data");
		mysql_query("INSERT INTO `timesaturday` VALUES ('02:00', '');") or exit("Could not import the saturday timetable data");
		mysql_query("INSERT INTO `timesaturday` VALUES ('03:00', '');") or exit("Could not import the saturday timetable data");
		mysql_query("INSERT INTO `timesaturday` VALUES ('04:00', '');") or exit("Could not import the saturday timetable data");
		mysql_query("INSERT INTO `timesaturday` VALUES ('05:00', '');") or exit("Could not import the saturday timetable data");
		mysql_query("INSERT INTO `timesaturday` VALUES ('06:00', '');") or exit("Could not import the saturday timetable data");
		mysql_query("INSERT INTO `timesaturday` VALUES ('07:00', '');") or exit("Could not import the saturday timetable data");
		mysql_query("INSERT INTO `timesaturday` VALUES ('08:00', '');") or exit("Could not import the saturday timetable data");
		mysql_query("INSERT INTO `timesaturday` VALUES ('09:00', '');") or exit("Could not import the saturday timetable data");
		mysql_query("INSERT INTO `timesaturday` VALUES ('10:00', '');") or exit("Could not import the saturday timetable data");
		mysql_query("INSERT INTO `timesaturday` VALUES ('11:00', '');") or exit("Could not import the saturday timetable data");
		mysql_query("INSERT INTO `timesaturday` VALUES ('12:00', '');") or exit("Could not import the saturday timetable data");
		mysql_query("INSERT INTO `timesaturday` VALUES ('13:00', '');") or exit("Could not import the saturday timetable data");
		mysql_query("INSERT INTO `timesaturday` VALUES ('14:00', '');") or exit("Could not import the saturday timetable data");
		mysql_query("INSERT INTO `timesaturday` VALUES ('15:00', '');") or exit("Could not import the saturday timetable data");
		mysql_query("INSERT INTO `timesaturday` VALUES ('16:00', '');") or exit("Could not import the saturday timetable data");
		mysql_query("INSERT INTO `timesaturday` VALUES ('17:00', '');") or exit("Could not import the saturday timetable data");
		mysql_query("INSERT INTO `timesaturday` VALUES ('18:00', '');") or exit("Could not import the saturday timetable data");
		mysql_query("INSERT INTO `timesaturday` VALUES ('19:00', '');") or exit("Could not import the saturday timetable data");
		mysql_query("INSERT INTO `timesaturday` VALUES ('20:00', '');") or exit("Could not import the saturday timetable data");
		mysql_query("INSERT INTO `timesaturday` VALUES ('21:00', '');") or exit("Could not import the saturday timetable data");
		mysql_query("INSERT INTO `timesaturday` VALUES ('21:00', '');") or exit("Could not import the saturday timetable data");
		mysql_query("INSERT INTO `timesaturday` VALUES ('23:00', '');") or exit("Could not import the saturday timetable data");
			echo("<br />The saturday timetable data has been imported");
			
		mysql_query("CREATE TABLE `timesunday` (
  `time` varchar(500) collate latin1_general_ci NOT NULL,
  `slot` varchar(500) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
") or exit("The sunday timetable table could not be made");

			echo("<br />The sunday timetable table has been made");
			
		mysql_query("INSERT INTO `timesunday` VALUES ('00:00', '');") or exit("Could not import the sunday timetable data");
		mysql_query("INSERT INTO `timesunday` VALUES ('01:00', '');") or exit("Could not import the sunday timetable data");
		mysql_query("INSERT INTO `timesunday` VALUES ('02:00', '');") or exit("Could not import the sunday timetable data");
		mysql_query("INSERT INTO `timesunday` VALUES ('03:00', '');") or exit("Could not import the sunday timetable data");
		mysql_query("INSERT INTO `timesunday` VALUES ('04:00', '');") or exit("Could not import the sunday timetable data");
		mysql_query("INSERT INTO `timesunday` VALUES ('05:00', '');") or exit("Could not import the sunday timetable data");
		mysql_query("INSERT INTO `timesunday` VALUES ('06:00', '');") or exit("Could not import the sunday timetable data");
		mysql_query("INSERT INTO `timesunday` VALUES ('07:00', '');") or exit("Could not import the sunday timetable data");
		mysql_query("INSERT INTO `timesunday` VALUES ('08:00', '');") or exit("Could not import the sunday timetable data");
		mysql_query("INSERT INTO `timesunday` VALUES ('09:00', '');") or exit("Could not import the sunday timetable data");
		mysql_query("INSERT INTO `timesunday` VALUES ('10:00', '');") or exit("Could not import the sunday timetable data");
		mysql_query("INSERT INTO `timesunday` VALUES ('11:00', '');") or exit("Could not import the sunday timetable data");
		mysql_query("INSERT INTO `timesunday` VALUES ('12:00', '');") or exit("Could not import the sunday timetable data");
		mysql_query("INSERT INTO `timesunday` VALUES ('13:00', '');") or exit("Could not import the sunday timetable data");
		mysql_query("INSERT INTO `timesunday` VALUES ('14:00', '');") or exit("Could not import the sunday timetable data");
		mysql_query("INSERT INTO `timesunday` VALUES ('15:00', '');") or exit("Could not import the sunday timetable data");
		mysql_query("INSERT INTO `timesunday` VALUES ('16:00', '');") or exit("Could not import the sunday timetable data");
		mysql_query("INSERT INTO `timesunday` VALUES ('17:00', '');") or exit("Could not import the sunday timetable data");
		mysql_query("INSERT INTO `timesunday` VALUES ('18:00', '');") or exit("Could not import the sunday timetable data");
		mysql_query("INSERT INTO `timesunday` VALUES ('19:00', '');") or exit("Could not import the sunday timetable data");
		mysql_query("INSERT INTO `timesunday` VALUES ('20:00', '');") or exit("Could not import the sunday timetable data");
		mysql_query("INSERT INTO `timesunday` VALUES ('21:00', '');") or exit("Could not import the sunday timetable data");
		mysql_query("INSERT INTO `timesunday` VALUES ('21:00', '');") or exit("Could not import the sunday timetable data");
		mysql_query("INSERT INTO `timesunday` VALUES ('23:00', '');") or exit("Could not import the sunday timetable data");
			echo("<br />The sunday timetable data has been imported");
		
		mysql_query("CREATE TABLE `timethursday` (
  `time` varchar(500) collate latin1_general_ci NOT NULL,
  `slot` varchar(500) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
") or exit("Could not make thursday timetable table");

			echo("<br />The thursday timetable table has been made");
			
		mysql_query("INSERT INTO `timethursday` VALUES ('00:00', '');") or exit("Could not import the thursday timetable data");
		mysql_query("INSERT INTO `timethursday` VALUES ('01:00', '');") or exit("Could not import the thursday timetable data");
		mysql_query("INSERT INTO `timethursday` VALUES ('02:00', '');") or exit("Could not import the thursday timetable data");
		mysql_query("INSERT INTO `timethursday` VALUES ('03:00', '');") or exit("Could not import the thursday timetable data");
		mysql_query("INSERT INTO `timethursday` VALUES ('04:00', '');") or exit("Could not import the thursday timetable data");
		mysql_query("INSERT INTO `timethursday` VALUES ('05:00', '');") or exit("Could not import the thursday timetable data");
		mysql_query("INSERT INTO `timethursday` VALUES ('06:00', '');") or exit("Could not import the thursday timetable data");
		mysql_query("INSERT INTO `timethursday` VALUES ('07:00', '');") or exit("Could not import the thursday timetable data");
		mysql_query("INSERT INTO `timethursday` VALUES ('08:00', '');") or exit("Could not import the thursday timetable data");
		mysql_query("INSERT INTO `timethursday` VALUES ('09:00', '');") or exit("Could not import the thursday timetable data");
		mysql_query("INSERT INTO `timethursday` VALUES ('10:00', '');") or exit("Could not import the thursday timetable data");
		mysql_query("INSERT INTO `timethursday` VALUES ('11:00', '');") or exit("Could not import the thursday timetable data");
		mysql_query("INSERT INTO `timethursday` VALUES ('12:00', '');") or exit("Could not import the thursday timetable data");
		mysql_query("INSERT INTO `timethursday` VALUES ('13:00', '');") or exit("Could not import the thursday timetable data");
		mysql_query("INSERT INTO `timethursday` VALUES ('14:00', '');") or exit("Could not import the thursday timetable data");
		mysql_query("INSERT INTO `timethursday` VALUES ('15:00', '');") or exit("Could not import the thursday timetable data");
		mysql_query("INSERT INTO `timethursday` VALUES ('16:00', '');") or exit("Could not import the thursday timetable data");
		mysql_query("INSERT INTO `timethursday` VALUES ('17:00', '');") or exit("Could not import the thursday timetable data");
		mysql_query("INSERT INTO `timethursday` VALUES ('18:00', '');") or exit("Could not import the thursday timetable data");
		mysql_query("INSERT INTO `timethursday` VALUES ('19:00', '');") or exit("Could not import the thursday timetable data");
		mysql_query("INSERT INTO `timethursday` VALUES ('20:00', '');") or exit("Could not import the thursday timetable data");
		mysql_query("INSERT INTO `timethursday` VALUES ('21:00', '');") or exit("Could not import the thursday timetable data");
		mysql_query("INSERT INTO `timethursday` VALUES ('21:00', '');") or exit("Could not import the thursday timetable data");
		mysql_query("INSERT INTO `timethursday` VALUES ('23:00', '');") or exit("Could not import the thursday timetable data");
			echo("<br />The thursday timetable data has been imported");
			
		mysql_query("CREATE TABLE `timetuesday` (
  `time` varchar(500) collate latin1_general_ci NOT NULL,
  `slot` varchar(500) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
") or exit("The tuesday timetable table could not be made");

			echo("<br />The tuesday timetable table has been made");
			
		mysql_query("INSERT INTO `timetuesday` VALUES ('00:00', '');") or exit("Could not import the tuesday timetable data");
		mysql_query("INSERT INTO `timetuesday` VALUES ('01:00', '');") or exit("Could not import the tuesday timetable data");
		mysql_query("INSERT INTO `timetuesday` VALUES ('02:00', '');") or exit("Could not import the tuesday timetable data");
		mysql_query("INSERT INTO `timetuesday` VALUES ('03:00', '');") or exit("Could not import the tuesday timetable data");
		mysql_query("INSERT INTO `timetuesday` VALUES ('04:00', '');") or exit("Could not import the tuesday timetable data");
		mysql_query("INSERT INTO `timetuesday` VALUES ('05:00', '');") or exit("Could not import the tuesday timetable data");
		mysql_query("INSERT INTO `timetuesday` VALUES ('06:00', '');") or exit("Could not import the tuesday timetable data");
		mysql_query("INSERT INTO `timetuesday` VALUES ('07:00', '');") or exit("Could not import the tuesday timetable data");
		mysql_query("INSERT INTO `timetuesday` VALUES ('08:00', '');") or exit("Could not import the tuesday timetable data");
		mysql_query("INSERT INTO `timetuesday` VALUES ('09:00', '');") or exit("Could not import the tuesday timetable data");
		mysql_query("INSERT INTO `timetuesday` VALUES ('10:00', '');") or exit("Could not import the tuesday timetable data");
		mysql_query("INSERT INTO `timetuesday` VALUES ('11:00', '');") or exit("Could not import the tuesday timetable data");
		mysql_query("INSERT INTO `timetuesday` VALUES ('12:00', '');") or exit("Could not import the tuesday timetable data");
		mysql_query("INSERT INTO `timetuesday` VALUES ('13:00', '');") or exit("Could not import the tuesday timetable data");
		mysql_query("INSERT INTO `timetuesday` VALUES ('14:00', '');") or exit("Could not import the tuesday timetable data");
		mysql_query("INSERT INTO `timetuesday` VALUES ('15:00', '');") or exit("Could not import the tuesday timetable data");
		mysql_query("INSERT INTO `timetuesday` VALUES ('16:00', '');") or exit("Could not import the tuesday timetable data");
		mysql_query("INSERT INTO `timetuesday` VALUES ('17:00', '');") or exit("Could not import the tuesday timetable data");
		mysql_query("INSERT INTO `timetuesday` VALUES ('18:00', '');") or exit("Could not import the tuesday timetable data");
		mysql_query("INSERT INTO `timetuesday` VALUES ('19:00', '');") or exit("Could not import the tuesday timetable data");
		mysql_query("INSERT INTO `timetuesday` VALUES ('20:00', '');") or exit("Could not import the tuesday timetable data");
		mysql_query("INSERT INTO `timetuesday` VALUES ('21:00', '');") or exit("Could not import the tuesday timetable data");
		mysql_query("INSERT INTO `timetuesday` VALUES ('21:00', '');") or exit("Could not import the tuesday timetable data");
		mysql_query("INSERT INTO `timetuesday` VALUES ('23:00', '');") or exit("Could not import the tuesday timetable data");
			echo("<br />The tuesday timetable data has been imported");
			
		mysql_query("CREATE TABLE `timewednesday` (
  `time` varchar(500) collate latin1_general_ci NOT NULL,
  `slot` varchar(500) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
") or exit("The wednesday timetable table could not be made");

			echo("<br />The wednesday timetable has been made");
			
		mysql_query("INSERT INTO `timewednesday` VALUES ('00:00', '');") or exit("Could not import the wednesday timetable data");
		mysql_query("INSERT INTO `timewednesday` VALUES ('01:00', '');") or exit("Could not import the wednesday timetable data");
		mysql_query("INSERT INTO `timewednesday` VALUES ('02:00', '');") or exit("Could not import the wednesday timetable data");
		mysql_query("INSERT INTO `timewednesday` VALUES ('03:00', '');") or exit("Could not import the wednesday timetable data");
		mysql_query("INSERT INTO `timewednesday` VALUES ('04:00', '');") or exit("Could not import the wednesday timetable data");
		mysql_query("INSERT INTO `timewednesday` VALUES ('05:00', '');") or exit("Could not import the wednesday timetable data");
		mysql_query("INSERT INTO `timewednesday` VALUES ('06:00', '');") or exit("Could not import the wednesday timetable data");
		mysql_query("INSERT INTO `timewednesday` VALUES ('07:00', '');") or exit("Could not import the wednesday timetable data");
		mysql_query("INSERT INTO `timewednesday` VALUES ('08:00', '');") or exit("Could not import the wednesday timetable data");
		mysql_query("INSERT INTO `timewednesday` VALUES ('09:00', '');") or exit("Could not import the wednesday timetable data");
		mysql_query("INSERT INTO `timewednesday` VALUES ('10:00', '');") or exit("Could not import the wednesday timetable data");
		mysql_query("INSERT INTO `timewednesday` VALUES ('11:00', '');") or exit("Could not import the wednesday timetable data");
		mysql_query("INSERT INTO `timewednesday` VALUES ('12:00', '');") or exit("Could not import the wednesday timetable data");
		mysql_query("INSERT INTO `timewednesday` VALUES ('13:00', '');") or exit("Could not import the wednesday timetable data");
		mysql_query("INSERT INTO `timewednesday` VALUES ('14:00', '');") or exit("Could not import the wednesday timetable data");
		mysql_query("INSERT INTO `timewednesday` VALUES ('15:00', '');") or exit("Could not import the wednesday timetable data");
		mysql_query("INSERT INTO `timewednesday` VALUES ('16:00', '');") or exit("Could not import the wednesday timetable data");
		mysql_query("INSERT INTO `timewednesday` VALUES ('17:00', '');") or exit("Could not import the wednesday timetable data");
		mysql_query("INSERT INTO `timewednesday` VALUES ('18:00', '');") or exit("Could not import the wednesday timetable data");
		mysql_query("INSERT INTO `timewednesday` VALUES ('19:00', '');") or exit("Could not import the wednesday timetable data");
		mysql_query("INSERT INTO `timewednesday` VALUES ('20:00', '');") or exit("Could not import the wednesday timetable data");
		mysql_query("INSERT INTO `timewednesday` VALUES ('21:00', '');") or exit("Could not import the wednesday timetable data");
		mysql_query("INSERT INTO `timewednesday` VALUES ('21:00', '');") or exit("Could not import the wednesday timetable data");
		mysql_query("INSERT INTO `timewednesday` VALUES ('23:00', '');") or exit("Could not import the wednesday timetable data");
			echo("<br />The wednesday teimtable data has been imported");
			
			echo("<br /><br />");
			
@unlink("includes/sql.php");
			
					$data = "<?php

\$connectual = mysql_connect(\"{$_SESSION[hostname]}\", \"{$_SESSION[sql_user]}\", \"{$_SESSION[sql_pass]}\");
\$select_db_booyah = mysql_select_db(\"{$_SESSION[sql_db]}\", \$connectual);

\$siteinfo = mysql_query(\"SELECT * FROM config\");
\$site = mysql_fetch_array(\$siteinfo);

\$hometext = \$site[home];
\$hometext = nl2br(\$hometext);


?>";
			
		$file = @fopen("includes/config.php", "w");
				
				@fwrite($file, $data) or exit("Could not write to configuration file. Please CHMOD the file 'includes/config.php' to 0777 or 777!");
				
				fclose($file);


			echo("<strong>Congratulations!</strong> Your SQL Tables have been made with no problems!");
			
@unlink("installer.php");

if(file_exists("installer.php")) {

			echo("<br /><br />We couldn't delete you installer file, please delete it manually now!");
	
}

			echo("<br /><br ><a href='index.php' target='_self'>Log into POWERpanel!</a>");

		break;

}


}
else {
header('location: ?stage=1');
}

?>
<?php
session_start();
include "config.php";
if($_GET['stage']) {

echo '<style type="text/css">';
echo '<!--';
echo 'body {';
echo '		font-family: Verdana;';
echo '		font-size: 10px;';
echo '}';
echo '-->';
echo '</style>';

switch ($_GET['stage']) {

		case '1':

			
			echo("<b>Welcome to The Housekeeping Guy panel installation.</b><br><br> First we need to allow the DJ Panel to connect to a database so that almost all the functions of it can work. <u>Make sure you have CHMOD config.php and radio_config.php to 777 before starting installation!</u>");
			

			echo('<form action="?stage=2" method="post">');

			echo("<strong>MySQL Username:</strong><br /><input type='text' name='username' style='font-size: 10px; font-family: Verdana;' size='20'>"); 
			echo("<br /><br />"); 
			echo("<strong>MySQL Password:</strong><br /><input type='text' name='password' style='font-size: 10px; font-family: Verdana;' size='20'>"); 
			echo("<br /><br />");
			echo("<strong>MySQL Database:</strong><br /><input type='text' name='database' style='font-size: 10px; font-family: Verdana;' size='20'>"); 
			echo("<br /><br />");
			echo("<strong>MySQL Hostname: (leave if unsure)</strong><br /><input type='text' name='hostname' value='localhost' style='font-size: 10px; font-family: Verdana;' size='20'>"); 
			echo("<br /><br />"); 
			
			echo("<input type='submit' style='font-size: 10px; font-family: Verdana;' value='Connect to mySQL'>"); // Submit
			
			
		break;
		
		case '2':
						
			echo("<b>Welcome to The Housekeeping Guy panel installation. </b><br><br>Now we will test that you've entered valid MySQL database information and if it's correct, we'll configure the config.php file <u>(which must be CHMOD to 777 by now!)</u>.");

			
			$username = $_POST['username'];
			$password = $_POST['password'];
			$database = $_POST['database'];
			$hostname = $_POST['hostname'];
			
			$_SESSION['sql_user'] = $username;
			$_SESSION['sql_pass'] = $password;
			$_SESSION['sql_db'] = $database;
			$_SESSION['hostname'] = $hostname;
			
		$connect = @mysql_connect($hostname, $username, $password) or exit("Sorry, we couldn't connect to the MySQL Server. Please ensure your details are correct");
			echo("<b>Congratulations!</b> We have successfully connected to the MySQL Server!");
			
			echo("<br /><br />");
			

		if(!@mysql_select_db($database, $connect)){ 
		
		echo("<b>Error: ABC123456L0L</b> - We couldn't connect to the database. Because of this we will make the database for you!");
		
		$creater = mysql_query("CREATE database $database") or exit("\n\n<b>Error: 12345</b> - My bad, creating the database didn't work. ".mysql_error());
		
		echo("<br /><br /><b>The database has been created!");
		
		echo("<br /><br />");
		
		}
		
			echo("<b>Connected!</b> Connection to MySQL database successful.");
			
			$data = "<?php

\$host = \"$hostname\";

\$user = \"$username\";

\$pass = \"$password\";

\$data    = \"$database\";

\$ms = mysql_pconnect(\$host, \$user, \$pass);

if( !\$ms )

	{

	echo \"Error connecting to database.\n\";

	}

mysql_select_db(\$data);

?>";
			
		$file = @fopen("config.php", "w");
				
				@fwrite($file, $data) or exit("Could not write to configuration file. Please CHMOD the file 'config.php' to 0777 or 777!");
				
				fclose($file);
						
			
			echo("<br /><br /><a href='?stage=3' target='_self'>Continue</a>");
			
		break;
		
		case '3':
						
			echo("<b>Welcome to The Housekeeping Guy panel installation. </b><br><br>Now we will configure the radio_config.php file <u>(which must be CHMOD to 777 by now!)</u>.");

echo('<form action="?stage=3write" method="post">');

			echo("<strong>Site Name:</strong><br /><input type='text' name='sname' style='font-size: 10px; font-family: Verdana;' size='20'>"); 
			echo("<br /><br />"); 
			echo("<strong>SHOUTcast IP/Hostname:</strong><br /><input type='text' name='sip' style='font-size: 10px; font-family: Verdana;' size='20'>"); 
			echo("<br /><br />");
			echo("<strong>SHOUTcast Port:</strong><br /><input type='text' name='sport' style='font-size: 10px; font-family: Verdana;' size='20'>"); 
			echo("<br /><br />");
			echo("<strong>SHOUTcast Broadcast Password:</strong><br /><input type='text' name='spass' style='font-size: 10px; font-family: Verdana;' size='20'>"); 
			echo("<br /><br />"); 
			
			echo("<input type='submit' style='font-size: 10px; font-family: Verdana;' value='Configure Radio'>"); // Submit
			
		break;
		
		case '3write':
		
		echo("<b>Welcome to The Housekeeping Guy panel installation. </b><br><br>Now we'll write the data you put in to the config_radio.php file. We're trusting you on this one, so make sure the radio details you put in were correct!<br><br>");

			
			$sname = $_POST['sname'];
			$sip = $_POST['sip'];
			$sport = $_POST['sport'];
			$spass = $_POST['spass'];
			
			$data = "<BODY STYLE=\"background-color:transparent\">

<?php

\$scdef = \"$sname\"; // radio name here

\$scip = \"$sip\"; // url here

\$scport = \"$sport\"; // port number here

\$scpass = \"$spass\"; // password here


?>";
			
		$file = @fopen("config_radio.php", "w");
				
				@fwrite($file, $data) or exit("Could not write to radio configuration file. Please CHMOD the file 'config_radio.php' to 0777 or 777!");
				
				fclose($file);
						echo "Success, the radio configuration has been written to the file successfully!";
			
			echo("<br /><br /><a href='?stage=4' target='_self'>Continue</a>");
		
		break;
		
		case '4':

			echo("<b>Welcome to The Housekeeping Guy panel installation. </b><br><br>So now we're sorting out the admin user for the DJ Panel so when installation is complete you have some credentials to login with... and it's admin so you can manage everything.<br /><br />");
	
			mysql_query("CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(225) NOT NULL default '',
  `password` text NOT NULL,
  `email` text NOT NULL,
  `level` int(1) NOT NULL default '0',
  `ban` int(1) NOT NULL default '0',
  `lastlogin` varchar(225) NOT NULL default 'never',
  `ip` varchar(15) NOT NULL default '',
  `avatar` text NOT NULL,
  `name` text NOT NULL,
  UNIQUE KEY `id` (`id`),
  FULLTEXT KEY `password` (`password`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=232 ;
		") or exit("Could not create the staff table");
		
		echo("The staff table was created with no issues");
		
		mysql_query("INSERT INTO `staff` (`id`, `username`, `password`, `email`, `level`, `ban`, `lastlogin`, `ip`, `avatar`, `name`) VALUES (1, 'Admin', '4cb9c8a8048fd02294477fcb1a41191a', 'admin@yourdomain.com', 1, 0, '', '', 'Administrator', 'iUnknown');") or die(mysql_error());
		
		echo("<br /><br />The root administrator account was made with username: Admin and password: changeme");
		
		echo("<br /><br />");
		
		echo("<br /><br /><a href='?stage=5' target='_self'>Continue</a>");
		
	  break;
	  
	  case '5':
	  
			echo("<b>Welcome to The Housekeeping Guy panel installation. </b><br><br>Time to put all the data into the database! Just sit back and relax!<br><br>");
			
		mysql_query("CREATE TABLE IF NOT EXISTS `alert` (
  `ID` int(11) NOT NULL auto_increment,
  `message` text NOT NULL,
  `name` varchar(100) NOT NULL default '',
  `active` varchar(200) NOT NULL default '',
  `direct` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=316 ;
") or exit("Could not make alerts table");

			echo("The alerts table has been made");
			
		mysql_query("CREATE TABLE IF NOT EXISTS `requests2` (
  `id` int(11) NOT NULL auto_increment,
  `habboname` varchar(225) NOT NULL default '',
  `type` varchar(225) NOT NULL default '',
  `dj_name` varchar(225) NOT NULL default '',
  `message` text NOT NULL,
  `date` text NOT NULL,
  `ip` varchar(15) NOT NULL default '',
  `report` tinyint(1) NOT NULL default '0',
  `email` text NOT NULL,
  `example` text NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1043 ;
") or exit("Could not make application table");

			echo("<br />The applications table has been made");
			
		mysql_query("CREATE TABLE IF NOT EXISTS `friday` (
  `id` varchar(225) NOT NULL default '',
  `a` varchar(225) NOT NULL default '',
  `b` varchar(225) NOT NULL default '',
  `c` varchar(225) NOT NULL default '',
  `d` varchar(225) NOT NULL default '',
  `e` varchar(225) NOT NULL default '',
  `f` varchar(225) NOT NULL default '',
  `x` varchar(225) NOT NULL default '',
  `g` varchar(225) NOT NULL default '',
  `h` varchar(225) NOT NULL default '',
  `ti` varchar(225) NOT NULL default '',
  `i` varchar(225) NOT NULL default '',
  `j` varchar(225) NOT NULL default '',
  `k` varchar(225) NOT NULL default '',
  `l` varchar(225) NOT NULL default '',
  `m` varchar(225) NOT NULL default '',
  `n` varchar(225) NOT NULL default '',
  `o` varchar(225) NOT NULL default '',
  `p` varchar(225) NOT NULL default '',
  `q` varchar(225) NOT NULL default '',
  `r` varchar(225) NOT NULL default '',
  `s` varchar(225) NOT NULL default '',
  `t` varchar(225) NOT NULL default '',
  `u` varchar(225) NOT NULL default '',
  `v` varchar(225) NOT NULL default '',
  `w` varchar(225) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
") or exit("Could not make friday songs table");

			echo("<br>The friday table has been made");
			
			mysql_query("INSERT INTO `friday` (`id`, `a`, `b`, `c`, `d`, `e`, `f`, `x`, `g`, `h`, `ti`, `i`, `j`, `k`, `l`, `m`, `n`, `o`, `p`, `q`, `r`, `s`, `t`, `u`, `v`, `w`) VALUES ('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');") or exit("Could not complete friday table.");
		
		echo("Data entered to friday table.");
			
		mysql_query("CREATE TABLE IF NOT EXISTS `ipban` (
  `ID` int(11) NOT NULL default '0',
  `IP` varchar(15) NOT NULL default '',
  `Username` text NOT NULL,
  `Reason` text NOT NULL,
  `Banned` text NOT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
") or exit("Could not make IP ban table");

			echo("<br />The ip ban table has been made");
			
		mysql_query("CREATE TABLE IF NOT EXISTS `monday` (
  `id` varchar(225) NOT NULL default '',
  `a` varchar(225) NOT NULL default '',
  `b` varchar(225) NOT NULL default '',
  `c` varchar(225) NOT NULL default '',
  `d` varchar(225) NOT NULL default '',
  `e` varchar(225) NOT NULL default '',
  `f` varchar(225) NOT NULL default '',
  `x` varchar(225) NOT NULL default '',
  `g` varchar(225) NOT NULL default '',
  `h` varchar(225) NOT NULL default '',
  `ti` varchar(225) NOT NULL default '',
  `i` varchar(225) NOT NULL default '',
  `j` varchar(225) NOT NULL default '',
  `k` varchar(225) NOT NULL default '',
  `l` varchar(225) NOT NULL default '',
  `m` varchar(225) NOT NULL default '',
  `n` varchar(225) NOT NULL default '',
  `o` varchar(225) NOT NULL default '',
  `p` varchar(225) NOT NULL default '',
  `q` varchar(225) NOT NULL default '',
  `r` varchar(225) NOT NULL default '',
  `s` varchar(225) NOT NULL default '',
  `t` varchar(225) NOT NULL default '',
  `u` varchar(225) NOT NULL default '',
  `v` varchar(225) NOT NULL default '',
  `w` varchar(225) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
") or exit("Could not make monday table");

			echo("<br />The monday table has been made");
			
		mysql_query("INSERT INTO `monday` (`id`, `a`, `b`, `c`, `d`, `e`, `f`, `x`, `g`, `h`, `ti`, `i`, `j`, `k`, `l`, `m`, `n`, `o`, `p`, `q`, `r`, `s`, `t`, `u`, `v`, `w`) VALUES ('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');") or exit("Could not import monday data");
		
			echo("<br />The monday data has been imported");
			
		mysql_query("CREATE TABLE IF NOT EXISTS `news` (
  `ID` int(11) NOT NULL auto_increment,
  `NoticeTitle` text NOT NULL,
  `NoticeMessage` text NOT NULL,
  `NoticeDAT` text NOT NULL,
  `IP` int(11) NOT NULL default '0',
  `NoticeUsername` text NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;
") or exit("Could not make news table");

			echo("<br />The news table has been made");
			
			mysql_query("INSERT INTO `news` (`ID`, `NoticeTitle`, `NoticeMessage`, `NoticeDAT`, `IP`, `NoticeUsername`) VALUES
(20, 'Check encoders!', 'Please always remember to check your encoders for the correct bitrate and password before every show.', '05/07/08', 928, 'Admin');") or exit("Could not import news data");
		
			echo("<br />The news data has been imported");
			
		mysql_query("CREATE TABLE IF NOT EXISTS `notices` (
  `ID` int(11) NOT NULL auto_increment,
  `NoticeTitle` text NOT NULL,
  `NoticeMessage` text NOT NULL,
  `NoticeDAT` text NOT NULL,
  `IP` int(11) NOT NULL default '0',
  `NoticeUsername` text NOT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;
") or exit("Could not make the notices table");

			echo("<br />The notices table has been made");
			
		mysql_query("CREATE TABLE IF NOT EXISTS `pm` (
  `id` varchar(50) NOT NULL default '',
  `ip` varchar(50) NOT NULL default '',
  `send_to` varchar(50) NOT NULL default '',
  `send_from` varchar(50) NOT NULL default '',
  `message` text NOT NULL,
  `date` varchar(50) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
") or exit("Could not create pm table");

			echo("<br />The pm table has been made");
			
		mysql_query("CREATE TABLE IF NOT EXISTS `privmsgs` (
  `msg_id` int(10) NOT NULL auto_increment,
  `msg_title` varchar(100) NOT NULL default '',
  `msg_txt` text NOT NULL,
  `msg_read` int(1) NOT NULL default '0',
  `msg_date` varchar(12) NOT NULL default '0000-00-00',
  `msg_time` varchar(100) NOT NULL default '',
  `msg_ip` varchar(20) NOT NULL default '',
  `msg_to` varchar(50) NOT NULL default '',
  `msg_from` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`msg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
") or exit("Could not make the priv messages table");

			echo("<br />The priv messages table has been made");
			
		mysql_query("CREATE TABLE IF NOT EXISTS `radioinfo` (
  `id` int(11) NOT NULL auto_increment,
  `Radio_IP` text NOT NULL,
  `Radio_Port` text NOT NULL,
  `Radio_Password` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;
") or exit("Could not make requests table");

			echo("<br />The radio info table has been made");
			
		mysql_query("CREATE TABLE IF NOT EXISTS `radio_spy` (
  `id` int(10) NOT NULL auto_increment,
  `ip` text NOT NULL,
  `port` text NOT NULL,
  `name` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;") or exit("Could not make radio spy table");

			echo("<br />The radio spy table has been made");
			
			mysql_query("INSERT INTO `radio_spy` (`id`, `ip`, `port`, `name`) VALUES (1, '75.126.136.146', '9000', 'ClubHabbo'), (2, '72.52.209.99', '8061', 'HFFM'), (3, '78.129.167.15', '8402', 'KissHabbo'), (4, 'extenhost.com', '8001', 'HabboHotelFM'), (5, 'joshedwards.cast-hosting.com', '8160', 'HabboYourWay');") or exit("Could not import radio spy data");

echo("<br />The radio spy data has been imported");
			
		mysql_query("CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(11) NOT NULL auto_increment,
  `habboname` varchar(225) NOT NULL default '',
  `type` varchar(225) NOT NULL default '',
  `dj_name` varchar(225) NOT NULL default '',
  `message` text NOT NULL,
  `date` text NOT NULL,
  `ip` varchar(15) NOT NULL default '',
  `report` tinyint(1) NOT NULL default '0',
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=856 ;
") or exit("Could not make requests table");

			echo("<br />The requests table has been made");
			
		mysql_query("CREATE TABLE IF NOT EXISTS `saturday` (
  `id` varchar(225) NOT NULL default '',
  `a` varchar(225) NOT NULL default '',
  `b` varchar(225) NOT NULL default '',
  `c` varchar(225) NOT NULL default '',
  `d` varchar(225) NOT NULL default '',
  `e` varchar(225) NOT NULL default '',
  `f` varchar(225) NOT NULL default '',
  `x` varchar(225) NOT NULL default '',
  `g` varchar(225) NOT NULL default '',
  `h` varchar(225) NOT NULL default '',
  `ti` varchar(225) NOT NULL default '',
  `i` varchar(225) NOT NULL default '',
  `j` varchar(225) NOT NULL default '',
  `k` varchar(225) NOT NULL default '',
  `l` varchar(225) NOT NULL default '',
  `m` varchar(225) NOT NULL default '',
  `n` varchar(225) NOT NULL default '',
  `o` varchar(225) NOT NULL default '',
  `p` varchar(225) NOT NULL default '',
  `q` varchar(225) NOT NULL default '',
  `r` varchar(225) NOT NULL default '',
  `s` varchar(225) NOT NULL default '',
  `t` varchar(225) NOT NULL default '',
  `u` varchar(225) NOT NULL default '',
  `v` varchar(225) NOT NULL default '',
  `w` varchar(225) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
") or exit("Could not make the saturday table");

			echo("<br />The saturday table has been made");
			
			mysql_query("INSERT INTO `saturday` (`id`, `a`, `b`, `c`, `d`, `e`, `f`, `x`, `g`, `h`, `ti`, `i`, `j`, `k`, `l`, `m`, `n`, `o`, `p`, `q`, `r`, `s`, `t`, `u`, `v`, `w`) VALUES ('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');") or exit("Could not import saturday data");

echo("<br />The saturday data has been imported");
			
		mysql_query("CREATE TABLE IF NOT EXISTS `shoutout` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(225) NOT NULL default '',
  `comment` text NOT NULL,
  `IP` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

") or exit("Could not make the shoutout table");

			echo("<br />The shoutout table has been made");
			
		mysql_query("INSERT INTO `shoutout` (`id`, `username`, `comment`, `IP`) VALUES (6, 'Admin', 'Welcome', '92.8.102.231')") or exit("Could not import the shoutout data");

			echo("<br />The shoutout data has been imported");
			
		mysql_query("CREATE TABLE IF NOT EXISTS `shows` (
  `name` text NOT NULL,
  `dj` text NOT NULL,
  `day` text NOT NULL,
  `time` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
") or exit("Could not make the shows table");

			echo("<br />The shows table has been made");
		
		mysql_query("CREATE TABLE IF NOT EXISTS `slotrequest` (
  `id` int(11) NOT NULL auto_increment,
  `Username` varchar(225) NOT NULL default '',
  `Day` text NOT NULL,
  `Time` text NOT NULL,
  `ShowName` text NOT NULL,
  `IP` varchar(15) NOT NULL default '',
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
") or exit("Could not make the slot request table");

			echo("<br />The slot request table has been made");
			
		mysql_query("CREATE TABLE IF NOT EXISTS `status` (
  `id` varchar(225) NOT NULL default '',
  `a` varchar(225) NOT NULL default '',
  `b` varchar(225) NOT NULL default '',
  `c` varchar(225) NOT NULL default '',
  `d` varchar(225) NOT NULL default '',
  `e` varchar(225) NOT NULL default '',
  `f` varchar(225) NOT NULL default '',
  `x` varchar(225) NOT NULL default '',
  `g` varchar(225) NOT NULL default '',
  `h` varchar(225) NOT NULL default '',
  `i` varchar(225) NOT NULL default '',
  `j` varchar(225) NOT NULL default '',
  `k` varchar(225) NOT NULL default '',
  `l` varchar(225) NOT NULL default '',
  `m` varchar(225) NOT NULL default '',
  `n` varchar(225) NOT NULL default '',
  `o` varchar(225) NOT NULL default '',
  `p` varchar(225) NOT NULL default '',
  `q` varchar(225) NOT NULL default '',
  `r` varchar(225) NOT NULL default '',
  `s` varchar(225) NOT NULL default '',
  `t` varchar(225) NOT NULL default '',
  `u` varchar(225) NOT NULL default '',
  `v` varchar(225) NOT NULL default '',
  `w` varchar(225) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
") or exit("The status table could not be made");

			echo("<br />The status table has been made");
		
		mysql_query("CREATE TABLE IF NOT EXISTS `sunday` (
  `id` varchar(225) NOT NULL default '',
  `a` varchar(225) NOT NULL default '',
  `b` varchar(225) NOT NULL default '',
  `c` varchar(225) NOT NULL default '',
  `d` varchar(225) NOT NULL default '',
  `e` varchar(225) NOT NULL default '',
  `f` varchar(225) NOT NULL default '',
  `x` varchar(225) NOT NULL default '',
  `g` varchar(225) NOT NULL default '',
  `h` varchar(225) NOT NULL default '',
  `ti` varchar(225) NOT NULL default '',
  `i` varchar(225) NOT NULL default '',
  `j` varchar(225) NOT NULL default '',
  `k` varchar(225) NOT NULL default '',
  `l` varchar(225) NOT NULL default '',
  `m` varchar(225) NOT NULL default '',
  `n` varchar(225) NOT NULL default '',
  `o` varchar(225) NOT NULL default '',
  `p` varchar(225) NOT NULL default '',
  `q` varchar(225) NOT NULL default '',
  `r` varchar(225) NOT NULL default '',
  `s` varchar(225) NOT NULL default '',
  `t` varchar(225) NOT NULL default '',
  `u` varchar(225) NOT NULL default '',
  `v` varchar(225) NOT NULL default '',
  `w` varchar(225) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
") or exit("Could not make sunday timetable table");

			echo("<br />The sunday timetable table has been made");
			
		mysql_query("INSERT INTO `sunday` (`id`, `a`, `b`, `c`, `d`, `e`, `f`, `x`, `g`, `h`, `ti`, `i`, `j`, `k`, `l`, `m`, `n`, `o`, `p`, `q`, `r`, `s`, `t`, `u`, `v`, `w`) VALUES ('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');") or exit("Could not import the sunday timetable data");
			echo("<br />The sunday timetable data has been imported");
			
		mysql_query("CREATE TABLE IF NOT EXISTS `thursday` (
  `id` varchar(225) NOT NULL default '',
  `a` varchar(225) NOT NULL default '',
  `b` varchar(225) NOT NULL default '',
  `c` varchar(225) NOT NULL default '',
  `d` varchar(225) NOT NULL default '',
  `e` varchar(225) NOT NULL default '',
  `f` varchar(225) NOT NULL default '',
  `x` varchar(225) NOT NULL default '',
  `g` varchar(225) NOT NULL default '',
  `h` varchar(225) NOT NULL default '',
  `ti` varchar(225) NOT NULL default '',
  `i` varchar(225) NOT NULL default '',
  `j` varchar(225) NOT NULL default '',
  `k` varchar(225) NOT NULL default '',
  `l` varchar(225) NOT NULL default '',
  `m` varchar(225) NOT NULL default '',
  `n` varchar(225) NOT NULL default '',
  `o` varchar(225) NOT NULL default '',
  `p` varchar(225) NOT NULL default '',
  `q` varchar(225) NOT NULL default '',
  `r` varchar(225) NOT NULL default '',
  `s` varchar(225) NOT NULL default '',
  `t` varchar(225) NOT NULL default '',
  `u` varchar(225) NOT NULL default '',
  `v` varchar(225) NOT NULL default '',
  `w` varchar(225) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
") or exit("The thursday timetable table could not be made");

			echo("<br />The thursday timetable table has been made");
			
		mysql_query("INSERT INTO `thursday` (`id`, `a`, `b`, `c`, `d`, `e`, `f`, `x`, `g`, `h`, `ti`, `i`, `j`, `k`, `l`, `m`, `n`, `o`, `p`, `q`, `r`, `s`, `t`, `u`, `v`, `w`) VALUES ('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');") or exit("Could not import the thursday timetable data");
			echo("<br />The thursday timetable data has been imported");
			
		mysql_query("CREATE TABLE IF NOT EXISTS `top` (
  `id` int(10) NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `artist` varchar(255) NOT NULL default '',
  `album` varchar(255) NOT NULL default '',
  `votes` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
") or exit("The top table could not be made");

			echo("<br />The top table has been made");
			
			
			mysql_query("CREATE TABLE IF NOT EXISTS `topnotices` (
  `ID` int(11) NOT NULL auto_increment,
  `NoticeMessage` text NOT NULL,
  `IP` int(11) NOT NULL default '0',
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;
") or exit("The top notices table could not be made");

			echo("<br />The top notices table has been made");
			
					mysql_query("CREATE TABLE IF NOT EXISTS `tuesday` (
  `id` varchar(225) NOT NULL default '',
  `a` varchar(225) NOT NULL default '',
  `b` varchar(225) NOT NULL default '',
  `c` varchar(225) NOT NULL default '',
  `d` varchar(225) NOT NULL default '',
  `e` varchar(225) NOT NULL default '',
  `f` varchar(225) NOT NULL default '',
  `x` varchar(225) NOT NULL default '',
  `g` varchar(225) NOT NULL default '',
  `h` varchar(225) NOT NULL default '',
  `ti` varchar(225) NOT NULL default '',
  `i` varchar(225) NOT NULL default '',
  `j` varchar(225) NOT NULL default '',
  `k` varchar(225) NOT NULL default '',
  `l` varchar(225) NOT NULL default '',
  `m` varchar(225) NOT NULL default '',
  `n` varchar(225) NOT NULL default '',
  `o` varchar(225) NOT NULL default '',
  `p` varchar(225) NOT NULL default '',
  `q` varchar(225) NOT NULL default '',
  `r` varchar(225) NOT NULL default '',
  `s` varchar(225) NOT NULL default '',
  `t` varchar(225) NOT NULL default '',
  `u` varchar(225) NOT NULL default '',
  `v` varchar(225) NOT NULL default '',
  `w` varchar(225) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
") or exit("The tuesday timetable table could not be made");

			echo("<br />The tuesday timetable table has been made");
			
		mysql_query("INSERT INTO `tuesday` (`id`, `a`, `b`, `c`, `d`, `e`, `f`, `x`, `g`, `h`, `ti`, `i`, `j`, `k`, `l`, `m`, `n`, `o`, `p`, `q`, `r`, `s`, `t`, `u`, `v`, `w`) VALUES ('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');") or exit("Could not import the tuesday timetable data");
			echo("<br />The tuesday timetable data has been imported");
			
			mysql_query("CREATE TABLE IF NOT EXISTS `users_online` (
  `id` int(11) NOT NULL default '0',
  `username` varchar(225) NOT NULL default '',
  `time` text NOT NULL,
  `url` text NOT NULL,
  `kick` tinyint(1) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
") or exit("The users online table could not be made");

			echo("<br />The users online table has been made");
			
			mysql_query("INSERT INTO `users_online` (`id`, `username`, `time`, `url`, `kick`) VALUES
(0, 'Admin', '1215434576', '/staff/newdesign/home.php', 0);") or exit("Could not import the users online data");
			echo("<br />The users online data has been imported");
			
			mysql_query("CREATE TABLE IF NOT EXISTS `wednesday` (
  `id` varchar(225) NOT NULL default '',
  `a` varchar(225) NOT NULL default '',
  `b` varchar(225) NOT NULL default '',
  `c` varchar(225) NOT NULL default '',
  `d` varchar(225) NOT NULL default '',
  `e` varchar(225) NOT NULL default '',
  `f` varchar(225) NOT NULL default '',
  `x` varchar(225) NOT NULL default '',
  `g` varchar(225) NOT NULL default '',
  `h` varchar(225) NOT NULL default '',
  `ti` varchar(225) NOT NULL default '',
  `i` varchar(225) NOT NULL default '',
  `j` varchar(225) NOT NULL default '',
  `k` varchar(225) NOT NULL default '',
  `l` varchar(225) NOT NULL default '',
  `m` varchar(225) NOT NULL default '',
  `n` varchar(225) NOT NULL default '',
  `o` varchar(225) NOT NULL default '',
  `p` varchar(225) NOT NULL default '',
  `q` varchar(225) NOT NULL default '',
  `r` varchar(225) NOT NULL default '',
  `s` varchar(225) NOT NULL default '',
  `t` varchar(225) NOT NULL default '',
  `u` varchar(225) NOT NULL default '',
  `v` varchar(225) NOT NULL default '',
  `w` varchar(225) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
") or exit("The wednesday timetable table could not be made");

			echo("<br />The wednesday timetable table has been made");
			
		mysql_query("INSERT INTO `wednesday` (`id`, `a`, `b`, `c`, `d`, `e`, `f`, `x`, `g`, `h`, `ti`, `i`, `j`, `k`, `l`, `m`, `n`, `o`, `p`, `q`, `r`, `s`, `t`, `u`, `v`, `w`) VALUES ('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');") or exit("Could not import the wednesday timetable data");
			echo("<br />The wednesday timetable data has been imported");
			mysql_query("INSERT INTO `users_online` (`id`, `username`, `time`, `url`, `kick`) VALUES
(0, 'Admin', '1215434576', '/staff/newdesign/home.php', 0);") or exit("Could not import the users online data");
			echo("<br />The users online data has been imported");
			
			mysql_query("CREATE TABLE IF NOT EXISTS `downloads` (
  `ID` int(11) NOT NULL auto_increment,
  `DownloadName` text NOT NULL,
  `DownloadURL` text NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;
") or exit("The downloads table could not be made");

			echo("<br />The downloads table has been made");
			
		mysql_query("INSERT INTO `downloads` (`ID`, `DownloadName`, `DownloadURL`) VALUES (1, 'Demo', 'http://yourdomain.com/demoprogram.zip');") or exit("Could not import the downloads data");
			echo("<br />The downloads data has been imported");
			
			
			echo("<br /><br />");
			
			echo("<b>All done!</b> All tables have been created with no problems.!");
			

if(file_exists("install.php")) {

			echo("<br /><br /><b>This is important! To ensure your panel is as secure as possible, you must delete the install.php file now!</b>");
	
}

			echo("<br /><br ><a href='index.php'><b>Login</b> to The Housekeeping Guy!</a>");

		break;

}


}
else {
header('location: ?stage=1');
}

?>
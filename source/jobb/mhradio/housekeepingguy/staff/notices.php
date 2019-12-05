<? session_start();

include 'config.php';
include 'online.php';

$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user

if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {

//if the username is not set or the session username is empty or the ip does not match the session ip log them out

session_unset(); //clears firefox

session_destroy(); //clears IE

echo "An Error Has Occured. Please log in again or contact your webmaster.";

exit; } ?>
<head>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: transparent;
}
-->
</style>
</head>
<body>


<?php 

	  $query = mysql_query("SELECT * FROM `news` ORDER BY `ID` DESC");

	  while($result = mysql_fetch_array($query)) {

	  $NoticeUsername = $result["NoticeUsername"];

	   $NoticeMessage = $result["NoticeMessage"];

	    $NoticeDAT = $result["NoticeDAT"];

		 $NoticeTitle = $result["NoticeTitle"];

	  

echo "<font face='Verdana' size='1' color='white'><b>" . $NoticeDAT  . " - " . $NoticeTitle . "</b></font><br>
<font face='Verdana' size='1' color='white'><marquee><b>$NoticeMessage</b></marquee></font>";



  }
  
   mysql_close($ms);
  ?>
  </body>
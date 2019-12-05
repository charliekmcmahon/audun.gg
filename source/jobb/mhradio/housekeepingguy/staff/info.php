<? session_start();

include 'config.php';
include 'online.php';

$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user

if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {

//if the username is not set or the session username is empty or the ip does not match the session ip log them out

session_unset(); //clears firefox

session_destroy(); //clears IE

echo "<table border='1' align='center' width='50%' bgcolor='#FFDDDD' style='border-collapse: collapse' bordercolor='#FFAAAA'><tr><td align='center'><font size='3' face='verdana'><b><u>Retstricted Area</u></b></font><br><br><font size='1' face='verdana'>If you are not a member of staff, please leave this area. Your IP has now be logged  and we know who you are. Push the back button now!</font></td></tr></table></form></td></tr></table>.";

exit; } ?>




<table width="100%" cellspacing="0" cellpadding="0" border="0">


<table width="100%" background="../images/header.PNG">
<tr><td>
<font face="Verdana" size="1"><b>Radio Connection Information</b></font>
</td></tr></table><font size="1" face="Verdana"><p>Here is the radio information for the Radio Station. Please keep all URLs & Passwords safe or you will be punished. You can only see these once for security issues.<br><br></font><? 

	  $query = mysql_query("SELECT * FROM `radioinfo` ORDER BY `id` DESC");

	  while($result = mysql_fetch_array($query)) {

	  $Radio_IP = $result["Radio_IP"];

	   $Radio_Port = $result["Radio_Port"];

	    $Radio_Password = $result["Radio_Password"];

	  

echo "<b><font face=verdana size=1>Radio IP:</b> $Radio_IP<br>
<font face=verdana size=1><b><br>Radio Port:</b> $Radio_Port<br>
<font face=verdana size=1><b><br>Radio Password:</b> $Radio_Password<br>

<br>";



  }

	  mysql_close($ms);

	  ?>
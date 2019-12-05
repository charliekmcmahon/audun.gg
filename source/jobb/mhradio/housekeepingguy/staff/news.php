<? session_start();

include 'config.php';

$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user

if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {

//if the username is not set or the session username is empty or the ip does not match the session ip log them out

session_unset(); //clears firefox

session_destroy(); //clears IE

echo "An Error Has Occured. Please log in again or contact your webmaster.";

exit; } ?>







<font face="verdana" size="1">Welcome To The DJ News Please Check Back Regularly And Read The Updates Carefully Thank You.<br></font> <br>

<? 

	  $query = mysql_query("SELECT * FROM `news` ORDER BY `ID` DESC");

	  while($result = mysql_fetch_array($query)) {

	  $NoticeUsername = $result["NoticeUsername"];

	   $NoticeMessage = $result["NoticeMessage"];

	    $NoticeDAT = $result["NoticeDAT"];

		 $NoticeTitle = $result["NoticeTitle"];

	  

echo "<table width='100%' border='0'>

    <td colspan=2><B><font face=verdana size=1><u>$NoticeTitle</u></B></td></td>



  <tr>

    <td colspan='2'><font face=verdana size=1><li>$NoticeMessage</color></td>

  </tr>

  <tr>

    <td width=50%><font face=verdana size=1><b>Posted By:</b> $NoticeUsername</td>

    <td width=50%><font face=verdana size=1><b>Posted On:</b> $NoticeDAT</td>

  </tr>

</table><br><br>";



  }

	  mysql_close($ms);

	  ?>
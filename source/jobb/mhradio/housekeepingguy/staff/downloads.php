<? session_start();
include 'config.php';
$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user

if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {

//if the username is not set or the session username is empty or the ip does not match the session ip log them out

session_unset(); //clears firefox

session_destroy(); //clears IE

die("I Wonder Why You Have Ended Up Here :s"); } ?>
<table width="100%" background="../images/header.PNG">
<tr><td>
<font face="Verdana" size="1"><b>Downloads</b></font>
</td></tr></table><font size="1" face="Verdana"><p>Here you can download some equipment for DJing. From Sam Broadcaster, to jingles and backing tracks. We have them all.<br>
<br />
<table style="border-collapse: collapse; width: 500px; height: 100px" summary="" border="1" bordercolor="#000000" cellpadding="3" cellspacing="0">
<tbody>
<tr valign="top">
<td width="33%">
<font size="1" face="Verdana">&nbsp;<strong>Name:</strong></font></td>
<td width="33%">
<font size="1" face="Verdana">&nbsp;<strong>Link to download: </strong>
</font></td>
</tr>
<? 

	  $query = mysql_query("SELECT * FROM `downloads` ORDER BY `ID` DESC");

	  while($result = mysql_fetch_array($query)) {

	  $DownloadName = $result["DownloadName"];

	   $DownloadURL = $result["DownloadURL"];  

echo "<tr valign='top'>
<td>
<font size='1' face='Verdana'>$DownloadName</font></td>
<td>
<font size='1' face='Verdana'>$DownloadURL</font></td>
</tr>";

  }
  
echo "</table>";
	  ?>
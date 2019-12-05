<? session_start();

include 'config.php';

$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user

if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {

//if the username is not set or the session username is empty or the ip does not match the session ip log them out

session_unset(); //clears firefox

session_destroy(); //clears IE

die("You Are Not Logged In"); }

include("online.php");?>

<font color="#000000">

<table width="100%" background="../images/header.PNG">
<tr><td>
<font face="Verdana" size="1"><b>Staff Emails</b></font>
</td></tr></table><font size="1" face="Verdana"><p>Here you can view every DJs email. Please make sure you add them to your MSN incase you need a cover. Please always keep everyones email private otherwise there will be punishment.<br><p>


<center>
<table border="0" cellspacing="1" width="500">
<tr>
<td bgcolor="#4DB841" width="70"><font face="Verdana" size="2"><b>DJ Name</b></td>
<td bgcolor="#4DB841" width="90"><font face="Verdana" size="2"><b>Site Postition</b></td>
<td bgcolor="#4DB841" width="90"><font face="Verdana" size="2"><b>Habbo Name</b></td>
<td bgcolor="#4DB841" width="210"><font face="Verdana" size="2"><b>Email Address</b></td>
</tr></table>
            	              <?   


	  	  

	  $query = mysql_query("SELECT * FROM `staff`");

	  while($row = mysql_fetch_array($query)){

	  echo "<table border=\"0\" cellspacing=\"1\" width=\"500\">
<tr>
<td bgcolor=\"99CCFF\" width=\"70\"><font face=\"Verdana\" size=\"1\">DJ ".$row["username"]."</td>
<td bgcolor=\"99CCFF\" width=\"90\"><font face=\"Verdana\" size=\"1\">".$row["avatar"]."</td>
<td bgcolor=\"99CCFF\" width=\"90\"><font face=\"Verdana\" size=\"1\">".$row["name"]."</td>
<td bgcolor=\"99CCFF\" width=\"210\"><font face=\"Verdana\" size=\"1\">".$row["email"]."</td>
</tr>
</table>
";

	  }

	  ?>

</font>

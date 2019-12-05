<? session_start();
include '../config.php';
$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user
if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {
//if the username is not set or the session username is empty or the ip does not match the session ip log them out
session_unset(); //clears firefox
session_destroy(); //clears IE
die("I wonder why you have ended up here"); }
include("../online.php");?>

<font face="Verdana" size="1">
<?
if($_GET["action"] == "send") {
if($dj_name == "Choose One...") { echo "<b><font face=Verdana color=darkred size=2>You Must Select a Dj!<br>"; exit; }
$dj_name = $_POST["dj_name"];
$request = stripslashes($_POST["request"]);
$type = $_POST["type"];
$ip = getenv("REMOTE_ADDR");
$username = $_SESSION['session_username'];
$query = mysql_query("INSERT INTO `requests` (`habboname`, `type`, `dj_name`, `message`, `ip`, `date`) VALUES('$username', '$type', '$dj_name', '$request', '$ip', NOW() )");
echo "Admin Request sent!";
} else { 
echo "
You may use the form below to send an admin message through the request line, to the DJ currently 
on air, this way the DJ on air knows its a real DJ saying it and not an imposter!
<form method='post' action='adminrequest.php?action=send'>
<table border='0'>
<tr>
<td valign='top' align='left'><font face='Verdana' size='1'  color='#183139'><b>Type:</b><br>
<font size='1' face='Verdana'><select name='type' size='1'>";
if($_SESSION['session_level'] == "1") { echo "<option value='Admin Message'>Admin Message</option>"; }
if($_SESSION['session_level'] == "1") { echo "<option value='System Message'>System Message</option>"; }
if($_SESSION['session_level'] == "1") { echo "<option value='Warning Message'>Warning Message</option>"; }
if($_SESSION['session_level'] == "3") { echo "<option value='Senior DJ Message'>Senior DJ Messsage</option>";
}
echo "</select></font></td>
</tr><tr>
<td valign='top' align='left'><font face='Verdana' size='1'  color='#183139'><b>Dj Name:</b><br>
<select size='1' name='dj_name'>
<option selected>Choose One...</option>";
$result = mysql_query("SELECT * FROM `staff`");
while($worked = mysql_fetch_array($result)) {
$rusername = $worked["username"];
echo "<option value=$rusername>DJ $rusername</option>";
}
mysql_close();
echo "</select></td>
</tr><tr>
<td valign='top' align='left'><font face='Verdana' size='1'  color='#183139'><b>Message:</b><br>
<textarea rows='5' cols='23' type='text' name='request' class='button'></textarea></font></td>
</tr>
<tr>
<td valign='top' align='left'><font face='Verdana' size='1'  color='#183139'><input type='submit' name='submit' value='Send'></font></td>
</tr>
</table>
</form>";}
?>
<br>
              <span class="style3"><font size="1"></font></span></p></td>
			</tr>
		</table>
		</td>
	</tr>
</table>

</body>
</html>

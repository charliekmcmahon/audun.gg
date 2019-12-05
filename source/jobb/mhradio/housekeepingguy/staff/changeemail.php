<? session_start();
include 'config.php';
$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user
if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {
//if the username is not set or the session username is empty or the ip does not match the session ip log them out
session_unset(); //clears firefox
session_destroy(); //clears IE
echo "ERROR!!!";
exit; } ?>

<?
$action = $_GET["action"];
$email_cng = $_POST["email_cng"];
$user = $_SESSION['session_username'];
$current = mysql_query("SELECT * FROM staff WHERE username='$user'") or die(mysql_error());
$currentarray = mysql_fetch_array($current);
if($action == "change") {

if(!$email_cng) { echo "<b>You must enter your New Email!</b>"; exit; }
$email_cng = ($email_cng);
$query = mysql_query("UPDATE `staff` SET email='$email_cng' WHERE username='$user'") or die(mysql_error());
echo "<font face=verdana size=1>Email Changed";

} else {
echo "
<form method=post action=\"changeemail.php?action=change\">
<table border=\"0\">
<tr><td><font size=\"1\" face=\"Verdana\">Current Email: <td><font size=\"1\" face=\"Verdana\"><b>" . $currentarray['email'] . "</b></font></td></tr>
<tr><td><font size=\"1\" face=\"Verdana\">New Email: <td><input name=\"email_cng\"></td></tr>
<tr><td></td><td><input type=submit value=\"Change Email\" accesskey=\"s\"></td></tr>
</table>
</form>"; }
?>

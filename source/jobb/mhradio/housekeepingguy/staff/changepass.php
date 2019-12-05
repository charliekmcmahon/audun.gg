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
$password_cng = $_POST["password_cng"];
$password_cng2 = $_POST["password_cng2"];
if($password_cng != $password_cng2) { echo "<font face='Verdana' size='1'>The two new passwords did not match</font>"; exit;}
$password_cng = md5($password_cng);
$user = $_SESSION['session_username'];
if($action == "change") {
if(!$password_cng) { echo "<b>You must enter your New Password!</b>"; exit; }
$query = mysql_query("UPDATE `staff` SET password='$password_cng' WHERE username='$user'") or die(mysql_error());
echo "<font face=verdana size=1>Password Changed";
} else {
echo "
<form method=post action=\"changepass.php?action=change\">
<table border=\"0\">
<tr><td><font size=\"1\" face=\"Verdana\">Current Password: <td><input name=\"password_cur\"></td></tr>
<tr><td><font size=\"1\" face=\"Verdana\">New Password: <td><input name=\"password_cng\"></td></tr>
<tr><td><font size=\"1\" face=\"Verdana\">Confirm New Password: <td><input name=\"password_cng2\"></td></tr>
<tr><td></td><td><input type=submit value=\"Change Password\" accesskey=\"s\"></td></tr>
</table>
</form>"; }
?>

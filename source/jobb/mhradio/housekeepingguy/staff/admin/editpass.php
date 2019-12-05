<? session_start();

include '../config.php';
include '../online.php';

$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user

if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {

//if the username is not set or the session username is empty or the ip does not match the session ip log them out

session_unset(); //clears firefox

session_destroy(); //clears IE

echo "An Error Has Occured. Please log in again or contact your webmaster.";

exit; } ?>

<? if($session_level == "3") { echo "You are not of the required level to access this page."; } else { ?>



<table width="100%" background="../../images/header.PNG">
<tr><td>
<font face="Verdana" size="1"><b>Change A User's Password</b></font>
</td></tr></table><font size="1" face="Verdana"><p>Here you can change a user's password. Please type in their username and <b>new</b> password. Using numbers and different cases of letters will make it harder to guess.



<?
$action = $_GET["action"];
if($action == "change") {

$username = $_POST["username"];
$password = $_POST["password"];
$password2 = $_POST["password2"];

if($password != $password2) { echo "<font face='Verdana' size='1'>The two new passwords did not match</font>"; exit;}

if(!$username) { echo "<b>You must enter a username!</b>"; exit; }

$password = md5($password);

$username = ($username);

$query = mysql_query("UPDATE `staff` SET password='$password' WHERE username='$username'") or die(mysql_error());

echo "<font face=verdana size=1><br><br>The users account has been edited.";





} else {

echo "

<p align=`centre`><form method=post action=\"editpass.php?action=change\">

<table border=\"0\">

<tr><td><font size=\"1\" face=\"Verdana\">Username:<td><input name=\"username\"></td></tr>

<tr><td><font size=\"1\" face=\"Verdana\">New Password:<td><input name=\"password\"></td></tr>
<tr><td><font size=\"1\" face=\"Verdana\">Confirm New Password:<td><input name=\"password2\"></td></tr>

<tr><td></td><td><input type=submit value=\"Edit Password\" accesskey=\"s\"></td></tr>

</table>

</form>"; }

?><? } ?>
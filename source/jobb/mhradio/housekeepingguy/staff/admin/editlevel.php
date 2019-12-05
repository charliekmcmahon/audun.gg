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
<font face="Verdana" size="1"><b>Change A Users Position</b></font>
</td></tr></table><font size="1" face="Verdana"><p>Here You Can Edit A Users Position Address By Typing Their Username And A New Email Address!



<?
$action = $_GET["action"];
if($action == "change") {


$username = $_POST["username"];
$avatar = $_POST["avatar"];
if(!$username) { echo "<b>You must enter a username!</b>"; exit; }

$avatar = ($avatar);

$username = ($username);

$query = mysql_query("UPDATE `staff` SET avatar='$avatar' WHERE username='$username'") or die(mysql_error());

echo "<font face=verdana size=1><br><br>The users account has been edited.";





} else {

echo "

<p align=`centre`><form method=post action=\"editlevel.php?action=change\">

<table border=\"0\">

<tr><td><font size=\"1\" face=\"Verdana\">Username:<td><input name=\"username\"></td></tr>

<tr><td><font size=\"1\" face=\"Verdana\">New Position:<td><input name=\"email\"></td></tr>

<tr><td></td><td><input type=submit value=\"Edit Level\" accesskey=\"s\"></td></tr>

</table>

</form>"; }

?><? } ?>
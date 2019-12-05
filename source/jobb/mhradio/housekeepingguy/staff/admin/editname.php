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
<font face="Verdana" size="1"><b>Change A Users Habbo Name</b></font>
</td></tr></table><font size="1" face="Verdana"><p>Here you can edit a user's habbo name, simply type their username and new habbo name!



<?
$action = $_GET["action"];
if($action == "change") {

$username = $_POST["username"];
$name = $_POST["name"];

if(!$username) { echo "<b>You must enter a username!</b>"; exit; }

$name = ($name);

$username = ($username);

$query = mysql_query("UPDATE `staff` SET name='$name' WHERE username='$username'") or die(mysql_error());

echo "<font face=verdana size=1><br><br>The user's account has been edited.";





} else {

echo "

<p align=`centre`><form method=post action=\"editname.php?action=change\">

<table border=\"0\">

<tr><td><font size=\"1\" face=\"Verdana\">Username:<td><input name=\"username\"></td></tr>

<tr><td><font size=\"1\" face=\"Verdana\">New Habbo Name:<td><input name=\"name\"></td></tr>

<tr><td></td><td><input type=submit value=\"Edit Habbo Name\" accesskey=\"s\"></td></tr>

</table>

</form>"; }

?><? } ?>
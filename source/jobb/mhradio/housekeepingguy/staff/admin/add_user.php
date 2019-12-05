<? session_start();
include '../config.php';
include '../online.php';
$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user
if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {
//if the username is not set or the session username is empty or the ip does not match the session ip log them out
session_unset(); //clears firefox
session_destroy(); //clears IE
echo "ERROR!!!";
exit; } ?>
<table width="100%" background="../../images/header.PNG">
<tr><td>
<font face="Verdana" size="1"><b>Add A User</b></font>
</td></tr></table><font size="1" face="Verdana"><p>
Here you can add a user. If the user is a radio DJ please just put 'Radio DJ' for the Site Position! Please do not make <b>ANY</b> users administrator. This could muck up the panel!<p>
<font face="verdana" size="1">
<? if($_SESSION['session_level'] == "1") { ?>
<?
$action = $_GET["action"];
$username_register = $_POST["username_register"];
$password_register = $_POST["password_register"];
$email_register = $_POST["email_register"];
$level_register = $_POST["level_register"];
$avatar_register = $_POST["avatar_register"];
$name_register = $_POST["name_register"];
if($action == "register") {
include ("../config.php");
if(!$username_register || !$password_register) { echo "<br><br><b>You must enter a username and password!</b>"; exit; }
$password_register = md5($password_register);
$query = mysql_query("INSERT INTO `staff` (`username`, `password`, `email`, `level` , `avatar` , `name`) VALUES('$username_register', '$password_register', '$email_register', '$level_register' , '$avatar_register' , '$name_register')") or die("<br><b><font face=verdana size=1>Error: User not added to database.</b><br>
You have got this error becuase the name you have chosen is being used by a current member or we cannot connect to the database, please try a different name or try again later");

echo "<font face=verdana size=1>Account Created";
} else {
echo "<form method=post action=\"add_user.php?action=register\">
<table border=\"0\">
<tr><td><font face=\"verdana\" size=\"1\"><b>Username:</b></td><td><input name=\"username_register\" MAXLENGTH=\"16\"></td></tr>
<tr><td><font face=\"verdana\" size=\"1\"><b>Email Address:</b></td><td><input name=\"email_register\"></td></tr>
<tr><td><font  face=\"verdana\" size=\"1\"><b>Password:</b> <td><input name=\"password_register\"></td></tr>
<tr><td><font  face=\"verdana\" size=\"1\"><b>Position:</b> <td><input name=\"avatar_register\"></td></tr>
<tr><td><font  face=\"verdana\" size=\"1\"><b>Habbo Name:</b> <td><input name=\"name_register\"></td></tr>
<tr><td><font face=\"verdana\" size=\"1\"><b>Level:</b></td><td><font face=\"verdana\" color=\"#ffffff\" size=\"1\"><select name=\"level_register\">
<option value=\"3\">DJ</option>
<option value=\"2\">Senior DJ</option>
<option value=\"1\">Aministrator</option>
</select></td></tr>
<tr><td></td><td><input type=submit value=\"     Add User     \" accesskey=\"s\"></td></tr>
</table>
</form>"; }
  ?>
</font>
<style type="text/css"><!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #000000;
}
body {
	background-color: ffffff;
	background-image: url();
}
a:link {
	color: #666666;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #666666;
}
a:hover {
	text-decoration: none;
	color: #6699CC;
}
a:active {
	text-decoration: none;
	color: #666666;
}
--></style>
<? } ?>
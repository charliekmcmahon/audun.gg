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
<tr>
  <td><b><font size="1" face="Verdana">Add Radio Information </font></b></td>
</tr></table><font size="1" face="Verdana"><p>Here you can update the radio information so all DJs can see it. Please update it ASAP and put the password that someone won't guess! You should make sure that there is only one set of Radio Information on the page!

<? if($session_level == "3") { echo "You are not of the required level to access this page."; } else { ?>

<?
$Radio_IP = $_POST["Radio_IP"];

$Radio_Port = $_POST["Radio_Port"];

$Radio_Password = $_POST["Radio_Password"];

$action = $_GET["action"];
if($action == "add") {

$add = mysql_query("INSERT INTO `radioinfo` ( `Radio_IP`, `Radio_Port`, `Radio_Password`) VALUES ('$Radio_IP', '$Radio_Port', '$Radio_Password')");

echo "<br><br>The Radio Information Has Been Updated !";

} else {

echo "<form method='post' action='add_info.php?action=add'>

<table border=\"0\" cellpadding=\"2\" cellspacing=\"5\">

<tr><td><font face=\"Verdana\" size=\"1\">Radio IP:</td><td><input type='text' name='Radio_IP' class='button' size='25'></td></tr>

<tr><td><font face=\"Verdana\" size=\"1\">Radio Port:</td><td><input type='text' name='Radio_Port' class='button' size='25'></td></tr>

<tr><td><font face=\"Verdana\" size=\"1\">Radio Password:</td><td><input type='text' name='Radio_Password' class='button' size='25'></td></tr>

<tr><td></td><td><input type='submit' name='submit' value='Update'></td></tr>

</form>";

}

?>

</P></font>

</font></font></font></font></font>

<? } ?>
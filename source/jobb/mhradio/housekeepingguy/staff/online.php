<? session_start();
include 'config.php';

$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user

if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {

//if the username is not set or the session username is empty or the ip does not match the session ip log them out

session_unset(); //clears firefox

session_destroy(); //clears IE

echo "<table border='1' align='center' width='50%' bgcolor='#FFDDDD' style='border-collapse: collapse' bordercolor='#FFAAAA'><tr><td align='center'><font size='3' face='verdana'><b><u>Retstricted Area</u></b></font><br><br><font size='1' face='verdana'>If you are not a member of staff, please leave this area. Your IP has now be logged  and we know who you are. Push the back button now!</font></td></tr></table></form></td></tr></table>";

exit; } ?>

<?

$time = time();

$online = time() - 60;

$del = mysql_query("DELETE FROM `users_online` WHERE `time` < '$online'");

$ip = "$REMOTE_ADDR";

$username = $_SESSION["session_username"];

$check = mysql_query("SELECT * FROM `users_online` WHERE username='$username'");

$check = mysql_num_rows($check);

list($kick) = mysql_fetch_array(mysql_query("SELECT `kick` FROM `users_online` WHERE `username`='$username'"));

if($kick == "1") { echo "<script language='JavaScript'>parent.location='index.php?action=kicked';</script>"; }

$url = $REQUEST_URI;

if($check == 1){

$query = mysql_query("UPDATE `users_online` SET `time`='$time',`url`='$url' WHERE `username`='$username'");

}else{

$query = mysql_query("INSERT INTO `users_online` (`username`,`time`,`url`) VALUES('$username','$time','$url')");

}

?>
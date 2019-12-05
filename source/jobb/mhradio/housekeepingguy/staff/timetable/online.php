<? session_start();
include 'dbConfig.php';
$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user
if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {
//if the username is not set or the session username is empty or the ip does not match the session ip log them out
session_unset(); //clears firefox
session_destroy(); //clears IE
echo "Hmm I Wonder Why You Have Ended Up Here :s";
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
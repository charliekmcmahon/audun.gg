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
<font face="Verdana" size="1"><b>Add A Panel Notice</b></font>
</td></tr></table><font size="1" face="Verdana"><p>Here is where you can update the little site update which is at the top of the Panel. Update if you have an important annoucnment and anything thats been updated like the Radio Information!

<? if($session_level == "3") { echo "You are not of the required level to access this page."; } else { ?>

<?

$IP = "$REMOTE_ADDR";

$NoticeUsername = "$session_username";
$date = date("d/m/y");

$action = $_GET["action"];
$NoticeMessage = $_POST["NoticeMessage"];
$NoticeDAT = $_POST["NoticeDAT"];
$NoticeTitle = $_POST["NoticeTitle"];
if($action == "add") {

$add = mysql_query("INSERT INTO `news` ( `NoticeUsername`, `NoticeMessage`, `IP`, `NoticeDAT`, `NoticeTitle`) VALUES ('$NoticeUsername', '$NoticeMessage', '$IP', '$NoticeDAT', '$NoticeTitle')");

echo "Thank you $session_username. Your notice has been posted.";

} else {

echo "<form method='post' action='add_notice.php?action=add'>

<table border=\"0\" cellpadding=\"2\" cellspacing=\"5\">

<tr><td><font face=\"Verdana\" size=\"1\">Poster Name:</td><td><font face=\"verdana\" size=\"1\">$session_username</td></tr>

<tr><td><font face=\"Verdana\" size=\"1\">Notice Title:</td><td><input type='text' name='NoticeTitle' class='button' size='25'></td></tr>

<tr><td><font face=\"Verdana\" size=\"1\">Notice Date:</td><td><font face=\"Verdana\" size=\"1\">". $date . "<input type='hidden' name='NoticeDAT' value='". $date . "'></font></td></tr>

<tr><td><font face=\"Verdana\" size=\"1\">Notice Message:</td><td><input type='text' name='NoticeMessage' class='button' size='25'></td></tr>

<tr><td></td><td><input type='submit' name='submit' value='Post'></td></tr>

</form>";

}

?>

</P></font>

</font></font></font></font></font>

<? } ?>
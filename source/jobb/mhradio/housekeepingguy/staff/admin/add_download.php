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
<font face="Verdana" size="1"><b>Add A Download</b></font>
</td></tr></table><font size="1" face="Verdana"><p>Here is where you can add a download to the download page for the DJs and other staff to download. Make sure you have uploaded the file somewhere first.

<? if($session_level == "3") { echo "You are not of the required level to access this page."; } else { ?>

<?

$action = $_GET["action"];
$DownloadName = $_POST["DownloadName"];
$DownloadURL = $_POST["DownloadURL"];
if($action == "add") {

$add = mysql_query("INSERT INTO `downloads` ( `DownloadName`, `DownloadURL`) VALUES ('$DownloadName', '$DownloadURL')");

echo "<br><br>Thank you $session_username. Your download has been posted.";

} else {

echo "<form method='post' action='add_download.php?action=add'>

<table border=\"0\" cellpadding=\"2\" cellspacing=\"5\">

<tr><td><font face=\"Verdana\" size=\"1\">Download Name:</td><td><input type='text' name='DownloadName' class='button' size='25'></td></tr>

<tr><td><font face=\"Verdana\" size=\"1\">Download URL:</td><td><input type='text' name='DownloadURL' class='button' size='25'></td></tr>

<tr><td></td><td><input type='submit' name='submit' value='Post'></td></tr>

</form>";

}

?>

</P></font>

</font></font></font></font></font>

<? } ?>
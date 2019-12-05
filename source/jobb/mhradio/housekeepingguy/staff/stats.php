<? session_start();
include 'config.php';
$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user

if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {

//if the username is not set or the session username is empty or the ip does not match the session ip log them out

session_unset(); //clears firefox

session_destroy(); //clears IE

die("I Wonder Why You Have Ended Up Here :s"); } ?>
<? include('stats_file.php'); ?>
<table width="100%" background="../images/header.PNG">
<tr><td>
<font face="Verdana" size="1" color="black"><b>Radio Stats</b></font>
</td></tr></table><font size="1" face="Verdana" color="black"><? if($streamstatus == "1"){ echo "<b>Online:</b> Yes<p><b>DJ:</b> $servertitle<p><b>Listeners:</b> $currentlisteners<p><b>Recent Songs:</b><br><b>1.</b> $song[1]<br><b>2.</b> $song[2]<br><b>3.</b> $song[3]<br><b>4.</b> $song[4]<br><b>5.</b> $song[5]"; } else { echo "<b>Online:</b> No"; } ?><p>
</p>
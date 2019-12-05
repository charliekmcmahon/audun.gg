<? session_start();

include 'config.php';

$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user

if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {

//if the username is not set or the session username is empty or the ip does not match the session ip log them out

session_unset(); //clears firefox

session_destroy(); //clears IE

die("Error!!!"); }

?>



<?

if($action == "online") {

  echo "<body topmargin=\"0\" leftmargin=\"0\" rightmargin=\"0\" bottommargin=\"0\">";

  echo "<meta http-equiv=\"refresh\" content=\"60;url=users_online.php?action=online\">";

  $online = time() - 60;

  $who = mysql_query("SELECT * FROM `users_online` WHERE `time` > '$online'");

  echo "<font size=\"1\" face=\"Verdana\"><a href=users_online.php?action=online>REFRESH</a></font><br><br>";

  while($worked = mysql_fetch_array($who)) {

  if($_SESSION['session_level'] == '1') { echo "<font size=\"1\" face=\"Verdana\" color=blue><b>".$worked['username'].", </b></font>"; } elseif($_SESSION['session_level'] == '2') { echo "<font size=\"1\" face=\"Verdana\">".$worked['username'].", </font>"; } elseif($_SESSION['session_level'] == '3') { echo "<font size=\"1\" face=\"Verdana\">".$worked['username'].", </font>



"; }



  }

  echo "</table>";

} elseif($action == "kick" and $_SESSION["session_level"] == "1") {

  mysql_query("UPDATE `staff` SET `ban`='1' WHERE `username`='$banuser'") or die("Could not ban user");

  mysql_query("UPDATE `users_online` SET `kick`='1' WHERE `username`='$banuser'") or die("Could not kick user");

  echo "$banuser has been kicked and suspended from the DJ Control Panel";



} elseif($_SESSION["session_level"] == "1") {

  $online = time() - 60;

  $who = mysql_query("SELECT * FROM `users_online` WHERE `time` > '$online'");

  echo "<table border=\"0\" cellspacing=\"5\">

   <tr>

    <td><font size=\"1\" face=\"Verdana\"><b>IP</b></font></td>

    <td><font size=\"1\" face=\"Verdana\"><b>LAST CLICK</b></font></td>

    <td><font size=\"1\" face=\"Verdana\"><b>URL</b></font></td>

    <td><font size=\"1\" face=\"Verdana\"><b>OPTIONS</b></font></td>

   </tr>";

  while($worked = mysql_fetch_array($who)) {

    $date = date("g:ia", $worked['time']);

    $url = $worked['url'];

    if(strlen($url) > 60) {

      $url = substr($url, 0, 60);

      $url = "$url...";

    }

    echo "<tr>

      <td><font size=\"1\" face=\"Verdana\">".$worked['username']."</font></td>

      <td><font size=\"1\" face=\"Verdana\">$date</font></td>

      <td><font size=\"1\" face=\"Verdana\">[<a href=\"users_online.php?action=kick&banuser=".$worked['username']."\">Kick & Suspend</a>]</font></td>

     </td>";

  }

  echo "</table>";

}

?>

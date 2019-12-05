<? session_start();

include 'config.php';

$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user

if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {

//if the username is not set or the session username is empty or the ip does not match the session ip log them out

session_unset(); //clears firefox

session_destroy(); //clears IE

die("Hmm I Wonder Why You Have Ended Up Here :S"); }

include("online.php");?>



<font face="Verdana" size="1">

<?

$ip = getenv("REMOTE_ADDR");

if($_GET["action"] == "add") {

$session_username = $_SESSION["session_username"];

$ip = getenv("REMOTE_ADDR");

$comment = $_POST["comment"];

$add = mysql_query("INSERT INTO `shoutout` ( `comment` , `username` , `IP` ) VALUES ('$comment', '$session_username', '$ip')");

echo "Shoutout added on site";



} elseif($_GET["action"] == "delete") {

$delete = mysql_query("TRUNCATE TABLE `shoutout`");

$session_username = $_SESSION["session_username"];

$add = mysql_query("INSERT INTO `shoutout` ( `comment` , `username` , `IP` ) VALUES ('DJ Says Is Not In Use By The Current DJ', 'Offline!', '192.168.1.1')");

echo "All shoutouts deleted";



} elseif($_GET["action"] == "addalert") {

$cookiename = time();

$ip = $_SERVER["REMOTE_ADDR"];

$message = addslashes($_POST["message"]);

$update = mysql_query("UPDATE `alert` SET `id`='1',`cookiename`='$cookiename',`message`='$message' WHERE `id`='2'");

echo "The alert was successful. All the visitors of the website have now been shown the alert.<p>This window will automatically go back. Please wait...(this is usually about 15 seconds)";

echo "<meta http-equiv=\"refresh\" content=\"5;url=djsays.php?action=alertrefresh\">";





} elseif($_GET["action"] == "alertrefresh" and $_SESSION['session_level'] == "1") {

echo "Pending... Please Wait";

$delete = mysql_query("UPDATE `alert` SET `id`='2' WHERE `id`='1'");

echo "<meta http-equiv=\"refresh\" content=\"2;url=djsays.php?action=alert\">";



} elseif($_GET["action"] == "alert") {

echo "You can no longer use &#92;n << Means u can only have 1 line

<form method='post' action='djsays.php?action=addalert'>

<table border=\"0\" cellspacing=\"5\">

<tr><td valign=\"top\"><font face=\"Verdana\" size=\"1\">Message:</td><td>

  <textarea name=\"message\" rows=\"5\" cols=\"20\"></textarea></td></tr>

<tr><td></td><td><input type=\"submit\" name=\"submit\" value=\"Send Alert\"></td></tr>

</form>";



} else {

if($_SESSION['session_level'] == "1") { echo "<u><b>Set the DJ Says</b></u><br><br>Only send the DJ says when you are on air and don't overwrite anyone else who is on air. Please make it more than 10 words to make it look good.<br><br> "; }

echo "<form method='post' action='djsays.php?action=add'>

<table border=\"0\" cellpadding=\"2\" cellspacing=\"5\">

<tr><td><font face=\"Verdana\" size=\"1\"><b>DJ Name:</b></td><td><font face=\"Verdana\" size=\"1\">".$_SESSION["session_username"]."</td></tr>

<tr><td><font face=\"Verdana\" size=\"1\"><b>Shoutout:</b></td><td><input type='text' name='comment' class='button' size='50'></td></tr>

<tr><td></td><td><input type='submit' name='submit' value='Publish Shoutout'></td></tr>

</form>";

}

?>

</font></td>

			</tr>

		</table>

		</td>

	</tr>

</table>

</body>

</html>


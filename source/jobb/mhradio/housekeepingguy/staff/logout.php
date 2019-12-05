<? session_start();

include 'config.php';

$session_username = $_SESSION["session_username"];

mysql_query("DELETE FROM `requests` WHERE `dj_name`='$session_username'");

session_unset(); //clears firefox

session_destroy(); //clears IE

echo "
<table width=\"100%\" background=\"../images/header.PNG\">
<tr><td>
<font face=\"Verdana\" size=\"1\"><b>Logging Out...</b></font>
</td></tr></table><font size=\"1\" face=\"Verdana\"><p>You have now logged out of the DJ Panel. You will now be re-directed!



 <meta http-equiv=\"refresh\" content=\"1; URL=index.php\" /></font>";

exit; ?>
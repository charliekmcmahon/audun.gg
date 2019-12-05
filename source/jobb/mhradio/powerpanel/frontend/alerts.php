	<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
	<meta http-equiv="Expires" content="0">
<meta http-equiv="refresh" content="10;url=alerts.php">
<?php
include("../includes/config.php");

$query = mysql_query("SELECT * FROM alerts WHERE type = 'site'");
while($rows = mysql_fetch_array($query)) {
echo('<script type="text/javascript">alert("'. $rows[djname] .' Says: '. $rows[message] .'")</script>');
}

$ip = $_SERVER['REMOTE_ADDR'];

$query = mysql_query("SELECT * FROM alerts WHERE type = 'ip' AND ip = '$ip'");
while($rows = mysql_fetch_array($query)) {
echo('<script type="text/javascript">alert("'. $rows[djname] .' Says: '. $rows[message] .'")</script>');

## DELETE

$del = mysql_query("DELETE FROM alerts WHERE id = '$rows[id]'");

## / DELETE

}
?>
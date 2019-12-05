<?php
include("../includes/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
	<meta http-equiv="Expires" content="0">
<title>POWERpanel Frontend Information</title>
<link href="../css/inside.css" rel="stylesheet" type="text/css" /></head>

<body style="margin: 10px;">
<span id="content_title">POWERpanel Frontend Information</span><br />
<br />
<div id="content"><strong>Alerts iFrame</strong></div>
<div id="content" style="border: dotted 1px #999999; width: 50%; padding: 4px;">&lt;iframe src=&quot;alerts.php&quot; frameborder=&quot;0&quot; name=&quot;alerts&quot; width=&quot;0&quot; height=&quot;0&quot;&gt;&lt;/iframe&gt;</div>
<br />
<div id="content"><strong>Requests page </strong></div>
<div id="content" style="border: dotted 1px #999999; width: 50%; padding: 4px;">
<?php
$query = mysql_query("SELECT * FROM config");
while($rows = mysql_fetch_array($query)) {

echo("http://www.".$rows[sitename]."/frontend/request.php");

}

?></div>
<br />
<div id="content"><strong>Spotlight</strong></div>
<div id="content" style="border: dotted 1px #999999; width: 50%; padding: 4px;">
<?php
$query = mysql_query("SELECT * FROM config");
while($rows = mysql_fetch_array($query)) {

echo("http://www.".$rows[sitename]."/frontend/spotlight.php");

}

?></div>
<br />
<div id="content"><strong>Staff List</strong></div>
<div id="content" style="border: dotted 1px #999999; width: 50%; padding: 4px;">
<?php
$query = mysql_query("SELECT * FROM config");
while($rows = mysql_fetch_array($query)) {

echo("http://www.".$rows[sitename]."/frontend/staff.php");

}

?></div>
<br />
<div id="content"><strong>DJ Says</strong></div>
<div id="content" style="border: dotted 1px #999999; width: 50%; padding: 4px;">
<?php
$query = mysql_query("SELECT * FROM config");
while($rows = mysql_fetch_array($query)) {

echo("http://www.".$rows[sitename]."/frontend/djsays.php");

}

?></div>
<br />
<div id="content"><strong>DJ Profiles</strong></div>
<div id="content" style="border: dotted 1px #999999; width: 50%; padding: 4px;">
<?php
$query = mysql_query("SELECT * FROM config");
while($rows = mysql_fetch_array($query)) {

echo("http://www.".$rows[sitename]."/frontend/djprofile.php?name=&lt;ACCOUNT NAME&gt;");

}

?>
</div>
<br />
<div id="content"><strong>Radio Stats</strong></div>
<div id="content" style="border: dotted 1px #999999; width: 50%; padding: 4px;">
<?php
$query = mysql_query("SELECT * FROM config");
while($rows = mysql_fetch_array($query)) {

echo("http://www.".$rows[sitename]."/frontend/radio_stats.php");

}

?></div>
<br />
<div id="content"><strong>Radio Timetable</strong></div>
<div id="content" style="border: dotted 1px #999999; width: 50%; padding: 4px;">
<?php
$query = mysql_query("SELECT * FROM config");
while($rows = mysql_fetch_array($query)) {

echo("http://www.".$rows[sitename]."/frontend/timetable/index.php");

}

?></div>
</body>
</html>

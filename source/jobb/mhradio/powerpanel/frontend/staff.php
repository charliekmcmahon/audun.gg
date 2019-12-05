<?php
include("../includes/config.php");
?>
<html>
<head>
<title>Staff List</title>
<link href="../css/inside.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body { margin: 0.75%; }
-->
</style>

</head>
<body>
		<div id="content_title">
				DJ List </div>
		
		<div id="content">This is a list of <? echo("". $site["sitename"] .""); ?>'s DJ's.
		  <br>
		  <br><br />
		  <div id="content_title">Trialist DJs</div>
		  
<?php
// Show trialist DJs
$query = mysql_query("SELECT * FROM users WHERE level = 'trialist'");
while($rows = mysql_fetch_array($query)) {
echo("<span id=\"forum2\"><a href=\"djprofile.php?name=". $rows["username"] ."\" target=\"_self\">". $rows[username] ."</a></span>, ");
}

?>
<br /><br />
		  <div id="content_title">Regular DJs</div>
		  
<?php

// Show regular djs
$query2 = mysql_query("SELECT * FROM users WHERE level = 'regular'");
while($rows2 = mysql_fetch_array($query2)) {
echo("<span id=\"forum2\"><a href=\"djprofile.php?name=". $rows2["username"] ."\" target=\"_self\">DJ ". $rows2[username] ."</a></span>, ");
}
?>
<br /><br />
		  <div id="content_title">Senior DJs</div>
		  
<?php
// Show senior DJs
$query3 = mysql_query("SELECT * FROM users WHERE level = 'senior'");
while($rows3 = mysql_fetch_array($query3)) {
echo("<span id=\"forum2\"><a href=\"djprofile.php?name=". $rows3["username"] ."\" target=\"_self\">DJ ". $rows3[username] ."</a></span>, ");
}
?>
<br /><br />
		  <div id="content_title">Administrators</div>
		  
<?php
// Finally display admins
$query4 = mysql_query("SELECT * FROM users WHERE level = 'admin'");
while($rows4 = mysql_fetch_array($query4)) {
echo("<span id=\"forum2\"><a href=\"djprofile.php?name=". $rows4["username"] ."\" target=\"_self\">DJ ". $rows4[username] ."</a></span>, ");
}
?>
<br /><br />
		  <div id="content_title">Disabled / Banned accounts</div>
<?php
// Onoes, we gotta display Banned DJs Dan says ;D
$query5 = mysql_query("SELECT * FROM users WHERE level = 'banned'");
while($rows5 = mysql_fetch_array($query5)) {
echo("<span id=\"forum2\"><a href=\"djprofile.php?name=". $rows5["username"] ."\" target=\"_self\">DJ ". $rows5[username] ."</a></span>, ");
}
?>
</div>
</body>
</html>
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
<div id="content_title">DJ Says </div>
		
		<div id="content" style="margin-top: 12px;">
		  <strong>DJ Says:</strong>
<?php

$query = mysql_query("SELECT * FROM djsays");
while($rows = mysql_fetch_array($query)) {
$djsays = $rows[message];
}
$query2 = mysql_query("SELECT * FROM djsays");
while($rows2 = mysql_fetch_array($query2)) {
$by = $rows2[by];
}
echo("DJ ". $by ." - ". $djsays ."");

?>
</div>
</body>
</html>
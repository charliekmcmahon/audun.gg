<?php

include("includes/config.php");

$query = mysql_query("SELECT * FROM radioinfo");
$rows = mysql_fetch_array($query);

$scdef = $site["sitename"];
$scip = $rows["ip"];
$scport = $rows["port"]; 
$scpass = $rows["pass"];

?>
<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);

?>
<link href="css/inside.css" rel="stylesheet" type="text/css" />
        <div id="content_title">Radio Connection Information</div>
		
		<div id="content">On this page you are able to view <? echo("". $site[sitename] .""); ?>'s radio connection information<br>
		  <br>
<?php

$query = mysql_query("SELECT * FROM radioinfo");
$rows = mysql_fetch_array($query);
echo("<strong>Radio IP / URL:</strong><br />". $rows[ip] ."<br /><br /><strong>Radio Port:</strong><br />". $rows[port] ."<br /><br /><strong>Radio Password:</strong><br />". $rows[pass] ."");

?>
</div>
<?php
} else {
header('location: index.php');
die();
}
?>
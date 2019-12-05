<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);

?>
<link href="css/inside.css" rel="stylesheet" type="text/css" />
        <div id="content_title">Banned Songs</div>
		
		<div id="content">On this page you are able to view the songs which are banned from being played on-air under any circumstance.<br>
		  <br>
<?php

$query = mysql_query("SELECT * FROM bansongs");
while($rows = mysql_fetch_array($query)) {
echo("<strong>Song Name:</strong> ". $rows[name] ."<br /><br /><strong>Reason For Song Being Banned:</strong><br />". $rows[reason] ."<br /><br /><strong>This Song Was Banned By:</strong> ". $rows[by] ."<br /><hr /><br />");
}
?>
</div>
<?php
} else {
header('location: index.php');
die();
}
?>
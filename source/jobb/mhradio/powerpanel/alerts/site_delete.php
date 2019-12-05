<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);

// Remove all alerts
$query = mysql_query("TRUNCATE TABLE alerts") or die('Could not delete data! Fatal error: '.mysql_error());
?>
<link href="../css/inside.css" rel="stylesheet" type="text/css" />
<div id="content_title">
          <p>Alert the website </p>
</div>
		
		<div id="content">On this page you are able to send an alert to all the visitors on the website currently <br />
		  <br />

            <strong> Your alert has been sent!</strong> Thank you </div>
        <?php
} else {
header('location: index.php');
die();
}
?>
<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level'] == "admin") {

checkaccount($_SESSION[username]);

?>
<link href="css/inside.css" rel="stylesheet" type="text/css" />
<div id="content_title">
          <p>Annoucement Manager </p>
</div>
		
		<div id="content">
		  <p>On this page you are able to navigate to the pages to do with the announcement system. <br />  
		    <div id="link">
		  <a href="?page=admin/pannounce">Post an announcement</a><br />
          <a href="?page=admin/eannouce">Edit an announcement</a><br />
          <a href="?page=admin/dannounce">Delete an announcement</a><br></div>
	        <br />
          </p>
</div>
        <?php
} else {
header('location: index.php');
die();
}
?>
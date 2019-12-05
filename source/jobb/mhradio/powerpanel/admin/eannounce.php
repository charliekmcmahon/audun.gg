<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level'] == "admin") {

checkaccount($_SESSION[username]);

?>
<link href="../css/inside.css" rel="stylesheet" type="text/css" />
<div id="content_title">
          <p>Edit An Announcement </p>
</div>
		
		<div id="content">On this page you are able to edit an announcement. <br />
<?php
if(isset($_POST['id']) && isset($_POST['title']) && isset($_POST['short']) && isset($_POST['view']) && !empty($_POST['view']) && !empty($_POST['title']) && !empty($_POST['short'])) {

$id = $_POST['id'];
$title = $_POST['title'];
$short = $_POST['short'];
$large = $_POST['large'];
$view = $_POST['view'];

$title2 = clean($title);
$short2 = clean($short);
$large2 = clean($large);
$view = clean($view);
$title2 = censor($title2);
$short2 = censor($short2);
$large2 = censor($large2);
$query = mysql_query("UPDATE announcements set title = '$title2', short = '$short2', view = '$view' WHERE id = '$id'") or die('Could not update data, Error: '. mysql_error());


echo("<br />The announcement was <strong>updated!</strong>");

} else {
?><br />
		  <br />
		  <strong>Error:</strong> You must fill in all fields!
		  <? } ?>
</div>
        <?php
} else {
header('location: index.php');
die();
}
?>
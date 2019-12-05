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
if(isset($_POST['id'])) {

$id = $_POST['id'];

$query = mysql_query("SELECT * FROM announcements");
$rows = mysql_fetch_array($query);

echo("<br /><form action='?page=admin/eannounce' method='POST'><input type='hidden' name='id' value='". $rows[id] ."' /><strong>Announcement Title:</strong><br /><input type='text' name='title' value='". $rows[title] ."' /><br /><br /><strong>Viewable By:</strong><br /><select name=\"view\">
	<option value=\"everyone\""); if($rows[view] == "everyone") { echo("SELECTED"); } echo(">Everyone</option>
	<option value=\"trialist\""); if($rows[view] == "trialist") { echo("SELECTED"); } echo(">Trialist DJs</option>
	<option value=\"regular\""); if($rows[view] == "regular") { echo("SELECTED"); } echo(">Regular DJs</option>
	<option value=\"senior\""); if($rows[view] == "senior") { echo("SELECTED"); } echo(">Senior DJs</option>
	<option value=\"admin\""); if($rows[view] == "admin") { echo("SELECTED"); } echo(">Administrators</option>
	</select>
<br /><br /><strong>Announcement:</strong><br /><textarea cols='50' rows='4' name='short'>". $rows[short] ."</textarea><br /><br /><input type='submit' value='Update Announcement' /></form>");

}

else {
?><br />
		  <br />

<?php
// We generate a list of users
$query = mysql_query("SELECT * FROM announcements");
while($rows = mysql_fetch_array($query)) {
echo("<form action='' method='POST'><input type='hidden' name='id' value='". $rows[id] ."' /><strong>Announcement Title:</strong> ". $rows[title] ."<br /><strong>Posted By:</strong> ". $rows[by] ."<br /><br /><input type='submit' value='Edit' /></form><br /><hr color='lightgrey' /><br />");
}
?>

<? } ?></div>
        <?php
} else {
header('location: index.php');
die();
}
?>
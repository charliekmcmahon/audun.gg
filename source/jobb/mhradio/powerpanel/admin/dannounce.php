<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level'] == "admin") {

checkaccount($_SESSION[username]);

?>
<link href="../css/inside.css" rel="stylesheet" type="text/css" />
<div id="content_title">
          <p>Delete An Announcement</p>
</div>
		
		<div id="content">On this page you are able to delete an announcement.<br />
<?php

if(isset($_POST['id'])) {

$id = $_POST['id'];

$insert = mysql_query("DELETE FROM announcements WHERE id = '$id'") or die('Could not delete data, Error: '. mysql_error());

echo("<br />The announcement you chose has been <strong>deleted</strong>!");

}

else {
?><br />
		  <br />

<?php
$query = mysql_query("SELECT * FROM announcements");
while($rows = mysql_fetch_array($query)) {
echo("<form action='' method='POST'><input type='hidden' name='id' value='". $rows[id] ."' /><strong>Announcement Title:</strong> ". $rows[title] ."<br /><strong>Posted By:</strong> ". $rows[by] ."<br /><br /><input type='submit' value='Delete' /></form><br /><hr color='lightgrey' /><br />");
}
?>

<? } ?></div>
        <?php
} else {
header('location: index.php');
die();
}
?>
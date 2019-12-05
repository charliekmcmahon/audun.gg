<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level'] == "admin") {

checkaccount($_SESSION[username]);

?>
<link href="../css/inside.css" rel="stylesheet" type="text/css" />
<div id="content_title">
          <p>Delete An Account (Remove a DJ) </p>
</div>
		
		<div id="content">On this page you are able to delete a DJs account to prevent them from accessing the panel. <br />
<?php

if(isset($_POST['id'])) {

$id = $_POST['id'];

if($id == "1") {
echo("<br /><strong>Sorry!</strong> You cannot delete the root administrator's account");
}
else {

$insert = mysql_query("DELETE FROM users WHERE id = '$id'") or die('Could not delete data, Error: '. mysql_error());

echo("<br />The user you specified has been <strong>deleted</strong>!");

}
}


else {
?><br />
		  <br />

<?php
// We generate a list of users
$query = mysql_query("SELECT * FROM users ORDER BY id");
while($rows = mysql_fetch_array($query)) {
if($rows[level] == "admin") {
$level = "Administrator";
}
elseif($rows[level] == "trialist") {
$level = "Trialist DJ";
}
elseif($rows[level] == "regular") {
$level = "Regular DJ";
}
elseif($rows[level] == "senior") {
$level = "Senior DJ";
}
echo("<form action='' method='POST'><input type='hidden' name='id' value='". $rows[id] ."' /><strong>Name Of User:</strong><br />". $rows[username] ."<br /><strong>Access Level:</strong><br />". $level ."<br /><br /><input type='submit' value='Remove Account' /></form><br /><hr color='lightgrey' /><br />");
}
?>

<? } ?></div>
        <?php
} else {
header('location: index.php');
die();
}
?>
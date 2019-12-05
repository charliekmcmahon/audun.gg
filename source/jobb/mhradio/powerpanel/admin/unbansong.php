<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level'] == "admin") {
?>
<link href="../css/inside.css" rel="stylesheet" type="text/css" />
<div id="content_title">
          <p>Unban A Song </p>
</div>
		
		<div id="content">On this page you are able to unban a song if you believe it was banned for the wrong reasons, etc. <br />
<?php

if(isset($_POST['id'])) {

$id = $_POST['id'];

$insert = mysql_query("DELETE FROM bansongs WHERE id = '$id'") or die('Could not delete data, Error: '. mysql_error());

echo("<br />The song you chose has been <strong>unbanned</strong>!");

}

else {
?><br />
		  <br />

<?php
// We generate a list of users
$query = mysql_query("SELECT * FROM bansongs");
while($rows = mysql_fetch_array($query)) {
echo("<form action='' method='POST'><input type='hidden' name='id' value='". $rows[id] ."' /><strong>Song Name:</strong><br />". $rows[name] ."<br /><strong>Reason For Song Being Banned:</strong><br />". $rows[reason] ."<br /><br /><input type='submit' value='Unban' /></form><br /><hr color='lightgrey' /><br />");
}
?>

<? } ?></div>
        <?php
} else {
header('location: index.php');
die();
}
?>
<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level'] == "admin") {

checkaccount($_SESSION[username]);

?>
<link href="../css/inside.css" rel="stylesheet" type="text/css" />
<div id="content_title">
          <p>Ban / Disable An Account </p>
</div>
		
		<div id="content">On this page you are able to ban / disable a DJ from accessing the panel. <br />
<?php

if(isset($_POST['id'])) {

$id = $_POST['id'];

$insert = mysql_query("UPDATE users SET level = 'banned' WHERE id = '$id'") or die('Could not modify data, Error: '. mysql_error());

echo("The DJS account you specified has been <strong>banned / disabled</strong>!");

}

else {
?><br />
		  <br />

<?php
// We generate a list of songs which are banned [:
$query = mysql_query("SELECT * FROM users WHERE level = 'trialist' OR level = 'regular' OR level = 'senior'");
while($rows = mysql_fetch_array($query)) {
echo("<form action='' method='POST'><input type='hidden' name='id' value='". $rows[id] ."' /><strong>Username:</strong><br />". $rows[username] ."<br /<br /><input type='submit' value='Ban / Disable Account' /></form><br /><hr color='lightgrey' /><br />");
}
?>

<? } ?></div>
        <?php
} else {
header('location: index.php');
die();
}
?>
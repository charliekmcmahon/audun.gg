<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level'] == "admin") {

checkaccount($_SESSION[username]);

?>
<link href="../css/inside.css" rel="stylesheet" type="text/css" />
<div id="content_title">
          <p>Site Spotlight</p>
</div>
		
		<div id="content">On this page you are able to change the featured Habbo image on your site's frontend. <br />
<?php

if(isset($_POST['habbo']) && !empty($_POST['habbo'])) {

$habbo = $_POST['habbo'];
$habbo = clean($habbo);

$insert = mysql_query("UPDATE spotlight SET habbo = '$habbo'") or die('Could not modify data, Error: '. mysql_error());

echo("<br />The spotlight has been <strong>updated</strong>!");

} else {
?><br />
		  <br />

<?php
// We generate a list of users
$query = mysql_query("SELECT * FROM spotlight");
$rows = mysql_fetch_array($query);
echo("<form action='' method='POST'><strong>Habbo Name:</strong><br /><input type='input' name='habbo' value='". $rows[habbo] ."' /><br /><br /><input type='submit' value='Update Spotlight' /></form>");
?>

<? } ?></div>
        <?php
} else {
header('location: index.php');
die();
}
?>
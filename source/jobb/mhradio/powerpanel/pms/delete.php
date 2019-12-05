<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);

?>
<link href="../css/inside.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
td, a, a:link, a:active, input, select, textarea
{
	font-size: 12px;
	font-family: Trebuchet MS;
	color: #6d6d6d;
	text-decoration: none;
}
-->
</style>
		<div id="content_title">Delete A PM -</div>
		
		<div id="content">
		<br />
<?php

## DELETE A PERSONAL MESSAGE ##

if(isset($_POST['id'])) {

$id = $_POST['id'];

$delete = mysql_query("DELETE FROM pms WHERE id = '$id'") or die('Could not delete data, Error: '. mysql_error());

echo("The PM has been <strong>deleted</strong>! Thanks!<br /<br /><span id='link'><a href='?page=pms/index'>Go back</a></span>");

} elseif(isset($_POST['id'])) {

echo("<strong>Error:</strong> There was no ID for us to delete!<br /<br /><span id='link'><a href='?page=pms/index'>Go back</a></span>");	

}
?>
		</div>
		<?
} else {
header('location: index.php');
die();
}
?>
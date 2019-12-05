<?php
session_start();
include("includes/config.php");

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);

$id = $_GET['id'];

$query = mysql_query("DELETE FROM requests WHERE id = '$id'") or die('Could not delete request: '.mysql_error());

echo("<br /><center><strong>Request deleted!</strong> Please reload this page</center>");

die();
}
?>
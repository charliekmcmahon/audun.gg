<?php
session_start();
include("../includes/config.php");
include("../includes/functions.php");

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);

//

$id = $_GET['id'];

if($id == "") {
die();
}

$check = mysql_query("SELECT * FROM shoutbox WHERE id = '$id'") or die();
$info = mysql_fetch_array($check);

if($info["username"] == $_SESSION['username'] || $_SESSION['level'] == "admin") {

$delete = mysql_query("DELETE FROM shoutbox WHERE id = '$id'") or die('Could not delete data! '.mysql_error());

}

//
}
die();
?>
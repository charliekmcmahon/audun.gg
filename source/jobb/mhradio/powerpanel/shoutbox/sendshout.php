<?php
session_start();
include("../includes/config.php");
include("../includes/functions.php");

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);

//

$message = $_GET['message'];
$message = clean($message);
$message = censor($message);
$message = nl2br($message);
$ip = $_SERVER['REMOTE_ADDR'];

if($message == "") {
die();
}

if($message == "/prune" && $_SESSION['level'] == "admin") {
## PRUNE
$del = mysql_query("TRUNCATE TABLE shoutbox");
$insert = mysql_query("INSERT INTO shoutbox (`username`, `message`, `ip`) VALUES ('$_SESSION[username]', 'Shoutbox Pruned!', '$ip')") or die('Could not insert data! '.mysql_error());
## /PRUNE
}
else {

$insert = mysql_query("INSERT INTO shoutbox (`username`, `message`, `ip`) VALUES ('$_SESSION[username]', '$message', '$ip')") or die('Could not insert data! '.mysql_error());
}
//
}
die();
?>
<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);

?>

<link href="css/inside.css" rel="stylesheet" type="text/css" />

		<div id="content_title">
				<? echo("". $site[title] .""); ?>
		</div>
		
		<div id="content">
				<? echo("". $hometext .""); ?>
				<br /><br />
				<strong><? echo("". $site[owners] .""); ?></strong><br />
				<i><strong>POWER</strong>panel creator</i>
		</div>
<?
} else {
header('location: index.php');
die();
}
?>
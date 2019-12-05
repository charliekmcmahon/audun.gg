<?php
if(!defined("kristall"))
{
 	session_start();
	include("functions.php");
	loginerror();
	exit;
}
else
{
	login();
}
$fetch = mysql_fetch_array(mysql_query("SELECT `welcome` FROM `settings`"));
echo("<span class=\"title\">Welcome</span><br />{$fetch["welcome"]}");
?>
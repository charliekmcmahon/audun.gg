<?php
$hostname = ("localhost");
$database = ("kristall");
$username = ("default");
$password = ("lol");
if(preg_match("/installer.php/i", $_SERVER["REQUEST_URI"]))
{
	
}
else 
{
@mysql_connect($hostname, $username, $password)
or exit("MySQL Connection Error");
@mysql_selectdb($database)
or exit("MySQL Database Selection Error, please check your details!");
}
?>
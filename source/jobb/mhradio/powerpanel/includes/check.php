<?php
include("config.php");
if($_GET['username'] && !empty($_GET['username'])) {

$username = $_GET['username'];

$checkz = mysql_num_rows(mysql_query("SELECT * FROM users WHERE username = '$username'"));

if($checkz == "0") {
echo("<div style='margin-top: 4px;'><img src='images/invalid.gif' alt='Invalid Username!' /></div>");
}
elseif($checkz == "1") {
echo("<div style='margin-top: 4px;'><img src='images/valid.gif' alt='Valid Username!' /></div>");
}


}

?>
<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);

?>
<link href="css/inside.css" rel="stylesheet" type="text/css" />

		<div id="content_title">
				DJ Emails </div>
		
		<div id="content">This is a list of your sites current DJ's emails. <br><br />
<?php
$query5 = mysql_query("SELECT * FROM users");
while($rows5 = mysql_fetch_array($query5)) {

if($rows5[level] == "admin") {
$level = "Administrator";
}
elseif($rows5[level] == "regular") {
$level = "Regular DJ";
}
elseif($rows[level] == "trialist") {
$level = "Trialist DJ";
}
elseif($rows[level] == "senior") {
$level = "Senior DJ";
}

echo("- <strong>". $rows5[username] ."</strong> (". $level .") - <strong>");

if($rows5[email] == "") {
echo("(No email set)</strong><br />");
}
else {
echo("". $rows5[email] ."</strong><br />");
}}
?>
</div>
<?php
} else {
header('location: index.php');
die();
}
?>
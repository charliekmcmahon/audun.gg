<html>
<head>
<title>DJ Profile</title>
<link href="css/inside.css" rel="stylesheet" type="text/css" />
</head>
<body>
		<div id="content_title">
				DJ Profile </div>
		
		<div id="content">
<?php
if(isset($_GET['name']) && !empty($_GET['name'])) {

$name = $_GET['name'];

$check = mysql_query("SELECT * FROM users WHERE username = '$name'");

$num = mysql_num_rows($check);

if($num == "0") {
echo("<br /><strong>Sorry!</strong> This DJ does not exist!");
}
else {

while($account = mysql_fetch_array($check)) {
?>
Welcome to the DJ Profiles page! This is <strong>DJ <? echo("". $account["username"] .""); ?>'s</strong> profile<br>
		  <br>
		  <table style="font-size: 12px;" width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="23%" valign="top"><strong>DJ Name:</strong><br />
DJ <? echo("". $account["username"] .""); ?> <br />
<br />
<strong>Habbo Name: </strong><br />
<?php

$habbo = $account["habbo"];

if($habbo == "") {
echo("N/A");
}
else {
echo("". $habbo ."");
}
?><br />
<br />
<strong>Favourite Habbo: </strong><br />
<?php

$favhab = $account["favhab"];

if($favhab == "") {
echo("N/A");
}
else {
echo("". $favhab ."");
}
?><br />
<br />
<strong>DJ Avatar:</strong><br />
<img src="<?php
$avatar = $account["frontend/avatar"];

if($avatar == "") {
echo("images/no_ava.gif");
}
else {
echo("". $avatar ."");
}
?>" alt="<? echo("". $account["username"] .""); ?>'s avatar" /> </td>
            <td width="77%" valign="top"><strong>DJ <? echo("". $account["username"] .""); ?> currently has: </strong><br />
<?php

$requests = mysql_num_rows(mysql_query("SELECT * FROM requests WHERE dj = '$account[username]'"));

echo("". $requests ."");

?> requests</td>
          </tr>
        </table>
		<br />
		<?php
}
}
}
else {
echo("<br /><strong>Error!</strong> No DJ was specified");
}
?>
</div>
</body>
</html>
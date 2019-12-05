<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);

?>
<link href="css/inside.css" rel="stylesheet" type="text/css" />
<div id="content_title">Update DJ Says </div>
		
		<div id="content">On this page you are able to review the current DJ Says and update it.<br>
		  <br>
		  <strong>Current DJ Says:</strong>
<?php

$query = mysql_query("SELECT * FROM djsays");
while($rows = mysql_fetch_array($query)) {
$djsays = $rows[message];
}

echo("$djsays");

?>
<br>
<strong>DJ Says Last Updated By: </strong>
<?php

$query2 = mysql_query("SELECT * FROM djsays");
while($rows2 = mysql_fetch_array($query2)) {
$by = $rows2[by];
}

$info = mysql_query("SELECT * FROM users WHERE username = '$by'");
while($info2 = mysql_fetch_array($info)) {
$level = $info2[level];
}

if($level == "admin") {
$level = "Administrator";
}
elseif($level == "trialist") {
$level = "Trialist DJ";
}
elseif($level == "regular") {
$level = "Regular DJ";
}
elseif($level == "senior") {
$level = "Senior DJ";
}
else {
$level = "Could not detect user level! Fatal error";
}

echo("". $by ." - <strong>". $level ."</strong>");

?>
<br>
<br><?php

if(isset($_POST['message']) && !empty($_POST['message'])) {

$message = $_POST['message'];
$message = clean($message);
$message = censor($message);

$username = $_SESSION['username'];

$query = mysql_query("UPDATE djsays SET `message` = '$message', `by` = '$_SESSION[username]'") or die('Could not insert data, Error: '.mysql_error());

echo("The DJ Says has been <strong>Updated!</strong><br /><br /><div id='link'><a href='?page=djsays'>Go back</a></div>");
} elseif(isset($_POST['message']) && empty($_POST['message'])) {
echo("<strong>Error:</strong> A field was left empty!<br /><br /><div id='link'><a href='?page=djsays'>Go back</a></div>");
} else { ?>
Click <strong><a onClick="toggle('djsays');" style="cursor: pointer">here</a></strong> to update the DJ Says
<br>
<br>
<div id="djsays" style="display: none">
  <form method="post" action="">
    <label><strong>Message:</strong><br> 
    <input name="message" type="text" id="message">
      </label>
    <br>
    <br>
    <label>
    <input type="submit" name="Submit" value="Update">
    </label>
  </form><? } ?>
  </div>
</div>
<?php
} else {
header('location: index.php');
die();
}
?>
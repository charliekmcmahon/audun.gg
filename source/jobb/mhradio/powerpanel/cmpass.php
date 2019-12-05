<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);

?>
<link href="css/inside.css" rel="stylesheet" type="text/css" />
<div id="content_title">
          <p>Change your password</p>
</div>
		
		<div id="content">On this page you are able to change your current password to a new one.<br />
<?php

if(isset($_POST['password']) && isset($_POST['current']) && !empty($_POST['password']) && !empty($_POST['current'])) {

$password = $_POST['password'];
$current = $_POST['current'];
$password = encrypt($password);
$current = encrypt($current);

$curr = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE username = '$_SESSION[username]'"));

if($curr[password] == $current) {

$update = mysql_query("UPDATE users SET password = '$password' WHERE username = '$_SESSION[username]'") or die('Could not update password, Error: '. mysql_error());

session_destroy();

echo("<br /><strong>Thank You!</strong> Your password has been <strong>updated!</strong>");
} else {
echo("<br /><strong>Error:</strong> The current password which you entered is incorrect!</strong><br /><br /><div id='link'><a href='?page=cmpass'>Go back</a></div>");
}

} elseif(isset($_POST['password']) && isset($_POST['current']) && empty($_POST['password']) && empty($_POST['current'])) {
echo("<br /><strong>Error:</strong> You must fill in all fields!</strong><br /><br /><div id='link'><a href='?page=cmpass'>Go back</a></div>");
} else {
?><br />Click <strong><a onClick="toggle('form');" style="cursor: pointer;">here</a></strong> to display the form.
		  <br /><br />
<div id="form" style="display: none;"><form action="" method="POST"><strong>Current Password:</strong><br /><input type="password" name="current"  /><br /><br />
<strong>New Password:</strong><br /><input type="password" name="password" /><br /><br /><input type="submit" value="Update My Password!" /></form><br /><br /><strong>Note:</strong> You will be logged out after changing you password for security reasons!
</div>

<? } ?></div>
        <?php
} else {
header('location: index.php');
die();
}
?>
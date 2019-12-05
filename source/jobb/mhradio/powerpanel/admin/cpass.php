<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level'] == "admin") {

checkaccount($_SESSION[username]);

?>
<link href="../css/inside.css" rel="stylesheet" type="text/css" />
<div id="content_title">
          <p>Change a user's password </p>
</div>
		
		<div id="content">On this page you are able to change an existing user's password to a new password. (Exc. Admins)<br />
<?php

if(isset($_POST['id'])) {

$id = $_POST['id'];

$userdata = mysql_query("SELECT * FROM users WHERE id = '$id'");
while($rows = mysql_fetch_array($userdata)) {
$username = $rows[username];
}

echo("<br /><form action='' method='POST'><input type='hidden' name='username' value='". $username ."' /><strong>Username:</strong><br />". $username ."<br /><br /><strong>Password:</strong><br /><input type='input' name='password' /><br /><br /><input type='submit' value='Update Password!' /></form>");

}

elseif(isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {

$username = $_POST['username'];
$password = $_POST['password'];
$password = encrypt($password);

// We betsa check this user aint an admin [:
$query = mysql_query("SELECT * FROM users WHERE username = '$username' AND level = 'trialist' OR level = 'regular' OR level = 'senior'");
$rows = mysql_fetch_array($query);

// We have gotten their real data, so now if the user is an admin we dont get the correct information ;)

$query = mysql_query("UPDATE users SET password = '$password' WHERE username = '$rows[username]'") or die('Could not update data, Error: '. mysql_error());

echo("<br /><strong>". $username ."'s</strong> password was <strong>successfully updated!</strong>");

} else {
?><br />
		  <br />

<?php
$query = mysql_query("SELECT * FROM users WHERE level = 'trialist' OR level = 'regular' OR level = 'senior' OR level = 'banned'");
while($rows = mysql_fetch_array($query)) {
echo("<form action='' method='POST'><input type='hidden' name='id' value='". $rows[id] ."' /><strong>Username:</strong> ". $rows[username] ."<br /<br /><input type='submit' style='height: 20px; width: 120px; font-size: 10px; font-family: Verdana' value='Modify This Account' /></form><br /><hr color='lightgrey' /><br />");
}
?>

<? } ?></div>
        <?php
} else {
header('location: index.php');
die();
}
?>
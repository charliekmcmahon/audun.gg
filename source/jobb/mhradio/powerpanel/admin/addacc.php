<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level'] == "admin") {

checkaccount($_SESSION[username]);

?>
<link href="../css/inside.css" rel="stylesheet" type="text/css" />
<div id="content_title">
          <p>Create An Account </p>
</div>
		
		<div id="content">On this page you are able to add an account to be able to access the panel. <br>
		  <br />
<?php
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['level'])) {

$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

$username = clean($username);
$password = encrypt($password);
$level = clean($level);

// Check if username already exists, rofl.

$check = mysql_query("SELECT * FROM users WHERE username = '$username'");
$num = mysql_num_rows($check);

if($username == "") {
echo("<strong>Error:</strong> You must fill in the <strong>username</strong> field!");
} elseif($password == "") {
echo("<strong>Error:</strong> You must fill in the <strong>password</strong> field!");
} elseif($level == "") {
echo("<strong>Error:</strong> You must fill in the <strong>level</strong> field!");
} elseif($num >= "1") {
echo("<strong>Error:</strong> There is already an account with that username!");
} else {
$insert = mysql_query("INSERT INTO users (`username`, `password`, `level`) VALUES ('$username', '$password', '$level')") or die('Could not insert data, Error: '. mysql_error());

echo("The account was <strong>created successfully!</strong>");

}

} else {
?>Click <strong><a onClick="toggle('form');" style="cursor: pointer">here</a></strong> to display the form.
		  <br />
		  <br />
<div id="form" style="display: none">
  <form method="post" action="">
    <strong>Username</strong><br />
    <label>
    <input name="username" type="text" id="username" />
    </label>
    <br />
    <br />
    <strong>Password:</strong><br />
    <label>
    <input name="password" type="password" id="password" />
    </label>
    <br />
    <br />
    <strong>Access Level:</strong><br />
    <label>
    <select name="level" id="level">
      <option value="trialist">Trialist DJ</option>
      <option value="regular">Regular DJ</option>
      <option value="senior">Senior DJ</option>
      <option value="admin">Administrator</option>
    </select>
    </label>
    <br />
    <br />
    <label>
    <input type="submit" name="Submit" value="Create Account" />
    </label>
  </form>
  </div>
<? } ?></div>
        <?php
} else {
header('location: index.php');
die();
}
?>
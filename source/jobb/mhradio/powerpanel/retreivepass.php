<?php
session_start();
include("includes/config.php");
include("includes/functions.php");
if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><? echo("". $site[sitename] .""); ?> Radio Panel</title>
<link href="css/index.css" rel="alternate stylesheet" type="text/css" />
<link href="css/inside.css" rel="stylesheet" type="text/css" />
<link href="css/inside_oli.css" rel="alternate stylesheet" type="text/css" title="pro" />
<script language="javascript" src="includes/ajax.js"></script>
</head>

<body>
<div id="top_fade">
		
					<div id="top_logo"></div>
		
</div>
		
		<div id="content_title" style="margin-left: 20px;">
		Forgot your password? </div>
		
<div id="content" style="margin-left: 20px;">
<?php
if($_GET['email'] == "true") {
?><br />
<form id="" name="" method="post" action="?emailget=true">
  <label>
  <strong>Username:
  <input name="email" type="hidden" id="email" value="true" />
  <br />
  </strong>
  <select name="user">
<?php
$rofl = mysql_query("SELECT * FROM users");
while($lol = mysql_fetch_array($rofl)) {
echo("<option value='". $lol[username] ."'>". $lol[username] ."</option>");
}
?>
  </select>
  </label>
  <br />
  <br />
  <label>
  <input type="submit" name="Submit" value="Retreive Password" />
  </label>
</form>
<?
}
elseif($_GET['pin'] == "true") {
// They are trying to get their password via their pin
?>
<form action="?pinget=true" method="post">
  <strong> 
  <input name="pin" type="hidden" id="pin" value="true" />
  Username:  </strong>
  <br />
<select name="user">
<?php
$rofl = mysql_query("SELECT * FROM users");
while($lol = mysql_fetch_array($rofl)) {
echo("<option value='". $lol[username] ."'>". $lol[username] ."</option>");
}
?>
  </select>

<br />
<br />
<strong>PIN Code:</strong><br />
          <select name="1" id="1">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
          </select>
          </label> 
		  <select name="2" id="2">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
          </select>
                    <select name="3" id="3">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                    </select>
                    <select name="4" id="4">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                    </select>
                    <br />
                    <br />
                    <label>
                    <input type="submit" name="Submit2" value="Retrieve Password" />
                    </label>
</form>

<?
}
elseif($_GET['pinget'] == "true" && isset($_POST['user']) && isset($_POST['1']) && isset($_POST['2']) && isset($_POST['3']) && isset($_POST['4']) && isset($_POST['pin'])) {

$a1 = $_POST['1'];
$a2 = $_POST['2'];
$a3 = $_POST['3'];
$a4 = $_POST['4'];
$a8 = $a1 + $a2 + $a3 + $a4;

// Add and encrypt

$a11 = encrypt($a1);
$a22 = encrypt($a2);
$a33 = encrypt($a3);
$a44 = encrypt($a4);
$pin = "". $a11 ."". $a22."". $a33 ."". $a44 ."";
$pin = encrypt($pin);

// We have their pass

$username = $_POST['user'];
$username = clean($username);

$query = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE username = '$username'"));

if($query['pin'] == "$pin") {
// They have entered the correct pin so we now create a session with the PIN number so we can check it again when they try to change their password.
$_SESSION['pintocheck'] = $pin;
echo("<br />The PIN you entered was <strong>correct!</strong><br /><br /><form action='' method='POST'><input type='hidden' name='usernametocheck' value='". $username ."' /><strong>New Password:</strong><br /><input type='input' name='password' /><br /><br /><input type='submit' value='Set Password!' /></form>");
} else {
echo("<br /><strong>Sorry!</strong> The PIN code you entered did not match the one in our database! :(<br /><br /><div id='link'><a href='retreivepass.php?pin=true'>Go back</a></div>");
}


}
elseif($_GET['pinget'] == "true" && isset($_POST['usernametocheck']) && isset($_POST['password'])) {

$username = $_POST['usernametocheck'];
$username = clean($username);

$password = $_POST['password'];
$password = encrypt($password);

$query = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE username = '$username'"));

if($query['pin'] == $_SESSION['pintocheck']) {

$update = mysql_query("UPDATE users SET password = '$password' WHERE username = '$username'") or die('Could not update password, Error: '.mysql_error());

session_destroy();

echo("<br />Your password has been <strong>Updated!</strong><br /><br /><div id='link'><a href='in.php'>Go back</a></div>");

}
else {
echo("<br />An error occured!<div id='link'><a href='retrievepass.php'>Go back</a></div>");
}
}
elseif(isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['email'])) {
// Email form has been submitted

$rand = rand(0, 234234);
$rand = encrypt($rand);
// We now have to encrypt the string anymore so that the person cannot figure out the encryption string some how :S (Tom told me to do this, rofl)
$rand = base64_encode($rand);
$rand = md5($rand);
$user = clean($_POST['user']);

$insert = mysql_query("INSERT into forgotpw (string, username) VALUES ('$rand', '$user')") or die('Error: '.mysql_error());
$user = clean($_POST['user']);

$email = mysql_fetch_array(mysql_query("SELECT `email` FROM users WHERE username = '$user'")) or die('Error: '.mysql_error());

// We insert the password session into the forgotten pass db

$rand = rand(0, 234234);
$rand = encrypt($rand);
// We now have to encrypt the string anymore so that the person cannot figure out the encryption string some how :S (Tom told me to do this, rofl)
$rand = base64_encode($rand);
$rand = md5($rand);

// We send them the email

$to = $email['email'];
$subject = "". $site[sitename] ." DJ Panel Message";
$message .= "Hey!\n\nA password request has been attempted at the ". $site[sitename]." DJ Panel for your account";
$message .= "\n\nTo approve of this password request please click <a href=\"http://". $site[sitename] ."/retreivepass.php?session_code=". $rand ."\" target=\"_blank\">here</a>";
$message .= "\n\nOnce you click the link a new page will open asking you to create a new password for your account so that you can login.";
$message .= "\n\nThank you,\n". $site[sitename] ." Management";

mail($to, $subject, $message, "From: ". $site[sitename] ."DJPanel@PowerPanel.com") or die('Couldnt send email!');

echo("A password request has been sent to the email address on file!<br /><br /><div id='link'><a href='index.php'>Go back</a></div>");


}
elseif(isset($_POST['user']) && empty($_POST['user'])) {
echo("<br /><strong>Error:</strong> You must fill in all fields!<br /><br /><div id='link'><a href='retreivepass.php'>Go back</a></div>");
} elseif($_GET['session_code']) { 

$session_code = $_GET['session_code'];

$check = mysql_num_rows(mysql_query("SELECT * FROM forgotpw WHERE string = '$session_code'"));

if($check != "0") {
// They entered the correct session id (string)

$info = mysql_fetch_array(mysql_query("SELECT * FROM forgotpw WHERE string = '$session_code'"));

echo("<br /><strong>Congratulations!</strong> The session id that you specified exists in our database for the user: <strong>". $info[username] ."</strong><br /><br /><form action='?emailupdate=true' method='POST'><input type='hidden' name='session_id' value='". $session_code ."'><input type='hidden' name='email_session_accepted' /><strong>New Password:</strong><br /><input type='input' name='password' /><br /><br /><input type='submit' value='Set Password!' /></form>");



}
else {
// Invalid string
echo("<br /><strong>Sorry!</strong> The session id you specified was not in our database!<br /><br /><div id='link'><a href='retreivepass.php'>Go back</a></div>");
}



} elseif($_GET['emailupdate'] == "true" && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['session_id']) && !empty($_POST['session_id']) && isset($_POST['email_session_accepted'])) {

$session_id = $_POST['session_id'];

$password = $_POST['password'];
$password = encrypt($password);

$getinfo = mysql_fetch_array(mysql_query("SELECT * FROM forgotpw WHERE string = '$session_id'"));

$username = $getinfo['username'];

$query = mysql_query("UPDATE users SET password = '$password' WHERE username = '$username'") or die('Could not update data! Error: '.mysql_error());
$delete = mysql_query("DELETE * FROM forgotpw WHERE string = '$session_id'") or die();
echo("<br /><strong>Thanks!</strong> Your password has been updated!<br /><br /><div id='link'><a href='index.php'>Go back</a></div>");


} elseif($_GET['emailupdate'] == "true" && isset($_POST['username']) && empty($_POST['username']) && isset($_POST['session_id']) || empty($_POST['session_id']) && isset($_POST['email_session_accepted'])) {

echo("<br /><strong>Sorry!</strong> You either didn't enter a new password or the session id was not stored<br /><br /><div id='link'><a href='index.php'>Go back</a></div>");

} else {?>On this page you are able to reset your accounts password either by having an email sent to your email address in your profile or by using the PIN you assigned to your account when you became a DJ at <strong><? echo("". $site[sitename] .""); ?></strong><br />
    <br />
    <div id="link">
    <a href="?email=true">Click here to reset your password via email</a></div>
    <br />
<div id="link">
    <a href="?pin=true">Click here to reset you password using your PIN
    </a></div><br />
  <br />  
  <? } ?></div>
<?
}
else {
header('location: in.php?page=home');
}
?>
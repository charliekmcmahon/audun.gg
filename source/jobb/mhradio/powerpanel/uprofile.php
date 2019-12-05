<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);

?>
<link href="css/inside.css" rel="stylesheet" type="text/css" />
<div id="content_title">
          <p>Update your profile </p>
</div>
		
		<div id="content">On this page you are able to update your personal profile. <br />
<?php

if(isset($_POST['email']) && isset($_POST['habbo']) && isset($_POST['favhab']) && isset($_POST['avatar']) && !empty($_POST['email'])) {

$email = $_POST['email'];
$habbo = $_POST['habbo'];
$favhab = $_POST['favhab'];
$avatar = $_POST['avatar'];
$email = clean($email);
$habbo = clean($habbo);
$favhab = clean($favhab);
$avatar = clean($avatar);
$email = censor($email);
$habbo = censor($habbo);
$favhab = censor($favhab);
$avatar = censor($avatar);

if($avatar == "") {
$avatar = "images/no_ava.gif";
}
elseif($avatar == "Default Avatar") {
$avatar = "images/no_ava.gif";
}
###
$query = mysql_query("SELECT * FROM config");
while($rows = mysql_fetch_array($query)) {

$maxh = $rows[avah];
$maxw = $rows[avaw];

}
###
list($width, $height, $type, $attr) = @getimagesize($avatar);
 
 
 $mhm = explode("\"", $attr);
 $height = $mhm[1];
 $width = $mhm[3];

if($height == "0" || $width == "0" || $height == "" || $width == "") {
echo("<br /><strong>Sorry!</strong> You either have a too small image or have chosen an image with an invalid type");
}
elseif($height > $maxh || $width > $maxw) {
echo("<br /><strong>Sorry!</strong> You either have a too big image or have chosen an image with an invalid type");
}

else {


if(!check_email_address($email)) {
echo("<br /><strong>Error:</strong> The email you entered is <strong>not</strong> valid!<br /><br /><div id='link'><a href='?page=uprofile'>Go back</a></div>");
}

else {

$update = mysql_query("UPDATE users SET email = '$email', habbo = '$habbo', favhab = '$favhab', avatar = '$avatar'  WHERE username = '$_SESSION[username]'") or die('Could not update email, Error: '. mysql_error());

echo("<br /><strong>Thanks!</strong> Your profile has been updated!<br /><br /><div id='link'><a href='?page=uprofile'>Go back</a></div>");
}

}

} elseif(isset($_POST['email']) && empty($_POST['email'])) {
echo("<br /><strong>Error:</strong> You must fill in all fields!</strong><br /><br /><div id='link'><a href='?page=uprofile'>Go back</a></div>");
} else {
?><br />Click <strong><a onClick="toggle('form');" style="cursor: pointer;">here</a></strong> to display the form.
		  <br /><br />
<div id="form" style="display: none"><form action="" method="POST"><strong>Email:</strong><br /><input type="text" name="email" value="<?php $data = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE username = '$_SESSION[username]'")); echo("". $data[email] .""); ?>" />
    <br />
    <br />
<strong>Habbo Name:</strong><br />
    <label>
    <input name="habbo" type="text" id="habbo" value="<?php $data = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE username = '$_SESSION[username]'")); echo("". $data[habbo] .""); ?>" />
    </label> 
    <br />
    <br />
<strong>Favourite Habbo: </strong><br />
<label>
<input name="favhab" type="text" id="favhab" value="<?php $data = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE username = '$_SESSION[username]'")); echo("". $data[favhab] .""); ?>" />
</label>
<br />
<br />
<strong>DJ Avatar</strong><em> (optional)</em><strong> :</strong><br />
    <label>
    <input name="avatar" type="text" id="avatar" value="<?php $data = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE username = '$_SESSION[username]'")); if($data[avatar] == "images/no_ava.gif") {
	echo("Default Avatar");
	}
	else {
	echo("". $data[avatar] ."");
	} ?>" />
    </label> 
    <br />
    (<?php $data = mysql_fetch_array(mysql_query("SELECT * FROM config")); echo("". $data[avaw] .""); ?> (W) x <?php $data = mysql_fetch_array(mysql_query("SELECT * FROM config")); echo("". $data[avah] .""); ?> (H) max) <br />
    <br /><input type="submit" value="Update My Profile" /></form
></div>

<? } ?></div>
        <?php
} else {
header('location: index.php');
die();
}
?>
<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);

?>
<link href="../css/inside.css" rel="stylesheet" type="text/css" />
<div id="content_title">
          <p>Alert the website </p>
</div>
		
		<div id="content">On this page you are able to send an alert to all the visitors on the website currently <br />
<?php

if(isset($_POST['msg']) && !empty($_POST['msg'])) {

$msg = $_POST['msg'];
$msg = clean($msg);
$msg = censor($msg);


$update = mysql_query("INSERT INTO alerts (message, djname, type) VALUES ('$msg', '$_SESSION[username]', 'site')") or die('Could not send alert, Error: '. mysql_error());

echo("<meta http-equiv=\"refresh\" content=\"15;url=?page=alerts/site_delete\"><br /><strong>Thanks!</strong> The alert is being sent!<br /><br />Please do <strong><u>NOT</u></strong> leave this page or the alert will be sent in a loop. You will be automatically redirected in 10-15 seconds");


} elseif(isset($_POST['msg']) && empty($_POST['msg'])) {
echo("<br /><strong>Error:</strong> You must fill in all fields!</strong><br /><br /><div id='link'><a href='?page=alerts/site'>Go back</a></div>");
} else {
?><br />Click <strong><a onClick="toggle('form');" style="cursor: pointer;">here</a></strong> to display the form.
		  <br /><br />
<div id="form" style="display: none;"><form action="" method="POST"><strong>Alert Message:</strong><br /><input type="text" name="msg" /><br /><br /><input type="submit" value="Alert the site" /></form
></div>

<? } ?></div>
        <?php
} else {
header('location: index.php');
die();
}
?>
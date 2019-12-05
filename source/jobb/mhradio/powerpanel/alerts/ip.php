<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);

?>
<link href="../css/inside.css" rel="stylesheet" type="text/css" />
<div id="content_title">
          <p>Alert a single listener (IP) </p>
</div>
		
		<div id="content">On this page you are able to send an alert to an individual IP address<br />
<?php

if(isset($_POST['msg']) && isset($_POST['ip']) && !empty($_POST['ip']) && !empty($_POST['msg'])) {

$ip = $_POST['ip'];
$msg = $_POST['msg'];
$msg = clean($msg);
$ip = clean($ip);
$msg = censor($msg);


$update = mysql_query("INSERT INTO alerts (ip, message, djname, type) VALUES ('$ip', '$msg', '$_SESSION[username]', 'ip')") or die('Could not send alert, Error: '. mysql_error());

echo("<br /><strong>Thanks!</strong> The alert has been sent!");


} elseif(isset($_POST['msg']) && empty($_POST['msg'])) {
echo("<br /><strong>Error:</strong> You must fill in all fields!</strong><br /><br /><div id='link'><a href='?page=alerts/ip'>Go back</a></div>");
} else {
?><br />Click <strong><a onClick="toggle('form');" style="cursor: pointer;">here</a></strong> to display the form.
		  <br /><br />
<div id="form" style="display: none;">
<form action="" method="POST"><strong>Alert Message:</strong><br /><input type="text" name="msg" /><br /><br /><strong>Listeners IP:</strong><br /><input type="text" name="ip" /><br /><br /><input type="submit" value="Alert the listener" /></form
></div>

<? } ?></div>
        <?php
} else {
header('location: index.php');
die();
}
?>
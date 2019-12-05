<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level'] == "admin") {

checkaccount($_SESSION[username]);

?>
<link href="../css/inside.css" rel="stylesheet" type="text/css" />
<div id="content_title">
          <p>Radio Connection Information Administration </p>
</div>
		
		<div id="content">On this page you are able to change your site's radio connection information so that your DJs can get the right info. <br />
<?php

if(isset($_POST['ip']) && isset($_POST['port']) && isset($_POST['pass']) && !empty($_POST['ip']) && !empty($_POST['pass']) && !empty($_POST['port'])) {

$ip = $_POST['ip'];
$port = $_POST['port'];
$pass = $_POST['pass'];

$ip = clean($ip);
$port = clean($port);
$pass = clean($pass);

if (ereg('[a-z]', $port)) {
echo("<br /><strong>Error!</strong> You cannot use text in the port field");
}
else {

$insert = mysql_query("UPDATE radioinfo SET ip = '$ip', port = '$port', pass = '$pass'") or die('Could not modify data, Error: '. mysql_error());

echo("<br />Your radio connection information has been <strong>updated</strong>!");
}
} else {
?><br />
		  <br />

<?php
// We generate a list of users
$query = mysql_query("SELECT * FROM radioinfo");
$rows = mysql_fetch_array($query);
echo("<form action='' method='POST'><strong>Radio IP / URL:</strong><br /><input type='input' name='ip' value='". $rows[ip] ."' /><br /><br /><strong>Radio Port:</strong><br /><input type='input' name='port' value='". $rows[port] ."' /><br /><br /><strong>Connection Password:</strong><br /><input type='input' name='pass' value='". $rows[pass] ."' /><br /><br /><input type='submit' value='Update' /></form>");
?>

<? } ?></div>
        <?php
} else {
header('location: index.php');
die();
}
?>
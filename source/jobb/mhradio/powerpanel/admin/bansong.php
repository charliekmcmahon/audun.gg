<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level'] == "admin") {

checkaccount($_SESSION[username]);

?>
<link href="../css/inside.css" rel="stylesheet" type="text/css" />
<div id="content_title">
          <p>Ban A Song</p>
</div>
		
		<div id="content">On this page you are able to ban a song if it contains violent swearing, abusive language, etc. <br>
		  <br />
<?php

if(isset($_POST['name']) && isset($_POST['reason']) && !empty($_POST['name']) && !empty($_POST['reason'])) {

$name = $_POST['name'];
$reason = $_POST['reason'];

$name = clean($name);
$reason = clean($reason);
$reason = censor($reason);

$insert = mysql_query("INSERT INTO bansongs (`name`, `reason`, `by`) VALUES ('$name', '$reason', '$_SESSION[username]')") or die('Could not insert data, Error: '. mysql_error());

echo("The song you entered has been <strong>banned</strong>!");

} else { ?>Click <strong><a onClick="toggle('form');" style="cursor: pointer">here</a></strong> to display the form.
		  <br />
		  <br />
<div id="form" style="display: none">
  <form name="form1" method="post" action="">
    <strong>Song Name:</strong><br />
    <label>
    <input name="name" type="text" id="name" />
    </label>
    <br />
    <br />
    <strong>Reason For Banning Song:</strong><br />
    <label>
    <input name="reason" type="text" id="reason" />
    </label>
    <br />
    <br />
    <label>
    <input type="submit" name="Submit" value="Ban Song" />
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
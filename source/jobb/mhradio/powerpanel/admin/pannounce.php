<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level'] == "admin") {

checkaccount($_SESSION[username]);

?>
<link href="../css/inside.css" rel="stylesheet" type="text/css" />
<div id="content_title">
          <p>Post An Announcement </p>
</div>
		
		<div id="content">On this page you are able to post a public annoucement to all the users of the panel. <br>
		  <br />
<?php

if(isset($_POST['name']) && isset($_POST['short']) && isset($_POST['view']) && !empty($_POST['name']) && !empty($_POST['short'])) {

$name = $_POST['name'];
$short = $_POST['short'];
$large = $_POST['large'];
$view = $_POST['view'];

$name = clean($name);
$name = censor($name);
$short = clean($short);
$short = censor($short);
$large = clean($large);
$large = censor($large);
$short = nl2br($short);
$large = nl2br($large);
$view = clean($view);

$insert = mysql_query("INSERT INTO announcements (`title`, `short`, `by`, `view`) VALUES ('$name', '$short', '$_SESSION[username]', '$view')") or die('Could not insert data, Error: '. mysql_error());

echo("Your announcement has been <strong>posted</strong>!");

} else { ?>Click <strong><a onClick="toggle('form');" style="cursor: pointer">here</a></strong> to display the form.
		  <br />
		  <br />
<div id="form" style="display: none">
  <form method="post" action="">
    <strong>Announcement Name:</strong><br />
    <label>
    <input name="name" type="text" id="name" />
    </label>
    <br />
    <br />
	<strong>Viewable By:</strong>
	<label>
	<select name="view">
	<option value="everyone">Everyone</option>
	<option value="trialist">Trialist DJs</option>
	<option value="regular">Regular DJs</option>
	<option value="senior">Senior DJs</option>
	<option value="admin">Administrators</option>
	</select>
	</label>
	<br />
	<br />
    <strong>Announcement:</strong><br />
    <label>
    <textarea name="short" cols="50" rows="4" id="short"></textarea>
    </label>
    <br />
    <br />
    <label>
    <input type="submit" name="Submit" value="Post Announcement" />
    </label>
  </form><br /><br /><strong>Note:</strong> HTML is <strong>not</strong> allowed!
  </div>
<? } ?></div>
        <?php
} else {
header('location: index.php');
die();
}
?>
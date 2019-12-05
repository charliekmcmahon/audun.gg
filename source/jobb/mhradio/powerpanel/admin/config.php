<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level'] == "admin") {

checkaccount($_SESSION[username]);

?>
<link href="../css/inside.css" rel="stylesheet" type="text/css" />
<div id="content_title">
          <p>PowerPanel</p>
</div>
		
		<div id="content">On this page you are able to customize your copy of PowerPanel to fit your own website. <br />
<?php

if(isset($_POST['sitename']) && isset($_POST['sitedesc']) && isset($_POST['home']) && isset($_POST['title']) && isset($_POST['owners'])) {

$sitename = $_POST['sitename'];
$sitedesc = $_POST['sitedesc'];
$home = $_POST['home'];
$title = $_POST['title'];
$owners = $_POST['owners'];
$avaw = $_POST['avaw'];
$avah = $_POST['avah'];

$sitename = clean($sitename);
$sitedesc = clean($sitedesc);
$sitedesc = clean($sitedesc);
$title = clean($title);
$title = censor($title);
$owners = clean($owners);
$owners = censor($owners);
$home = clean($home);
$home = censor($home);
$home = nl2br($home);
$avaw = clean($avaw);
$avah = clean($avah);

if($avaw == "0" || $avah == "0") {
echo("<br />The avatar width and height both have to be over <strong>'0'</strong>. Please navigate back to the configuration page to try again.");
}
else {

$insert = mysql_query("UPDATE config SET sitename = '$sitename', sitedesc = '$sitedesc', home = '$home', title = '$title', owners = '$owners', avaw = '$avaw', avah = '$avah'") or die('Could not modify data, Error: '. mysql_error());

echo("<br />Your panel configuration has been <strong>updated</strong>!");
}
}

else {
?><br />
		  <br />

<?php
// We generate a list of users
$query = @mysql_query("SELECT * FROM config");
$rows = @mysql_fetch_array($query);
echo("<form action='' method='POST'><strong>Site Domain (Name):</strong><br /><input type='input' name='sitename' value='". $rows[sitename] ."' /><br /><br /><strong>Site Description:</strong><br /><input type='input' name='sitedesc' value='". $rows[sitedesc] ."' /><br /><br /><strong>Home Title:</strong><br /><input type='input' name='title' value='". $rows[title] ."' /><br /><br /><strong>Home Text:</strong><br /><textarea style='width: 400px; height: 300px;' name='home'>". $rows[home] ."</textarea><br /><br /><strong>Site Owners:</strong><br /><input type='text' name='owners' value='". $rows[owners] ."' /><br /><br /><strong>Avatar Width:</strong><br /><input type='text' name='avaw' value='". $rows[avaw] ."' /><br /><br /><strong>Avatar Height:</strong><br /><input type='text' name='avah' value='". $rows[avah] ."' /><br /><br /><input type='submit' value='Update' /></form><br /><hr color='lightgrey' /><br />");

?>

<? } ?></div>
        <?php
} else {
header('location: index.php');
die();
}
?>
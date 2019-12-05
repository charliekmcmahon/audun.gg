<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);

?>
<link href="css/inside.css" rel="stylesheet" type="text/css" />

<?php

$query = mysql_query("SELECT * FROM announcements WHERE id = '$_POST[id]'");
while($rows = mysql_fetch_array($query)) {

echo("
		<div id=\"content_title\">
				". $rows[title] ." <span id=\"content\">- Posted by ". $rows[by] ." (Administrator)</span></div> 
		
		
		<div id=\"content\">
				". $rows[short] ."</div>
		</div><br />");
		
}
?>
<?
} else {
header('location: index.php');
die();
}
?>
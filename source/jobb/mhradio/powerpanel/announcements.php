<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);

?>

<link href="css/inside.css" rel="stylesheet" type="text/css" />

<?php
if($_SESSION['level'] == "admin") {
$query = mysql_query("SELECT * FROM announcements ORDER by id DESC");
}
else {
$query = mysql_query("SELECT * FROM announcements WHERE view = '$_SESSION[level]' OR view = 'everyone' ORDER by id DESC");
}

$row_count = mysql_num_rows($query);

if($row_count == "0") {
echo("		<div id=\"content_title\">
			Announcements
			</div>
			
			<div id=\"content\">
			There are <strong>no announcements</strong> currently!
			</div>");
}

while($rows = mysql_fetch_array($query)) {

$short = $rows[short];

$num_count = mb_strlen($short);


if($num_count >= "500") {

$short = substr($short, 0, 495);

echo("
		<div id=\"content_title\">
				". $rows[title] ." <span id=\"content\">- Posted by ". $rows[by] ." (Administrator) - ");
				if($rows[view] == "everyone") {
				echo("(<strong>Public Announcement</strong>)");
				}
				elseif($rows[view] == "admin") {
				echo("(<strong>Administrator Announcement</strong>)");
				}
				elseif($rows[view] == "trialist") {
				echo("(<strong>Trialist DJ Announcement</strong>)");
				}
				elseif($rows[view] == "regular") {
				echo("(<strong>Regular DJ Announcement</strong>)");
				}
				elseif($rows[view] == "senior") {
				echo("(<strong>Senior DJ Announcement</strong>)");
				}				

				echo("</span></div> 
		
		<div id=\"content\">
				". $short ."...<br /><br /><div align='right' id='link'><form action='?page=readmore' method='POST'><input type='hidden' name='id' value='". $rows[id] ."' /><input type='submit' value='Read More' style='height: 25px;'/></form></div>
		</div><br />");
		
}
else {
echo("
		<div id=\"content_title\">
				". $rows[title] ." <span id=\"content\">- Posted by ". $rows[by] ." (Administrator) - ");
				if($rows[view] == "everyone") {
				echo("(Public Announcement)");
				}
				elseif($rows[view] == "admin") {
				echo("(Administrator Announcement)");
				}
				elseif($rows[view] == "trialist") {
				echo("(Trialist DJ Announcement)");
				}
				elseif($rows[view] == "regular") {
				echo("(Regular DJ Announcement)");
				}
				elseif($rows[view] == "senior") {
				echo("(Senior DJ Announcement)");
				}				

				echo("</span></div> 
				
		<div id=\"content\">
				". $short ."
		</div><br />");
		
}
}

?>
<?
} else {
header('location: index.php');
die();
}
?>
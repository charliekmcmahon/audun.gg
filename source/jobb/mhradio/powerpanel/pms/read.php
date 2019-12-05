<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);

?>

<link href="../css/inside.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
td, a, a:link, a:active, input, select, textarea
{
	font-size: 12px;
	font-family: Trebuchet MS;
	color: #6d6d6d;
	text-decoration: none;
}
legend
{
	color: #242424;
}
fieldset
{
	text-align: left;
	padding: 7px;
}
-->
</style>
		<div id="content_title">Personal Messaging - Read Message</div>
		
		<div id="content">

        <?php

if(isset($_POST['id'])) {

## GET THE PERSONAL MESSAGE ##

$id = $_POST['id'];

$que = mysql_query("SELECT * FROM pms WHERE id = '$id'");
$num = @mysql_num_rows($que);

if(!$num == "0") {

while($query = @mysql_fetch_array($que))
 {
 
 $message = nl2br($query["message"]);
?><br />
        <strong>Message From:</strong><br />
		<? echo("". $query["sendfrom"] .""); ?>
        <br /><br />
        <strong>Subject:</strong><br />
		<? echo("". $query["subject"] .""); ?>
        <br /><br />
        <strong>Message:</strong><br />
		<? echo("". $message .""); ?><br />
		<br />
		<table width="270" border="0">
          <tr>
            <td align="center"><form method="post" action="?page=pms/reply">
              <label>
                <input name="type" type="hidden" id="type" value="reply" />
                <input name="id" type="hidden" id="id" value="<? echo("". $query["id"] .""); ?>" />
                <input type="submit" name="reply" value="Reply" />
              </label>
            </form>            </td>
            <td align="center"><form method="post" action="?page=pms/reply">
              <label>
                <input name="type" type="hidden" id="type" value="fwd" />
                <input name="id" type="hidden" id="id" value="<? echo("". $query["id"] .""); ?>" />
                <input type="submit" name="fwd" value="Forward" />
              </label>
            </form>            </td>
            <td align="center"><form id="form1" name="form1" method="post" action="?page=pms/delete">
              <label>
                <input name="id" type="hidden" id="id" value="<? echo("". $query["id"] .""); ?>" />
                <input type="submit" name="Submit" value="Delete" />
              </label>
            </form>
            </td>
          </tr>
        </table>
		<?php
}
} else {
echo("<br /><strong>INVALID ID</strong>");
}
}
?>
		</div>
		<?
} else {
header('location: index.php');
die();
}
?>
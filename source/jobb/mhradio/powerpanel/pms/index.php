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
-->
</style>
		<div id="content_title">Personal Messaging
<?php
$que = mysql_query("SELECT * FROM pms WHERE sendto = '$_SESSION[username]'");
$num = @mysql_num_rows($que);

if(!$num == "0") {


if($num >= "2") {
echo(" - You have ".$num." messages");
} else {
echo(" - You have ".$num." message");
}

}

?></div>
		
		<div id="content">

        <?php

## GET THE PERSONAL MESSAGES ##
$que = mysql_query("SELECT * FROM pms WHERE sendto = '$_SESSION[username]'");
$num = @mysql_num_rows($que);

if(!$num == "0") {
?>
        <br />
      <table width="672" border="0" align="center" style="border: solid 1px #EEEEEE">
  <tr>
                    <td align="center"><strong>Date Received </strong></td>
                    <td align="center"><strong>Subject</strong></td>
                    <td align="center"><strong>Sender</strong></td>
                    <td align="center"><strong>Options</strong></td>
        </tr>
<?php
while($query = @mysql_fetch_array($que))
 {
?>
                  <tr>
                    <td align="center"><? echo("". $query["date"] .""); ?></td>
                    <td align="center"><? echo("". $query["subject"] .""); ?></td>
                    <td align="center"><? echo("". $query["sendfrom"] .""); ?></td>
                    <td align="center"><? echo("<form action='?page=pms/read' method='POST'><input type='hidden' name='id' value='". $query["id"] ."' /><input type='submit' value='Open PM' /></form>"); ?></td>
              </tr>
<?php
}
?>
          </table>
<?php
} else {
echo("<br />You currently have <strong>0 PMs</strong>");
}
?>
		</div><?
} else {
header('location: index.php');
die();
}
?>
<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);

?>
<link href="css/inside.css" rel="stylesheet" type="text/css" />
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
<script>
function GetXmlHttpObject()
{ 
	var objXMLHttp = null 
	if (window.XMLHttpRequest)
	{ 
		objXMLHttp = new XMLHttpRequest() 
		}
			else if (window.ActiveXObject)
		{ 
		objXMLHttp = new ActiveXObject("Microsoft.XMLHTTP")
	} 
	return objXMLHttp 
} 

function del(id) {
// Open function
// Set object
	xmlHttp = GetXmlHttpObject() 
	if (xmlHttp == null)
	{
		alert ("Browser does not support HTTP Request")
		return
	}
// We have set teh object


// Check for empty strings

if(id == "") {
			alert("There has been a serious error!")
			return
}

// We have alerted if any strings are emptyyy

var url = "delreq.php?delreq=true&id="+id
xmlHttp.open("GET",url,true)
xmlHttp.onreadystatechange = function () {
if (xmlHttp.readyState == 4) {
document.getElementById("redirect").innerHTML = xmlHttp.responseText;

}
};
xmlHttp.send(null);


// End function
}

</script>
		<div id="content_title">Requests and Shoutouts
<?php
$que = mysql_query("SELECT * FROM requests WHERE dj = '$_SESSION[username]'");
$num = @mysql_num_rows($que);

if(!$num == "0") {


if($num >= "2") {
echo(" - You have ".$num." requests / shoutouts");
} else {
echo(" - You have ".$num." request / shoutout");
}

}

?></div>
		
		<div id="content">

        <?php

## GET THE REQUESTS ##
$que = mysql_query("SELECT * FROM requests WHERE dj = '$_SESSION[username]'");
$num = @mysql_num_rows($que);

if(!$num == "0") {
?>
        <br />
      <table width="672" border="0" align="center" style="border: solid 1px #EEEEEE">
  <tr>
                    <td align="center"><strong>Type</strong></td>
                    <td align="center"><strong>Habbo Name</strong></td>
                    <td align="center"><strong>Message</strong></td>
                    <td align="center"><strong>Time Sent </strong></td>
                    <td align="center"><strong>IP</strong></td>
                    <td align="center"><strong>Delete</strong></td>
  </tr>
<?php
while($query = @mysql_fetch_array($que))
 {
?>
                  <tr>
                    <td align="center">
<?php

$type = ucfirst($query["type"]);

echo("". $type ."");

?></td>
                    <td align="center"><?php

echo("". $query["name"] ."");

?></td>
                    <td align="center"><? echo("". $query["msg"] .""); ?></td>
                    <td align="center"><? echo("". $query["time"] .""); ?></td>
                    <td align="center"><? echo("". $query["ip"] .""); ?></td>
                    <td align="center">
					<form method="post" id="<? echo("". $query["id"] .""); ?>" name="<? echo("". $query["id"] .""); ?>" onSubmit="del(<? echo("". $query["id"] .""); ?>); return false;">
					<input type="submit" value="Delete" />
					</form>					</td>
              </tr>
<?php
}
?>
          </table>
<div id="redirect"></div>
<?php
}else {
echo("<br />You currently have <strong>0 Requests / Shoutouts</strong>");
}
?>
		</div><?
} else {
header('location: index.php');
die();
}
?>
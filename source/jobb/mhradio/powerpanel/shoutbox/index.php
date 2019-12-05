<?php
session_start();
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

function grab() {
// Open function
// Set object
	xmlHttp = GetXmlHttpObject() 
	if (xmlHttp == null)
	{
		alert ("Browser does not support HTTP Request")
		return
	}
// We have set teh object


var url = "shoutbox/getshouts.php"
xmlHttp.open("GET",url,true)
xmlHttp.onreadystatechange = function () {
if (xmlHttp.readyState == 4) {
document.getElementById("shoutbox").innerHTML = xmlHttp.responseText;
setInterval(grab(), 1000);
}
};
xmlHttp.send(null);
// End function
}

function sendshout() {
// Open function
// Set object
	xmlHttp = GetXmlHttpObject() 
	if (xmlHttp == null)
	{
		alert ("Browser does not support HTTP Request")
		return
	}
// We have set teh object


// Make sure they aint spammingz!!

if(document.request.message.value == "") {
		alert("Please enter a message!")
		return
}

var url = "shoutbox/sendshout.php?message="+document.request.message.value
xmlHttp.open("GET",url,true)
xmlHttp.onreadystatechange = function () {
if (xmlHttp.readyState == 4) {
grab();
document.request.message.value = "";
}
};
xmlHttp.send(null);
// End function
}

/*/ DELETE /*/
function delshout(id) {
// Open function
// Set object
	xmlHttp = GetXmlHttpObject() 
	if (xmlHttp == null)
	{
		alert ("Browser does not support HTTP Request")
		return
	}
// We have set teh object


// Make sure they aint spammingz!!

if(id == "") {
		alert("Error!")
		return
}

var url = "shoutbox/delshout.php?id="+id
xmlHttp.open("GET",url,true)
xmlHttp.onreadystatechange = function () {
if (xmlHttp.readyState == 4) {
grab();
}
};
xmlHttp.send(null);
// End function
}

setInterval(grab(), 1000);
</script>
<body onLoad="grab('')">
		<div id="content_title">Shoutbox</div>
		
		<div id="content">
		
		<div id="shoutbox" style="margin-top: 10px;">Loading shouts...</div>

		<br /><br />
		
		<div id="form" style="text-align: center">
	
		<form method="post" name="request" onSubmit="sendshout();return false;">
		
		<strong>Message:<br />
		</strong>
		<label>
		<input name="message" type="text" id="message" size="60" maxlength="80" >
		</label>
		<br />
		<br />
		<input type="submit" name="Submit" value="Shout" />

		<br />
		<br />
		<div id="link"><a onClick="grab();"><img src="images/action_refresh.gif" width="16" height="16" border="0" style="cursor: pointer"></a></div>
		</form>
		
		</div>
</div>
</body>
        <?php
} else {
header('location: index.php');
die();
}
?>
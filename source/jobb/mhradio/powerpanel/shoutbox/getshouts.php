<?php
session_start();
include("../includes/config.php");
include("../includes/functions.php");
if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);

?>
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




</script>
<?php
//
$query = mysql_query("SELECT * FROM shoutbox ORDER BY id DESC LIMIT 8");

while($rows = mysql_fetch_array($query)) {

echo("<div id='". $rows["id"] ."' style='padding-left: 5px; color: #333333; background-color:");
// Check if id is odd or even for bg colour
if($rows["id"] & 1) {
    echo "#E6E6E6";
} else {
    echo "#E0E0E0";
}
// We have set bg colours \o/

echo("'><strong>". $rows["username"] .":</strong> ". nl2br($rows["message"]) ."</div>");

//

}

}
die();
?>
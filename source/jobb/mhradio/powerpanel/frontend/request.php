<?php
include("../includes/config.php");
include("../includes/functions.php");
######
include('../config_radio.php'); //you may edit this path to fit your server environment otherwise leave it alone
$scfp = fsockopen("$scip", $scport, &$errno, &$errstr, 30);
if(!$scfp) {
$scsuccs=1;
echo''.$scdef.' is Offline';
}
if($scsuccs!=1){
fputs($scfp,"GET /admin.cgi?pass=$scpass&mode=viewxml HTTP/1.0\r\nUser-Agent: SHOUTcast Song Status (Mozilla Compatible)\r\n\r\n");
while(!feof($scfp)) {
$page .= fgets($scfp, 1000);
}

###########################################################
///////////////////////// Part 1 \\\\\\\\\\\\\\\\\\\\\\\\\
###########################################################

//define xml elements
$loop = array("STREAMSTATUS", "BITRATE", "SERVERTITLE", "CURRENTLISTENERS");
$y=0;
while($loop[$y]!=''){
$pageed = ereg_replace(".*<$loop[$y]>", "", $page);
$scphp = strtolower($loop[$y]);
$$scphp = ereg_replace("</$loop[$y]>.*", "", $pageed);
if($loop[$y]==SERVERGENRE || $loop[$y]==SERVERTITLE || $loop[$y]==SONGTITLE || $loop[$y]==SERVERTITLE)
$$scphp = urldecode($$scphp);

// uncomment the next line to see all variables
//echo'$'.$scphp.' = '.$$scphp.'<br>';
$y++;
}
//end intro xml elements

###########################################################
///////////////////////// Part 2 \\\\\\\\\\\\\\\\\\\\\\\\\
###########################################################

//get song info and history
$pageed = ereg_replace(".*<SONGHISTORY>", "", $page);
$pageed = ereg_replace("<SONGHISTORY>.*", "", $pageed);
$songatime = explode("<SONG>", $pageed);
$r=1;
while($songatime[$r]!=""){
$t=$r-1;
$playedat[$t] = ereg_replace(".*<PLAYEDAT>", "", $songatime[$r]);
$playedat[$t] = ereg_replace("</PLAYEDAT>.*", "", $playedat[$t]);
$song[$t] = ereg_replace(".*<TITLE>", "", $songatime[$r]);
$song[$t] = ereg_replace("</TITLE>.*", "", $song[$t]);
$song[$t] = urldecode($song[$t]);
$dj[$t] = ereg_replace(".*<SERVERTITLE>", "", $page);
$dj[$t] = ereg_replace("</SERVERTITLE>.*", "", $pageed);
$r++;
}
//end song info

fclose($scfp);
}
########
if($_GET['sendreq'] == "true" && $_GET['dj']  && $_GET['name'] && $_GET['type'] && $_GET['message']) {

$name = $_GET['name'];
$dj = $_GET['dj'];
$type = $_GET['type'];
$message = $_GET['message'];

$name = clean($name);
$dj = clean($dj);
$type = clean($type);
$message = clean($message);
$name = censor($name);
$dj = censor($dj);
$type = censor($type);
$message = censor($message);
$ip = $_SERVER['REMOTE_ADDR'];
$a1 = date("r");

$a2 = explode(" ", $a1);

$insert = mysql_query("INSERT INTO requests (`name`, `dj`, `type`, `msg`, `time`, `ip`) VALUES ('$name', '$dj', '$type', '$message', '$a2[4]', '$ip')") or die('Could not send request! Error: '.mysql_error());

echo('<strong>Thanks!</strong> Your message has been sent to the DJ specified!');

die();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Request Line</title>
<style type="text/css">
<!--
#title { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold; }
#sub_title { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; font-weight: normal; font-style: italic; }
#text { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; font-weight: normal; font-style: none; }
#results { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; font-weight: normal; font-style: none; }
input { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; font-weight: normal; font-style: none; }
select { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; font-weight: normal; font-style: none; }
textarea { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; font-weight: normal; font-style: none; }
-->
</style>
<script>
var xmlHttp 

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

function sendreq() {
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

if(document.request.type.value == "") {
			alert("You must select a type of request!")
			return
}

if(document.request.name.value == "") {
			alert("You must enter a name!")
			return
}

if(document.request.message.value == "") {
			alert("You must enter a message!")
			return
}

// We have alerted if any strings are emptyyy

var url = "request.php?sendreq=true&dj="+document.request.dj.value+"&name="+document.request.name.value+"&type="+document.request.type.value+"&message="+document.request.message.value

xmlHttp.open("GET",url,true)
xmlHttp.onreadystatechange = function () {
if (xmlHttp.readyState == 4) {
document.getElementById("results").innerHTML = xmlHttp.responseText;
document.getElementById("form").innerHTML = "" // This removes the form, stopping them from sending the same request over and over again - SMART, EH?

}
};
xmlHttp.send(null);

// Now we clear out the forms and hide the form to TRY to prevent spamz!

// End function
}
</script>
</head>

<body>
<span id="title">Send a request</span><br />
<span id="sub_title">Edit the css for this to fit YOUR site!</span>
<br />
<br />
<div id="form" name="form" style="display: block">
<form method="post" name="request" onsubmit="sendreq();return false;">
<span id="text"><strong>

Radio DJ:<br />
<label>
<select name="dj" id="dj">
<?php
$query = mysql_query("SELECT * FROM users WHERE level != 'banned'") or die('ERROR '.mysql_error());
while($rows = mysql_fetch_array($query)) {
if(preg_match("/". $rows[username] ."/i", $servertitle)) {
echo("<option value='". $rows[username] ."' SELECTED>DJ ". $rows[username] ." lol</option>");
} else {
echo("<option value='". $rows[username] ."'>DJ ". $rows[username] ."</option>");
}
}
?>
</select></label>
</strong><br />
<br />
<strong>Habbo Name:</strong><br />
<label>
<input name="name" type="text" id="name" />
</label> 
<br />
<br />
<strong>Type:</strong><br />


<label>
<select name="type" id="type">
  <option value="request">Song Request</option>
  <option value="shoutout">Shoutout</option>
  <option value="competition">Competition</option>
  <option value="joke">Joke</option>
</select>
</label>
<br />
<br />
<strong>Message:</strong></span>
<br />
<label>
<textarea name="message" cols="30" rows="4" id="message"></textarea>
</label>
<br />
<br />
<label>
<input type="submit" name="Submit" value="Send!" />
</label>
</form>
<br /><br />
</div>
<div id="results"></div>
</body>
</html>

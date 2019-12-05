<? 

include "config.php";
include "front_page_stats.php";

?>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<title>Request Line</title>

</head>



<style type="text/css">

body {background-color: transparent}

</style>

<style type="text/css">	

<!--



body {

scrollbar-face-color:black;

scrollbar-highlight-color:black;

scrollbar-3dlight-color:black;

scrollbar-darkshadow-color:blackA;

scrollbar-shadow-color:black;

scrollbar-arrow-color:black;

scrollbar-track-color:black;

}

-->

</style>

</head>



<body bgcolor="white">

<p align="left"></STYLE> <FONT FACE="Verdana" SIZE="2"> <U><B><font color="black" face="Verdana" size="2">Request Line<br>

</FONT></B></U></DIV><P STYLE="margin-top: 1; margin-bottom: 1" ALIGN="left"> 

<FONT FACE="Verdana" SIZE="1"><font color="black" face="Verdana" size="1">

 <BR> 

Your IP Is: <I><? $ip=$_SERVER['REMOTE_ADDR']; echo "<font face='Verdana' size='1'><b>$ip</b>"; ?> 

</I></FONT></P><P STYLE="margin-top: 1; margin-bottom: 1" ALIGN="left">

<font color="black">Please 

Note, Your IP Is Sent With The Message</font></P>

<P STYLE="margin-top: 1; margin-bottom: 1" align="left">&nbsp; 

</P><P STYLE="margin-top: 0; margin-bottom: 0" align="left">  <?



if($_GET["op"] == "reg") {

//$result = mysql_query("SELECT * FROM `staff`");

//while($worked = mysql_fetch_array($result)) {

//$get_word = $worked['username'];

//if(preg_match("/$get_word/i", "$servertitle")) { $dj_name = "$get_word"; }

//}

$dj_name = addslashes($_POST["dj_name"]);

if($dj_name == "Choose One...") { echo "<font color='black' face='Verdana' size='1'><b><font face=Verdana color=black size=2>You Need To Select A DJ Or No One Will Recieve It !<br>"; exit; }

$habboname = $_POST["habboname"];
$message = $_POST["message"];

if($habboname == "") { echo "<b><font face=Verdana color=black size=2>Please Go Back And Tell Us Your Habbo Name !<br>"; exit; }

$habboname = addslashes($_POST["habboname"]);

$request = addslashes($_POST["request"]);

$type = addslashes($_POST["type"]);

$ip = getenv("REMOTE_ADDR");

$date = date("d.m.y - H:i:s");

$query = mysql_query("INSERT INTO `requests` (`habboname`, `type`, `dj_name`, `message`, `ip`, `date`) VALUES('$habboname', '$type', '$dj_name', '$request', '$ip', '$date' )");



echo "<font color='#66ADF4' face='Verdana' size='1'><br>Thank you <b>$habboname</b> for your <b>$type.</b> Stay Tuned To Hear Your Message !<p><META HTTP-EQUIV='Refresh'

CONTENT='5; URL=request.php'>

<br></font>

";

} else { echo "

<form method='post' action='?op=reg'>

<table border='0'>

<td valign='top' align='left'><font face='Verdana' size='1'  color='black'><b>Habbo Name:</b><br>

<input type='text' name='habboname' size='25' style='color: #66ADF4; font-family: Verdana; font-size: 10px; border: 1px solid #25477A; background-color:'></font></td>

<tr>

<td valign='top' align='left'><font face='Verdana' size='1'  color='black'><b>Type:</b><br>

<font size='1' face='Verdana'><select name='type' size='1' style='color: black; font-family: Verdana; font-size: 10px; border: 1px solid #25477A; background-color:'>

<option value='Request'>Request</option>

<option value='Shoutout'>Shoutout</option>

<option value='Joke'>Joke</option>

<option value='Other'>Other</option>

<option value='Comp'>Competition</option>

</select></td>

</tr>

<tr>

<td valign='top' align='left'><font face='Verdana' size='1'  color='black'><b>Select DJ:</b><br>

<font size='1' face='Verdana'><select name='dj_name' size='1' style='color: black; font-family: Verdana; font-size: 10px; border: 1px solid ; background-color: '>";

$result = mysql_query("SELECT * FROM `staff`");

while($worked = mysql_fetch_array($result)) {

$get_word = $worked['username'];

if(preg_match("/$get_word/i", "$servertitle")) { echo "<option value='$get_word' selected>DJ $get_word</option>"; }

else { echo "<option value='$get_word'>DJ $get_word</option>"; }

}

echo "</select></td><tr>

<td valign='top' align='left'><font face='Verdana' size='1'  color='black'><b>Message:</b><br>

<textarea rows='3' cols='35' type='text' name='request' class='button' style='color: #66ADF4; font-family: Verdana; font-size: 10px; border: 1px solid #25477A; background-color:'></textarea></font></td>

</tr>

<tr>

<td valign='top' align='left'><font face='Verdana' size='1'  color='black'><input type='submit' name='submit' value='Send' style='color: black; font-family: Verdana; font-size: 10px; border: 1px solid black; background-color:'></font></td>

</tr>

</table>

</form>";}

?> </P> 

</body>

</html>
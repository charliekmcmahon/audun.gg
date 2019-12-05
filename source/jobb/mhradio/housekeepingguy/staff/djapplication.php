<BODY style="background-color: transparent">
<link href="../stats/radio_stats.css" rel="stylesheet" type="text/css" />
<STYLE>

<!--

body {
	SCROLLBAR-FACE-COLOR: #D75C03; 
	SCROLLBAR-HIGHLIGHT-COLOR: #CC0000; 
	SCROLLBAR-SHADOW-COLOR: #D75C03; 
	SCROLLBAR-3DLIGHT-COLOR: #D75C03; 
	SCROLLBAR-ARROW-COLOR: #D75C03; 
	SCROLLBAR-TRACK-COLOR: #D75C03; 
	SCROLLBAR-DARKSHADOW-COLOR: #D75C03;
}

-->

</STYLE>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<title>Job Application</title>

</head>

<body link="#000000" vlink="#000000">

<P STYLE="margin-top: 1; margin-bottom: 1" ALIGN="center"> 

<FONT FACE="Verdana" SIZE="1" COLOR="#000000"> <BR> 

Your IP Is: <I><? $ip=$_SERVER['REMOTE_ADDR']; echo "<font face='Verdana' size='1'><b>$ip</b>"; ?> 

</I></FONT></P><P STYLE="margin-top: 1; margin-bottom: 1" ALIGN="center"><FONT FACE="Verdana" SIZE="1" COLOR="#000000">Please 

Note, Your IP Is Sent With The Message</FONT></P><P STYLE="margin-top: 1; margin-bottom: 1">&nbsp; 

</P><P STYLE="margin-top: 0; margin-bottom: 0"> <FONT COLOR="#00000"> <?

include 'config.php';

if($_GET["op"] == "reg") {

//$result = mysql_query("SELECT * FROM `staff`");

//while($worked = mysql_fetch_array($result)) {

//$get_word = $worked['username'];

//if(preg_match("/$get_word/i", "$servertitle")) { $dj_name = "$get_word"; }

//}

$dj_name = addslashes($_POST["dj_name"]);

if($dj_name == "Choose One...") { echo "<b><font face=Verdana color=white size=2>You Need To Select A DJ Or No One Will Recieve It !<br>"; exit; }

$email = $_POST["email"];
$example = $_POST["example"];
$habboname = $_POST["habboname"];

if($habboname == "") { echo "<b><font face=Verdana color=white size=2>Please Go Back And Tell Us Your Habbo Name !<br>"; exit; }

$habboname = addslashes($_POST["habboname"]);

$request = addslashes($_POST["request"]);

$type = addslashes($_POST["type"]);

$ip = getenv("REMOTE_ADDR");

$date = date("d.m.y - H:i:s");

$query = mysql_query("INSERT INTO `requests2` (`habboname`, `type`, `dj_name`, `email`, `example`, `message`, `ip`, `date`) VALUES('$habboname', '$type', '$dj_name', '$email', '$example', '$request', '$ip', '$date' )");



echo "<META HTTP-EQUIV='REFRESH' CONTENT='5;URL=djapplication.php'> 

<font face=Verdana size=1><br>Thank you <b>$habboname</b> for your <b>$type.</b><p>

<br></font>

";

} else { echo "<div align='center'><form method='post' action='?op=reg'>

<table border='0'>

<td valign='top' align='left'><font face='Verdana' size='1'  color='000000'><b>Habbo Name:</b><br>

<input type='text' name='habboname' size='25'></font></td>

<tr>

<td valign='top' align='left'><font face='Verdana' size='1'  color='000000''><b>Type:</b><br>

<font size='1' face='Verdana'><select name='type' size='1'>

<option value='DJ Application'>DJ Application</option>

</select></td>

</tr>

<tr>

<td valign='top' align='left'><b><font face='Verdana' size='1'>Email:<br>

</font></b><font face='Verdana' size='1'  color='000000'>

<input type='text' name='email' size='25'></font></td>

</tr>

<br><tr>

<td valign='top' align='left'><font face='Verdana' size='1'  color='000000'><b>DJ Application:</br></br>- Number of LEGALLY owned songs.<br>- Has SAM2 or SAM3 (registered)</b><br>- Can DJ at least once a week<br>- Has a Microphone<br>- Has a good DJ Voice<br>- What Experience You Have<br>- What Sets You Aside From All The Other Applicants<br><br>

<textarea rows='10' cols='35' type='text' name='request' class='button' font='Verdana'></textarea></font></td>

</tr>

<tr>

<td valign='top' align='left'><font face='Verdana' size='1'><b>Example of Some 

of your work:<br>

</b>A 60 Sec Sound Clip Of Your Work <b>(with NO MUSIC)</b><br>

To upload the clip Go Here: <a href='http://www.putfile.com' target='_blank'>

http://www.putfile.com/</a><br>

After you upload paste the address in the box below<br>

</font><font face='Verdana' size='1'  color='000000'><br>

<textarea rows='2' cols='35' type='text' name='example' class='button'></textarea></font></td>

</tr>

<tr>

<td valign='top' align='left'><font face='Verdana' size='1'  color='000000'><div align='center'><input type='submit' align='center' name='submit' value='Send my DJ App'><br>

<br>

<b>Every Field is Required</b></font></td>

</tr>

</table>

</form>
</div>
";}

?> </FONT></P> 

</body>

</html>
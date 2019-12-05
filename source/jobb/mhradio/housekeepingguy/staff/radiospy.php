<? session_start();
include 'config.php';
include 'online.php';
$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user

if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {

//if the username is not set or the session username is empty or the ip does not match the session ip log them out

session_unset(); //clears firefox

session_destroy(); //clears IE

die("I Wonder Why You Have Ended Up Here :s"); } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Radio Spy</title>

<style type="text/css">

<!--

.style1 {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-size: 10px;

}

-->

</style>

</head>



<body>

<p class="style1">Welcome to the Radio Spy. Below is a list of radio stations and their current radio statistics.</p>
<p class="style1">However, in order to use this tool and keep your job, you need to obey the following rules:<br>
  - Don't under any circumstance mention this tool on the radio.<br>
  - Don't under any circumstance read out the sites/listeners mentioned on this page on the radio.<br>
- Don't let this tool put you under pressure during your show.</p>
<br />
<p class="style1"><div style="Visibility: Hidden; Position: Absolute;"> 

<? 

$get_spy_info1 = mysql_query("SELECT * FROM radio_spy WHERE id='1'") or die(mysql_error());
$get_spy_info2 = mysql_query("SELECT * FROM radio_spy WHERE id='2'") or die(mysql_error());
$get_spy_info3 = mysql_query("SELECT * FROM radio_spy WHERE id='3'") or die(mysql_error());
$get_spy_info4 = mysql_query("SELECT * FROM radio_spy WHERE id='4'") or die(mysql_error());
$get_spy_info5 = mysql_query("SELECT * FROM radio_spy WHERE id='5'") or die(mysql_error());

$spydata1 = mysql_fetch_array($get_spy_info1);
$spydata2 = mysql_fetch_array($get_spy_info2);
$spydata3 = mysql_fetch_array($get_spy_info3);
$spydata4 = mysql_fetch_array($get_spy_info4);
$spydata5 = mysql_fetch_array($get_spy_info5);

$open = fsockopen("" . $spydata1['ip'] . "","" . $spydata1['port'] . ""); 

if ($open) { 

fputs($open,"GET /7.html HTTP/1.1\nUser-Agent:Mozilla\n\n"); 

$read = fread($open,1000); 

$text = explode("content-type:text/html",$read); 

$text = explode(",",$text[1]); 

} else { $er="<font face='Verdana' size='1'>" . $spydata1['name'] . " radio is down!</font>"; } 

?> 

</div> 

<? 

if ($text[1]==1) { $state = "Online"; } else { $state = "Offline"; } 

if ($er) { echo $er; } 

echo "<font face=verdana size=1> 

<b>" . $spydata1['name'] . "</b><br>

Listeners: $text[0] of $text[3] ($text[4] Unique)<br> 

Listener Peak: $text[2]<br> 

Server Status: <b>$state</b><br> 

Bitrate: $text[5] Kbps<br> 

Current Song: $text[6] 

</font>";?> 

</p>

<p class="style1"><div style="Visibility: Hidden; Position: Absolute;"> 

<? 

$open2 = fsockopen("" . $spydata2['ip'] . "","" . $spydata2['port'] . ""); 

if ($open2) { 

fputs($open2,"GET /7.html HTTP/1.1\nUser-Agent:Mozilla\n\n"); 

$read2 = fread($open2,1000); 

$text2 = explode("content-type:text/html",$read2); 

$text2 = explode(",",$text2[1]); 

} else { $er2="<font face='Verdana' size='1'>" . $spydata2['name'] . " radio is down!</font>"; } 

?> 

</div> 

<? 

if ($text2[1]==1) { $state2 = "Online"; } else { $state2 = "Offline"; } 

if ($er2) { echo $er2; } 

echo "<font face=verdana size=1> 

<b>" . $spydata2['name'] . "</b><br>

Listeners: $text2[0] of $text2[3] ($text2[4] Unique)<br> 

Listener Peak: $text2[2]<br> 

Server Status: <b>$state2</b><br> 
Bitrate: $text2[5] Kbps<br> 

Current Song: $text2[6] 

</font>";?> 

</p>

<p class="style1"><div style="Visibility: Hidden; Position: Absolute;"> 

<? 

$open3 = fsockopen("" . $spydata3['ip'] . "","" . $spydata3['port'] . ""); 

if ($open3) { 

fputs($open3,"GET /7.html HTTP/1.1\nUser-Agent:Mozilla\n\n"); 

$read3 = fread($open3,1000); 

$text3 = explode("content-type:text/html",$read3); 

$text3 = explode(",",$text3[1]); 

} else { $er3="<font face='Verdana' size='1'>" . $spydata3['name'] . " radio is down!</font>"; } 

?> 

</div> 

<? 

if ($text3[1]==1) { $state3 = "Online"; } else { $state3 = "Offline"; } 

if ($er3) { echo $er3; } 

echo "<font face=verdana size=1> 

<b>" . $spydata3['name'] . "</b><br>

Listeners: $text3[0] of $text3[3] ($text3[4] Unique)<br> 

Listener Peak: $text3[2]<br> 

Server Status: <b>$state3</b><br> 

Bitrate: $text3[5] Kbps<br> 

Current Song: $text3[6] 

</font>";?> 

</p>

<p class="style1"><div style="Visibility: Hidden; Position: Absolute;"> 

<? 

$open4 = fsockopen("" . $spydata4['ip'] . "","" . $spydata4['port'] . ""); 

if ($open4) { 

fputs($open4,"GET /7.html HTTP/1.1\nUser-Agent:Mozilla\n\n"); 

$read4 = fread($open4,1000); 

$text4 = explode("content-type:text/html",$read4); 

$text4 = explode(",",$text4[1]); 

} else { $er4="<font face='Verdana' size='1'>" . $spydata4['name'] . " radio is down!</font>"; } 

?> 

</div> 

<? 

if ($text4[1]==1) { $state4 = "Online"; } else { $state4 = "Offline"; } 

if ($er4) { echo $er4; } 

echo "<font face=verdana size=1> 

<b>" . $spydata4['name'] . "</b><br>

Listeners: $text4[0] of $text4[3] ($text4[4] Unique)<br> 

Listener Peak: $text4[2]<br> 

Server Status: <b>$state4</b><br> 

Bitrate: $text4[5] Kbps<br> 

Current Song: $text4[6] 

</font>";?> 

</p>

<p class="style1"><div style="Visibility: Hidden; Position: Absolute;"> 

<? 

$open5 = fsockopen("" . $spydata5['ip'] . "","" . $spydata5['port'] . ""); 

if ($open5) { 

fputs($open5,"GET /7.html HTTP/1.1\nUser-Agent:Mozilla\n\n"); 

$read5 = fread($open5,1000); 

$text5 = explode("content-type:text/html",$read5); 

$text5 = explode(",",$text5[1]); 

} else { $er5="<font face='Verdana' size='1'>" . $spydata5['name'] . " radio is down!</font>"; } 

?> 

</div> 

<? 
if ($text5[1]==1) { $state5 = "Online"; } else { $state5 = "Offline"; } 

if ($er5) { echo $er5; } 

echo "<font face=verdana size=1> 

<b>" . $spydata5['name'] . "</b><br>

Listeners: $text5[0] of $text5[3] ($text5[4] Unique)<br> 

Listener Peak: $text5[2]<br> 

Server Status: <b>$state5</b><br> 

Bitrate: $text5[5] Kbps<br> 

Current Song: $text5[6] 

</font>";?> 

</p>

</body>

</html>
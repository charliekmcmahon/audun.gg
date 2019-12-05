<? session_start();
include 'config.php';
$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user
if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {
//if the username is not set or the session username is empty or the ip does not match the session ip log them out
session_unset(); //clears firefox
session_destroy(); //clears IE
die("I wonder why you have ended up here"); }
include("online.php");

if($_GET["action"] == "delete") {
foreach($_POST as $key => $value) {
$result = mysql_query("DELETE FROM `requests` WHERE id='$value'")
or die ("<b>Message not found (<b>$id_request</b>)</b>");
}
echo "<meta http-equiv=\"refresh\" content=\"0;url=view_requests.php\">";
} elseif($_GET["action"] == "report") {
if(!is_numeric($reqid)) { die("This is not a valid request"); } else {
$result = mysql_query("UPDATE `requests` SET `report`='1' WHERE `id`='$reqid'")
or die ("<b>Message not found (<b>$reqid</b>)</b>");
echo "<meta http-equiv=\"refresh\" content=\"0;url=view_requests.php\">";
}
} elseif($_GET["action"] == "viewreport" and $_SESSION["session_level"] == "1") {
?>
<style>td,body { font-family: Verdana; font-size: 10px; }</style>
<script language="javascript">
function selectAll(formObj)
{
   for (var i=0;i < formObj.length;i++)
   {
      fldObj = formObj.elements[i];
      if (fldObj.type == 'checkbox')
      {
       fldObj.checked = true;
       }
   }
}
</script>
<form method=post action="?action=delete" name="delete">
<div align="left"><font face="Verdana" size="1">
	<input type=submit value="Delete" accesskey="s" style="float: left">Select All 
	<input type="checkbox" name="checkall0" onclick="selectAll(this.form);"><p><hr color=#000000 size=1>
<font face=Verdana size=1><b>All</b> | <b><font color=#00000>Requests</font> |
<font color=#000000>Shoutouts</font> | <font color=#000000>Jokes</font> 
| <font color=#000000>Competition</font> | <font color=#000000>
Other </font>|<font color=#000000> </font><font color=#000000>
Admin Messages</font></b></font><br><hr color=#000000 size=1><p>
</font></div>
<!-------------- REQUEST SYSTEM OUTPUT -------------->
<? $reported = mysql_query("SELECT * FROM `requests` WHERE `report`='1'");
while($worked = mysql_fetch_array($reported)) {
   $id_request = $worked[id];
   $habboname = $worked[habboname];
   $type = $worked[type];
   $dj_name = $worked[dj_name];
   $msg = $worked[message];
   $date = $worked[date];
   $ip = $worked[ip];
   if($type == "Request") { $msg_type = "Request"; } elseif($type == "Shoutout") { $msg_type = "Shoutout"; } elseif($type == "Joke") { $msg_type = "Joke"; } elseif($type == "Other") { $msg_type = "Other"; } elseif($type == "Comp") { $msg_type = "Comp"; } elseif($type == "Admin Message") { $msg_type = "Admin Message"; } elseif($type == "Senior Message") { $msg_type = "<font color=black><b>Senior DJ Message</b></font>"; } else { $msg_type = "Official DJ Submission"; }
   if($type == "DJ Request") { $type = "<font color=black>DJ Request</font>"; } elseif($type == "DJ Shoutout") { $type = "<font color=black>DJ Shoutout</font>"; } elseif($type == "DJ Joke") { $type = "<font color=black>DJ Joke</font>"; } elseif($type == "DJ Other") { $type = "<font color=black>DJ Other</font>"; }
   if($type == "Request") { $type = "<font color=black>Request</font>"; } elseif($type == "Shoutout") { $type = "<font color=black>Shoutout</font>"; } elseif($type == "Joke") { $type = "<font color=green>Joke</font>"; } elseif($type == "Other") { $type = "<font color=black>Other</font>"; } elseif($type == "Comp") { $type = "<font color=grey>Competition</font>"; } elseif($type == "Admin Message") { $type = "<font color=black><b>Message from Admin</b></font>"; } elseif($type == "Senior Message") { $type = "<font color=black><b>Message from Senior DJ</b></font>"; }
   echo "<table border=0 id=table_$id_request width=100% cellspacing=0 cellpadding=3>
              <tr>
	  <td width=2>
		<input type=\"checkbox\" name=\&quot;$id_request\&quot;1 value=\"$id_request\" onClick=\"if(this.checked == true) { table_$id_request.style.backgroundColor='000000' } else { table_$id_request.style.backgroundColor='white' }\"></td>
	  <td width=252><font face=verdana size=1><b>From:</b> $habboname ($ip)</td>
	  <td width=148><font size=1><b>To:</b> $dj_name</font></td>
	  <td width=148><font face=verdana size=1 color=#000000 ><b>Date:</b> $date</td>
	</tr>
	<tr>
	  <td colspan=4><font face=verdana size=1 color=#000000 ><b>Message:</b> $msg</td>
	</tr>
           </table><hr color=#000000 size=1>
<p><br></p>";
}
echo "</form>";
 die(); } ?>
<style>
td {
font-family: Verdana;
font-size: 10px;
}
</style>
<script language="javascript">
function selectAll(formObj) {
   for (var i=0;i < formObj.length;i++) {
      fldObj = formObj.elements[i];
      if (fldObj.type == 'checkbox') {
       fldObj.checked = true;
     }
   }
}
</script><font face="Verdana" size="1" color="#000000">
<table width="100%" cellspacing="0" cellpadding="0" border="0">

<table width="100%" background="../images/header.PNG">
<tr><td>
<font face="Verdana" size="1"><b>View The Requests & Shoutouts</b></font>
</td></tr></table><font size="1" face="Verdana"><p>
Here you can read all the requests that the listeners have submitted. If someone sends you an offensive request, be sure to report it to a administrator by clicking report. Please do <b>NOT</b> read any rude or abusive requests on air!</p><p>

<form method=post action="?action=delete" name="delete">
<input type=submit value="Delete" accesskey="s"><br>
&nbsp;<input type="checkbox" name="checkall" onclick="selectAll(this.form);"> Select All<br><hr color=#000000 size=1>
<font face=Verdana size=1><b>
<a href="view_requests.php"><font color=black>All</font></a> |
<a href="view_requests.php?select=Request"><font color=#000000>Requests</font></a> |
<a href="view_requests.php?select=Shoutout"><font color=#000000>Shoutouts</font></a> |
<a href="view_requests.php?select=Joke"><font color=#000000>Jokes</font></a> |
<a href="view_requests.php?select=Comp"><font color=#000000>Competition</font></a> |
<a href="view_requests.php?select=Other"><font color=#000000>Other </font></a> 
<? if($_SESSION["session_level"] == "1") { echo " | <a href=\"view_requests.php?select=Mine\"> Mine</a>"; } ?></b></font>
<br><hr color=#000000 size=1><p>

<!-------------- REQUEST SYSTEM OUTPUT --------------><?
if($_SESSION['session_level'] == "1") {
if($select == "") { $result = mysql_query("SELECT * FROM `requests` ORDER BY `id` DESC");
} elseif($select == "Mine") {
  $result = mysql_query("SELECT * FROM `requests`WHERE `dj_name`='$session_username' ORDER BY `id` DESC");
} else {
  $result = mysql_query("SELECT * FROM `requests` WHERE `type`='$select' or `type`='DJ $select' ORDER BY `id` DESC");
}
while($worked = mysql_fetch_array($result)) {
   $id_request = $worked[id];
   $habboname = $worked[habboname];
   $type = $worked[type];
   $dj_name = $worked[dj_name];
   $msg = $worked[message];
   $date = $worked[date];
   $ip = $worked[ip];
   $report = $worked[report];
   if($report == "1") {} else {
   if($type == "Request") { $msg_type = "Request"; } elseif($type == "Shoutout") { $msg_type = "Shoutout"; } elseif($type == "Joke") { $msg_type = "Joke"; } elseif($type == "Other") { $msg_type = "Other"; } elseif($type == "Comp") { $msg_type = "Comp"; } elseif($type == "Admin Message") { $msg_type = "Admin Message"; } elseif($type == "Senior Message") { $msg_type = "<font color=black><b>Senior DJ Message</b></font>"; } else { $msg_type = "Official DJ Submission"; }
   if($type == "DJ Request") { $type = "<font color=black>DJ Request</font>"; } elseif($type == "DJ Shoutout") { $type = "<font color=black>DJ Shoutout</font>"; } elseif($type == "DJ Joke") { $type = "<font color=black>DJ Joke</font>"; } elseif($type == "DJ Other") { $type = "<font color=black>DJ Other</font>"; }
   if($type == "Request") { $type = "<font color=black>Request</font>"; } elseif($type == "Shoutout") { $type = "<font color=blue>Shoutout</font>"; } elseif($type == "Joke") { $type = "<font color=black>Joke</font>"; } elseif($type == "Other") { $type = "<font color=black>Other</font>"; } elseif($type == "Comp") { $type = "<font color=#000000>Competition</font>"; } elseif($type == "Admin Message") { $type = "<font color=black><b>Message from Admin</b></font>"; } elseif($type == "Senior Message") { $type = "<font color=black><b>Message from Senior DJ</b></font>"; }
   echo "<table border=0 id=table_$id_request width=100% cellspacing=0 cellpadding=3>
 <tr>
  <td width=2><input type=\"checkbox\" name=\"$id_request\" value=\"$id_request\" onClick=\"if(this.checked == true) { table_$id_request.style.backgroundColor='ffffff' } else { table_$id_request.style.backgroundColor='white' }\"></td>
  <td width=190><b>Name:</b> $habboname<br>
   <b>IP:</b> $ip</td>
  <td width=177><b>Date:</b> $date</font></td>
  <td width=218><b>For:</b> $dj_name<br>
   <b>Options:
   <a href=\"?action=report&reqid=$id_request\" style=text-decoration:none; font-weight:700><font color=#000000>REPORT</font></a></b></td>
 </tr>
 <tr>
  <td colspan=4 height=18><font face=verdana size=1 color=#000000><b>$type:</b> $msg</td>
 </tr>
</table><font size=1><hr color=#000000 size=1>";
   }
   }
} else {
$session_username = $_SESSION['session_username'];
$result = mysql_query("SELECT * from `requests` WHERE dj_name='$session_username' ORDER BY `id` DESC")
or die("<b>COULD NOT GET REQUESTS!</b>");
while($worked = mysql_fetch_array($result)) {
   $id_request = $worked[id];
   $habboname = $worked[habboname];
   $type = $worked[type];
   $dj_name = $worked[dj_name];
   $msg = $worked[message];
   $date = $worked[date];
   $ip = $worked[ip];
   $report = $worked[report];
   if($report == "1") {} else {
   if($type == "Request") { $msg_type = "Request"; } elseif($type == "Shoutout") { $msg_type = "Shoutout"; } elseif($type == "Joke") { $msg_type = "Joke"; } elseif($type == "Other") { $msg_type = "Other"; } elseif($type == "Comp") { $msg_type = "Comp"; } elseif($type == "Admin Message") { $msg_type = "Admin Message"; } elseif($type == "Senior Message") { $msg_type = "<font color=black><b>Senior DJ Message</b></font>"; } else { $msg_type = "Official DJ Submission"; }
   if($type == "DJ Request") { $type = "<font color=black>DJ Request</font>"; } elseif($type == "DJ Shoutout") { $type = "<font color=black>DJ Shoutout</font>"; } elseif($type == "DJ Joke") { $type = "<font color=black>DJ Joke</font>"; } elseif($type == "DJ Other") { $type = "<font color=black>DJ Other</font>"; }
   if($type == "Request") { $type = "<font color=black>Request</font>"; } elseif($type == "Shoutout") { $type = "<font color=black>Shoutout</font>"; } elseif($type == "Joke") { $type = "<font color=black>Joke</font>"; } elseif($type == "Other") { $type = "<font color=black>Other</font>"; } elseif($type == "Comp") { $type = "<font color=#FF33CC>Competition</font>"; }
echo "<table border=0 id=table_$id_request width=100% cellspacing=0 cellpadding=3>
              <tr>
	  <td width=2>
		<input type=\"checkbox\" name=\&quot;$id_request\&quot;0 value=\"$id_request\" onClick=\"if(this.checked == true) { table_$id_request.style.backgroundColor='FFFFFF' } else { table_$id_request.style.backgroundColor='white' }\"></td>
	  <td width=299><font face=verdana size=1 color=#000000><b>Name:</b> $habboname<br>
		<b>IP:</b> $ip</td>
	  <td width=218><font face=verdana size=1>
		<font face=Verdana size=1 color=#000000><b>Date:</b> $date</font><br>
		<b>Options: 
		<a href=\"?action=report&reqid=$id_request\" style=text-decoration:none; font-weight:700>
		<font color=#000000>REPORT</font></a></b></td>
	</tr>
	<tr>
	  <td colspan=3 height=18><font face=verdana size=1 color=#000000><b>$type:</b> $msg</td>
	</tr>
           </table><font size=1><hr color=#000000 size=1>";
   }
   }
}
?>
</form></font>

<style type="text/css"><!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #000000;
}
body {
	background-color: FFFFFF;
	background-image: url();
}
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: none;
	color: #000000;
}
a:active {
	text-decoration: none;
	color: #000000;
}
--></style>
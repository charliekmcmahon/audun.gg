<? session_start();

include '../config.php';

$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user

if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {

//if the username is not set or the session username is empty or the ip does not match the session ip log them out

session_unset(); //clears firefox

session_destroy(); //clears IE

die("<body bgcolor='#990000'>I wonder why you have ended up here"); }

include("../online.php");

if($_SESSION['session_level'] == "1") {

if($_GET["action"] == "delete") {

foreach($_POST as $key => $value) {

$result = mysql_query("DELETE FROM `requests2` WHERE id='$value'")

or die ("<body><b>Message not found (<b>$id_request</b>)</b>");

}

echo "<meta http-equiv=\"refresh\" content=\"0;url=viewapps.php\">";

} elseif($_GET["action"] == "report") {

if(!is_numeric($reqid)) { die("<body>This is not a valid request"); } else {

$result = mysql_query("UPDATE `requests2` SET `report`='1' WHERE `id`='$reqid'")

or die ("<body><b>Message not found (<b>$reqid</b>)</b>");

echo "<meta http-equiv=\"refresh\" content=\"0;url=viewapps.php\">";

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
<body>
<form method=post action="?action=delete" name="delete">

<div align="left"><font face="Verdana" size="1">

	<input type=submit value="Delete" accesskey="s" style="float: left">Select All 

	<input type="checkbox" name="checkall0" onClick="selectAll(this.form);"><p><hr color=#000000 size=1>

<font face=Verdana size=1><b>All</b> | <b><font color=#FF0000>Requests</font> |

<font color=#0000FF>Shoutouts</font> | <font color=#008000>Jokes</font> 

| <font color=#FF33CC>Competition</font> | <font color=#FFA500>

Other </font>|<font color=#FFA500> </font><font color=#800080>

Admin Messages</font></b></font><br><hr color=#000000 size=1><p>

</font></div>

<!-------------- REQUEST SYSTEM OUTPUT -------------->

<? $reported = mysql_query("SELECT * FROM `requests2` WHERE `type`='DJ Application'");

while($worked = mysql_fetch_array($reported)) {

   $id_request = $worked[id];

   $habboname = $worked[habboname];

   $type = $worked[type];

   $dj_name = $worked[dj_name];

   $msg = $worked[message];

   $email = $worked[email];

   $date = $worked[date];

   $ip = $worked[ip];

   if($type == "") { $msg_type = "Request"; } elseif($type == "Shoutout") { $msg_type = "Shoutout"; } elseif($type == "Joke") { $msg_type = "Joke"; } elseif($type == "Other") { $msg_type = "Other"; } elseif($type == "Comp") { $msg_type = "Comp"; } elseif($type == "Admin Message") { $msg_type = "Admin Message"; } elseif($type == "Senior Message") { $msg_type = "<font color=green><b>Senior DJ Message</b></font>"; } else { $msg_type = "Official DJ Submission"; }

   if($type == "Djapp") { $type = "<font color=red>DJ Request</font>"; } elseif($type == "DJ Shoutout") { $type = "<font color=blue>DJ Shoutout</font>"; } elseif($type == "DJ Joke") { $type = "<font color=green>DJ Joke</font>"; } elseif($type == "Reporter Application") { $type = "<font color=orange>DJ Other</font>"; }

   if($type == "Reporter") { $type = "<font color=blue>News Reporter</font>"; } elseif($type == "Shoutout") { $type = "<font color=blue>Shoutout</font>"; } elseif($type == "Joke") { $type = "<font color=green>Joke</font>"; } elseif($type == "Other") { $type = "<font color=orange>Other</font>"; } elseif($type == "Comp") { $type = "<font color=grey>Competition</font>"; } elseif($type == "Admin Message") { $type = "<font color=purple><b>Message from Admin</b></font>"; } elseif($type == "Senior Message") { $type = "<font color=green><b>Message from Senior DJ</b></font>"; }

   echo "
<body>
<table border=0 id=table_$id_request width=100% cellspacing=0 cellpadding=3>

              <tr>

	  <td width=2>

		<input type=\'checkbox\' name=\&quot;$id_request\&quot;1 value=\'$id_request\' onClick=\'if(this.checked == true) { table_$id_request.style.backgroundColor='FFEBEB' } else { table_$id_request.style.backgroundColor='white' }\'></td>

	  <td width=252><font face=verdana size=1><b>From:</b> $habboname ($ip)</td>

	  <td width=148><font size=1><b>Type:</b> $type</font></td>

	  <td width=148><font face=verdana size=1><b>Date:</b> $date</td>

	</tr>

	<tr>

	  <td colspan=4 valign='top'><font face='Verdana' size='1'><b>Email: </b>

		$email</font></td>

	</tr>

	<tr>

	  <td colspan=4><font face=verdana size=1><b>Message:</b> $msg</td>

	</tr>

           </table><hr color=#000000 size=1>

<p><br></p>

";

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

</script><font face="Verdana" size="1">
<body>

<b>Applications</b><br>

<br><form method=post action="?action=delete" name="delete">

<input type=submit value="Delete" accesskey="s"><br>

&nbsp;<input type="checkbox" name="checkall" onClick="selectAll(this.form);"> Select All<br><hr color=#000000 size=1>

<font face=Verdana size=1><b>

<a href="viewapps.php"><font color=black>All</font></a> |

<a href="viewapps.php?select=DJ Application"><font color=#FF0000>DJ Application</font></a> |

</b></font>

<br><hr color=#000000 size=1><p>



<!-------------- REQUEST SYSTEM OUTPUT --------------><?

if($_SESSION['session_level'] == "1") {

if($select == "") { $result = mysql_query("SELECT * FROM `requests2` ORDER BY `id` DESC") or die(mysql_error());;

} elseif($select == "Mine") {

  $result = mysql_query("SELECT * FROM `requests2`WHERE `dj_name`='$session_username' ORDER BY `id` DESC") or die(mysql_error());;

} else {

  $result = mysql_query("SELECT * FROM `requests2` WHERE `type`='$select' or `type`='DJ $select' ORDER BY `id` DESC") or die(mysql_error());;

}

while($worked = mysql_fetch_array($result)) {

   $id_request = $worked[id];

   $habboname = $worked[habboname];

   $type = $worked[type];

   $dj_name = $worked[dj_name];

   $msg = $worked[message];

   $email = $worked[email];

   $example = $worked[example];

   $date = $worked[date];

   $ip = $worked[ip];

   $report = $worked[report];

   if($report == "1") {} else {

   if($type == "Reporter") { $msg_type = "Reporter"; } elseif($type == "Shoutout") { $msg_type = "Shoutout"; } elseif($type == "Joke") { $msg_type = "Joke"; } elseif($type == "Other") { $msg_type = "Other"; } elseif($type == "Comp") { $msg_type = "Comp"; } elseif($type == "Admin Message") { $msg_type = "Admin Message"; } elseif($type == "Senior Message") { $msg_type = "<font color=green><b>Senior DJ Message</b></font>"; } else { $msg_type = "Official DJ Submission"; }

   if($type == "Djapp") { $type = "<font color=red>DJ App</font>"; } elseif($type == "DJ Shoutout") { $type = "<font color=blue>DJ Shoutout</font>"; } elseif($type == "DJ Joke") { $type = "<font color=green>DJ Joke</font>"; } elseif($type == "DJ Other") { $type = "<font color=orange>DJ Other</font>"; }

   if($type == "Request") { $type = "<font color=red>Request</font>"; } elseif($type == "Shoutout") { $type = "<font color=blue>Shoutout</font>"; } elseif($type == "Joke") { $type = "<font color=green>Joke</font>"; } elseif($type == "Other") { $type = "<font color=orange>Other</font>"; } elseif($type == "Comp") { $type = "<font color=#FF33CC>Competition</font>"; } elseif($type == "Admin Message") { $type = "<font color=purple><b>Message from Admin</b></font>"; } elseif($type == "Senior Message") { $type = "<font color=green><b>Message from Senior DJ</b></font>"; }

   echo "<body><table border=0 id=table_$id_request width=100% cellspacing=0 cellpadding=3>

              <tr>

	  <td width=2>

		<input type='checkbox' name='$id_request' value='$id_request' onClick=\'if(this.checked == true) { table_$id_request.style.backgroundColor='FFEBEB' } else { table_$id_request.style.backgroundColor='white' }\'></td>

	  <td width=252><font face=verdana size=1><b>From:</b> $habboname ($ip)</td>

	  <td width=148><font size=1><b>Type:</b> $type</font></td>

	  <td width=148><font face=verdana size=1><b>Date:</b> $date</td>

	</tr>

	<tr>

	  <td colspan=4 valign='top'><font face='Verdana' size='1'><b>Email: </b>

		$email</font></td>

	</tr>

	<tr>

	  <td colspan=4 valign='top'><font face='Verdana' size='1'><b>Example Of 

		Work: </b>$example</font></td>

	</tr>

	<tr>

	  <td colspan=4><font face=verdana size=1><b>Message:</b> $msg</td>

	</tr>

           </table><hr color=#000000 size=1>

<p><br></p>

";

   }

   }

} else {

$session_username = $_SESSION['session_username'];

$result = mysql_query("SELECT * FROM `requests2` WHERE dj_name='$session_username' ORDER BY `id` DESC")

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

   if($type == "Reporter") { $msg_type = "Reporter"; } elseif($type == "Shoutout") { $msg_type = "Shoutout"; } elseif($type == "Joke") { $msg_type = "Joke"; } elseif($type == "Other") { $msg_type = "Other"; } elseif($type == "Comp") { $msg_type = "Comp"; } elseif($type == "Admin Message") { $msg_type = "Admin Message"; } elseif($type == "Senior Message") { $msg_type = "<font color=green><b>Senior DJ Message</b></font>"; } else { $msg_type = "Official DJ Submission"; }

   if($type == "Djapp") { $type = "<font color=red>DJ App</font>"; } elseif($type == "DJ Shoutout") { $type = "<font color=blue>DJ Shoutout</font>"; } elseif($type == "DJ Joke") { $type = "<font color=green>DJ Joke</font>"; } elseif($type == "DJ Other") { $type = "<font color=orange>DJ Other</font>"; }

   if($type == "Request") { $type = "<font color=red>Request</font>"; } elseif($type == "Shoutout") { $type = "<font color=blue>Shoutout</font>"; } elseif($type == "Joke") { $type = "<font color=green>Joke</font>"; } elseif($type == "Other") { $type = "<font color=orange>Other</font>"; } elseif($type == "Comp") { $type = "<font color=#FF33CC>Competition</font>"; }

echo "<body><table border=0 id=table_$id_request width=100% cellspacing=0 cellpadding=3>

              <tr>

	  <td width=2>

		<input type=\"checkbox\" name=\&quot;$id_request\&quot;0 value=\"$id_request\" onClick=\"if(this.checked == true) { table_$id_request.style.backgroundColor='FFEBEB' } else { table_$id_request.style.backgroundColor='white' }\"></td>

	  <td width=299><font face=verdana size=1><b>Name:</b> $habboname<br>

		<b>IP:</b> $ip</td>

	  <td width=218><font face=verdana size=1>

		<font face=Verdana size=1><b>Date:</b> $date</font><br>

		<b>Options: 

		<a href=\"?action=report&reqid=$id_request\" style=text-decoration:none; font-weight:700>

		<font color=#800000>REPORT</font></a></b></td>

	</tr>

	<tr>

	  <td colspan=3 height=18><font face=verdana size=1><b>$type:</b> $msg</td>

	</tr>

           </table><font size=1><hr color=#000000 size=1>";

   }

   }

}

?>

<?

}else{

echo ("<body><font face=verdana size=1>You are not an administrator. Please leave.");

}

?>

</form></font>


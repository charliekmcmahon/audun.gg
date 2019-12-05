<? session_start();

include '../config.php';
include '../online.php';

$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user

if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {

//if the username is not set or the session username is empty or the ip does not match the session ip log them out

session_unset(); //clears firefox

session_destroy(); //clears IE

echo "ERROR!!!";

exit; }

?>

<table width="100%" background="../../images/header.PNG">
<tr><td>
<font face="Verdana" size="1"><b>Delete Radio Information</b></font>
</td></tr></table><font size="1" face="Verdana"><p>Please delete any old information that has been posted so that the Radio DJ's will not get confused of which information to put into there encoder!

<?


if($_GET["action"] == "delete") {
$ID_request == $_POST["ID_request"];
$Radio_IP = $_POST["Radio_IP"];

$Radio_Port = $_POST["Radio_Port"];

$Radio_Password = $_POST["Radio_Password"];
foreach($_POST as $key => $value) {

$result = mysql_query("DELETE FROM `radioinfo` WHERE id='$value'")

or die ("<b>Message not found ($ID_request)</b>");

}

echo "<meta http-equiv=\"refresh\" content=\"0;url=delete_info.php\">";

} ?>

<style>

.td {

font-family: Verdana;

font-size: 10px;

}

</style>

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

</script><font face="Verdana" size="1">



<form method=post action="?action=delete" name="delete">

<div align="right"><input type=submit value="     Delete Selected     " accesskey="s"><br>







<!-------------- REQUEST SYSTEM OUTPUT -------------->

<?

if($_SESSION['session_level'] == "1") {

$result = MYSQL_QUERY("SELECT * from `radioinfo` ORDER BY `id` DESC")

or die("<b>An Error Has Occured<</b>");

while($worked = mysql_fetch_array($result)) {

   $id_request = $worked[id];

   $Radio_IP = $worked[Radio_IP];

   $Radio_Port = $worked[Radio_Port];

   $Radio_Password = $worked[Radio_Password];

   echo "<table background='FFEBEB'><table border=0 ID=table_$id_request width=500 cellspacing=0 cellpadding=3>

<tr>

	  <td width=150><font face=verdana size=1><b>Radio IP:</b>$Radio_IP$IP&nbsp;</td>

	  <td width=150><font face=verdana size=1><b>Radio Port:</b> $Radio_Port</td>

	  <td width=200><font face=verdana size=1><b>Radio Password:</b> $Radio_Password</td>

	  <td rowspan=2 align=right width=20><input type=\"checkbox\" name=\"$id_request\" value=\"$id_request\" onClick=\"if(this.checked == true) { table_$id_request.style.backgroundColor='66CCFF' } else { table_$id_request.style.backgroundColor='white' }\"></td>

	</tr>



           </table><font face=verdana size=1>------------------------------------------------------------------------------------------------------------------------------------<br>";

   }

} else {

$session_username = $_SESSION['session_username'];

$result = mysql_query("SELECT * from `radioinfo` WHERE Radio_IP = '$Radio_IP' ORDER BY `id` DESC")

or die("<b>An Error Has Occured</b>");

while($worked = mysql_fetch_array($result)) {

   $id_request = $worked[id];

   $Radio_IP = $worked[Radio_IP];

   $Radio_Port = $worked[Radio_Port];

   $Radio_Password = $worked[Radio_Password];

   

echo "<font face=verdana size=1>Welcome to the Senior DJ Notice area. You can only delete your OWN notices and not any one elses.</font><br><table border=0 ID=table_$ID_request width=661 cellspacing=0 cellpadding=3>

              <tr>

	  <td width=252><font face=verdana size=1><b>Radio IP:</b>$Radio_IP($IP)&nbsp;</td>

	  <td width=173><font face=verdana size=1><b>Radio Port:</b> $Radio_Port</td>

	  <td width=86><font face=verdana size=1><b>Radio Password:</b> $Radio_Password</td>

	  <td rowspan=2 align=right width=20><input type=\"checkbox\" name=\"$id_request\" value=\"$id_request\" onClick=\"if(this.checked == true) { table_$id_request.style.backgroundColor='66CCFF' } else { table_$id_request.style.backgroundColor='white' }\"></td>

	</tr>



           </table><font size=1>-----------------------------------------------------------------------------------------------<br>";

   }

}

?>

</form>

</font></font></font>
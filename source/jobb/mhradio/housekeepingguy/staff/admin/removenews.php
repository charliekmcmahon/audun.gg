<? session_start();

include '../config.php';

$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user

if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {

//if the username is not set or the session username is empty or the ip does not match the session ip log them out

session_unset(); //clears firefox

session_destroy(); //clears IE

echo "ERROR!!!";

exit; }

?>

<? if($_SESSION['session_level'] != "1") { echo "You are not of the required level to access this page."; } else { ?>

<?

if($_GET["action"] == "delete") {

foreach($_POST as $key => $value) {

$result = mysql_query("DELETE FROM `news` WHERE ID='$value'")

or die ("<b>Message not found ($ID_request)</b>");

}

echo "<meta http-equiv=\"refresh\" content=\"0;url=removenews.php\">";

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

$result = MYSQL_QUERY("SELECT * from `news` ORDER BY `ID` DESC")

or die("<b>An Error Has Occured<</b>");

while($worked = mysql_fetch_array($result)) {

   $ID_request = $worked[ID];

   $NoticeUsername = $worked[NoticeUsername];

   $NoticeMessage = $worked[NoticeMessage];

   $IP = $worked[IP];

   $NoticeDAT = $worked[NoticeDAT];

   $NoticeTitle = $worked[NoticeTitle];

   echo "<table background='FFEBEB'><table border=0 ID=table_$ID_request width=510 cellspacing=0 cellpadding=3>

<tr>

	  <td width=252><font face=verdana size=1><b>Poster Name:</b>$NoticeUsername($IP)&nbsp;</td>

	  <td width=173><font face=verdana size=1><b>Date:</b> $NoticeDAT</td>

	  <td width=86><font face=verdana size=1><b>Title:</b> $NoticeTitle</td>

	  <td rowspan=2 align=right width=20><input type=\"checkbox\" name=\"$ID_request\" value=\"$ID_request\" onClick=\"if(this.checked == true) { table_$ID_request.style.backgroundColor='66CCFF' } else { table_$ID_request.style.backgroundColor='white' }\"></td>

	</tr>



           </table><font face=verdana size=1>------------------------------------------------------------------------------------------------------------------------------------<br>";

   }

} else {

$session_username = $_SESSION['session_username'];

$result = mysql_query("SELECT * from `news` WHERE NoticeUsername = '$session_username' ORDER BY `ID` DESC")

or die("<b>An Error Has Occured</b>");

while($worked = mysql_fetch_array($result)) {

  $ID_request = $worked[ID];

   $NoticeUsername = $worked[NoticeUsername];

   $NoticeMessage = $worked[NoticeMessage];

   $IP = $worked[IP];

   $NoticeDAT = $worked[NoticeDAT];

   $NoticeTitle = $worked[NoticeTitle];

   

echo "<font face=verdana size=1>Welcome to the Senior DJ Notice area. You can only delete your OWN notices and not any one elses.</font><br><table border=0 ID=table_$ID_request width=661 cellspacing=0 cellpadding=3>

              <tr>

	  <td width=252><font face=verdana size=1><b>Poster Name:</b>$NoticeUsername($IP)&nbsp;</td>

	  <td width=173><font face=verdana size=1><b>Date:</b> $NoticeDAT</td>

	  <td width=86><font face=verdana size=1><b>Title:</b> $NoticeTitle</td>

	  <td rowspan=2 align=right width=20><input type=\"checkbox\" name=\"$ID_request\" value=\"$ID_request\" onClick=\"if(this.checked == true) { table_$ID_request.style.backgroundColor='66CCFF' } else { table_$ID_request.style.backgroundColor='white' }\"></td

	</tr>



           </table><font size=1>-----------------------------------------------------------------------------------------------<br>";

   }

}

?>

</form>

<? } ?>

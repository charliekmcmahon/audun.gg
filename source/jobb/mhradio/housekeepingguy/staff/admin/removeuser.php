<? session_start();
include '../config.php';
include '../online.php';
$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user
if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {
//if the username is not set or the session username is empty or the ip does not match the session ip log them out
session_unset(); //clears firefox
session_destroy(); //clears IE
echo "An Error Has Occured. Please log in again or contact your webmaster.";
exit; } ?>
<? if($session_level == "3") { echo "Please leave if you're not a memeber of management!"; } else { ?>

<table width="100%" background="../../images/header.PNG">
<tr><td>
<font face="Verdana" size="1"><b>Delete Account Users</b></font>
</td></tr></table><font size="1" face="Verdana"><p>Here you can delete any account on this panel. Please only delete if theres a problem or the user has been fired or hacked. Just select there name by ticking the box and press delete!

<?
if($_GET["action"] == "delete") {
foreach($_POST as $key => $value) {
$result = mysql_query("DELETE FROM `staff` WHERE ID='$value'")
or die ("<b>Message not found ($id_request)</b>");
}
echo "<meta http-equiv=\"refresh\" content=\"0;url=removeuser.php\">";
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
<div align="right"><input type=submit value="     Delete Selected     " accesskey="s"><br></div>
<?
if($_SESSION['session_level'] == "1") {
$result = MYSQL_QUERY("SELECT * from `staff` ORDER BY `id` DESC")
or die("<b>COULD NOT GET REQUESTS!</b>");
while($worked = mysql_fetch_array($result)) {
   $id_request = $worked[id];
   $username = $worked[username];
   echo "<table background='FFEBEB'><table border=0 ID=table_$id_request width=500 cellspacing=0 cellpadding=3>
<tr>
	  <td width=252><font face=verdana size=1><b>Username: </b>$username&nbsp;</td>
	  <td rowspan=2 align=right width=20><input type=\"checkbox\" name=\"$id_request\" value=\"$id_request\" onClick=\"if(this.checked == true) { table_$id_request.style.backgroundColor='66CCFF' } else { table_$id_request.style.backgroundColor='white' }\"></td>
	</tr>

           </table><font face=verdana size=1><br>";
   }
} 
?>
</form>
<? } ?>
<? session_start();

include '../config.php';
include '../online.php';

$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user

if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {

//if the username is not set or the session username is empty or the ip does not match the session ip log them out

session_unset(); //clears firefox

session_destroy(); //clears IE

echo "ERROR!!!";

exit; } ?>

<table width="100%" background="../../images/header.PNG">
<tr>
  <td>
<font face="Verdana" size="1"><b>Add Radio Spy </b></font></td>
</tr></table><font size="1" face="Verdana"><p>Here you can modify/add a radio spy to the radio spy page.

<? if($session_level == "3") { echo "You are not of the required level to access this page."; } else { ?>

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

        $Radio_IP1 = $_POST['Radio_IP1'];
		$Radio_Port1 = $_POST['Radio_Port1'];
		$Radio1 = $_POST['Radio1'];
		$Radio_IP2 = $_POST['Radio_IP2'];
		$Radio_Port2 = $_POST['Radio_Port2'];
		$Radio2 = $_POST['Radio2'];
		$Radio_IP3 = $_POST['Radio_IP3'];
		$Radio_Port3 = $_POST['Radio_Port3'];
		$Radio3 = $_POST['Radio3'];
		$Radio_IP4 = $_POST['Radio_IP4'];
		$Radio_Port4 = $_POST['Radio_Port4'];
		$Radio4 = $_POST['Radio4'];
		$Radio_IP5 = $_POST['Radio_IP5'];
		$Radio_Port5 = $_POST['Radio_Port5'];
		$Radio5 = $_POST['Radio5'];
		
$action = $_GET["action"];
if($action == "add") {

mysql_query("UPDATE radio_spy SET ip='$Radio_IP1', port='$Radio_Port1', name='$Radio1' WHERE id='1'") or die(mysql_error());
mysql_query("UPDATE radio_spy SET ip='$Radio_IP2', port='$Radio_Port2', name='$Radio2' WHERE id='2'") or die(mysql_error());
mysql_query("UPDATE radio_spy SET ip='$Radio_IP3', port='$Radio_Port3', name='$Radio3' WHERE id='3'") or die(mysql_error());
mysql_query("UPDATE radio_spy SET ip='$Radio_IP4', port='$Radio_Port4', name='$Radio4' WHERE id='4'") or die(mysql_error());
mysql_query("UPDATE radio_spy SET ip='$Radio_IP5', port='$Radio_Port5', name='$Radio5' WHERE id='5'") or die(mysql_error());

echo "<br><br><b>The Radio Spy Has Been Updated!</b>";
exit ;

} 

?>

<form method='post' action='addspy.php?action=add'>

<table border="0" cellpadding="2" cellspacing="5">

<tr><td><font face="Verdana" size="1"><b>Spy 1</b></font></td><td> </td></tr>

<tr><td><font face="Verdana" size="1">Radio Name:</td><td><input type='text' name='Radio1' class='button' size='25' value='<? echo $spydata1['name'] ?>'></td></tr>

<tr><td><font face="Verdana" size="1">Radio IP:</td><td><input type='text' name='Radio_IP1' class='button' size='25' value='<? echo $spydata1['ip'] ?>'></td></tr>

<tr><td><font face="Verdana" size="1">Radio Port:</td><td><input type='text' name='Radio_Port1' class='button' size='25' value='<? echo $spydata1['port'] ?>'></td></tr>

<br>

<table border="0" cellpadding="2" cellspacing="5">

<tr><td><font face="Verdana" size="1"><b>Spy 2</b></font></td><td> </td></tr>

<tr><td><font face="Verdana" size="1">Radio Name:</td><td><input type='text' name='Radio2' class='button' size='25' value='<? echo $spydata2['name'] ?>'></td></tr>

<tr><td><font face="Verdana" size="1">Radio IP:</td><td><input type='text' name='Radio_IP2' class='button' size='25' value='<? echo $spydata2['ip'] ?>'></td></tr>

<tr><td><font face="Verdana" size="1">Radio Port:</td><td><input type='text' name='Radio_Port2' class='button' size='25' value='<? echo $spydata2['port'] ?>'></td></tr>

<br>

<table border="0" cellpadding="2" cellspacing="5">

<tr><td><font face="Verdana" size="1"><b>Spy 3</b></font></td><td> </td></tr>

<tr><td><font face="Verdana" size="1">Radio Name:</td><td><input type='text' name='Radio3' class='button' size='25' value='<? echo $spydata3['name'] ?>'></td></tr>

<tr><td><font face="Verdana" size="1">Radio IP:</td><td><input type='text' name='Radio_IP3' class='button' size='25' value='<? echo $spydata3['ip'] ?>'></td></tr>

<tr><td><font face="Verdana" size="1">Radio Port:</td><td><input type='text' name='Radio_Port3' class='button' size='25' value='<? echo $spydata3['port'] ?>'></td></tr>

<br>

<table border="0" cellpadding="2" cellspacing="5">

<tr><td><font face="Verdana" size="1"><b>Spy 4</b></font></td><td> </td></tr>

<tr><td><font face="Verdana" size="1">Radio Name:</td><td><input type='text' name='Radio4' class='button' size='25' value='<? echo $spydata4['name'] ?>'></td></tr>

<tr><td><font face="Verdana" size="1">Radio IP:</td><td><input type='text' name='Radio_IP4' class='button' size='25' value='<? echo $spydata4['ip'] ?>'></td></tr>

<tr><td><font face="Verdana" size="1">Radio Port:</td><td><input type='text' name='Radio_Port4' class='button' size='25' value='<? echo $spydata4['port'] ?>'></td></tr>

<br>

<table border="0" cellpadding="2" cellspacing="5">

<tr><td><font face="Verdana" size="1"><b>Spy 5</b></font></td><td> </td></tr>

<tr><td><font face="Verdana" size="1">Radio Name:</td><td><input type='text' name='Radio5' class='button' size='25' value='<? echo $spydata5['name'] ?>'></td></tr>

<tr><td><font face="Verdana" size="1">Radio IP:</td><td><input type='text' name='Radio_IP5' class='button' size='25' value='<? echo $spydata5['ip'] ?>'></td></tr>

<tr><td><font face="Verdana" size="1">Radio Port:</td><td><input type='text' name='Radio_Port5' class='button' size='25' value='<? echo $spydata5['port'] ?>'></td></tr>

<tr><td></td><td><input type='submit' name='submit' value='Update'></td></tr>

</form>

</P></font>

</font></font></font></font></font>

<? } ?>
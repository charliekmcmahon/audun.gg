<? session_start();

include 'config.php';
include 'online.php';

$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user

if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {

//if the username is not set or the session username is empty or the ip does not match the session ip log them out

session_unset(); //clears firefox

session_destroy(); //clears IE

die("Hmm I Wonder Why You Have Ended Up Here :S"); }

include("online.php");

switch($_GET['act']){

default:

  // Alert Data

  $alertQuery = mysql_query("SELECT * FROM alert WHERE active='Y'");

  $alertData = mysql_fetch_array($alertQuery);

  

  if($alertData[message] !=""){

    $Var ="<font face='Verdana' size='1'><u>Current Active Alert</u>: $alertData[message] [<a href='alert.php?act=deactivate'>Deactivate</a>]</font>";

  }



  Echo"

  $Var

  

  

  <form method='post' action='alert.php?act=create'>

  <table>

  <tr>

    <td><font face='Verdana' size='1'>Message:</font></td>

    <td><textarea name='message' cols='30' rows='2'></textarea></td>

  </tr>

    <tr>

    <td></td>

    <td><input type='submit' value='Create'></td>

  </form>";

break;



case"create":

  $message = $_POST['message'];

  if(empty($message)){

    Echo"<b>Error:</b> Please fill out the message.";

    exit;

  }

    mysql_query("UPDATE alert SET active ='N'");

    mysql_query("INSERT INTO alert (message,name,active) VALUES ('$message', '$_SESSION[session_username]', 'Y')");

    

    Echo"<b><font face='Verdana' size='1'>Alert Added Sucessfully</font></b><br>

    <font face='Verdana' size='1'>All other alerts have been deactivated. Please <u>stay on this page</u> until it tells you that all alerts have been deactivated (in 60 seconds which will prevent everyone from receiving it twice and will allow everyone to see the alert). Time left:<br><br>
	<form name='redirect'>
<center>
<form>
<input type='text' size='2' name='redirect2'>
</form>
seconds</b></font>
</center></font>

<script>
<!--
var targetURL='alert.php?act=deactivate'
//change the second to start counting down from
var countdownfrom=60

var currentsecond=document.redirect.redirect2.value=countdownfrom+1
function countredirect(){
if (currentsecond!=1){
currentsecond-=1
document.redirect.redirect2.value=currentsecond
}
else{
window.location=targetURL
return
}
setTimeout('countredirect()',1000)
}

countredirect()
//-->
</script>
";

break;



case"deactivate":

  mysql_query("UPDATE alert SET active ='N'");

  Echo"<b><font face='Verdana' size='1'>Alerts Deactivated</font></b><br>

  <font face='Verdana' size='1'>All previous alerts have been deactivated.</font>";

break;



}

?>
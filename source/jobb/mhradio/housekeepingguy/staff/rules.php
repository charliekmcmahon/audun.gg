<? session_start();
include 'config.php';
include 'online.php';
$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user
if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {
//if the username is not set or the session username is empty or the ip does not match the session ip log them out
session_unset(); //clears firefox
session_destroy(); //clears IE
echo "ERROR!!!";
exit; } ?>
<table width="100%" background="../images/header.PNG">
<tr><td>
<font face="Verdana" size="1"><b>Rules & FAQ's</b></font>
</td></tr></table><font size="1" face="Verdana">
<p>Below are the rules for being a Radio DJ. If you disobey these rules, you will be warned or fired. Read them carefully and stick to them at all times!</P>
<table width="100%" background="../images/header.PNG">
<tr><td>
<font face="Verdana" size="1"><b>Basic DJ Rules</b></font>
</td></tr></table><font size="1" face="Verdana"><p>
<li> Do not use inappropriate language while on the air.<br>
<li> Do not give out the radio server details to anyone for any reason.<br> 
<li> Do not make racist or discriminating comments while DJ&#8217;ing on the air.<br> 
<li> Do not host a competition if you cannot provide the prize for it.<br> 
<li> Do not spam visitors with the Alert User/IP tool.<br> 
<li> Do not perform or talk of any illegal acts while on air. <br> 
<li> Report any radio misconducts to the management immediately.<br> 
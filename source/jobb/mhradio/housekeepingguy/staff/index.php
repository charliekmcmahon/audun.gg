<?php
session_start();
include 'config.php';
if($_GET['login'] == "login") {
$user1_post = addslashes($_POST["username_post"]);
$pass1_post = addslashes($_POST["password_post"]);
$pass1_post = md5($pass1_post);
if($user1_post == "" or $pass1_post == "") { echo "<b>Error: You Did Not Enter A Password</b>"; exit; }
list($user) = mysql_fetch_array(mysql_query("SELECT `username` FROM `staff` WHERE username='$user1_post'"));
list($pass) = mysql_fetch_array(mysql_query("SELECT `password` FROM `staff` WHERE password='$pass1_post'"));
if($user1_post == "$user" and $pass1_post == "$pass") {
$sql = mysql_query("SELECT * FROM `staff` WHERE username='$user' AND password='$pass'");
if(mysql_num_rows($sql)!= 1) { exit; }
$result = mysql_fetch_array($sql);
$_SESSION['session_username'] = $result['username'];
$_SESSION['session_level'] = $result['level'];
$_SESSION['session_ip'] = $_SERVER['REMOTE_ADDR'];
echo "<meta http-equiv=\"refresh\" content=\"0;url=main.php\">";
        exit;
} else { echo "<b>Error: Your username and password didn't match</b>"; }
} else { ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>DJ Panel :: Login</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 5px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(imgs/newbg.png);
}
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="315" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="imgs/login/logintoptop.gif" width="315" height="10" /></td>
  </tr>
  <tr>
    <td height="19" background="imgs/login/logintopmid.gif"><table width="315" height="19" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="8">&nbsp;</td>
        <td><div align="center"><span class="style1">Login to the DJ Panel </span></div></td>
        <td width="9">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="imgs/login/logintopbot.gif" width="315" height="4" /></td>
  </tr>
  <tr>
    <td height="144" valign="top" background="imgs/login/loginmid.gif"><table width="315" height="144" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="3"></td>
        <td valign="top"><form action="index.php?login=login" method="POST"><center><font size="1" face="Verdana"><b>Username:</b></font>

		<?

echo "    <br>&nbsp;<input size='26' type='username' name='username_post' style='font-family: Verdana; font-size: 10px; color: #000000;'>";

 ?>

</input>
          <br />
<font size="1" face="Verdana"><b>Password:</b></font>

		

		<font color="#FFFFFF" size="1" face="Verdana"> 

		<br><input type="password" name="password_post" size="26" style='font-family: Verdana; font-size: 10px; color: #000000;'></font><br><br>
		<input onmouseover="this.src='imgs/login/loginover.png'" onmouseout="this.src='imgs/login/login.png'" type='image' name='myclicker' src='imgs/login/login.png'>
</center></form></td>
        <td width="4"></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="imgs/login/loginbot.gif" width="315" height="12" /></td>
  </tr>
</table>
</body>
</html>
<?php } ?>
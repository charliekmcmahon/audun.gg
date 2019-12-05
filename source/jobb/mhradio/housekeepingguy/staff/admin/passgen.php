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

<? if($session_level == "3") { echo "You are not of the required level to access this page."; } else { ?>
<html>
<body>
<font face="Verdana" size="1">
<p>
  <SCRIPT LANGUAGE="JavaScript">
<!-- Begin

function randomPassword(length)

{

  chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";

  pass = "";

  for(x=0;x<length;x++)

  {

    i = Math.floor(Math.random() * 62);

    pass += chars.charAt(i);

  }

  return pass;

}

function formSubmit()

{

  passform.passbox.value = randomPassword(passform.length.value);

  return false;

}

//  End -->

</script>
  <strong><font face="Verdana" size="1">Random Password Generator</font></strong><font face="Verdana" size="1"></font></p>
<br>
<font face="Verdana" size="1">Here you can generate a password and copy it to your clipboard. You can then go to the edit user pass page and edit a user's password with an extremely hard, if not impossible to guess password.</font>
<form name="passform">
<p>
<font size="1" face="Verdana">Length: <select name="length">
  <option value="1">01</option>
  <option value="2">02</option>
  <option value="3">03</option>
  <option value="4">04</option>
  <option value="5">05</option>
  <option value="6">06</option>
  <option value="7">07</option>
  <option value="8" selected="selected">08</option>
  <option value="9">09</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
</select></font></p>
<p>
<font size="1" face="Verdana">Password: <input name="passbox" type="text" size="50" tabindex="1"></font></p>
<p>
<font size="1" face="Verdana">
<input type="button" value="Generate" onClick="javascript:formSubmit()" tabindex="2"> <input type="reset" value="Clear" tabindex="3"></font></p>
</form>
</body>
</html>
<? } ?>
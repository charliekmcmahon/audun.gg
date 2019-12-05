<?php
session_start();
include("../includes/config.php");
include("../includes/functions.php");

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);

// They are logged in so we can show data [:
?><?php
if($_GET['day'] && !$_GET['action'] && !$_GET['slot']) {

//* HACK BY DAN *//
if(preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"]))
{
	$hack = " href=\"#\"";
}
//* CREDITS TO DAN [: *//
?>
<style type="text/css">
<!--
td, a, a:link, a:active, input, select, textarea
{
	font-size: 12px;
	font-family: Trebuchet MS;
	color: #6d6d6d;
	text-decoration: none;
}
-->
</style>
<br><div style="color: #999999; text-align: center">You are currently viewing <strong><div style="text-transform: uppercase"><? echo("". $_GET['day'] .""); ?></div></strong></div><br />
<table width="200" align="center" cellpadding="0" cellspacing="0" style="border: solid 1px #EEEEEE">
  <tr>
    <td width="73" align="center"><div align="center"><strong>Time</strong></div></td>
    <td width="111" align="center"><div align="center"><strong>Options</strong></div></td>
  </tr>
  <tr>
    <td align="center">00:00</td>
	<td align="center">
	<?php
	
	$time = "00:00";

	
	$info = mysql_fetch_array(mysql_query("SELECT * FROM time". $_GET['day'] ." WHERE time = '00:00'"));
	
	if($info['slot'] == $_SESSION['username']) {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '00:00', '". $_GET['day'] ."');\">Unbook Slot</a></span>");
	
	}
	
	elseif($info['slot'] != "" && $_SESSION['level'] != "admin") {
	
	echo("<strong>DJ ". $info["slot"] ."</strong>");

	}

	elseif($info['slot'] != "" && $_SESSION['level'] == "admin") {
	
	echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '00:00', '". $_GET['day'] ."');\"><strong>DJ ". $info["slot"] ."</strong></a></span>");

	}
	
	elseif($info['slot'] == "") {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"saveData('". $time ."', '00:00', '". $_GET['day'] ."');\">Book Slot</a></span>");

}
	
	?></td>
    </tr>
  <tr>
    <td align="center">01:00</td>
    <td align="center">	<?php
	
	$time = "01:00";

	
	$info = mysql_fetch_array(mysql_query("SELECT * FROM time". $_GET['day'] ." WHERE time = '01:00'"));
	
	if($info['slot'] == $_SESSION['username']) {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '01:00', '". $_GET['day'] ."');\">Unbook Slot</a></span>");
	
	}
	
	elseif($info['slot'] != "" && $_SESSION['level'] != "admin") {
	
	echo("<strong>DJ ". $info["slot"] ."</strong>");

	}

	elseif($info['slot'] != "" && $_SESSION['level'] == "admin") {
	
	echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '01:00', '". $_GET['day'] ."');\"><strong>DJ ". $info["slot"] ."</strong></a></span>");

	}
	
	elseif($info['slot'] == "") {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"saveData('". $time ."', '01:00', '". $_GET['day'] ."');\">Book Slot</a></span>");

}
	
	?></td>
  </tr>

  <tr>
    <td align="center">02:00</td>
    <td align="center">	<?php
	
	$time = "02:00";

	
	$info = mysql_fetch_array(mysql_query("SELECT * FROM time". $_GET['day'] ." WHERE time = '02:00'"));
	
	if($info['slot'] == $_SESSION['username']) {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '02:00', '". $_GET['day'] ."');\">Unbook Slot</a></span>");
	
	}
	
	elseif($info['slot'] != "" && $_SESSION['level'] != "admin") {
	
	echo("<strong>DJ ". $info["slot"] ."</strong>");

	}

	elseif($info['slot'] != "" && $_SESSION['level'] == "admin") {
	
	echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '02:00', '". $_GET['day'] ."');\"><strong>DJ ". $info["slot"] ."</strong></a></span>");

	}
	
	elseif($info['slot'] == "") {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"saveData('". $time ."', '02:00', '". $_GET['day'] ."');\">Book Slot</a></span>");

}
	
	?></td>
  </tr>
  <tr>
    <td align="center">03:00</td>
    <td align="center">	<?php
	
	$time = "03:00";

	$info = mysql_fetch_array(mysql_query("SELECT * FROM time". $_GET['day'] ." WHERE time = '03:00'"));
	
	if($info['slot'] == $_SESSION['username']) {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '03:00', '". $_GET['day'] ."');\">Unbook Slot</a></span>");
	
	}
	
	elseif($info['slot'] != "" && $_SESSION['level'] != "admin") {
	
	echo("<strong>DJ ". $info["slot"] ."</strong>");

	}

	elseif($info['slot'] != "" && $_SESSION['level'] == "admin") {
	
	echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '03:00', '". $_GET['day'] ."');\"><strong>DJ ". $info["slot"] ."</strong></a></span>");

	}
	
	elseif($info['slot'] == "") {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"saveData('". $time ."', '03:00', '". $_GET['day'] ."');\">Book Slot</a></span>");

}
	
	?></td>
  </tr>
  <tr>
    <td align="center">04:00</td>
    <td align="center">	<?php
	
	$time = "04:00";

	$info = mysql_fetch_array(mysql_query("SELECT * FROM time". $_GET['day'] ." WHERE time = '04:00'"));
	
	if($info['slot'] == $_SESSION['username']) {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '04:00', '". $_GET['day'] ."');\">Unbook Slot</a></span>");
	
	}
	
	elseif($info['slot'] != "" && $_SESSION['level'] != "admin") {
	
	echo("<strong>DJ ". $info["slot"] ."</strong>");

	}

	elseif($info['slot'] != "" && $_SESSION['level'] == "admin") {
	
	echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '04:00', '". $_GET['day'] ."');\"><strong>DJ ". $info["slot"] ."</strong></a></span>");

	}
	
	elseif($info['slot'] == "") {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"saveData('". $time ."', '04:00', '". $_GET['day'] ."');\">Book Slot</a></span>");

}
	
	?></td>
  </tr>
  <tr>
    <td align="center">05:00</td>
    <td align="center">	<?php
	
	$time = "05:00";

	
	$info = mysql_fetch_array(mysql_query("SELECT * FROM time". $_GET['day'] ." WHERE time = '05:00'"));
	
	if($info['slot'] == $_SESSION['username']) {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '05:00', '". $_GET['day'] ."');\">Unbook Slot</a></span>");
	
	}
	
	elseif($info['slot'] != "" && $_SESSION['level'] != "admin") {
	
	echo("<strong>DJ ". $info["slot"] ."</strong>");

	}

	elseif($info['slot'] != "" && $_SESSION['level'] == "admin") {
	
	echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '05:00', '". $_GET['day'] ."');\"><strong>DJ ". $info["slot"] ."</strong></a></span>");

	}
	
	elseif($info['slot'] == "") {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"saveData('". $time ."', '05:00', '". $_GET['day'] ."');\">Book Slot</a></span>");

}
	
	?></td>
  </tr>
  <tr>
    <td align="center">06:00</td>
    <td align="center">	<?php
	
	$time = "06:00";

	
	$info = mysql_fetch_array(mysql_query("SELECT * FROM time". $_GET['day'] ." WHERE time = '06:00'"));
	
	if($info['slot'] == $_SESSION['username']) {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '06:00', '". $_GET['day'] ."');\">Unbook Slot</a></span>");
	
	}
	
	elseif($info['slot'] != "" && $_SESSION['level'] != "admin") {
	
	echo("<strong>DJ ". $info["slot"] ."</strong>");

	}

	elseif($info['slot'] != "" && $_SESSION['level'] == "admin") {
	
	echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '06:00', '". $_GET['day'] ."');\"><strong>DJ ". $info["slot"] ."</strong></a></span>");

	}
	
	elseif($info['slot'] == "") {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"saveData('". $time ."', '06:00', '". $_GET['day'] ."');\">Book Slot</a></span>");

}
	
	?></td>
  </tr>
  <tr>
    <td align="center">07:00</td>
    <td align="center">	<?php
	
	$time = "07:00";

	
	$info = mysql_fetch_array(mysql_query("SELECT * FROM time". $_GET['day'] ." WHERE time = '07:00'"));
	
	if($info['slot'] == $_SESSION['username']) {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '07:00', '". $_GET['day'] ."');\">Unbook Slot</a></span>");
	
	}
	
	elseif($info['slot'] != "" && $_SESSION['level'] != "admin") {
	
	echo("<strong>DJ ". $info["slot"] ."</strong>");

	}

	elseif($info['slot'] != "" && $_SESSION['level'] == "admin") {
	
	echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '07:00', '". $_GET['day'] ."');\"><strong>DJ ". $info["slot"] ."</strong></a></span>");

	}
	
	elseif($info['slot'] == "") {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"saveData('". $time ."', '07:00', '". $_GET['day'] ."');\">Book Slot</a></span>");

}
	
	?></td>
  </tr>
  <tr>
    <td align="center">08:00</td>
    <td align="center">	<?php
	
$time = "08:00";
	
	$info = mysql_fetch_array(mysql_query("SELECT * FROM time". $_GET['day'] ." WHERE time = '08:00'"));
	
	if($info['slot'] == $_SESSION['username']) {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '08:00', '". $_GET['day'] ."');\">Unbook Slot</a></span>");
	
	}
	
	elseif($info['slot'] != "" && $_SESSION['level'] != "admin") {
	
	echo("<strong>DJ ". $info["slot"] ."</strong>");

	}

	elseif($info['slot'] != "" && $_SESSION['level'] == "admin") {
	
	echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '08:00', '". $_GET['day'] ."');\"><strong>DJ ". $info["slot"] ."</strong></a></span>");

	}
	
	elseif($info['slot'] == "") {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"saveData('". $time ."', '08:00', '". $_GET['day'] ."');\">Book Slot</a></span>");

}
	
	?></td>
  </tr>
  <tr>
    <td align="center">09:00</td>
    <td align="center">	<?php
	
	$time = "09:00";

	$info = mysql_fetch_array(mysql_query("SELECT * FROM time". $_GET['day'] ." WHERE time = '09:00'"));
	
	if($info['slot'] == $_SESSION['username']) {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '09:00', '". $_GET['day'] ."');\">Unbook Slot</a></span>");
	
	}
	
	elseif($info['slot'] != "" && $_SESSION['level'] != "admin") {
	
	echo("<strong>DJ ". $info["slot"] ."</strong>");

	}

	elseif($info['slot'] != "" && $_SESSION['level'] == "admin") {
	
	echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '09:00', '". $_GET['day'] ."');\"><strong>DJ ". $info["slot"] ."</strong></a></span>");

	}
	
	elseif($info['slot'] == "") {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"saveData('". $time ."', '09:00', '". $_GET['day'] ."');\">Book Slot</a></span>");

}
	
	?></td>
  </tr>
  <tr>
    <td align="center">10:00</td>
    <td align="center"><?php
	
	$time = "10:00";
	
	$info = mysql_fetch_array(mysql_query("SELECT * FROM time". $_GET['day'] ." WHERE time = '$time'"));
	
	if($info['slot'] == $_SESSION['username']) {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Unbook Slot</a></span>");
	
	}
	
	elseif($info['slot'] != "" && $_SESSION['level'] != "admin") {
	
	echo("<strong>DJ ". $info["slot"] ."</strong>");

	}

	elseif($info['slot'] != "" && $_SESSION['level'] == "admin") {
	
	echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '10:00', '". $_GET['day'] ."');\"><strong>DJ ". $info["slot"] ."</strong></a></span>");

	}
	
	elseif($info['slot'] == "") {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"saveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Book Slot</a></span>");

}
	
	?></td>
  </tr>
  <tr>
    <td align="center">11:00</td>
    <td align="center"><?php
	
	$time = "11:00";
	
	$info = mysql_fetch_array(mysql_query("SELECT * FROM time". $_GET['day'] ." WHERE time = '$time'"));
	
	if($info['slot'] == $_SESSION['username']) {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Unbook Slot</a></span>");
	
	}
	
	elseif($info['slot'] != "" && $_SESSION['level'] != "admin") {
	
	echo("<strong>DJ ". $info["slot"] ."</strong>");

	}

	elseif($info['slot'] != "" && $_SESSION['level'] == "admin") {
	
	echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '11:00', '". $_GET['day'] ."');\"><strong>DJ ". $info["slot"] ."</strong></a></span>");

	}
	
	elseif($info['slot'] == "") {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"saveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Book Slot</a></span>");

}
	
	?></td>
  </tr>
  <tr>
    <td align="center">12:00</td>
    <td align="center"><?php
	
	$time = "12:00";
	
	$info = mysql_fetch_array(mysql_query("SELECT * FROM time". $_GET['day'] ." WHERE time = '$time'"));
	
	if($info['slot'] == $_SESSION['username']) {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Unbook Slot</a></span>");
	
	}
	
	elseif($info['slot'] != "" && $_SESSION['level'] != "admin") {
	
	echo("<strong>DJ ". $info["slot"] ."</strong>");

	}

	elseif($info['slot'] != "" && $_SESSION['level'] == "admin") {
	
	echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '12:00', '". $_GET['day'] ."');\"><strong>DJ ". $info["slot"] ."</strong></a></span>");

	}
	
	elseif($info['slot'] == "") {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"saveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Book Slot</a></span>");

}
	
	?></td>
  </tr>
  
  <tr>
    <td align="center">13:00</td>
    <td align="center"><?php
	
	$time = "13:00";
	
	$info = mysql_fetch_array(mysql_query("SELECT * FROM time". $_GET['day'] ." WHERE time = '$time'"));
	
	if($info['slot'] == $_SESSION['username']) {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Unbook Slot</a></span>");
	
	}
	
	elseif($info['slot'] != "" && $_SESSION['level'] != "admin") {
	
	echo("<strong>DJ ". $info["slot"] ."</strong>");

	}

	elseif($info['slot'] != "" && $_SESSION['level'] == "admin") {
	
	echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '13:00', '". $_GET['day'] ."');\"><strong>DJ ". $info["slot"] ."</strong></a></span>");

	}
	
	elseif($info['slot'] == "") {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"saveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Book Slot</a></span>");

}
	
	?></td>
  </tr>
<tr>
  <td align="center">14:00</td>
  <td align="center"><?php
	
	$time = "14:00";
	
	$info = mysql_fetch_array(mysql_query("SELECT * FROM time". $_GET['day'] ." WHERE time = '$time'"));
	
	if($info['slot'] == $_SESSION['username']) {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Unbook Slot</a></span>");
	
	}
	
	elseif($info['slot'] != "" && $_SESSION['level'] != "admin") {
	
	echo("<strong>DJ ". $info["slot"] ."</strong>");

	}

	elseif($info['slot'] != "" && $_SESSION['level'] == "admin") {
	
	echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '14:00', '". $_GET['day'] ."');\"><strong>DJ ". $info["slot"] ."</strong></a></span>");

	}
	
	elseif($info['slot'] == "") {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"saveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Book Slot</a></span>");

}
	
	?></td>
  </tr>
  <tr>
    <td align="center">15:00</td>
    <td align="center"><?php
	
	$time = "15:00";
	
	$info = mysql_fetch_array(mysql_query("SELECT * FROM time". $_GET['day'] ." WHERE time = '$time'"));
	
	if($info['slot'] == $_SESSION['username']) {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Unbook Slot</a></span>");
	
	}
	
	elseif($info['slot'] != "" && $_SESSION['level'] != "admin") {
	
	echo("<strong>DJ ". $info["slot"] ."</strong>");

	}

	elseif($info['slot'] != "" && $_SESSION['level'] == "admin") {
	
	echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '15:00', '". $_GET['day'] ."');\"><strong>DJ ". $info["slot"] ."</strong></a></span>");

	}
	
	elseif($info['slot'] == "") {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"saveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Book Slot</a></span>");

}
	
	?></td>
  </tr>
  
  <tr>
    <td align="center">16:00</td>
    <td align="center"><?php
	
	$time = "16:00";
	
	$info = mysql_fetch_array(mysql_query("SELECT * FROM time". $_GET['day'] ." WHERE time = '$time'"));
	
	if($info['slot'] == $_SESSION['username']) {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Unbook Slot</a></span>");
	
	}
	
	elseif($info['slot'] != "" && $_SESSION['level'] != "admin") {
	
	echo("<strong>DJ ". $info["slot"] ."</strong>");

	}

	elseif($info['slot'] != "" && $_SESSION['level'] == "admin") {
	
	echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '16:00', '". $_GET['day'] ."');\"><strong>DJ ". $info["slot"] ."</strong></a></span>");

	}
	
	elseif($info['slot'] == "") {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"saveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Book Slot</a></span>");

}
	
	?></td>
  </tr>
<tr>
  <td align="center">17:00</td>
  <td align="center"><?php
	
	$time = "17:00";
	
	$info = mysql_fetch_array(mysql_query("SELECT * FROM time". $_GET['day'] ." WHERE time = '$time'"));
	
	if($info['slot'] == $_SESSION['username']) {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Unbook Slot</a></span>");
	
	}
	
	elseif($info['slot'] != "" && $_SESSION['level'] != "admin") {
	
	echo("<strong>DJ ". $info["slot"] ."</strong>");

	}

	elseif($info['slot'] != "" && $_SESSION['level'] == "admin") {
	
	echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '17:00', '". $_GET['day'] ."');\"><strong>DJ ". $info["slot"] ."</strong></a></span>");

	}
	
	elseif($info['slot'] == "") {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"saveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Book Slot</a></span>");

}
	
	?></td>
  </tr>
  <tr>
    <td align="center">18:00</td>
    <td align="center"><?php
	
	$time = "18:00";
	
	$info = mysql_fetch_array(mysql_query("SELECT * FROM time". $_GET['day'] ." WHERE time = '$time'"));
	
	if($info['slot'] == $_SESSION['username']) {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Unbook Slot</a></span>");
	
	}
	
	elseif($info['slot'] != "" && $_SESSION['level'] != "admin") {
	
	echo("<strong>DJ ". $info["slot"] ."</strong>");

	}

	elseif($info['slot'] != "" && $_SESSION['level'] == "admin") {
	
	echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '18:00', '". $_GET['day'] ."');\"><strong>DJ ". $info["slot"] ."</strong></a></span>");

	}
	
	elseif($info['slot'] == "") {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"saveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Book Slot</a></span>");

}
	
	?></td>
  </tr>
  <tr>
    <td align="center">19:00</td>
    <td align="center"><?php
	
	$time = "19:00";
	
	$info = mysql_fetch_array(mysql_query("SELECT * FROM time". $_GET['day'] ." WHERE time = '$time'"));
	
	if($info['slot'] == $_SESSION['username']) {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Unbook Slot</a></span>");
	
	}
	
	elseif($info['slot'] != "" && $_SESSION['level'] != "admin") {
	
	echo("<strong>DJ ". $info["slot"] ."</strong>");

	}

	elseif($info['slot'] != "" && $_SESSION['level'] == "admin") {
	
	echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '19:00', '". $_GET['day'] ."');\"><strong>DJ ". $info["slot"] ."</strong></a></span>");

	}
	
	elseif($info['slot'] == "") {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"saveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Book Slot</a></span>");

}
	
	?></td>
  </tr>
  <tr>
    <td align="center">20:00</td>
    <td align="center"><?php
	
	$time = "20:00";
	
	$info = mysql_fetch_array(mysql_query("SELECT * FROM time". $_GET['day'] ." WHERE time = '$time'"));
	
	if($info['slot'] == $_SESSION['username']) {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Unbook Slot</a></span>");
	
	}
	
	elseif($info['slot'] != "" && $_SESSION['level'] != "admin") {
	
	echo("<strong>DJ ". $info["slot"] ."</strong>");

	}

	elseif($info['slot'] != "" && $_SESSION['level'] == "admin") {
	
	echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '20:00', '". $_GET['day'] ."');\"><strong>DJ ". $info["slot"] ."</strong></a></span>");

	}
	
	elseif($info['slot'] == "") {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"saveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Book Slot</a></span>");

}
	
	?></td>
  </tr>
  <tr>
    <td align="center">21:00</td>
    <td align="center"><?php
	
	$time = "21:00";
	
	$info = mysql_fetch_array(mysql_query("SELECT * FROM time". $_GET['day'] ." WHERE time = '$time'"));
	
	if($info['slot'] == $_SESSION['username']) {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Unbook Slot</a></span>");
	
	}
	
	elseif($info['slot'] != "" && $_SESSION['level'] != "admin") {
	
	echo("<strong>DJ ". $info["slot"] ."</strong>");

	}

	elseif($info['slot'] != "" && $_SESSION['level'] == "admin") {
	
	echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '21:00', '". $_GET['day'] ."');\"><strong>DJ ". $info["slot"] ."</strong></a></span>");

	}
	
	elseif($info['slot'] == "") {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"saveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Book Slot</a></span>");

}
	
	?></td>
  </tr>
  <tr>
    <td align="center">22:00</td>
    <td align="center"><?php
	
	$time = "22:00";
	
	$info = mysql_fetch_array(mysql_query("SELECT * FROM time". $_GET['day'] ." WHERE time = '$time'"));
	
	if($info['slot'] == $_SESSION['username']) {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Unbook Slot</a></span>");
	
	}
	
	elseif($info['slot'] != "" && $_SESSION['level'] != "admin") {
	
	echo("<strong>DJ ". $info["slot"] ."</strong>");

	}

	elseif($info['slot'] != "" && $_SESSION['level'] == "admin") {
	
	echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '22:00', '". $_GET['day'] ."');\"><strong>DJ ". $info["slot"] ."</strong></a></span>");

	}
	
	elseif($info['slot'] == "") {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"saveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Book Slot</a></span>");

}
	
	?></td>
  </tr>
  <tr>
    <td align="center">23:00</td>
    <td align="center"><?php
	
	$time = "23:00";
	
	$info = mysql_fetch_array(mysql_query("SELECT * FROM time". $_GET['day'] ." WHERE time = '$time'"));
	
	if($info['slot'] == $_SESSION['username']) {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Unbook Slot</a></span>");
	
	}
	
	elseif($info['slot'] != "" && $_SESSION['level'] != "admin") {
	
	echo("<strong>DJ ". $info["slot"] ."</strong>");

	}

	elseif($info['slot'] != "" && $_SESSION['level'] == "admin") {
	
	echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '23:00', '". $_GET['day'] ."');\"><strong>DJ ". $info["slot"] ."</strong></a></span>");

	}
	
	elseif($info['slot'] == "") {
	
echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"saveData('". $time ."', '". $time ."', '". $_GET['day'] ."');\">Book Slot</a></span>");

}
	
	?></td>
  </tr>
</table>
<?
} if($_GET["action"] == "book") {

$day = $_GET['day'];
$time = $_GET['slot'];

$dayy = "time".$day."";

$checkzz = mysql_fetch_array(mysql_query("SELECT * FROM `$dayy` WHERE time = '$time'"));

if($checkzz[slot] == "") {

$insertage = mysql_query("UPDATE `$dayy` SET slot = '$_SESSION[username]' WHERE time = '$time'") or die('Error '.mysql_error());

echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"UnsaveData('". $time ."', '". $time ."', '". $day ."');\">Unbook Slot</a></span>");

}
else {
die();
}


}
if($_GET["action"] == "unbook") {

$day = $_GET['day'];
$time = $_GET['slot'];

$dayy = "time".$day."";

$checkzz = mysql_fetch_array(mysql_query("SELECT * FROM `$dayy` WHERE time = '$time'"));

if($checkzz[slot] == $_SESSION['username'] || $_SESSION['level'] == "admin") {

$insertage = mysql_query("UPDATE `$dayy` SET slot = '' WHERE time = '$time'") or die('Error '.mysql_error());

echo("<span id=\"". $time ."\"><a style='cursor: pointer' onClick=\"saveData('". $time ."', '". $time ."', '". $day ."');\">Book Slot</a></span>");

}
else {
die();
}


}
?><?php
}
?>
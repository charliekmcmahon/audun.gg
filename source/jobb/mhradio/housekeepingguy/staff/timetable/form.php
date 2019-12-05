<? session_start();
include 'dbConfig.php';
$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user
if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {
//if the username is not set or the session username is empty or the ip does not match the session ip log them out
session_unset(); //clears firefox
session_destroy(); //clears IE
die("Error!!!"); }
include("online.php");?>
<font face="verdana" size="1">
<html>
<head>
<title>Staff Control Panel</title>
<link href="../staff/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<p align="justify" class="heading"><b><u>Add A Perm Show / Book A Slot For A DJ</b></u></p>
<p align="left" class="main">Fill Out The Form Below To Add A Permanent Show To The Timetable.<br>When You Add A Permanent Slot Please Only Enter The DJ's <b>NAME</b> Not DJ In Front As This Will Mess Up The System !<br> To View Who Wants A Permanent Slot Please Click On 'View Requested Perm Slots'.<br><b>To Delete A Perm Slot Please Select The Time And Day Of It And Then Leave The DJ Name Text Box BLANK!</p>
<form action="addperm.php" method="post">
  <table width="50%" border="0" cellspacing="0" cellpadding="2" class="main" 
align="center">
    <tr>
      <td width="40%"><font face="verdana" size="1"><b>Day:</b></font></td>
      <td width="60%">
        <select name="day" id="day">
          <option value="monday" selected>Monday</option>
          <option value="tuesday">Tuesday</option>
          <option value="wednesday">Wednesday</option>
          <option value="thursday">Thursday</option>
          <option value="friday">Friday</option>
          <option value="saturday">Saturday</option>
          <option value="sunday">Sunday</option>
		</select>
</td>
    </tr>
    <tr>
      <td width="40%"><font face="verdana" size="1"><b>Timeslot:</b></td>
      <td width="60%">
        <select name="time" id="select">
          <option value="a" selected>00:00 - 01:00</option>
          <option value="b">01:00 - 02:00</option>
          <option value="c">02:00 - 03:00</option>
          <option value="d">03:00 - 04:00</option>
          <option value="e">04:00 - 05:00</option>
          <option value="f">05:00 - 06:00</option>
          <option value="g">06:00 - 07:00</option>
          <option value="x">07:00 - 08:00</option>
          <option value="h">08:00 - 09:00</option>
          <option value="i">09:00 - 10:00</option>
          <option value="j">10:00 - 11:00</option>
          <option value="k">11:00 - 12:00</option>
          <option value="l">12:00 - 13:00</option>
          <option value="m">13:00 - 14:00</option>
          <option value="n">14:00 - 15:00</option>
          <option value="o">15:00 - 16:00</option>
          <option value="p">16:00 - 17:00</option>
          <option value="q">17:00 - 18:00</option>
          <option value="r">18:00 - 19:00</option>
          <option value="s">19:00 - 20:00</option>
          <option value="t">20:00 - 21:00</option>
          <option value="u">21:00 - 22:00</option>
          <option value="v">22:00 - 23:00</option>
          <option value="w">23:00 - 00:00</option>
        </select></td>
    </tr>
    <tr>
      <td width="40%"><font face="verdana" size="1"><b>Show Name / DJ Name:</b></td>
      <td width="60%">
        <input name="showname" type="text" size="30" maxlength="50"></td>
    </tr>
	<tr><td><b><font size="1">Is Perm Show?</b></font></td><td><input name="perm" type="checkbox" value="perm" checked></td></tr>
    <tr>
      <td colspan="2" align="center" valign="middle"><input name="Submit" 
type="submit" value="Submit" style="font: verdana,arial; font-size: 10px; 
font-weight: bold">&nbsp;<input name="Reset" type="reset" value="Reset" 
style="font: verdana,arial; font-size: 10px; font-weight: bold"></td>
    </tr>
  </table>
</form>
</body>
</html>


<?php
include ("dbConfig.php");
$time = $_GET['time'];
$result = mysql_query("SELECT * FROM permmonday");
$num = mysql_num_rows($result);
$i = 0;
while ($i < $num){
$a = mysql_result($result,$i,"a");
$b = mysql_result($result,$i,"b");
$c = mysql_result($result,$i,"c");
$d = mysql_result($result,$i,"d");
$e = mysql_result($result,$i,"e");
$f = mysql_result($result,$i,"f");
$g = mysql_result($result,$i,"g");
$x = mysql_result($result,$i,"x");
$h = mysql_result($result,$i,"h");
$ti = mysql_result($result,$i,"i");
$j = mysql_result($result,$i,"j");
$k = mysql_result($result,$i,"k");
$l = mysql_result($result,$i,"l");
$m = mysql_result($result,$i,"m");
$n = mysql_result($result,$i,"n");
$o = mysql_result($result,$i,"o");
$p = mysql_result($result,$i,"p");
$q = mysql_result($result,$i,"q");
$r = mysql_result($result,$i,"r");
$s = mysql_result($result,$i,"s");
$t = mysql_result($result,$i,"t");
$u = mysql_result($result,$i,"u");
$v = mysql_result($result,$i,"v");
$w = mysql_result($result,$i,"w");

echo "<b>&nbsp;Mondays Perm Shows:</b><hr color=\"#000000\" width=\"40%\" align=\"left\">";
if (!$a == ''){
echo "00:00 - 01:00: $a<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$b == ''){
echo "01:00 - 02:00: $b<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$c == ''){
echo "02:00 - 03:00: $c<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$d == ''){
echo "03:00 - 04:00: $d<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$e == ''){
echo "04:00 - 05:00: $e<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$f == ''){
echo "05:00 - 06:00: $f<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$g == ''){
echo "06:00 - 07:00: $g<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$x == ''){
echo "07:00 - 08:00: $x<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$h == ''){
echo "08:00 - 09:00: $h<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$ti == ''){
echo "09:00 - 10:00: $ti<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$j == ''){
echo "10:00 - 11:00: $j<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$k == ''){
echo "11:00 - 12:00: $k<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$l == ''){
echo "12:00 - 13:00: $l<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$m == ''){
echo "13:00 - 14:00: $m<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$n == ''){
echo "14:00 - 15:00: $n<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$o == ''){
echo "15:00 - 16:00: $o<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$p == ''){
echo "16:00 - 17:00: $p<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$q == ''){
echo "17:00 - 18:00: $q<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$r == ''){
echo "18:00 - 19:00: $r<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$s == ''){
echo "19:00 - 20:00: $s<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$t == ''){
echo "20:00 - 21:00: $t<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$u == ''){
echo "21:00 - 22:00: $u<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$v == ''){
echo "22:00 - 23:00: $v<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$w == ''){
echo "23:00 - 00:00: $w<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
$i++;
}

$result = mysql_query("SELECT * FROM permtuesday");
$num = mysql_num_rows($result);
$i = 0;
while ($i < $num){
$a = mysql_result($result,$i,"a");
$b = mysql_result($result,$i,"b");
$c = mysql_result($result,$i,"c");
$d = mysql_result($result,$i,"d");
$e = mysql_result($result,$i,"e");
$f = mysql_result($result,$i,"f");
$g = mysql_result($result,$i,"g");
$x = mysql_result($result,$i,"x");
$h = mysql_result($result,$i,"h");
$ti = mysql_result($result,$i,"i");
$j = mysql_result($result,$i,"j");
$k = mysql_result($result,$i,"k");
$l = mysql_result($result,$i,"l");
$m = mysql_result($result,$i,"m");
$n = mysql_result($result,$i,"n");
$o = mysql_result($result,$i,"o");
$p = mysql_result($result,$i,"p");
$q = mysql_result($result,$i,"q");
$r = mysql_result($result,$i,"r");
$s = mysql_result($result,$i,"s");
$t = mysql_result($result,$i,"t");
$u = mysql_result($result,$i,"u");
$v = mysql_result($result,$i,"v");
$w = mysql_result($result,$i,"w");

echo "<b>&nbsp;Tuesdays Perm Shows:</b><hr color=\"#000000\" width=\"40%\" align=\"left\">";
if (!$a == ''){
echo "00:00 - 01:00: $a<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$b == ''){
echo "01:00 - 02:00: $b<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$c == ''){
echo "02:00 - 03:00: $c<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$d == ''){
echo "03:00 - 04:00: $d<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$e == ''){
echo "04:00 - 05:00: $e<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$f == ''){
echo "05:00 - 06:00: $f<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$g == ''){
echo "06:00 - 07:00: $g<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$x == ''){
echo "07:00 - 08:00: $x<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$h == ''){
echo "08:00 - 09:00: $h<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$ti == ''){
echo "09:00 - 10:00: $ti<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$j == ''){
echo "10:00 - 11:00: $j<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$k == ''){
echo "11:00 - 12:00: $k<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$l == ''){
echo "12:00 - 13:00: $l<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$m == ''){
echo "13:00 - 14:00: $m<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$n == ''){
echo "14:00 - 15:00: $n<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$o == ''){
echo "15:00 - 16:00: $o<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$p == ''){
echo "16:00 - 17:00: $p<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$q == ''){
echo "17:00 - 18:00: $q<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$r == ''){
echo "18:00 - 19:00: $r<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$s == ''){
echo "19:00 - 20:00: $s<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$t == ''){
echo "20:00 - 21:00: $t<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$u == ''){
echo "21:00 - 22:00: $u<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$v == ''){
echo "22:00 - 23:00: $v<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$w == ''){
echo "23:00 - 00:00: $w<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
$i++;
}

$result = mysql_query("SELECT * FROM permwednesday");
$num = mysql_num_rows($result);
$i = 0;
while ($i < $num){
$a = mysql_result($result,$i,"a");
$b = mysql_result($result,$i,"b");
$c = mysql_result($result,$i,"c");
$d = mysql_result($result,$i,"d");
$e = mysql_result($result,$i,"e");
$f = mysql_result($result,$i,"f");
$g = mysql_result($result,$i,"g");
$x = mysql_result($result,$i,"x");
$h = mysql_result($result,$i,"h");
$ti = mysql_result($result,$i,"i");
$j = mysql_result($result,$i,"j");
$k = mysql_result($result,$i,"k");
$l = mysql_result($result,$i,"l");
$m = mysql_result($result,$i,"m");
$n = mysql_result($result,$i,"n");
$o = mysql_result($result,$i,"o");
$p = mysql_result($result,$i,"p");
$q = mysql_result($result,$i,"q");
$r = mysql_result($result,$i,"r");
$s = mysql_result($result,$i,"s");
$t = mysql_result($result,$i,"t");
$u = mysql_result($result,$i,"u");
$v = mysql_result($result,$i,"v");
$w = mysql_result($result,$i,"w");

echo "<b>&nbsp;Wednesdays Perm Shows:</b><hr color=\"#000000\" width=\"40%\" align=\"left\">";
if (!$a == ''){
echo "00:00 - 01:00: $a<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$b == ''){
echo "01:00 - 02:00: $b<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$c == ''){
echo "02:00 - 03:00: $c<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$d == ''){
echo "03:00 - 04:00: $d<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$e == ''){
echo "04:00 - 05:00: $e<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$f == ''){
echo "05:00 - 06:00: $f<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$g == ''){
echo "06:00 - 07:00: $g<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$x == ''){
echo "07:00 - 08:00: $x<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$h == ''){
echo "08:00 - 09:00: $h<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$ti == ''){
echo "09:00 - 10:00: $ti<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$j == ''){
echo "10:00 - 11:00: $j<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$k == ''){
echo "11:00 - 12:00: $k<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$l == ''){
echo "12:00 - 13:00: $l<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$m == ''){
echo "13:00 - 14:00: $m<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$n == ''){
echo "14:00 - 15:00: $n<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$o == ''){
echo "15:00 - 16:00: $o<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$p == ''){
echo "16:00 - 17:00: $p<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$q == ''){
echo "17:00 - 18:00: $q<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$r == ''){
echo "18:00 - 19:00: $r<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$s == ''){
echo "19:00 - 20:00: $s<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$t == ''){
echo "20:00 - 21:00: $t<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$u == ''){
echo "21:00 - 22:00: $u<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$v == ''){
echo "22:00 - 23:00: $v<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$w == ''){
echo "23:00 - 00:00: $w<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
$i++;
}
$result = mysql_query("SELECT * FROM permthursday");
$num = mysql_num_rows($result);
$i = 0;
while ($i < $num){
$a = mysql_result($result,$i,"a");
$b = mysql_result($result,$i,"b");
$c = mysql_result($result,$i,"c");
$d = mysql_result($result,$i,"d");
$e = mysql_result($result,$i,"e");
$f = mysql_result($result,$i,"f");
$g = mysql_result($result,$i,"g");
$x = mysql_result($result,$i,"x");
$h = mysql_result($result,$i,"h");
$ti = mysql_result($result,$i,"i");
$j = mysql_result($result,$i,"j");
$k = mysql_result($result,$i,"k");
$l = mysql_result($result,$i,"l");
$m = mysql_result($result,$i,"m");
$n = mysql_result($result,$i,"n");
$o = mysql_result($result,$i,"o");
$p = mysql_result($result,$i,"p");
$q = mysql_result($result,$i,"q");
$r = mysql_result($result,$i,"r");
$s = mysql_result($result,$i,"s");
$t = mysql_result($result,$i,"t");
$u = mysql_result($result,$i,"u");
$v = mysql_result($result,$i,"v");
$w = mysql_result($result,$i,"w");

echo "<b>&nbsp;Thursdays Perm Shows:</b><hr color=\"#000000\" width=\"40%\" align=\"left\">";
if (!$a == ''){
echo "00:00 - 01:00: $a<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$b == ''){
echo "01:00 - 02:00: $b<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$c == ''){
echo "02:00 - 03:00: $c<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$d == ''){
echo "03:00 - 04:00: $d<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$e == ''){
echo "04:00 - 05:00: $e<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$f == ''){
echo "05:00 - 06:00: $f<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$g == ''){
echo "06:00 - 07:00: $g<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$x == ''){
echo "07:00 - 08:00: $x<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$h == ''){
echo "08:00 - 09:00: $h<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$ti == ''){
echo "09:00 - 10:00: $ti<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$j == ''){
echo "10:00 - 11:00: $j<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$k == ''){
echo "11:00 - 12:00: $k<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$l == ''){
echo "12:00 - 13:00: $l<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$m == ''){
echo "13:00 - 14:00: $m<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$n == ''){
echo "14:00 - 15:00: $n<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$o == ''){
echo "15:00 - 16:00: $o<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$p == ''){
echo "16:00 - 17:00: $p<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$q == ''){
echo "17:00 - 18:00: $q<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$r == ''){
echo "18:00 - 19:00: $r<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$s == ''){
echo "19:00 - 20:00: $s<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$t == ''){
echo "20:00 - 21:00: $t<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$u == ''){
echo "21:00 - 22:00: $u<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$v == ''){
echo "22:00 - 23:00: $v<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$w == ''){
echo "23:00 - 00:00: $w<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
$i++;
}
$result = mysql_query("SELECT * FROM permfriday");
$num = mysql_num_rows($result);
$i = 0;
while ($i < $num){
$a = mysql_result($result,$i,"a");
$b = mysql_result($result,$i,"b");
$c = mysql_result($result,$i,"c");
$d = mysql_result($result,$i,"d");
$e = mysql_result($result,$i,"e");
$f = mysql_result($result,$i,"f");
$g = mysql_result($result,$i,"g");
$x = mysql_result($result,$i,"x");
$h = mysql_result($result,$i,"h");
$ti = mysql_result($result,$i,"i");
$j = mysql_result($result,$i,"j");
$k = mysql_result($result,$i,"k");
$l = mysql_result($result,$i,"l");
$m = mysql_result($result,$i,"m");
$n = mysql_result($result,$i,"n");
$o = mysql_result($result,$i,"o");
$p = mysql_result($result,$i,"p");
$q = mysql_result($result,$i,"q");
$r = mysql_result($result,$i,"r");
$s = mysql_result($result,$i,"s");
$t = mysql_result($result,$i,"t");
$u = mysql_result($result,$i,"u");
$v = mysql_result($result,$i,"v");
$w = mysql_result($result,$i,"w");

echo "<b>&nbsp;Fridays Perm Shows:</b><hr color=\"#000000\" width=\"40%\" align=\"left\">";
if (!$a == ''){
echo "00:00 - 01:00: $a<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$b == ''){
echo "01:00 - 02:00: $b<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$c == ''){
echo "02:00 - 03:00: $c<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$d == ''){
echo "03:00 - 04:00: $d<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$e == ''){
echo "04:00 - 05:00: $e<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$f == ''){
echo "05:00 - 06:00: $f<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$g == ''){
echo "06:00 - 07:00: $g<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$x == ''){
echo "07:00 - 08:00: $x<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$h == ''){
echo "08:00 - 09:00: $h<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$ti == ''){
echo "09:00 - 10:00: $ti<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$j == ''){
echo "10:00 - 11:00: $j<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$k == ''){
echo "11:00 - 12:00: $k<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$l == ''){
echo "12:00 - 13:00: $l<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$m == ''){
echo "13:00 - 14:00: $m<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$n == ''){
echo "14:00 - 15:00: $n<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$o == ''){
echo "15:00 - 16:00: $o<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$p == ''){
echo "16:00 - 17:00: $p<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$q == ''){
echo "17:00 - 18:00: $q<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$r == ''){
echo "18:00 - 19:00: $r<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$s == ''){
echo "19:00 - 20:00: $s<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$t == ''){
echo "20:00 - 21:00: $t<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$u == ''){
echo "21:00 - 22:00: $u<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$v == ''){
echo "22:00 - 23:00: $v<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$w == ''){
echo "23:00 - 00:00: $w<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
$i++;
}
$result = mysql_query("SELECT * FROM permsaturday");
$num = mysql_num_rows($result);
$i = 0;
while ($i < $num){
$a = mysql_result($result,$i,"a");
$b = mysql_result($result,$i,"b");
$c = mysql_result($result,$i,"c");
$d = mysql_result($result,$i,"d");
$e = mysql_result($result,$i,"e");
$f = mysql_result($result,$i,"f");
$g = mysql_result($result,$i,"g");
$x = mysql_result($result,$i,"x");
$h = mysql_result($result,$i,"h");
$ti = mysql_result($result,$i,"i");
$j = mysql_result($result,$i,"j");
$k = mysql_result($result,$i,"k");
$l = mysql_result($result,$i,"l");
$m = mysql_result($result,$i,"m");
$n = mysql_result($result,$i,"n");
$o = mysql_result($result,$i,"o");
$p = mysql_result($result,$i,"p");
$q = mysql_result($result,$i,"q");
$r = mysql_result($result,$i,"r");
$s = mysql_result($result,$i,"s");
$t = mysql_result($result,$i,"t");
$u = mysql_result($result,$i,"u");
$v = mysql_result($result,$i,"v");
$w = mysql_result($result,$i,"w");

echo "<b>&nbsp;Saturdays Perm Shows:</b><hr color=\"#000000\" width=\"40%\" align=\"left\">";
if (!$a == ''){
echo "00:00 - 01:00: $a<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$b == ''){
echo "01:00 - 02:00: $b<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$c == ''){
echo "02:00 - 03:00: $c<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$d == ''){
echo "03:00 - 04:00: $d<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$e == ''){
echo "04:00 - 05:00: $e<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$f == ''){
echo "05:00 - 06:00: $f<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$g == ''){
echo "06:00 - 07:00: $g<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$x == ''){
echo "07:00 - 08:00: $x<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$h == ''){
echo "08:00 - 09:00: $h<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$ti == ''){
echo "09:00 - 10:00: $ti<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$j == ''){
echo "10:00 - 11:00: $j<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$k == ''){
echo "11:00 - 12:00: $k<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$l == ''){
echo "12:00 - 13:00: $l<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$m == ''){
echo "13:00 - 14:00: $m<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$n == ''){
echo "14:00 - 15:00: $n<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$o == ''){
echo "15:00 - 16:00: $o<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$p == ''){
echo "16:00 - 17:00: $p<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$q == ''){
echo "17:00 - 18:00: $q<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$r == ''){
echo "18:00 - 19:00: $r<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$s == ''){
echo "19:00 - 20:00: $s<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$t == ''){
echo "20:00 - 21:00: $t<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$u == ''){
echo "21:00 - 22:00: $u<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$v == ''){
echo "22:00 - 23:00: $v<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$w == ''){
echo "23:00 - 00:00: $w<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
$i++;
}
$result = mysql_query("SELECT * FROM permsunday");
$num = mysql_num_rows($result);
$i = 0;
while ($i < $num){
$a = mysql_result($result,$i,"a");
$b = mysql_result($result,$i,"b");
$c = mysql_result($result,$i,"c");
$d = mysql_result($result,$i,"d");
$e = mysql_result($result,$i,"e");
$f = mysql_result($result,$i,"f");
$g = mysql_result($result,$i,"g");
$x = mysql_result($result,$i,"x");
$h = mysql_result($result,$i,"h");
$ti = mysql_result($result,$i,"i");
$j = mysql_result($result,$i,"j");
$k = mysql_result($result,$i,"k");
$l = mysql_result($result,$i,"l");
$m = mysql_result($result,$i,"m");
$n = mysql_result($result,$i,"n");
$o = mysql_result($result,$i,"o");
$p = mysql_result($result,$i,"p");
$q = mysql_result($result,$i,"q");
$r = mysql_result($result,$i,"r");
$s = mysql_result($result,$i,"s");
$t = mysql_result($result,$i,"t");
$u = mysql_result($result,$i,"u");
$v = mysql_result($result,$i,"v");
$w = mysql_result($result,$i,"w");

echo "<b>&nbsp;Sundays Perm Shows:</b><hr color=\"#000000\" width=\"40%\" align=\"left\">";
if (!$a == ''){
echo "00:00 - 01:00: $a<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$b == ''){
echo "01:00 - 02:00: $b<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$c == ''){
echo "02:00 - 03:00: $c<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$d == ''){
echo "03:00 - 04:00: $d<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$e == ''){
echo "04:00 - 05:00: $e<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$f == ''){
echo "05:00 - 06:00: $f<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$g == ''){
echo "06:00 - 07:00: $g<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$x == ''){
echo "07:00 - 08:00: $x<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$h == ''){
echo "08:00 - 09:00: $h<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$ti == ''){
echo "09:00 - 10:00: $ti<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$j == ''){
echo "10:00 - 11:00: $j<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$k == ''){
echo "11:00 - 12:00: $k<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$l == ''){
echo "12:00 - 13:00: $l<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$m == ''){
echo "13:00 - 14:00: $m<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$n == ''){
echo "14:00 - 15:00: $n<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$o == ''){
echo "15:00 - 16:00: $o<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$p == ''){
echo "16:00 - 17:00: $p<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$q == ''){
echo "17:00 - 18:00: $q<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$r == ''){
echo "18:00 - 19:00: $r<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$s == ''){
echo "19:00 - 20:00: $s<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$t == ''){
echo "20:00 - 21:00: $t<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$u == ''){
echo "21:00 - 22:00: $u<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$v == ''){
echo "22:00 - 23:00: $v<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
if (!$w == ''){
echo "23:00 - 00:00: $w<hr color=\"#000000\" width=\"40%\" align=\"left\">";
}
$i++;
}
if($time == 'booked'){
echo "<b>Perm Show / DJ Slot Added!</b>";
} ?>
</font>
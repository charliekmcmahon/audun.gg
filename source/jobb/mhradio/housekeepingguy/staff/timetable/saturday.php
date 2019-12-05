<body bgcolor="#FDDF85">
<font face="Verdana" size="1">
<? session_start();
include 'dbConfig.php';
?>
<?php
include ("dbConfig.php");
$query = "SELECT * FROM saturday";
$result = mysql_query($query);
$update = $_GET['update'];
$num = mysql_numrows($result);
$user = $_SESSION['session_username'];
$i = 0;
while($i < $num){
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
$i++;
}
$update = $_GET['update'];
$delete = $_GET['delete'];
?>
<html>
<head><title>Staff Control Panel: Slot Booking</title></head>
<link href="../staff/style.css" rel="stylesheet" type="text/css">
</font>
<body>
<font face="verdana" size="1">
<p align="left" class="heading">&nbsp;</p>
</font>
<font face="Verdana" size="1">
<p align="left" class="main">Find out when your fav dj is online!</p></font>
	<center>
<font face="Verdana" size="1">
<a href="#" onClick="window.history.go(-1)">Go Back ?</a>&nbsp;~&nbsp;<a href="javascript:location.reload(true)">Refresh ?</a>
  </font>
  <table border="1" bordercolor="#000000" width="45%" class="main" 
cellpadding="2" cellspacing="0">
    <tr>

      <td width="100" align="center"><font face="Verdana" size="1">00:00 - 01:00</font></td>
		<td><font face="Verdana" size="1"><?php if($a == ''){
		
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"a");
                $i++;
                }
                if ($user == $check){
		
		}
		else{
                echo "$a";
               }
               }
		?>
		</font>
		</td>
	</tr>
	<tr>

      <td width="100" align="center"><font face="Verdana" size="1">01:00 - 02:00</font></td>
		<td><font face="Verdana" size="1"><?php if($b == ''){
		echo"Slot not booked";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"b");
                $i++;
                }
                if ($user == $check){
		
		}
                else{
                echo "$b";
               }
               }
		?></font></td>
	</tr>
	<tr>

      <td width="100" align="center"><font face="Verdana" size="1">02:00 - 03:00</font></td>
		<td><font face="Verdana" size="1"><?php if($c == ''){
		echo"Slot not booked";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"c");
                $i++;
                }
                if ($user == $check){
		
		}
                else{
                echo "$c";
               }
               }
		?></font></td>
	</tr>
	<tr>

      <td width="100" align="center"><font face="Verdana" size="1">03:00 - 04:00</font></td>
		<td><font face="Verdana" size="1"><?php if($d == ''){
		echo"Slot not booked";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"d");
                $i++;
                }
                if ($user == $check){
		
		}
                else{
                echo "$d";
               }
               }
		?></font></td>
	</tr>
	<tr>

      <td width="100" align="center"><font face="Verdana" size="1">04:00 - 05:00</font></td>
		<td><font face="Verdana" size="1"><?php if($e == ''){
		echo"Slot not booked";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"e");
                $i++;
                }
                if ($user == $check){
		
		}
                else{
                echo "$e";
               }
               }
		?></font></td>
	</tr>
	<tr>

      <td width="100" align="center"><font face="Verdana" size="1">05:00 - 06:00</font></td>
		<td><font face="Verdana" size="1"><?php if($f == ''){
		echo"Slot not booked";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"f");
                $i++;
                }
                if ($user == $check){
		
		}
                else{
                echo "$f";
               }
               }
		?></font></td>
	</tr>
	<tr>

      <td width="100" align="center"><font face="Verdana" size="1">06:00 - 07:00</font></td>
		<td><font face="Verdana" size="1"><?php if($g == ''){
		echo"Slot not booked";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"g");
                $i++;
                }
                if ($user == $check){
		
		}
                else{
                echo "$g";
               }
               }
		?></font></td>
	</tr>
	<tr>

      <td width="100" align="center"><font face="Verdana" size="1">07:00 - 08:00</font></td>
		<td><font face="Verdana" size="1"><?php if($x == ''){
		echo"Slot not booked";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"x");
                $i++;
                }
                if ($user == $check){
		
		}
                else{
                echo "$x";
               }
               }
		?></font></td>
	</tr>
	<tr>

      <td width="100" align="center"><font face="Verdana" size="1">08:00 - 09:00</font></td>
		<td><font face="Verdana" size="1"><?php if($h == ''){
		echo"Slot not booked";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"h");
                $i++;
                }
                if ($user == $check){
		
		}
                else{
                echo "$h";
               }
               }
		?></font></td>
	</tr>
	<tr>

      <td width="100" align="center"><font face="Verdana" size="1">09:00 - 10:00</font></td>
		<td><font face="Verdana" size="1"><?php if($ti == ''){
		echo"Slot not booked";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"i");
                $i++;
                }
                if ($user == $check){
		
		}
                else{
                echo "$ti";
               }
               }
		?></font></td>
	</tr>
	<tr>

      <td width="100" align="center"><font face="Verdana" size="1">10:00 - 11:00</font></td>
		<td><font face="Verdana" size="1"><?php if($j == ''){
		echo"Slot not booked";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"j");
                $i++;
                }
                if ($user == $check){
		
		}
                else{
                echo "$j";
               }
               }
		?></font></td>
	</tr>
	<tr>

      <td width="100" align="center"><font face="Verdana" size="1">11:00 - 12:00</font></td>
		<td><font face="Verdana" size="1"><?php if($k == ''){
		echo"Slot not booked";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"k");
                $i++;
                }
                if ($user == $check){
		
		}
                else{
                echo "$k";
               }
               }
		?></font></td>
	</tr>
	<tr>

      <td width="100" align="center"><font face="Verdana" size="1">12:00 - 13:00</font></td>
		
     <td><font face="Verdana" size="1"><?php if($l == ''){
		echo"Slot not booked";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"l");
                $i++;
                }
                if ($user == $check){
		
		}
                else{
                echo "$l";
               }
               }
		?></font></td>
	</tr>
	<tr>

      <td width="100" align="center"><font face="Verdana" size="1">13:00 - 14:00</font></td>
	  <td><font face="Verdana" size="1"><?php if($m == ''){
		echo"Slot not booked";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"m");
                $i++;
                }
                if ($user == $check){
		
		}
                else{
                echo "$m";
               }
               }
		?></font></td>
	</tr>
	<tr>

      <td width="100" align="center"><font face="Verdana" size="1">14:00 - 15:00</font></td>
		
      <td><font face="Verdana" size="1"><?php if($n == ''){
		echo"Slot not booked";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"n");
                $i++;
                }
                if ($user == $check){
		
		}
                else{
                echo "$n";
               }
               }
		?></font></td>
	</tr>
	<tr>

      <td width="100" align="center"><font face="Verdana" size="1">15:00 - 16:00</font></td>
		
      <td><font face="Verdana" size="1"><?php if($o == ''){
		echo"Slot not booked";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"o");
                $i++;
                }
                if ($user == $check){
		
		}
                else{
                echo "$o";
               }
               }
		?></font></td>
	</tr>
	<tr>

      <td width="100" align="center"><font face="Verdana" size="1">16:00 - 17:00</font></td>
		
      <td><font face="Verdana" size="1"><?php if($p == ''){
		echo"Slot not booked";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"p");
                $i++;
                }
                if ($user == $check){
		
		}
                else{
                echo "$p";
               }
               }
		?></font></td>
	</tr>
	<tr>

      <td width="100" align="center"><font face="Verdana" size="1">17:00 - 18:00</font></td>
		
      <td><font face="Verdana" size="1"><?php if($q == ''){
		echo"Slot not booked";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"q");
                $i++;
                }
                if ($user == $check){
		
		}
                else{
                echo "$q";
               }
               }
		?></font></td>
	</tr>
	<tr>

      <td width="100" align="center"><font face="Verdana" size="1">18:00 - 19:00</font></td>
		<td><font face="Verdana" size="1"><?php if($r == ''){
		echo"Slot not booked";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"r");
                $i++;
                }
                if ($user == $check){
		
		}
                else{
                echo "$r";
               }
               }
		?></font></td>
	</tr>
	<tr>

      <td width="100" align="center"><font face="Verdana" size="1">19:00 - 20:00</font></td>
		
      <td><font face="Verdana" size="1"><?php if($s == ''){
		echo"Slot not booked";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"s");
                $i++;
                }
                if ($user == $check){
		
		}
                else{
                echo "$s";
               }
               }
		?></font></td>
	</tr>
	<tr>

      <td width="100" align="center"><font face="Verdana" size="1">20:00 - 21:00</font></td>
		
      <td><font face="Verdana" size="1"><?php if($t == ''){
		echo"Slot not booked";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"t");
                $i++;
                }
                if ($user == $check){
		
		}
                else{
                echo "$t";
               }
               }
		?></font></td>
	</tr>
	<tr>

      <td width="100" align="center"><font face="Verdana" size="1">21:00 - 22:00</font></td>
		<td><font face="Verdana" size="1"><?php if($u == ''){
		echo"Slot not booked";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"u");
                $i++;
                }
                if ($user == $check){
		
		}
                else{
                echo "$u";
               }
               }
		?></font></td>
	</tr>
	<tr>

      <td width="100" align="center"><font face="Verdana" size="1">22:00 - 23:00</font></td>
		<td><font face="Verdana" size="1"><?php if($v == ''){
		echo"Slot not booked";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"v");
                $i++;
                }
                if ($user == $check){
		
		}
                else{
                echo "$v";
               }
               }
		?></font></td>

	</tr>
	<tr>

      <td width="100" align="center"><font face="Verdana" size="1">23:00 - 00:00</font></td>
		<td><font face="Verdana" size="1"><?php if($w == ''){
		echo"Slot not booked";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"w");
                $i++;
                }
                if ($user == $check){
		
		}
                else{
                echo "$w";
               }
               }
		?></font></td>
	</tr>
	</table>
	</center>
</body>
<?php
if ($update == a){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"a");
$i++;
}
if ($check == ''){
mysql_query("UPDATE saturday SET a='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{
echo "You cannot book other Dj's Slots!";
}
}

elseif ($update == b){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"b");
$i++;
}
if ($check == ''){
mysql_query("UPDATE saturday SET b='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{
echo "You cannot book other Dj's Slots!";
}
}

elseif ($update == c){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"c");
$i++;
}
if ($check == ''){
mysql_query("UPDATE saturday SET c='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{
echo "You cannot book other Dj's Slots!";
}
}

elseif ($update == d){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"d");
$i++;
}
if ($check == ''){
mysql_query("UPDATE saturday SET d='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{
echo "You cannot book other Dj's Slots!";
}
}

elseif ($update == e){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"e");
$i++;
}
if ($check == ''){
mysql_query("UPDATE saturday SET e='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{
echo "You cannot book other Dj's Slots!";
}
}

elseif ($update == f){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"f");
$i++;
}
if ($check == ''){
mysql_query("UPDATE saturday SET f='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{
echo "You cannot book other Dj's Slots!";
}
}

elseif ($update == x){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"x");
$i++;
}
if ($check == ''){
mysql_query("UPDATE saturday SET x='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{
echo "You cannot book other Dj's Slots!";
}
}

elseif ($update == g){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"g");
$i++;
}
if ($check == ''){
mysql_query("UPDATE saturday SET g='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{
echo "You cannot book other Dj's Slots!";
}
}

elseif ($update == h){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"h");
$i++;
}
if ($check == ''){
mysql_query("UPDATE saturday SET h='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{
echo "You cannot book other Dj's Slots!";
}
}

elseif ($update == ti){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"i");
$i++;
}
if ($check == ''){
mysql_query("UPDATE saturday SET i='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{
echo "You cannot book other Dj's Slots!";
}
}

elseif ($update == j){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"j");
$i++;

}
if ($check == ''){
mysql_query("UPDATE saturday SET j='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{
echo "You cannot book other Dj's Slots!";
}
}

elseif ($update == k){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"k");
$i++;
}
if ($check == ''){
mysql_query("UPDATE saturday SET k='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{
echo "You cannot book other Dj's Slots!";
}
}

elseif ($update == l){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"l");
$i++;
}
if ($check == ''){
mysql_query("UPDATE saturday SET l='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{
echo "You cannot book other Dj's Slots!";
}
}

elseif ($update == m){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"m");
$i++;
}
if ($check == ''){
mysql_query("UPDATE saturday SET m='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{}
}

elseif ($update == n){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"n");
$i++;
}
if ($check == ''){
mysql_query("UPDATE saturday SET n='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{
echo "You cannot book other Dj's Slots!";
}
}

elseif ($update == o){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"o");
$i++;
}
if ($check == ''){
mysql_query("UPDATE saturday SET o='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{
echo "You cannot book other Dj's Slots!";
}
}

elseif ($update == p){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"p");
$i++;
}
if ($check == ''){
mysql_query("UPDATE saturday SET p='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{
echo "You cannot book other Dj's Slots!";
}
}

elseif ($update == q){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"q");
$i++;
}
if ($check == ''){
mysql_query("UPDATE saturday SET q='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{
echo "You cannot book other Dj's Slots!";
}
}

elseif ($update == r){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"r");
$i++;
}
if ($check == ''){
mysql_query("UPDATE saturday SET r='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{
echo "You cannot book other Dj's Slots!";
}
}

elseif ($update == s){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"s");
$i++;
}
if ($check == ''){
mysql_query("UPDATE saturday SET s='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{
echo "You cannot book other Dj's Slots!";
}
}

elseif ($update == t){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"t");
$i++;
}
if ($check == ''){
mysql_query("UPDATE saturday SET t='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{
echo "You cannot book other Dj's Slots!";
}
}

elseif ($update == u){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"u");
$i++;
}
if ($check == ''){
mysql_query("UPDATE saturday SET u='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{
echo "You cannot book other Dj's Slots!";
}
}

elseif ($update == v){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"v");
$i++;
}
if ($check == ''){
mysql_query("UPDATE saturday SET v='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{
echo "You cannot book other Dj's Slots!";
}
}

elseif ($update == w){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"w");
$i++;
}
if ($check == ''){
mysql_query("UPDATE saturday SET w='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{
echo "You cannot book other Dj's Slots!";
}
}



elseif ($update == ra){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"a");
$i++;
}
if ($user == $check){
mysql_query("UPDATE saturday SET a=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{}
}

elseif ($update == rb){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"b");
$i++;
}
if ($user == $check){
mysql_query("UPDATE saturday SET b=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{}
}

elseif ($update == rc){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"c");
$i++;
}
if ($user == $check){
mysql_query("UPDATE saturday SET c=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{}
}

elseif ($update == rd){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"d");
$i++;
}
if ($user == $check){
mysql_query("UPDATE saturday SET d=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{}
}

elseif ($update == re){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"e");
$i++;
}
if ($user == $check){
mysql_query("UPDATE saturday SET e=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{}
}

elseif ($update == rf){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"f");
$i++;
}
if ($user == $check){
mysql_query("UPDATE saturday SET f=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{}
}

elseif ($update == rx){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"x");
$i++;
}
if ($user == $check){
mysql_query("UPDATE saturday SET x=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{}
}

elseif ($update == rg){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"g");
$i++;
}
if ($user == $check){
mysql_query("UPDATE saturday SET g=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{}
}

elseif ($update == rh){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"h");
$i++;
}
if ($user == $check){
mysql_query("UPDATE saturday SET h=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{}
}

elseif ($update == ri){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"i");
$i++;
}
if ($user == $check){
mysql_query("UPDATE saturday SET i=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{}
}

elseif ($update == rj){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"j");
$i++;
}
if ($user == $check){
mysql_query("UPDATE saturday SET j=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{}
}

elseif ($update == rk){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"k");
$i++;
}
if ($user == $check){
mysql_query("UPDATE saturday SET k=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{}
}

elseif ($update == rl){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"l");
$i++;
}
if ($user == $check){
mysql_query("UPDATE saturday SET l=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{}
}

elseif ($update == rm){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"m");
$i++;
}
if ($user == $check){
mysql_query("UPDATE saturday SET m=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{}
}

elseif ($update == rn){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"n");
$i++;
}
if ($user == $check){
mysql_query("UPDATE saturday SET n=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{}
}

elseif ($update == ro){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"o");
$i++;
}
if ($user == $check){
mysql_query("UPDATE saturday SET o=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{}
}

elseif ($update == rp){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"p");
$i++;
}
if ($user == $check){
mysql_query("UPDATE saturday SET p=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{}
}

elseif ($update == rq){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"q");
$i++;
}
if ($user == $check){
mysql_query("UPDATE saturday SET q=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{}
}

elseif ($update == rr){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"r");
$i++;
}
if ($user == $check){
mysql_query("UPDATE saturday SET r=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{}
}

elseif ($update == rs){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"s");
$i++;
}
if ($user == $check){
mysql_query("UPDATE saturday SET s=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{}
}

elseif ($update == rt){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"t");
$i++;
}
if ($user == $check){
mysql_query("UPDATE saturday SET t=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{}
}

elseif ($update == ru){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"u");
$i++;
}
if ($user == $check){
mysql_query("UPDATE saturday SET u=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{}
}

elseif ($update == rv){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"v");
$i++;
}
if ($user == $check){
mysql_query("UPDATE saturday SET v=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{}
}

elseif ($update == rw){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"w");
$i++;
}
if ($user == $check){
mysql_query("UPDATE saturday SET w=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djsaturday.php\");
-->
</script>";
}
else{}
}
?>
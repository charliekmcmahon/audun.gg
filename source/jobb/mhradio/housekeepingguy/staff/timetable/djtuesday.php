<? session_start();
include 'dbConfig.php';
$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user
if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {
//if the username is not set or the session username is empty or the ip does not match the session ip log them out
session_unset(); //clears firefox
session_destroy(); //clears IE
die("Error!!!"); }
include("online.php");?>
<?php
include ("dbConfig.php");
$query = "SELECT * FROM tuesday";
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
<body>
<font face="verdana" size="1">
<p align="left" class="heading"><b><u>Book your Tuesday Shows</u></b></p>
<p align="left" class="main">This Is Where You Can Book Your Slots For The Day Listed Above.<br>To Book A Slot Please Just Click Book Under A Slot You Can Make.<br><br><b>If You Can't Make Your Slot Then Click On Your Name On The Slot You Booked And It Will Automatically Unbook It.</b><br>If You Don't Unbook Your Slot You Will Be Warned !</p></font>
	<center>
<a href="#" onClick="window.history.go(-1)">Go Back ?</a>&nbsp;~&nbsp;<a href="javascript:location.reload(true)">Refresh ?</a>
  <table border="1" bordercolor="#000000" width="45%" class="main" 
cellpadding="2" cellspacing="0">
    <tr>

      <td width="100" align="center">00:00 - 01:00</td>
		<td><?php if($a == ''){
		echo"<a href=djtuesday.php?update=a>&nbsp;Book this Slot</a>";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"a");
                $i++;
                }
                if ($user == $check){
		echo "<a href=djtuesday.php?update=ra>&nbsp;$a</a>";
		}
		else{
                echo "$a";
               }
               }
		?>
		</td>
	</tr>
	<tr>

      <td width="100" align="center">01:00 - 02:00</td>
		<td><?php if($b == ''){
		echo"<a href=djtuesday.php?update=b>&nbsp;Book this Slot</a>";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"b");
                $i++;
                }
                if ($user == $check){
		echo "<a href=djtuesday.php?update=rb>&nbsp;$b</a>";
		}
                else{
                echo "$b";
               }
               }
		?></td>
	</tr>
	<tr>

      <td width="100" align="center">02:00 - 03:00</td>
		<td><?php if($c == ''){
		echo"<a href=djtuesday.php?update=c>&nbsp;Book this Slot</a>";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"c");
                $i++;
                }
                if ($user == $check){
		echo "<a href=djtuesday.php?update=rc>&nbsp;$c</a>";
		}
                else{
                echo "$c";
               }
               }
		?></td>
	</tr>
	<tr>

      <td width="100" align="center">03:00 - 04:00</td>
		<td><?php if($d == ''){
		echo"<a href=djtuesday.php?update=d>&nbsp;Book this Slot</a>";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"d");
                $i++;
                }
                if ($user == $check){
		echo "<a href=djtuesday.php?update=rd>&nbsp;$d</a>";
		}
                else{
                echo "$d";
               }
               }
		?></td>
	</tr>
	<tr>

      <td width="100" align="center">04:00 - 05:00</td>
		<td><?php if($e == ''){
		echo"<a href=djtuesday.php?update=e>&nbsp;Book this Slot</a>";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"e");
                $i++;
                }
                if ($user == $check){
		echo "<a href=djtuesday.php?update=re>&nbsp;$e</a>";
		}
                else{
                echo "$e";
               }
               }
		?></td>
	</tr>
	<tr>

      <td width="100" align="center">05:00 - 06:00</td>
		<td><?php if($f == ''){
		echo"<a href=djtuesday.php?update=f>&nbsp;Book this Slot</a>";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"f");
                $i++;
                }
                if ($user == $check){
		echo "<a href=djtuesday.php?update=rf>&nbsp;$f</a>";
		}
                else{
                echo "$f";
               }
               }
		?></td>
	</tr>
	<tr>

      <td width="100" align="center">06:00 - 07:00</td>
		<td><?php if($g == ''){
		echo"<a href=djtuesday.php?update=g>&nbsp;Book this Slot</a>";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"g");
                $i++;
                }
                if ($user == $check){
		echo "<a href=djtuesday.php?update=rg>&nbsp;$g</a>";
		}
                else{
                echo "$g";
               }
               }
		?></td>
	</tr>
	<tr>

      <td width="100" align="center">07:00 - 08:00</td>
		<td><?php if($x == ''){
		echo"<a href=djtuesday.php?update=x>&nbsp;Book this Slot</a>";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"x");
                $i++;
                }
                if ($user == $check){
		echo "<a href=djtuesday.php?update=rx>&nbsp;$x</a>";
		}
                else{
                echo "$x";
               }
               }
		?></td>
	</tr>
	<tr>

      <td width="100" align="center">08:00 - 09:00</td>
		<td><?php if($h == ''){
		echo"<a href=djtuesday.php?update=h>&nbsp;Book this Slot</a>";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"h");
                $i++;
                }
                if ($user == $check){
		echo "<a href=djtuesday.php?update=rh>&nbsp;$h</a>";
		}
                else{
                echo "$h";
               }
               }
		?></td>
	</tr>
	<tr>

      <td width="100" align="center">09:00 - 10:00</td>
		<td><?php if($ti == ''){
		echo"<a href=djtuesday.php?update=ti>&nbsp;Book this Slot</a>";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"i");
                $i++;
                }
                if ($user == $check){
		echo "<a href=djtuesday.php?update=ri>&nbsp;$ti</a>";
		}
                else{
                echo "$ti";
               }
               }
		?></td>
	</tr>
	<tr>

      <td width="100" align="center">10:00 - 11:00</td>
		<td><?php if($j == ''){
		echo"<a href=djtuesday.php?update=j>&nbsp;Book this Slot</a>";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"j");
                $i++;
                }
                if ($user == $check){
		echo "<a href=djtuesday.php?update=rj>&nbsp;$j</a>";
		}
                else{
                echo "$j";
               }
               }
		?></td>
	</tr>
	<tr>

      <td width="100" align="center">11:00 - 12:00</td>
		<td><?php if($k == ''){
		echo"<a href=djtuesday.php?update=k>&nbsp;Book this Slot</a>";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"k");
                $i++;
                }
                if ($user == $check){
		echo "<a href=djtuesday.php?update=rk>&nbsp;$k</a>";
		}
                else{
                echo "$k";
               }
               }
		?></td>
	</tr>
	<tr>

      <td width="100" align="center">12:00 - 13:00</td>
		
     <td><?php if($l == ''){
		echo"<a href=djtuesday.php?update=l>&nbsp;Book this Slot</a>";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"l");
                $i++;
                }
                if ($user == $check){
		echo "<a href=djtuesday.php?update=rl>&nbsp;$l</a>";
		}
                else{
                echo "$l";
               }
               }
		?></td>
	</tr>
	<tr>

      <td width="100" align="center">13:00 - 14:00</td>
	  <td><?php if($m == ''){
		echo"<a href=djtuesday.php?update=m>&nbsp;Book this Slot</a>";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"m");
                $i++;
                }
                if ($user == $check){
		echo "<a href=djtuesday.php?update=rm>&nbsp;$m</a>";
		}
                else{
                echo "$m";
               }
               }
		?></td>
	</tr>
	<tr>

      <td width="100" align="center">14:00 - 15:00</td>
		
      <td><?php if($n == ''){
		echo"<a href=djtuesday.php?update=n>&nbsp;Book this Slot</a>";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"n");
                $i++;
                }
                if ($user == $check){
		echo "<a href=djtuesday.php?update=rn>&nbsp;$n</a>";
		}
                else{
                echo "$n";
               }
               }
		?></td>
	</tr>
	<tr>

      <td width="100" align="center">15:00 - 16:00</td>
		
      <td><?php if($o == ''){
		echo"<a href=djtuesday.php?update=o>&nbsp;Book this Slot</a>";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"o");
                $i++;
                }
                if ($user == $check){
		echo "<a href=djtuesday.php?update=ro>&nbsp;$o</a>";
		}
                else{
                echo "$o";
               }
               }
		?></td>
	</tr>
	<tr>

      <td width="100" align="center">16:00 - 17:00</td>
		
      <td><?php if($p == ''){
		echo"<a href=djtuesday.php?update=p>&nbsp;Book this Slot</a>";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"p");
                $i++;
                }
                if ($user == $check){
		echo "<a href=djtuesday.php?update=rp>&nbsp;$p</a>";
		}
                else{
                echo "$p";
               }
               }
		?></td>
	</tr>
	<tr>

      <td width="100" align="center">17:00 - 18:00</td>
		
      <td><?php if($q == ''){
		echo"<a href=djtuesday.php?update=q>&nbsp;Book this Slot</a>";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"q");
                $i++;
                }
                if ($user == $check){
		echo "<a href=djtuesday.php?update=rq>&nbsp;$q</a>";
		}
                else{
                echo "$q";
               }
               }
		?></td>
	</tr>
	<tr>

      <td width="100" align="center">18:00 - 19:00</td>
		<td><?php if($r == ''){
		echo"<a href=djtuesday.php?update=r>&nbsp;Book this Slot</a>";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"r");
                $i++;
                }
                if ($user == $check){
		echo "<a href=djtuesday.php?update=rr>&nbsp;$r</a>";
		}
                else{
                echo "$r";
               }
               }
		?></td>
	</tr>
	<tr>

      <td width="100" align="center">19:00 - 20:00</td>
		
      <td><?php if($s == ''){
		echo"<a href=djtuesday.php?update=s>&nbsp;Book this Slot</a>";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"s");
                $i++;
                }
                if ($user == $check){
		echo "<a href=djtuesday.php?update=rs>&nbsp;$s</a>";
		}
                else{
                echo "$s";
               }
               }
		?></td>
	</tr>
	<tr>

      <td width="100" align="center">20:00 - 21:00</td>
		
      <td><?php if($t == ''){
		echo"<a href=djtuesday.php?update=t>&nbsp;Book this Slot</a>";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"t");
                $i++;
                }
                if ($user == $check){
		echo "<a href=djtuesday.php?update=rt>&nbsp;$t</a>";
		}
                else{
                echo "$t";
               }
               }
		?></td>
	</tr>
	<tr>

      <td width="100" align="center">21:00 - 22:00</td>
		<td><?php if($u == ''){
		echo"<a href=djtuesday.php?update=u>&nbsp;Book this Slot</a>";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"u");
                $i++;
                }
                if ($user == $check){
		echo "<a href=djtuesday.php?update=ru>&nbsp;$u</a>";
		}
                else{
                echo "$u";
               }
               }
		?></td>
	</tr>
	<tr>

      <td width="100" align="center">22:00 - 23:00</td>
		<td><?php if($v == ''){
		echo"<a href=djtuesday.php?update=v>&nbsp;Book this Slot</a>";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"v");
                $i++;
                }
                if ($user == $check){
		echo "<a href=djtuesday.php?update=rv>&nbsp;$v</a>";
		}
                else{
                echo "$v";
               }
               }
		?></td>

	</tr>
	<tr>

      <td width="100" align="center">23:00 - 00:00</td>
		<td><?php if($w == ''){
		echo"<a href=djtuesday.php?update=w>&nbsp;Book this Slot</a>";
		}
		else{
                $num = mysql_numrows($result);
                $i = 0;
                while($i < $num){
                $check = mysql_result($result,$i,"w");
                $i++;
                }
                if ($user == $check){
		echo "<a href=djtuesday.php?update=rw>&nbsp;$w</a>";
		}
                else{
                echo "$w";
               }
               }
		?></td>
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
mysql_query("UPDATE tuesday SET a='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET b='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET c='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET d='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET e='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET f='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET x='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET g='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET h='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET i='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET j='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET k='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET l='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET m='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET n='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET o='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET p='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET q='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET r='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET s='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET t='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET u='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET v='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET w='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET a=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET b=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET c=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET d=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET e=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET f=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET x=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET g=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET h=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET i=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET j=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET k=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET l=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET m=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET n=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET o=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET p=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET q=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET r=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET s=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET t=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET u=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET v=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
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
mysql_query("UPDATE tuesday SET w=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"djtuesday.php\");
-->
</script>";
}
else{}
}
?>
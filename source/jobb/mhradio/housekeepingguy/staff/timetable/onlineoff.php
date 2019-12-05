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
$query = "SELECT * FROM status";
$result = mysql_query($query);
$update = $_GET['update'];
$num = mysql_numrows($result);
$user = $_SESSION['session_username'];
$i = 0;
while($i < $num){
$a = mysql_result($result,$i,"a");
$i++;
}
$update = $_GET['update'];
$delete = $_GET['delete'];
?>
<html>
<head><title>Request Online/Offline</title>
<script language="JavaScript">
  function confirm_prompt(text) {
    if (confirm(text)) {
      window.location = 'onlineoff.php?update=clear';
    }
  }
      function unbooka_prompt(text) {
    if (confirm(text)) {
      window.location = 'onlineoff.php?update=ra';
    }
  }  
      function unbookb_prompt(text) {
    if (confirm(text)) {
      window.location = 'onlineoff.php?update=rb';
    }
  }  
      function unbookc_prompt(text) {
    if (confirm(text)) {
      window.location = 'onlineoff.php?update=rc';
    }
  }  
      function unbookd_prompt(text) {
    if (confirm(text)) {
      window.location = 'onlineoff.php?update=rd';
    }
  }  
      function unbooke_prompt(text) {
    if (confirm(text)) {
      window.location = 'onlineoff.php?update=re';
    }
  }  
      function unbookf_prompt(text) {
    if (confirm(text)) {
      window.location = 'onlineoff.php?update=rf';
    }
  }  
      function unbookg_prompt(text) {
    if (confirm(text)) {
      window.location = 'onlineoff.php?update=rg';
    }
  }  
      function unbookx_prompt(text) {
    if (confirm(text)) {
      window.location = 'onlineoff.php?update=rx';
    }
  }  
      function unbookh_prompt(text) {
    if (confirm(text)) {
      window.location = 'onlineoff.php?update=rh';
    }
  }  
      function unbooki_prompt(text) {
    if (confirm(text)) {
      window.location = 'onlineoff.php?update=ri';
    }
  }  
      function unbookj_prompt(text) {
    if (confirm(text)) {
      window.location = 'onlineoff.php?update=rj';
    }
  }  
      function unbookk_prompt(text) {
    if (confirm(text)) {
      window.location = 'onlineoff.php?update=rk';
    }
  }  
      function unbookl_prompt(text) {
    if (confirm(text)) {
      window.location = 'onlineoff.php?update=rl';
    }
  }  
      function unbookm_prompt(text) {
    if (confirm(text)) {
      window.location = 'onlineoff.php?update=rm';
    }
  }  
      function unbookn_prompt(text) {
    if (confirm(text)) {
      window.location = 'onlineoff.php?update=rn';
    }
  }  
      function unbooko_prompt(text) {
    if (confirm(text)) {
      window.location = 'onlineoff.php?update=ro';
    }
  }  
      function unbookp_prompt(text) {
    if (confirm(text)) {
      window.location = 'onlineoff.php?update=rp';
    }
  }  
      function unbookq_prompt(text) {
    if (confirm(text)) {
      window.location = 'onlineoff.php?update=rq';
    }
  }  
      function unbookr_prompt(text) {
    if (confirm(text)) {
      window.location = 'onlineoff.php?update=rr';
    }
  }  
      function unbooks_prompt(text) {
    if (confirm(text)) {
      window.location = 'onlineoff.php?update=rs';
    }
  }  
      function unbookt_prompt(text) {
    if (confirm(text)) {
      window.location = 'onlineoff.php?update=rt';
    }
  }  
      function unbooku_prompt(text) {
    if (confirm(text)) {
      window.location = 'onlineoff.php?update=ru';
    }
  }  
      function unbookv_prompt(text) {
    if (confirm(text)) {
      window.location = 'onlineoff.php?update=rv';
    }
  }  
    function unbookw_prompt(text) {
    if (confirm(text)) {
      window.location = 'onlineoff.php?update=rw';
    }
  }  
</script>
</head>
<link href="../staff/style.css" rel="stylesheet" type="text/css">
<body>
<p align="left" class="heading"><font face="Verdana" size="1"><u><b>Present 
Yourself As Online So Visitors Can Request<br>
<br>
</b></u>Hey DJs,<br>
For Listeners To Request You Must <u>Present Yourself As Online</u>.<br>
If you do not do this then listeners will not be able to request!<br>
Please save HNFM some trouble and click this.&nbsp; When your done DJing<br>
please remove your name so the next DJ can set this up.<br>
<br>
Thanks,<br>
Kevin</font></p>
<p align="left" class="main"><font face="Verdana" size="1"><br>
<br>
</font>
<center>
<font face="Verdana" size="1">
<a href="#" onClick="window.history.go(-1)">Go Back ?</a>&nbsp;~&nbsp;<a href="javascript:location.reload(true)">Refresh ?</a>
  </font>
  <table border="1" bordercolor="#000000" width="45%" class="main" 
cellpadding="2" cellspacing="0">
    <tr>

      <td width=100 align="center"><font face="Verdana" size="1">Online</font></td>
		<td><font face="Verdana" size="1"><?php if($a == ''){
		echo"<a href=onlineoff.php?update=a>&nbsp;Present Yourself As Online</a>";
		}
		else{
                $num = mysql_numrows($result);
                $i = 1;
                while($i < $num){
                $check = mysql_result($result,$i,"a");
                $i++;
                }
		echo "<a href=\"\" onclick=\"unbooka_prompt('Are You Sure You Want to Go Offline?'); return false;\">&nbsp;$a</a>";
               }
		?>
		</font>
		</td>
	</tr>
	</table></center>
</body>
<?php

if ($update == a){
$check = mysql_query("SELECT a FROM status WHERE id='1'");
if (!$check == ''){
mysql_query("UPDATE status SET a='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}
else{
echo "Sorry, This has already been booked";
}
}

elseif ($update == b){
$check = mysql_query("SELECT b FROM status WHERE id='1'");
if (!$check == ''){
mysql_query("UPDATE status SET b='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}
else{
echo "Sorry, This has already been booked";
}
}

elseif ($update == c){
$check = mysql_query("SELECT c FROM status WHERE id='1'");
if (!$check == ''){
mysql_query("UPDATE status SET c='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}
else{
echo "Sorry, This has already been booked";
}
}

elseif ($update == d){
$check = mysql_query("SELECT d FROM status WHERE id='1'");
if (!$check == ''){
mysql_query("UPDATE status SET d='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}
else{
echo "Sorry, This has already been booked";
}
}

elseif ($update == e){
$check = mysql_query("SELECT e FROM status WHERE id='1'");
if (!$check == ''){
mysql_query("UPDATE status SET e='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}
else{
echo "Sorry, This has already been booked";
}
}

elseif ($update == f){
$check = mysql_query("SELECT f FROM status WHERE id='1'");
if (!$check == ''){
mysql_query("UPDATE status SET f='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}
else{
echo "Sorry, This has already been booked";
}
}



elseif ($update == g){
$check = mysql_query("SELECT g FROM status WHERE id='1'");
if (!$check == ''){
mysql_query("UPDATE status SET g='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}
else{
echo "Sorry, This has already been booked";
}
}

elseif ($update == x){
$check = mysql_query("SELECT x FROM status WHERE id='1'");
if (!$check == ''){
mysql_query("UPDATE status SET x='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}
else{
echo "Sorry, This has already been booked";
}
}
elseif ($update == h){
$check = mysql_query("SELECT h FROM status WHERE id='1'");
if (!$check == ''){
mysql_query("UPDATE status SET h='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}
else{
echo "Sorry, This has already been booked";
}
}

elseif ($update == i){
$check = mysql_query("SELECT i FROM status WHERE id='1'");
if (!$check == ''){
mysql_query("UPDATE status SET i='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}
else{
echo "Sorry, This has already been booked";
}
}

elseif ($update == j){
$check = mysql_query("SELECT j FROM status WHERE id='1'");
if (!$check == ''){
mysql_query("UPDATE status SET j='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}
else{
echo "Sorry, This has already been booked";
}
}

elseif ($update == k){
$check = mysql_query("SELECT k FROM status WHERE id='1'");
if (!$check == ''){
mysql_query("UPDATE status SET k='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}
else{
echo "Sorry, This has already been booked";
}
}

elseif ($update == l){
$check = mysql_query("SELECT l FROM status WHERE id='1'");
if (!$check == ''){
mysql_query("UPDATE status SET l='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}
else{
echo "Sorry, This has already been booked";
}
}

elseif ($update == m){
$check = mysql_query("SELECT m FROM status WHERE id='1'");
if (!$check == ''){
mysql_query("UPDATE status SET m='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}
else{
echo "Sorry, This has already been booked";
}
}

elseif ($update == n){
$check = mysql_query("SELECT n FROM status WHERE id='1'");
if (!$check == ''){
mysql_query("UPDATE status SET n='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}
else{
echo "Sorry, This has already been booked";
}
}

elseif ($update == o){
$check = mysql_query("SELECT o FROM status WHERE id='1'");
if (!$check == ''){
mysql_query("UPDATE status SET o='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}
else{
echo "Sorry, This has already been booked";
}
}

elseif ($update == p){
$check = mysql_query("SELECT p FROM status WHERE id='1'");
if (!$check == ''){
mysql_query("UPDATE status SET p='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}
else{
echo "Sorry, This has already been booked";
}
}

elseif ($update == q){
$check = mysql_query("SELECT q FROM status WHERE id='1'");
if (!$check == ''){
mysql_query("UPDATE status SET q='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}
else{
echo "Sorry, This has already been booked";
}
}

elseif ($update == r){
$check = mysql_query("SELECT r FROM status WHERE id='1'");
if (!$check == ''){
mysql_query("UPDATE status SET r='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}
else{
echo "Sorry, This has already been booked";
}
}

elseif ($update == s){
$check = mysql_query("SELECT s FROM status WHERE id='1'");
if (!$check == ''){
mysql_query("UPDATE status SET s='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}
else{
echo "Sorry, This has already been booked";
}
}

elseif ($update == t){
$check = mysql_query("SELECT t FROM status WHERE id='1'");
if (!$check == ''){
mysql_query("UPDATE status SET t='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}
else{
echo "Sorry, This has already been booked";
}
}

elseif ($update == u){
$check = mysql_query("SELECT u FROM status WHERE id='1'");
if (!$check == ''){
mysql_query("UPDATE status SET u='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}
else{
echo "Sorry, This has already been booked";
}
}

elseif ($update == v){
$check = mysql_query("SELECT v FROM status WHERE id='1'");
if (!$check == ''){
mysql_query("UPDATE status SET v='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}
else{
echo "Sorry, This has already been booked";
}
}

elseif ($update == w){
$check = mysql_query("SELECT w FROM status WHERE id='1'");
if (!$check == ''){
mysql_query("UPDATE status SET w='$user'");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}
else{
echo "Sorry, This has already been booked";
}
}


elseif ($update == ra){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"a");
$i++;
}
mysql_query("UPDATE status SET a=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}

elseif ($update == rb){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"b");
$i++;
}
mysql_query("UPDATE status SET b=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}

elseif ($update == rc){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"c");
$i++;
}
mysql_query("UPDATE status SET c=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}

elseif ($update == rd){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"d");
$i++;
}
mysql_query("UPDATE status SET d=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}

elseif ($update == re){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"e");
$i++;
}
mysql_query("UPDATE status SET e=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}

elseif ($update == rf){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"f");
$i++;
}
mysql_query("UPDATE status SET f=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}

elseif ($update == rx){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"x");
$i++;
}
mysql_query("UPDATE status SET x=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}

elseif ($update == rg){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"g");
$i++;
}
mysql_query("UPDATE status SET g=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}

elseif ($update == rh){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"h");
$i++;
}
mysql_query("UPDATE status SET h=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}

elseif ($update == ri){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"i");
$i++;
}
mysql_query("UPDATE status SET i=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}

elseif ($update == rj){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"j");
$i++;
}
mysql_query("UPDATE status SET j=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}

elseif ($update == rk){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"k");
$i++;
}
mysql_query("UPDATE status SET k=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}

elseif ($update == rl){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"l");
$i++;
}
mysql_query("UPDATE status SET l=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}

elseif ($update == rm){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"m");
$i++;
}
mysql_query("UPDATE status SET m=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}

elseif ($update == rn){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"n");
$i++;
}
mysql_query("UPDATE status SET n=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}

elseif ($update == ro){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"o");
$i++;
}
mysql_query("UPDATE status SET o=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}

elseif ($update == rp){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"p");
$i++;
}
mysql_query("UPDATE status SET p=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}

elseif ($update == rq){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"q");
$i++;
}
mysql_query("UPDATE status SET q=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}

elseif ($update == rr){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"r");
$i++;
}
mysql_query("UPDATE status SET r=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}

elseif ($update == rs){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"s");
$i++;
}
mysql_query("UPDATE status SET s=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}

elseif ($update == rt){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"t");
$i++;
}
mysql_query("UPDATE status SET t=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}

elseif ($update == ru){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"u");
$i++;
}
mysql_query("UPDATE status SET u=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}

elseif ($update == rv){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"v");
$i++;
}
mysql_query("UPDATE status SET v=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}

elseif ($update == rw){
$num = mysql_numrows($result);
$i = 0;
while($i < $num){
$check = mysql_result($result,$i,"w");
$i++;
}
mysql_query("UPDATE status SET w=''");
echo "<script language=\"javascript\">
<!-- 
location.replace(\"onlineoff.php\");
-->
</script>";
}

elseif ($update == clear){
$get = mysql_query("SELECT * FROM permstatus");
$i = 0;
$num = mysql_num_rows($get);
while ($i < $num){
$a = mysql_result($get,$i,"a");
$b = mysql_result($get,$i,"b");
$c = mysql_result($get,$i,"c");
$d = mysql_result($get,$i,"d");
$e = mysql_result($get,$i,"e");
$f = mysql_result($get,$i,"f");
$g = mysql_result($get,$i,"g");
$h = mysql_result($get,$i,"h");
$ti = mysql_result($get,$i,"i");
$j = mysql_result($get,$i,"j");
$k = mysql_result($get,$i,"k");
$l = mysql_result($get,$i,"l");
$m = mysql_result($get,$i,"m");
$n = mysql_result($get,$i,"n");
$o = mysql_result($get,$i,"o");
$p = mysql_result($get,$i,"p");
$q = mysql_result($get,$i,"q");
$r = mysql_result($get,$i,"r");
$s = mysql_result($get,$i,"s");
$t = mysql_result($get,$i,"t");
$u = mysql_result($get,$i,"u");
$v = mysql_result($get,$i,"v");
$w = mysql_result($get,$i,"w");
$x = mysql_result($get,$i,"x");
mysql_query("UPDATE status SET a='$a',b='$b',c='$d',d='$d',e='$e',f='$f',g='$g',h='$h',i='$ti',j='$j',k='$k',l='$l',m='$m',n='$n',o='$o',p='$p',q='$q',r='$r',s='$s',t='$t',u='$u',v='$v',w='$w',x='$x'");
$i++;
echo "Cleared";
}
}?>
<?php
include ("dbConfig.php");
$day = $_POST['day'];
$time = $_POST['time'];
$name = $_POST['showname'];
$perm = $_POST['perm'];



if ($perm == 'perm'){
mysql_query("UPDATE perm$day SET $time='$name'");
mysql_query("UPDATE $day SET $time='$name'");
}
else{
mysql_query("UPDATE $day SET $time='$name'");
}

header ("Location: form.php?time=booked");
?>
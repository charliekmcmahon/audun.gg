<? session_start();

include 'dbConfig.php';

$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user

if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {

//if the username is not set or the session username is empty or the ip does not match the session ip log them out

session_unset(); //clears firefox

session_destroy(); //clears IE

die("Error!!!"); }

include"online.php";?>

<font face="verdana" size="1">

<? 

if($_SESSION['session_level'] == "1") {

echo "<div align=center>

  <p><b><u>Please Choose a Day</b></u> </p>

  <p align=\"left\"><a href=\"adminmonday.php\">Monday</a></p>

  <p align=\"left\"><a href=\"admintuesday.php\">Tuesday</a></p>

  <p align=\"left\"><a href=\"adminwednesday.php\">Wednesday</a></p>

  <p align=\"left\"><a href=\"adminthursday.php\">Thursday</a></p>

  <p align=\"left\"><a href=\"adminfriday.php\">Friday</a></p>

  <p align=\"left\"><a href=\"adminsaturday.php\">Saturday</a></p>

  <p align=\"left\"><a href=\"adminsunday.php\">Sunday</a></p>

</div>";

}

else{

echo "<div align=\"center\">

  <p><b><u>Please Choose a Day</b></u> </p>

  <p align=\"left\"><a href=\"djmonday.php\">Monday</a></p>

  <p align=\"left\"><a href=\"djtuesday.php\">Tuesday</a></p>

  <p align=\"left\"><a href=\"djwednesday.php\">Wednesday</a></p>

  <p align=\"left\"><a href=\"djthursday.php\">Thursday</a></p>

  <p align=\"left\"><a href=\"djfriday.php\">Friday</a></p>

  <p align=\"left\"><a href=\"djsaturday.php\">Saturday</a></p>

  <p align=\"left\"><a href=\"djsunday.php\">Sunday</a></p>

</div>";

} ?>

</font>
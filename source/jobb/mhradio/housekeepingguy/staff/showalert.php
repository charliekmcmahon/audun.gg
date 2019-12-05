<?

include ("config.php");

?>

<?



// Get Alert

$alertQuery = mysql_query("SELECT * FROM alert WHERE active='Y'");

if(mysql_num_rows($alertQuery) =="1"){

  $alertData = mysql_fetch_array($alertQuery);

      if($_COOKIE["$alertData[ID]"] !="Y"){

            setcookie($alertData[ID], "Y");

      echo"

      <script language='javascript'>alert(' MagicHabbo Announcement: $alertData[message]');</script>";

          {

}

}

}

?>

<META HTTP-EQUIV="REFRESH" CONTENT="10">" CONTENT="60">
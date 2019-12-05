<head>
<meta http-equiv="Content-Language" content="en-gb">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<script>
<!--
/*
Auto Refresh Page with Time script
By JavaScript Kit (javascriptkit.com)
Over 200+ free scripts here!
*/
//enter refresh time in "minutes:seconds" Minutes should range from 0 to inifinity. Seconds should range from 0 to 59

var limit="0:59"



if (document.images){

var parselimit=limit.split(":")

parselimit=parselimit[0]*60+parselimit[1]*1

}

function beginrefresh(){

if (!document.images)

return

if (parselimit==1)

window.location.reload()

else{ 

parselimit-=1

curmin=Math.floor(parselimit/60)

cursec=parselimit%60

if (curmin!=0)

curtime=curmin+" minutes and "+cursec+" seconds left until page refresh!"

else

curtime=cursec+" seconds left until page refresh!"

window.status=curtime

setTimeout("beginrefresh()",1000)

}

}



window.onload=beginrefresh

//-->

</script>

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: transparent;
}
-->
</style>

</head>



<BODY LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>



<?



include "config.php";



$query = mysql_query("SELECT * FROM `shoutout` ORDER BY `id` DESC LIMIT 0 , 1");



while($result = mysql_fetch_array($query)) {



$username = $result["username"];



$shoutout = $result["comment"];







$username = strip_tags($username);



$shoutout = strip_tags($shoutout);

echo "<marquee><font face=verdana size=1 color=black><b>DJ $username Says: </b></font><font face=verdana size=1 color=black>$shoutout<br><br><br></font></marquee>";



}




?>



</font><p><font color="white">
<?



// Get Alert

$alertQuery = mysql_query("SELECT * FROM alert WHERE active='Y'");

if(mysql_num_rows($alertQuery) =="1"){

  $alertData = mysql_fetch_array($alertQuery);

      if($_COOKIE["$alertData[ID]"] !="Y"){

            setcookie($alertData[ID], "Y");

      echo"

      <script language='javascript'>alert('Message from staff: $alertData[message]');</script>";

          {

}

}

}

?>
</font>
</p>
</BODY>
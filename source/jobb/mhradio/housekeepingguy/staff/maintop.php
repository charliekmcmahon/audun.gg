<head>
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
<body leftmargin="0" topmargin="0" bottommargin="0" rightmargin="0" marginwidth="0" marginheight="0">
<META HTTP-EQUIV='Refresh' CONTENT='60; URL=maintop.php'>
<?
include 'config.php';

include 'stats_file.php';
?>
<table width="480" border="0" align="right" cellpadding="0" cellspacing="0">
<tr>
                      <td width="300">
                        <font face="Verdana" size="1"><?php

if($streamstatus == "1") {		

$result = mysql_query("SELECT * FROM `staff`");

while($worked = mysql_fetch_array($result)) {

$get_word = $worked['username'];

if(preg_match("/$get_word/i", "$servertitle")) { echo "The current DJ is DJ $get_word."; }

else { echo ""; }

}
} else { echo "There is no DJ online."; }

?></font>
					  </td>
					  <td width="120">
                          <div align="right"><font face="Verdana" size="1">The time is <b>
                            <?php $date = date("H:i"); echo $date; ?>
                          </b></font>&nbsp;&nbsp; </div></td>
  </tr>
</table>
</body>
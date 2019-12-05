<? include 'config.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>DJ List</title>
<style type="text/css">
.box        {width: 200px;
        float: left;
        font-family: verdana;
        font-size: 10px;
         text-align: center;
        }
.container    {width: 800px;
        }
</style>
</head>

<body>
<table cellspacing="0" cellpadding="0" width="100%" border="0" height="18">
    <tr>
      <td width="8" height="18">
      <img src="imgs/left.png" width="8" height="18" /></td>
      <td background="imgs/topbg.png" height="18"><b>
      <font face="Verdana" size="1" color="#FFFFFF">Radio DJs</font></b></td>
      <td width="8" height="18">
      <img src="imgs/right.png" width="8" height="18" /></td>
    </tr>
</table>
<br />
<table style="border-width: 0px" width="100%" align="center"><tr>
<?php  
$query = mysql_query("SELECT * FROM `staff`");
echo '<div class="container">';
    while($row = mysql_fetch_array($query)){
        echo '<div class="box">';
        echo '<img src=http://www.habbo.co.uk/habbo-imaging/avatarimage?user=' . $row['name'] . '&action=0&direction=3&head_direction=3&img_format=gif&gesture=0&size=s>';
        echo '<br><b>' . $row['name'] . '</b><br><font face="Verdana" size="1"><i>DJ ' . $row['username'] . '</i></div>';
    }
echo '</div>';
?>
	  </tr></table>
</body>
</html>

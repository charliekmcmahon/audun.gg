<?php include('config.php'); ?>
<style>
.style1 {font-size: 10px; font-family: Verdana, Arial, Helvetica, sans-serif;}
body {
	background-color: #97CEEC;
}
.style8 {font-size: 10px; font-family: Verdana, Arial, Helvetica, sans-serif; color: #FFFFFF; }
.style9 {
	color: #FFFFFF;
	font-weight: bold;
}
.style10 {color: #FFFFFF}
.style11 {color: #000000}
</style>
                <title>Timetable</title><TABLE BORDER="0" align="center" CELLPADDING="0" CELLSPACING="0" background="imgs/timetable/timetablebg.png">
<TR>
<TD><IMG SRC="imgs/timetable/t_left.gif" width="14" height="14"></TD>
<TD BACKGROUND="imgs/timetable/top.gif"></TD>
<TD><IMG SRC="imgs/timetable/t_right.gif" width="14" height="14"></TD>

</TR>
<TR>
<TD BACKGROUND="tt_left.gif"></TD>
<TD BACKGROUND="" HEIGHT="100">
<TABLE WIDTH="100%" CELLSPACING="0" CELLPADDING="2" BORDER="0">
<TR>
<td bgcolor="#FFFFFF"><center>
    <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0" bordercolor="#FFFFFF">
    <TR>
      <TD BACKGROUND="imgs/timetable/timetablebg.png" HEIGHT="100"><TABLE WIDTH="100%" CELLSPACING="0" CELLPADDING="2" BORDER="0">
          <TR>
            <td bgcolor="#FFFFFF"><div align="left" class="style10">
              <span class="style11 style1"><b>Timetable</b></span><br>
                  <span class="style11 style1">Here you can find when your favourite DJ is going to be online!</span>
				  <br />
              <table width="750" border="0" cellpadding="1" cellspacing="2" bgcolor="#333333" align="center">
                <tr>
                  <td bgcolor="#333333" class="style8">&nbsp;</td>
                  <td width="91" bgcolor="#333333" class="style1"><div align="center" class="style9">Monday</div></td>
                  <td width="91" bgcolor="#333333" class="style1"><div align="center" class="style10"><strong>Tuesday</strong></div></td>
                  <td width="91" bgcolor="#333333" class="style1"><div align="center" class="style10"><strong>Wednesday</strong></div></td>
                  <td width="91" bgcolor="#333333" class="style1"><div align="center" class="style10"><strong>Thursday</strong></div></td>
                  <td width="91" bgcolor="#333333" class="style1"><div align="center" class="style10"><strong>Friday</strong></div></td>
                  <td width="91" bgcolor="#333333" class="style1"><div align="center" class="style10"><strong>Saturday</strong></div></td>
                  <td width="91" bgcolor="#333333" class="style1"><div align="center" class="style10"><strong>Sunday</strong></div></td>
                </tr>
                <tr>
                  <td bgcolor="#333333" class="style1"><div align="right" class="style10">
                      <div align="right"><strong>00:00 - 01:00 </strong></div>
                  </div></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['a'];
											if($row['a'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['a'];
											if($row['a'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['a'];
											if($row['a'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['a'];
											if($row['a'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['a'];
											if($row['a'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['a'];
											if($row['a'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['a'];
											if($row['a'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                </tr>
                <tr>
                  <td bgcolor="#333333" class="style1"><div align="right" class="style10">
                      <div align="right"><strong>01:00 - 02:00 </strong></div>
                  </div></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['b'];
											if($row['b'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['b'];
											if($row['b'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['b'];
											if($row['b'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['b'];
											if($row['b'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['b'];
											if($row['b'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['b'];
											if($row['b'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['b'];
											if($row['b'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                </tr>
                <tr>
                  <td bgcolor="#333333" class="style1"><div align="right" class="style10">
                      <div align="right"><strong>02:00 - 03:00 </strong></div>
                  </div></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['c'];
											if($row['c'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['c'];
											if($row['c'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['c'];
											if($row['c'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['c'];
											if($row['c'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['c'];
											if($row['c'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['c'];
											if($row['c'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['c'];
											if($row['c'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                </tr>
                <tr>
                  <td bgcolor="#333333" class="style1"><div align="right" class="style10">
                      <div align="right"><strong>03:00 - 04:00 </strong></div>
                  </div></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['d'];
											if($row['d'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['d'];
											if($row['d'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['d'];
											if($row['d'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['d'];
											if($row['d'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['d'];
											if($row['d'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['d'];
											if($row['d'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['d'];
											if($row['d'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                </tr>
                <tr>
                  <td bgcolor="#333333" class="style1"><div align="right" class="style10">
                      <div align="right"><strong>04:00 - 05:00 </strong></div>
                  </div></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['e'];
											if($row['e'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['e'];
											if($row['e'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['e'];
											if($row['e'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['e'];
											if($row['e'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['e'];
											if($row['e'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['e'];
											if($row['e'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['e'];
											if($row['e'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                </tr>
                <tr>
                  <td bgcolor="#333333" class="style1"><div align="right" class="style10">
                      <div align="right"><strong>05:00 - 06:00 </strong></div>
                  </div></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['f'];
											if($row['f'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['f'];
											if($row['f'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['f'];
											if($row['f'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['f'];
											if($row['f'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['f'];
											if($row['f'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['f'];
											if($row['f'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['f'];
											if($row['f'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                </tr>
                <tr>
                  <td bgcolor="#333333" class="style1"><div align="right" class="style10">
                      <div align="right"><strong>06:00 - 07:00 </strong></div>
                  </div></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['g'];
											if($row['g'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['g'];
											if($row['g'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['g'];
											if($row['g'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['g'];
											if($row['g'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['g'];
											if($row['g'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['g'];
											if($row['g'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['g'];
											if($row['g'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                </tr>
                <tr>
                  <td bgcolor="#333333" class="style1"><div align="right" class="style10">
                      <div align="right"><strong>07:00 - 08:00 </strong></div>
                  </div></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['x'];
											if($row['x'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['x'];
											if($row['x'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['x'];
											if($row['x'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['x'];
											if($row['x'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['x'];
											if($row['x'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['x'];
											if($row['x'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['x'];
											if($row['x'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                </tr>
                <tr>
                  <td bgcolor="#333333" class="style1"><div align="right" class="style10">
                      <div align="right"><strong>08:00 - 09:00 </strong></div>
                  </div></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['h'];
											if($row['h'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['h'];
											if($row['h'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['h'];
											if($row['h'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['h'];
											if($row['h'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['h'];
											if($row['h'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['h'];
											if($row['h'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['h'];
											if($row['h'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                </tr>
                <tr>
                  <td bgcolor="#333333" class="style1"><div align="right" class="style10">
                      <div align="right"><strong>09:00 - 10:00 </strong></div>
                  </div></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['i'];
											if($row['i'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['i'];
											if($row['i'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['i'];
											if($row['i'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['i'];
											if($row['i'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['i'];
											if($row['i'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['i'];
											if($row['i'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['i'];
											if($row['i'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                </tr>
                <tr>
                  <td bgcolor="#333333" class="style1"><div align="right" class="style10">
                      <div align="right"><strong>10:00 - 11:00 </strong></div>
                  </div></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['j'];
											if($row['j'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['j'];
											if($row['j'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['j'];
											if($row['j'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['j'];
											if($row['j'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['j'];
											if($row['j'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['j'];
											if($row['j'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['j'];
											if($row['j'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                </tr>
                <tr>
                  <td bgcolor="#333333" class="style1"><div align="right" class="style10">
                      <div align="right"><strong>11:00 - 12:00 </strong></div>
                  </div></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['k'];
											if($row['k'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['k'];
											if($row['k'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['k'];
											if($row['k'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['k'];
											if($row['k'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['k'];
											if($row['k'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['k'];
											if($row['k'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['k'];
											if($row['k'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                </tr>
                <tr>
                  <td bgcolor="#333333" class="style1"><div align="right" class="style10">
                      <div align="right"><strong>12:00 - 13:00 </strong></div>
                  </div></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['l'];
											if($row['l'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['l'];
											if($row['l'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['l'];
											if($row['l'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['l'];
											if($row['l'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['l'];
											if($row['l'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['l'];
											if($row['l'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['l'];
											if($row['l'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                </tr>
                <tr>
                  <td bgcolor="#333333" class="style1"><div align="right" class="style10">
                      <div align="right"><strong>13:00 - 14:00</strong></div>
                  </div></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['m'];
											if($row['m'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['m'];
											if($row['m'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['m'];
											if($row['m'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['m'];
											if($row['m'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['m'];
											if($row['m'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['m'];
											if($row['m'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['m'];
											if($row['m'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                </tr>
                <tr>
                  <td bgcolor="#333333" class="style1"><div align="right" class="style10">
                      <div align="right"><strong>14:00 - 15:00 </strong></div>
                  </div></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['n'];
											if($row['n'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['n'];
											if($row['n'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['n'];
											if($row['n'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['n'];
											if($row['n'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['n'];
											if($row['n'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['n'];
											if($row['n'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['n'];
											if($row['n'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                </tr>
                <tr>
                  <td bgcolor="#333333" class="style1"><div align="right" class="style10">
                      <div align="right"><strong>15:00 - 16:00 </strong></div>
                  </div></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['o'];
											if($row['o'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['o'];
											if($row['o'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['o'];
											if($row['o'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['o'];
											if($row['o'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['o'];
											if($row['o'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['o'];
											if($row['o'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['o'];
											if($row['o'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                </tr>
                <tr>
                  <td bgcolor="#333333" class="style1"><div align="right" class="style10">
                      <div align="right"><strong>16:00 - 17:00 </strong></div>
                  </div></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['p'];
											if($row['p'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['p'];
											if($row['p'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['p'];
											if($row['p'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['p'];
											if($row['p'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['p'];
											if($row['p'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['p'];
											if($row['p'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['p'];
											if($row['p'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                </tr>
                <tr>
                  <td bgcolor="#333333" class="style1"><div align="right" class="style10">
                      <div align="right"><strong>17:00 - 18:00 </strong></div>
                  </div></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['q'];
											if($row['q'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['q'];
											if($row['q'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['q'];
											if($row['q'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['q'];
											if($row['q'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['q'];
											if($row['q'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['q'];
											if($row['q'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['q'];
											if($row['q'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                </tr>
                <tr>
                  <td bgcolor="#333333" class="style1"><div align="right" class="style10">
                      <div align="right"><strong>18:00 - 19:00 </strong></div>
                  </div></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['r'];
											if($row['r'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['r'];
											if($row['r'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['r'];
											if($row['r'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['r'];
											if($row['r'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['r'];
											if($row['r'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['r'];
											if($row['r'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['r'];
											if($row['r'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                </tr>
                <tr>
                  <td bgcolor="#333333" class="style1"><div align="right" class="style10">
                      <div align="right"><strong>19:00 - 20:00 </strong></div>
                  </div></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['s'];
											if($row['s'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['s'];
											if($row['s'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['s'];
											if($row['s'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['s'];
											if($row['s'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['s'];
											if($row['s'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['s'];
											if($row['s'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['s'];
											if($row['s'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                </tr>
                <tr>
                  <td bgcolor="#333333" class="style1"><div align="right" class="style10">
                      <div align="right"><strong>20:00 - 21:00 </strong></div>
                  </div></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['t'];
											if($row['t'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['t'];
											if($row['t'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['t'];
											if($row['t'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['t'];
											if($row['t'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['t'];
											if($row['t'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['t'];
											if($row['t'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['t'];
											if($row['t'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                </tr>
                <tr>
                  <td bgcolor="#333333" class="style1"><div align="right" class="style10">
                      <div align="right"><strong>21:00 - 22:00 </strong></div>
                  </div></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['u'];
											if($row['u'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['u'];
											if($row['u'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['u'];
											if($row['u'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['u'];
											if($row['u'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['u'];
											if($row['u'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['u'];
											if($row['u'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['u'];
											if($row['u'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                </tr>
                <tr>
                  <td bgcolor="#333333" class="style1"><div align="right" class="style10">
                      <div align="right"><strong>22:00 - 23:00 </strong></div>
                  </div></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['v'];
											if($row['v'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['v'];
											if($row['v'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['v'];
											if($row['v'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['v'];
											if($row['v'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['v'];
											if($row['v'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['v'];
											if($row['v'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['v'];
											if($row['v'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                </tr>
                <tr>
                  <td bgcolor="#333333" class="style1"><div align="right" class="style10">
                      <div align="right"><strong>23:00 - 00:00 </strong></div>
                  </div></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['w'];
											if($row['w'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['w'];
											if($row['w'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['w'];
											if($row['w'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['w'];
											if($row['w'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['w'];
											if($row['w'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['w'];
											if($row['w'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                  <td width="91" align="center" bgcolor="#666666" class="style1"><span class="style10">
                    <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
                                            echo $row['w'];
											if($row['w'] == "")
											{
											echo "Not Booked";
											}
                                          }
                                          ?>
                  </span></td>
                </tr>
              </table>
            </div>
                </TR>
      </TABLE></TD>
    </TR>
  </TABLE></TR>
</TABLE>

</TD>
<TD BACKGROUND="tt_right.gif"></TD>
</TR>
<TR>
<TD><IMG SRC="imgs/timetable/b_left.gif" width="14" height="14"></TD>
<TD BACKGROUND="imgs/timetable/bottom.gif"></TD>
<TD><IMG SRC="imgs/timetable/b_right.gif" width="14" height="14"></TD>
</TR>
</TABLE>
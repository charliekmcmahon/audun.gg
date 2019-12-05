<?php include('dbConfig.php'); ?>
<style>
table, td, tr{
	font-family: Tahoma;
	font-size: 11px;
	color: #FFFFFF;
	text-align: center;
}
</style>
                <table width="750" border="0" cellpadding="1" cellspacing="2" bgcolor="#333333" align="center">
                  <tr>
                    <td bgcolor="#333333">&nbsp;</td>
                    <td width="91" bgcolor="#333333"><div align="center"><strong>Monday</strong></div></td>
                    <td width="91" bgcolor="#333333"><div align="center"><strong>Tuesday</strong></div></td>
                    <td width="91" bgcolor="#333333"><div align="center"><strong>Wednesday</strong></div></td>

                    <td width="91" bgcolor="#333333"><div align="center"><strong>Thursday</strong></div></td>
                    <td width="91" bgcolor="#333333"><div align="center"><strong>Friday</strong></div></td>
                    <td width="91" bgcolor="#333333"><div align="center"><strong>Saturday</strong></div></td>
                    <td width="91" bgcolor="#333333"><div align="center"><strong>Sunday</strong></div></td>
                  </tr>
                  <tr>
                    <td bgcolor="#333333"><div align="right">

                        <div align="right"><strong>00:00 - 01:00 </strong></div>
                    </div></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['a'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['a'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['a'];
										  }
										  ?></td>

                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['a'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['a'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['a'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['a'];
										  }
										  ?></td>
                  </tr>

                  <tr>
                    <td bgcolor="#333333"><div align="right">
                        <div align="right"><strong>01:00 - 02:00 </strong></div>
                    </div></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['b'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['b'];
										  }
										  ?></td>

                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['b'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['b'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['b'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['b'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['b'];
										  }
										  ?></td>
                  </tr>
                  <tr>
                    <td bgcolor="#333333"><div align="right">
                        <div align="right"><strong>02:00 - 03:00 </strong></div>
                    </div></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['c'];
										  }
										  ?></td>

                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['c'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['c'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['c'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['c'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['c'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['c'];
										  }
										  ?></td>
                  </tr>
                  <tr>
                    <td bgcolor="#333333"><div align="right">
                        <div align="right"><strong>03:00 - 04:00 </strong></div>
                    </div></td>

                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['d'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['d'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['d'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['d'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['d'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['d'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['d'];
										  }
										  ?></td>
                  </tr>
                  <tr>
                    <td bgcolor="#333333"><div align="right">

                        <div align="right"><strong>04:00 - 05:00 </strong></div>
                    </div></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['e'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['e'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['e'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['e'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['e'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['e'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['e'];
										  }
										  ?></td>
                  </tr>

                  <tr>
                    <td bgcolor="#333333"><div align="right">
                        <div align="right"><strong>05:00 - 06:00 </strong></div>
                    </div></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['f'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['f'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['f'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['f'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['f'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['f'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['f'];
										  }
										  ?></td>
                  </tr>
                  <tr>
                    <td bgcolor="#333333"><div align="right">
                        <div align="right"><strong>06:00 - 07:00 </strong></div>
                    </div></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['g'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['g'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['g'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['g'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['g'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['g'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['g'];
										  }
										  ?></td>
                  </tr>
                  <tr>
                    <td bgcolor="#333333"><div align="right">
                        <div align="right"><strong>07:00 - 08:00 </strong></div>
                    </div></td>

                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['h'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['h'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['h'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['h'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['h'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['h'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['h'];
										  }
										  ?></td>
                  </tr>
                  <tr>
                    <td bgcolor="#333333"><div align="right">

                        <div align="right"><strong>08:00 - 09:00 </strong></div>
                    </div></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['i'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['i'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['i'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['i'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['i'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['i'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['i'];
										  }
										  ?></td>

                  </tr>
                  <tr>
                    <td bgcolor="#333333"><div align="right">
                        <div align="right"><strong>09:00 - 10:00 </strong></div>
                    </div></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['j'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['j'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['j'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['j'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['j'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['j'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['j'];
										  }
										  ?></td>
                  </tr>
                  <tr>
                    <td bgcolor="#333333"><div align="right">
                        <div align="right"><strong>10:00 - 11:00 </strong></div>
                    </div></td>

                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['k'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['k'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['k'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['k'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['k'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['k'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['k'];
										  }
										  ?></td>
                  </tr>
                  <tr>

                    <td bgcolor="#333333"><div align="right">
                        <div align="right"><strong>11:00 - 12:00 </strong></div>
                    </div></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['l'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['l'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['l'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['l'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['l'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['l'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['l'];
										  }
										  ?></td>
                  </tr>
                  <tr>
                    <td bgcolor="#333333"><div align="right">
                        <div align="right"><strong>12:00 - 13:00 </strong></div>
                    </div></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['m'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['m'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['m'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['m'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['m'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['m'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['m'];
										  }
										  ?></td>
                  </tr>
                  <tr>

                    <td bgcolor="#333333"><div align="right">
                        <div align="right"><strong>13:00 - 14:00</strong></div>
                    </div></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['n'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['n'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['n'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['n'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['n'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['n'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['n'];
										  }
										  ?></td>
                  </tr>
                  <tr>
                    <td bgcolor="#333333"><div align="right">
                        <div align="right"><strong>14:00 - 15:00 </strong></div>
                    </div></td>

                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['o'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['o'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['o'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['o'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['o'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['o'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['o'];
										  }
										  ?></td>
                  </tr>
                  <tr>
                    <td bgcolor="#333333"><div align="right">
                        <div align="right"><strong>15:00 - 16:00 </strong></div>
                    </div></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['p'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['p'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['p'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['p'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['p'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['p'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['p'];
										  }
										  ?></td>
                  </tr>
                  <tr>
                    <td bgcolor="#333333"><div align="right">
                        <div align="right"><strong>16:00 - 17:00 </strong></div>
                    </div></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['q'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['q'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['q'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['q'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['q'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['q'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['q'];
										  }
										  ?></td>
                  </tr>
                  <tr>
                    <td bgcolor="#333333"><div align="right">
                        <div align="right"><strong>17:00 - 18:00 </strong></div>
                    </div></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['r'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['r'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['r'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['r'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['r'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['r'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['r'];
										  }
										  ?></td>
                  </tr>
                  <tr>

                    <td bgcolor="#333333"><div align="right">
                        <div align="right"><strong>18:00 - 19:00 </strong></div>
                    </div></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['s'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['s'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['s'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['s'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                           <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['s'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['s'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['s'];
										  }
										  ?></td>
                  </tr>
                  <tr>
                    <td bgcolor="#333333"><div align="right">
                        <div align="right"><strong>19:00 - 20:00 </strong></div>

                    </div></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['t'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['t'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['t'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['t'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['t'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['t'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['t'];
										  }
										  ?></td>
                  </tr>
                  <tr>
                    <td bgcolor="#333333"><div align="right">
                        <div align="right"><strong>20:00 - 21:00 </strong></div>
                    </div></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['u'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['u'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['u'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['u'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['u'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['u'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['u'];
										  }
										  ?></td>
                  </tr>
                  <tr>

                    <td bgcolor="#333333"><div align="right">
                        <div align="right"><strong>21:00 - 22:00 </strong></div>
                    </div></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['v'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['v'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['v'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['v'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['v'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['v'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['v'];
										  }
										  ?></td>
                  </tr>
                  <tr>
                    <td bgcolor="#333333"><div align="right">
                        <div align="right"><strong>22:00 - 23:00 </strong></div>

                    </div></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['w'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['w'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['w'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['w'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['w'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['w'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['w'];
										  }
										  ?></td>
                  </tr>

                  <tr>
                    <td bgcolor="#333333"><div align="right">
                        <div align="right"><strong>23:00 - 00:00 </strong></div>
                    </div></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM monday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['x'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM tuesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['x'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM wednesday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['x'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM thursday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['x'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM friday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['x'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM saturday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['x'];
										  }
										  ?></td>
                    <td width="91" align="center" bgcolor="#666666">
                                          <?php
                                          $result = mysql_query("SELECT * FROM sunday");
                                          while($row = mysql_fetch_array($result))
                                          {
											echo $row['x'];
										  }
										  ?></td>
                  </tr>
                </table>          
    
<? session_start();

include 'config.php';

include 'online.php';

$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user

if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {

//if the username is not set or the session username is empty or the ip does not match the session ip log them out

session_unset(); //clears firefox

session_destroy(); //clears IE

die("I Wonder Why You Have Ended Up Here :s"); } ?>

<?

$username2 = $_SESSION[session_username];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to the DJ Panel</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 5px;
	background-image: url(imgs/newbg.png);
}
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.style2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: bold;
	color: #FFFFFF;
}
a {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #000000;
}
a:visited {
	color: #000000;
}
a:hover {
	color: #666666;
	font-weight: bold;
}
a:active {
	color: #000000;
}
-->
</style>
<script type="text/javascript">
            //<![CDATA[
            window.onload = function() {
                var f = document.getElementById("main");
                function resize() {
                    var h = "";
                    var w = "";
                    if (f.contentDocument) {
                        h = f.contentDocument.documentElement.offsetHeight + 20 + "px";
                        // can't find anything for Opera and Firefox that works for the width. OffetWidth doesn't work right either.(f.contentDocument.documentElement,"").getPropertyValue("width");
                    } else if (f.contentWindow) {
                        h = f.contentWindow.document.body.scrollHeight + 5 + "px";
                    } else {
                        return;
                    }
                    f.setAttribute("height",h);
                    f.parentNode.setAttribute("height",h);
                }
                if (window.addEventListener) {
                    f.onload = resize;
                } else if (f.attachEvent) {
                    f.attachEvent("onload", resize);
                } else {
                    return;
                }
                resize();
            }
            //]]>
        </script>
</head>

<body>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="900" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="imgs/toptop.gif" width="900" height="1" /></td>
      </tr>
      <tr>
        <td height="46" valign="top" background="imgs/topmid.gif"><table width="900" height="46" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="420"></td>
            <td><table width="480" height="46" border="0" align="right" cellpadding="0" cellspacing="0">
              <tr>
                <td class="style1"><strong>Welcome to the DJ Panel <u><?php echo $username2; ?></u></strong></td>
              </tr>
              <tr>
                <td class="style1"><iframe name="top" width="480" height="16" src="maintop.php" scrolling="no" border="0" frameborder="0" allowtransparency="true">

    Your browser does not support inline frames or is currently configured not to display inline frames.</iframe></td>
              </tr>
            </table></td>
            <td width="1"></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><img src="imgs/topbot.gif" width="900" height="16" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="900" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="665" valign="top"><table width="665" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="imgs/saystop.gif" width="665" height="23" /></td>
          </tr>
          <tr>
            <td height="20" background="imgs/saysmid.gif"><table width="665" height="20" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="9"></td>
                <td><iframe name="says" width="649" allowtransparency="true" height="20" src="says.php" border="0" frameborder="0" scrolling="no">

    Your browser does not support inline frames or is currently configured not to display inline frames.</iframe></td>
                <td width="6"></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><img src="imgs/saysbot.gif" width="665" height="44" /></td>
          </tr>
        </table></td>
        <td valign="top"><table width="235" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="imgs/nottopan.gif" width="235" height="35" /></td>
          </tr>
          <tr>
            <td height="40" background="imgs/notmid.gif"><table width="235" height="40" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="15">&nbsp;</td>
                <td class="style2">
				<iframe name="notices" width="202" height="25" src="notices.php" border="0" frameborder="0" allowtransparency="true" scrolling="no">

    Your browser does not support inline frames or is currently configured not to display inline frames.</iframe>
				</td>
                <td width="18">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><img src="imgs/notbot.gif" width="235" height="12" /></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="900" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="233" valign="top"><table width="233" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="imgs/tltoptop.gif" width="233" height="12" /></td>
          </tr>
          <tr>
            <td height="25" background="imgs/tltopmid.gif"><table width="233" height="25" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="17">&nbsp;</td>
                <td class="style1"><div align="center"><strong>General Links </strong></div></td>
                <td width="10">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td background="imgs/tlmid.gif"><table width="233" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="18">&nbsp;</td>
                <td><img src="imgs/dots.png"><a href="home.php" target="main">Homepage</a><br>
				<img src="imgs/dots.png"><a href="news.php" target="main">DJ News</a><br>
                   <img src="imgs/dots.png"><a href="staff.php" target="main">View Staff Emails</a><br>
                   <img src="imgs/dots.png"><a href="rules.php" target="main">Rules & FAQ's</a><br>
                   <img src="imgs/dots.png"><a href="http://bbc.co.uk/radio1/chart/singles.shtml" target="_blank">UK Top 40</a><br>
                   <img src="imgs/dots.png"><a href="logout.php">Logout</a><br></td>
                <td width="9">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><img src="imgs/tlbot.gif" width="233" height="8" /></td>
          </tr>
        </table>
          <table width="233" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="imgs/lefttoptop.gif" width="233" height="18" /></td>
            </tr>
            <tr>
              <td height="25" background="imgs/lefttopmid.gif"><table width="233" height="25" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="17">&nbsp;</td>
                    <td class="style1"><div align="center"><strong>Radio Links </strong></div></td>
                    <td width="10">&nbsp;</td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td background="imgs/leftmid.gif"><table width="233" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="18">&nbsp;</td>
                    <td>                   <img src="imgs/dots.png"><a href="view_requests.php" target="main">Read The Requests</a><br>
                   <img src="imgs/dots.png"><a href="timetable/nav.php" target="main">Book/Unbook Timetable Slots</a><br>
                   <img src="imgs/dots.png"><a href="stats.php" target="main">Radio Stats</a><br>
                   <img src="imgs/dots.png"><a href="djsays.php" target="main">Set The DJ Says</a><br>
                   <img src="imgs/dots.png"><a href="downloads.php" target="main">Extra Downloads</a><br>
                   <img src="imgs/dots.png"><a href="info.php" target="main">Radio Connection Details</a><br>
                   <img src="imgs/dots.png"><a href="radiospy.php" target="main">Radio Spy</a><br></td>
                    <td width="9">&nbsp;</td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td><img src="imgs/leftbot.gif" width="233" height="10" /></td>
            </tr>
          </table>
          <table width="233" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="imgs/lefttoptop.gif" width="233" height="18" /></td>
            </tr>
            <tr>
              <td height="25" background="imgs/lefttopmid.gif"><table width="233" height="25" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="17">&nbsp;</td>
                    <td class="style1"><div align="center"><strong>Account Features  </strong></div></td>
                    <td width="10">&nbsp;</td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td background="imgs/leftmid.gif"><table width="233" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="18">&nbsp;</td>
                    <td><img src="imgs/dots.png"><a href="changepass.php" target="main">Change Password</a><br>
					<img src="imgs/dots.png"><a href="admin/passgen.php" target="main">Generate a Pass</a><br>
            <img src="imgs/dots.png"><a href="changename.php" target="main">Change Habbo Name</a><br>
            <img src="imgs/dots.png"><a href="changeemail.php" target="main">Change E-Mail Address</a><br></td>
                    <td width="9">&nbsp;</td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td><img src="imgs/leftbot.gif" width="233" height="10" /></td>
            </tr>
          </table>
          <? if($_SESSION['session_level'] == "1") { ?>
          <table width="233" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="imgs/lefttoptop.gif" width="233" height="18" /></td>
            </tr>
            <tr>
              <td height="25" background="imgs/lefttopmid.gif"><table width="233" height="25" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="17">&nbsp;</td>
                    <td class="style1"><div align="center"><strong>Admin Links </strong></div></td>
                    <td width="10">&nbsp;</td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td background="imgs/leftmid.gif"><table width="233" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="18">&nbsp;</td>
                    <td><img src="imgs/dots.png"><a href="admin/add_user.php" target="main">Add A User</a><br>
                   <img src="imgs/dots.png"><a href="admin/editpass.php" target="main">Edit User Pass</a><br>
				   <img src="imgs/dots.png"><a href="admin/passgen.php" target="main">Generate a Pass</a><br>
                   <img src="imgs/dots.png"><a href="admin/editemail.php" target="main">Edit User Email</a><br>
				   <img src="imgs/dots.png"><a href="admin/editposition.php" target="main">Edit User Position</a><br>
				   <img src="imgs/dots.png"><a href="admin/editname.php" target="main">Edit User Habbo Name</a><br>
                   <img src="imgs/dots.png"><a href="admin/removeuser.php" target="main">Delete A User</a><hr>
                   <img src="imgs/dots.png"><a href="admin/add_info.php" target="main">Update Radio Information</a><br>
                   <img src="imgs/dots.png"><a href="admin/delete_info.php" target="main">Delete Information</a><hr>
                   <img src="imgs/dots.png"><a href="admin/add_notice.php" target="main">Add Notice</a><br>
				   <img src="imgs/dots.png"><a href="admin/removenews.php" target="main">Remove Notice</a><br><hr>
				   <img src="imgs/dots.png"><a href="admin/add_download.php" target="main">Add Download</a><br />
				   <img src="imgs/dots.png"><a href="admin/removedownload.php" target="main">Remove Download</a><br /><hr />
				   <img src="imgs/dots.png"><a href="admin/adminrequest.php" target="main">Send Admin Request</a><br><hr>
				   <img src="imgs/dots.png"><a href="admin/addspy.php" target="main">Edit Radio Spy</a><br><hr>
				   <img src="imgs/dots.png"><a href="alert.php" target="main">Alert Site</a><br>
				   <hr>
				   <img src="imgs/dots.png"><a href="admin/viewapps.php" target="main">View Applications</a><br><hr>
                   <img src="imgs/dots.png"><a href="timetable/nav.php" target="main">Book/Unbook Timetable Slots</a><hr></td>
                    <td width="9">&nbsp;</td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td><img src="imgs/leftbot.gif" width="233" height="10" /></td>
            </tr>
          </table>
          <? } ?><table width="233" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="imgs/lefttoptop.gif" width="233" height="18" /></td>
            </tr>
            <tr>
              <td height="25" background="imgs/lefttopmid.gif"><table width="233" height="25" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="17">&nbsp;</td>
                    <td class="style1"><div align="center"><strong>Who's Online </strong></div></td>
                    <td width="10">&nbsp;</td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td background="imgs/leftmid.gif"><table width="233" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="18">&nbsp;</td>
                    <td><iframe name="I1" width="206" height="80" src="users_online.php?action=online" border="0" frameborder="0">

    Your browser does not support inline frames or is currently configured not to display inline frames.</iframe></td>
                    <td width="9">&nbsp;</td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td><img src="imgs/leftbot.gif" width="233" height="10" /></td>
            </tr>
          </table>
          </td>
        <td valign="top"><table width="667" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="imgs/contenttop.gif" width="667" height="22" /></td>
          </tr>
          <tr>
            <td background="imgs/contentmid.gif"><table width="667" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="11">&nbsp;</td>
                <td><iframe name="main" id="main" src="home.php" width="639" frameborder="0" allowtransparency="yes" scrolling="no" ></iframe></td>
                <td width="16">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><img src="imgs/contentbot.gif" width="667" height="18" /></td>
          </tr>
        </table>
          <br />
          <table width="508" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><img src="imgs/copytop.png" width="508" height="2" /></td>
            </tr>
            <tr>
              <td background="imgs/copymid.png"><table width="508" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="2"></td>
                  <td class="style1"><div align="center">Version 1 of The Housekeeping Guy. Copyright (C) 2008 <a href="mailto:guy@tech-hosts.co.uk" target="_blank">Guy Riese</a>. All Rights Reserved.<br />
                    Licensed under a Create Commons Attribution-Share Alike 3.0 Unported License.
                        <a href="http://creativecommons.org/licenses/by-sa/3.0/" target="_blank" rel="license"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png"/></a><br />
                        Approved and originally Housekeeping V1 coded by <a href="mailto:caleb@calebmingle.com">Caleb Mingle</a> (Dentafrice). <br />
                  This DJ panel is free to use but this copyright <strong>must</strong> remain. <br />
                  <br/>
</div></td>
                  <td width="2"></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td><img src="imgs/copybot.png" width="508" height="2" /></td>
            </tr>
          </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
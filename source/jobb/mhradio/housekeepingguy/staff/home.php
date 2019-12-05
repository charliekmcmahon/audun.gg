<? session_start();
include 'config.php';
include 'online.php';
$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user

if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {

//if the username is not set or the session username is empty or the ip does not match the session ip log them out

session_unset(); //clears firefox

session_destroy(); //clears IE

die("I Wonder Why You Have Ended Up Here :s"); } 

?>
<table width="100%" background="../images/header.PNG">
<tr>
  <td>
<font face="Verdana" size="1"><b>Welcome DJ <?php echo $_SESSION['session_username'] ?> to the DJ Panel</b></font>
</td>
</tr></table><font size="1" face="Verdana">

<br><?php if($_SESSION['session_level'] == '1') { echo "<p><font face='Verdana' size='1'>You have been recognized as an

Administrator. This means you have more power than a normal DJ.<br>

<br>

As an Administrator you are expected to carry out tasks adjacent to your website title and make sure the website is running smoothly.<br>

To help you with your job you have extra features like:<br>

<br>

- Ability To View Timetable Requests<br>

- View All Requests (For every DJ)<br>

- Ban a Song<br>

- Kick / Ban Users<br>

- Add a User<br>

<br>

Plus lots more.<br>

<br>

You are expected to use your powers appropriately and not to abuse them.

<br>

As an Administrator you are also required to post important news, and monitor all DJ's to make sure they are doing their job correctly. <br>

<br>

Please make sure you delete old requests that DJ's have read out AFTER their shows to clear the Request Line.<br>

<br>

If You Have Any Ideas Regarding The Staff Panel Then Please Feel Free To Contact DJ Admin Via The PM System. <br>

<br>

Thank You,<br>

The Management</font></p>

"; } else { echo "<p><font face='Verdana' size='1'>You have been recognized as an

Official DJ.<br>

<br>

As an Official DJ you have many features to help you whilst you are DJ'ing and you may login to the DJ Panel at any time you like, not only when you are DJing. Some Of Your Features Are:<br>

<br>

- Your Requests<br>

- DJ Chat<br>

- Personal Messaging<br>

- Banned Songs<br>

- Request a Cover<br>

- Request a DJ Slot<br>

<br>

Plus Lots More.<br>

<br>

You Are Expected To Use Your Features In A Respectable And Appropriate Manner.

Anyone Abusing Their Features Will Be Immediately Suspended Or Sacked.<br>

<br>

As A DJ You Will Be Able To View Requests That People Send To You, If You See A Request That Is Not Appropriate Then Please Report It By Clicking Report At The Side Of The Request.<br>

<br>

Please Use The DJ Cover Request If You Can't Make One Of Your Shows And Also Use The Schedule Slot Request To Book A Slot In The Timetable.<br>

<br>

In The Staff Panel There Is A Feature Called Banned Songs, Please Make Sure You Check This Before You DJ As It Contains Songs That Have Been Banned By Administrators Because They Are Being Played To Much Or Another Appropriate Reason.<br>

<br>

Every DJ Should Login At Least Once A Week To Check The Latest News And Updates Which Are Positioned At The Top Of This Panel And Also They Should Be Reminded To Follow All Rules At ALL Times. <br>

<br>

As A DJ You Are Required To Keep Your Information Confidential And Not To Share It With Anybody, If You Do Decide To Share Your Information Your Account Will Be Removed And You Will Be Banned !.<br>

<br>

If You Have Any Ideas Regarding The Staff Panel Tehn Please Feel Free To Contact DJ Admin Via The PM System. 

<br>

<br>

Thank You

The Management

<br>



"; } ?><table border='1' align='center' width='100%' bgcolor='#FFDDDD' style='border-collapse: collapse' bordercolor='#FFAAAA'><tr><td><font size='1' face='verdana'><b><u>Staff Panel Notice:</u> Check Encoders</b></font><br><font size='1' face='verdana'>Always check you have the correct bitrate!</font></td></tr></table></form></td></tr></table>
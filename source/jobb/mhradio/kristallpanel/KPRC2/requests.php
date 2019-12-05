<?php
if(!defined("kristall"))
{
 	session_start();
	include("functions.php");
	loginerror();
	exit;
}
else
{
	login();
}
?>
<?php
echo("
		<span class=\"title\">Request Line</span><br />Welcome to the request line, here you can view your requests and delete messages with the option to delete multiple messages at once!
		<form action=\"?view=requests&act=delete\" method=\"post\">
		<br />
		<input type=\"submit\" name=\"submit\" value=\"Delete selected requests\">
		<hr size=\"1\">
		<a href=\"?view=requests&type=Song Request\">Requests</a> | <a href=\"?view=requests&type=Listener Shoutout\">Shoutouts</a> | <a href=\"?view=requests&type=Competition Entry\">Comps</a> | <a href=\"?view=requests&type=Joke Submission\">Jokes</a> | <a href=\"?view=requests&type=Other Submission\">Other</a> | <a href=\"?view=requests&type=all\">All</a>
		<hr size=\"1\">");
switch($_GET["act"])
{
	case "delete":
		foreach($HTTP_POST_VARS as $key => $value)
		{
			if(!is_numeric($value))
			{}
			else
			{
				$sql = mysql_query("SELECT `dj` FROM `requests` WHERE `id` = '$value'");
				if(mysql_num_rows($sql) == "1")
				{
				$fetch = mysql_fetch_array($sql);
				if($fetch["dj"] == $_SESSION["kristall_username"] || $_SESSION["kristall_level"] == "Senior DJ" || $_SESSION["kristall_level"] == "Administrator" || $_SESSION["kristall_level"] == "Super Administrator")
				{
					mysql_query("DELETE FROM `requests` WHERE `id` = '$value'");
				}
				else
				{
					notice("Requests not deleted.");
					echo("One or more requests have not been deleted due do you not being the rightful owner of them<br />
					You are now being taken back to the main request line, if you'd prefer not to wait, please click <a href=\"?view=requests\">here</a><meta http-equiv=\"refresh\" content=\"2;url=?view=requests\">");
					endnotice();
				}
				}
			}
		}
		notice("Requests deleted.");
		echo("The requests you selected have been deleted<br />
		You are now being taken back to the main request line, if you'd prefer not to wait, please click <a href=\"?view=requests\">here</a><meta http-equiv=\"refresh\" content=\"8;url=?view=requests\">");
		endnotice();
	break;
	
	case "reportform":
		$id = clean($_GET["id"]);
		$fetch = mysql_fetch_array(mysql_query("SELECT `dj` FROM `requests` WHERE `id` = '$id'"));
		if($fetch["dj"] == $_SESSION["kristall_username"] || $_SESSION["kristall_username"] == "Administrator" || $_SESSION["kristall_level"] == "Super Administrator")
		{
			notice("Are You Sure?");
			echo("Are you sure you wish to report this Request?<br /><br />
			<a href=\"?view=requests&act=report&id=$id\">I'm Sure, Report the Request</a><br />
			<a href=\"?view=requests&act=viewform\">I'm Not Sure, Take me Back</a>");
			endnotice();
		}
		else 
		{
			notice("That isn't your request");
			echo("That isn't your request to view. You are now being taken back to the Request System.<br /><br />
			If you'd prefer not to wait, please click <a href=\"?view=requests\">here</a><meta http-equiv=\"refresh\" content=\"8;url=?view=requests\">");
			endnotice();
		}
	break;
	
	case "report":
		$id = clean($_GET["id"]);
		$fetch = mysql_fetch_array(mysql_query("SELECT `dj` FROM `requests` WHERE `id` = '$id'"));
		if($fetch["dj"] == $_SESSION["kristall_username"] || $_SESSION["kristall_username"] == "Administrator" || $_SESSION["kristall_level"] == "Super Administrator")
		{
			mysql_query("UPDATE `requests` SET `reported` = '1' WHERE `id` = '$id'");
			notice("Private Message Reported");
			echo("The Request you selected, with id tag $id, has been successfully reported. An Administrator will view this Request and take action accordingly. You are now being taken back to the Request system.<br /><br />
			If you'd prefer not to wait, please click <a href=\"?view=requests\">here</a><meta http-equiv=\"refresh\" content=\"8;url=?view=requests\">");
			endnotice();
		}
		else 
		{
			notice("That isn't your request");
			echo("That isn't your request to view. You are now being taken back to the Request System.<br /><br />
			If you'd prefer not to wait, please click <a href=\"?view=requests\">here</a><meta http-equiv=\"refresh\" content=\"8;url=?view=requests\">");
			endnotice();
		}
	break;
	
	default:
		if(isset($_GET["type"]))
		{
			$type = clean($_GET["type"]);
		}
		else 
		{
			$type = "all";
		}
		if($_SESSION["kristall_level"] == "DJ" && $type != "all")
		{
			$sql = mysql_query("SELECT * FROM `requests` WHERE `dj` = {$_SESSION["kristall_username"]} AND `type` = '$type' AND `reported` = '0' ORDER BY `id` ASC");
		}
		elseif($_SESSION["kristall_level"] == "DJ" && $type == "all")
		{
			$sql = mysql_query("SELECT * FROM `requests` WHERE `dj` = {$_SESSION["kristall_username"]} AND `reported` = '0' ORDER BY `id` ASC");
		}
		elseif($_SESSION["kristall_level"] != "DJ" && $type != "all")
		{
			$sql = mysql_query("SELECT * FROM `requests` WHERE `type` = '$type' ORDER BY `id` ASC");
		}
		else 
		{
			$sql = mysql_query("SELECT * FROM `requests` ORDER BY `id` ASC");
		}
		while($fetch = mysql_fetch_array($sql))
		{
			if($_SESSION["kristall_level"] != "DJ")
			{
				$sentto = ("<b>To:</b> {$fetch["dj"]}");
				$ips = ("<b>IP:</b> {$fetch["ip"]}");
			}
			if($fetch["reported"] == "1")
			{
				if($_SESSION["kristall_level"] == "Administrator" || $_SESSION["kristall_level"] == "Super Administrator")
				{
					$colour = " background: #fff2f2;";
				}
				else 
				{
					$colour = "";
				}
			}
			else 
			{
				$colour = "";
			}
			echo('<table border="0" width="100%" cellpadding="3" style="border-collapse: collapse;'.$colour.'" cellspacing="2">
	<tr>
		<td width="2%" rowspan="2"><input type="checkbox" class="rofl" name="'.$fetch["id"].'" value="'.$fetch["id"].'"></td>
		<td colspan="2">
		<table cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td width="35%" valign="top"><b>From:</b> '.$fetch["sender"].'</td>
				<td width="35%" valign="top"><b>Type:</b> '.$fetch["type"].'</td>
				<td width="30%">
				'. $ips .'
				</td>
			</tr>
			<tr>
				<td width="35%" valign="top"><b>Date:</b> '.$fetch["date"].'</td>
				<td width="35%" valign="top"><b>Report:</b> <a href="?view=requests&act=reportform&id='.$fetch["id"].'">Click to Report</a></td>
				<td width="30%">
				'.$sentto.'
				</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td valign="top"><b>Message:</b></td>
		<td width="90%" valign="top">'.$fetch["message"].'</td>
	</tr>
</table><hr size="1">');
		}
		echo("</form>");
}
?>
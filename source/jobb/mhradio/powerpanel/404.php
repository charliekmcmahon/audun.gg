<link href="css/inside.css" rel="stylesheet" type="text/css" />
<div id="content_title">404 Error </div>
		
<div id="content">
				Oh noes! You have clicked a link to a page which does not exist.<br>
				<br />
		If you <strong>believe</strong> this is our error then please contact an administrator immediately.
  <br /><br />
				<hr style="border-style: dotted; border-color: #CCCCCC"><br />
<strong>Requested Page:</strong> <? echo("". $_SERVER['SCRIPT_FILENAME'] ."?".$_SERVER['QUERY_STRING'].""); ?><br />
<strong>IP Address:</strong> <? echo("". $_SERVER['REMOTE_ADDR'] .""); ?><br />
<strong>Browser:</strong> <? echo("". $_SERVER['HTTP_USER_AGENT'] .""); ?></div>
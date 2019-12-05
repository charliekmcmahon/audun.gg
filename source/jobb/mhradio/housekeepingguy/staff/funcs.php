<?php
session_start();
function anti_hack($value)
{
   if(get_magic_quotes_gpc()) {
       $value = stripslashes($value);
   }

   if(!is_numeric($value)) {
       $value = mysql_real_escape_string($value);
   }
   return $value;
}
function login()
{
	if(!isset($_SESSION["session_username"]) || empty($_SESSION["session_username"]) || $_SERVER["REMOTE_ADDR"] != $_SESSION["session_ip"])
	{
		session_unset();
		session_destroy();
		die("Umm.. gotta login there mate");
	}
}
   function generateRandStr($length)
   {
      $randstr = "";
      for($i=0; $i<$length; $i++)
      {
         $randnum = mt_rand(0,61);
         if($randnum < 10)
         	{
            	$randstr .= chr($randnum+48);
         	}
         	else if($randnum < 36)
         		{
            		$randstr .= chr($randnum+55);
         		}
         		else
         			{
            			$randstr .= chr($randnum+61);
         			}
      			}
      		return $randstr;
   		}
?>
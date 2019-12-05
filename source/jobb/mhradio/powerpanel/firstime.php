<?php

if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['level']) {

checkaccount($_SESSION[username]);

$checker = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE username = '$_SESSION[username]'"));

if($checker['firsttime'] == "") {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><? echo("". $site[sitename] .""); ?> Radio Panel</title>
<link href="css/index.css" rel="alternate stylesheet" type="text/css" />
<link href="css/inside.css" rel="stylesheet" type="text/css" />
<link href="css/inside_oli.css" rel="alternate stylesheet" type="text/css" title="pro" />
<script language="javascript" src="includes/ajax.js"></script>
</head>

<body>
<div id="top_fade">
		
					<div id="top_logo"></div>
		
</div>
		
		<div id="content_title" style="margin-left: 20px;">
		Welcome to POWERpanel! omgz wowz!		</div>
		
        <div id="content" style="margin-left: 20px;">
<?php
if(isset($_POST['1']) && isset($_POST['2']) && isset($_POST['3']) && isset($_POST['4'])) {

$a1 = $_POST['1'];
$a2 = $_POST['2'];
$a3 = $_POST['3'];
$a4 = $_POST['4'];

// Add numbers together
$a8 = $a1 + $a2 + $a3 + $a4;

if($a8 > "4") {

// We encrypt all the values and then add them together
// Once we have have added the strings together we encrypt the full string to get an unbreakable code

$a11 = encrypt($a1);
$a22 = encrypt($a2);
$a33 = encrypt($a3);
$a44 = encrypt($a4);
$pin = "". $a11 ."". $a22."". $a33 ."". $a44 ."";
$pin = encrypt($pin);

// We have the long string D:

$insert = mysql_query("UPDATE users SET pin = '$pin' WHERE username = '$_SESSION[username]'") or die('Error: '. mysql_error());
$updatestatus = mysql_query("UPDATE users SET firsttime = 'no' WHERE username = '$_SESSION[username]'") or die('Error: '. mysql_error());

echo("<br />Your pin has successfully been made! Please take a note of it!<br /><br /><strong>Your current PIN code is:</strong><br />".$a1."".$a2."".$a3."".$a4."<br /><br /><div id='link'><a href='in.php?'>Click here to enter the panel!</a></div>");

}
else {
echo("<br />Please choose a securer PIN!<br /><br /><div id='link'><a href='in.php?firstime=yes'>Go back</a></div>");
}
} else {
?>
		I welcome thee to <strong><? echo("". $site[sitename] .""); ?></strong>'s DJ Panel powered by <strong>POWER</strong><i>panel</i> (<strong>THE</strong> <i>ultimate</i> radio panel! - itz tru!!1!1 ma mum sayz so so yeh).<br /><br />Because you are a <strong>new</strong> DJ you are required to set a <strong>PIN number</strong> for your account. If you forget your password or you want to disable your account you are able to input your PIN and complete the function without using your password.<br /><br />Click <a onClick="toggle('form')" style="cursor: pointer"><strong>here</strong></a> to show the form.
		<br /><br /><div id="form" style="display: none">
		<form action="" method="post" name="" id="">
		  <strong>PIN Number:</strong><br />
          <label>
          <select name="1" id="1">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
          </select>
          </label> 
		  <select name="2" id="2">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>

          </select>
                    <select name="3" id="3">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
                    </select>
                    <select name="4" id="4">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
                    </select>
		            <br />
                    <br />
                    <label>
                    <input type="submit" name="Submit" value="Set PIN" />
                    </label>
  </form></div><? } ?>
</div>
<?
}}
else {
header('location: in.php?page=home');
}
?>
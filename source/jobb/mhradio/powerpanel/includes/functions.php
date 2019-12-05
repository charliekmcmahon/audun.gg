<?php
include("config.php");

function clean($string) {
$string = htmlspecialchars($string);
$string = stripslashes($string);
$string = mysql_escape_string($string);
$string = htmlentities($string);
$string = str_replace("\"", "", $string); // Don't ask why after I did stripslashes() [:
$string = str_replace(">", "", $string);
$string = str_replace("<", "", $string);
return $string;
} 

function censor($string) {
## We need to censor the text
#################################

$words = file_get_contents("http://powerpanel.duosystems.net/grab/swears.txt");

$wordz = explode("|", $words);

foreach($wordz as $bad) {

		$string = str_replace($bad, "*****", strtolower($string));

}

return $string;

#################################
## Censored!
}

function encrypt($string) {
$string = md5($string);
$string = base64_encode($string);
$string = md5($string);
$string = base64_decode($string);
$string = md5($string);
return $string;
}

// Email address valid checker
function check_email_address($email) {
// First, we check that there's one @ symbol, and that the lengths are right
if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
// Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
return false;
}
// Split it into sections to make life easier
$email_array = explode("@", $email);
$local_array = explode(".", $email_array[0]);
for ($i = 0; $i < sizeof($local_array); $i++) {
if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) {
return false;
}
}
if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) { // Check if domain is IP. If not, it should be valid domain name
$domain_array = explode(".", $email_array[1]);
if (sizeof($domain_array) < 2) {
return false; // Not enough parts to domain
}
for ($i = 0; $i < sizeof($domain_array); $i++) {
if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) {
return false;
}
}
}
return true;
}

## BBCode
function bbcode($string) {
$string = str_replace('[b]', "<strong>", $string);
$string = str_replace("[/b]", "</strong>", $string);
$string = str_replace("[u]", "<u>", $string);
$string = str_replace("[/u]", "</u>", $string);
$string = str_replace("[i]", "<i>", $string);
$string = str_replace("[/i]", "</i>", $string);
$string = str_replace("[s]", "<strike>", $string);
$string = str_replace("[/s]", "</strike>", $string);
$string = str_replace("[code]", '<div style="margin-left: 5px; margin-top: 5px;">Code:<br /><div style="border: dotted 1px #000000; padding: 4px;"><!-- Code -->', $string);
$string = str_replace("[/code]", "<!-- / Code --></div></div>", $string);

if(@preg_match("/<div style=\"margin-left: 5px; margin-top: 5px;\">Code:<br /><div style=\"border: dotted 1px #000000; padding: 4px;\"><!-- Code -->/i", $string) && !@preg_match("/<!-- / Code --></div></div>/i", $string)) {
$string = "". $string ."</div></div>";
}

$string = str_replace("[quote]", '<div style="margin-left: 5px; margin-top: 5px;">Quote:<br /><div style="border: dotted 1px #000000; padding: 4px;"><!-- Quote -->', $string);
$string = str_replace("[/quote]", "<!-- / Quote --></div></div>", $string);

if(@preg_match("/<div style=\"margin-left: 5px; margin-top: 5px;\">Quote:<br /><div style=\"border: dotted 1px #000000; padding: 4px;\"><!-- Quote -->/i", $string) && !@preg_match("/<!-- / Quote --></div></div>/i", $string)) {
$string = "". $string ."<!-- / Quote --></div></div>";
}

return $string;
}

function checkaccount($username) {

$user = $username;

$check = @mysql_num_rows(mysql_query("SELECT * FROM users WHERE username = '$user'"));

if($check == "0") {
session_destroy();
die();
return;
}
else {
return;
}
}

?>
<?php
$to = 'audunhilden@live.no';
$subject = 'Welcome to the family!';
$from = 'premium@justmyporn.com';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
// Compose a simple HTML email message

$message .= '<html><body><div class="bg" style="background-color:#f7f7f7;padding:10px;">';
$message .= '<div class="container" style="text-align:left;margin-left:auto;margin-right:Auto;max-width:500px";><div class="content" style="background:white;padding:50px;"><h1 style="color:#2b2c2b;text-align:center;">JustMy<div style="background:#f8c333;padding: 0px 5px 0px 5px;height: 50px;vertical-align: middle;color: white;border-radius:.3em;display:inline-block;">porn</div></h1><h1 style="border-top:2px solid #dfdfdf;border-bottom:2px solid #dfdfdf; color:rgb(80, 80, 80);font-size:30px;font-weight:bold;line-height:1;text-align:center;"><div style="margin-top:30px;">Successfully reserved Premium.<div style="margin-bottom:30px;"></h1>';
$message .= '<span style="color:#808080;font-size:18px;margin-top:25px;">Help us, Ryan!<div style="margin-top:20px">Our special team of Goblins were on their way through the forest to refill the rainbow with their pot of gold, but they took the wrong turn and dropped their pot of gold right into this email! Use this pot of gold to get a lifetime of premium porn and help the goblins get their gold back by watching as many videos as you can!<div style="margin-top:20px"><strong>Use this password when accessing the Special category!</strong><div style="margin-top:20px"><strong style="color:#f8c333;font-size:25px;">{{ $page->false }}</strong><div style="margin-top:40px">Best regards, <br>JustMyPorn Staff.</span></div></div></div></div>';
$message .= '</div></body></html>';


// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>

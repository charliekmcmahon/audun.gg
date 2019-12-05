<?php
$to = $_REQUEST['email'];

$subject = 'Welcome to the family!';
$from = 'premium@justmyporn.com';
$name = $_POST['name']; // required
$email = $_POST['email']; // required



// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
// Compose a simple HTML email message

$message .= '<html><body><div class="bg" style="background-color:#f7f7f7;padding:10px;">';
$message .= '<div class="container" style="text-align:left;margin-left:auto;margin-right:Auto;max-width:500px";><div class="content" style="background:white;padding:50px;"><h1 style="color:#2b2c2b;text-align:center;">JustMy<div style="background:#f8c333;padding: 0px 5px 0px 5px;height: 50px;vertical-align: middle;color: white;border-radius:.3em;display:inline-block;">porn</div></h1><h1 style="border-top:2px solid #dfdfdf;border-bottom:2px solid #dfdfdf; color:rgb(80, 80, 80);font-size:30px;font-weight:bold;line-height:1;text-align:center;"><div style="margin-top:30px;">13th November.<div style="margin-bottom:30px;"></h1>';
$message .= '<span style="color:#808080;font-size:18px;margin-top:25px;">Hey '.$name.'!<div style="margin-top:20px">We&#39;re excited to share our great news! We&#39;re launching in 2 days, and your email has been added to our Premium users.<div style="margin-top:20px">Your premium page won&#39;t be available the first week due to the system failing, but you will receive an email when it&#39;s ready - where you need to fill in details regarding your personalized page.<div style="margin-top:20px"><strong>Start counting down with us!</strong><div style="margin-top:20px"><strong style="color:#f8c333;font-size:25px;">Justmyporn.com</strong><div style="margin-top:40px">Audun Hilden <br>Founder and CEO</span></div></div></div></div>';
$message .= '</div></body></html>';


// Sending email
if(mail($to, $subject, $message, $headers)){
    echo '<h1>Your mail has been sent successfully.</h1>';
} else{
    echo '<h1>Unable to send email. Please try again.</h1>';
}
?>


<form method="post" name="">
	<p>
		<label for='name'>Enter Name: </label><br>
		<input type="text" name="name">
	</p>
	<p>
		<label for='email'>Enter Email Address:</label><br>
		<input type="text" name="email">
	</p>

	<input type="submit"value="submit">
</form>

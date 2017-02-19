<?php
// Variables
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$message = trim($_POST['message']);

// Email address validation - works with php 5.2+
function is_email_valid($email) {
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if( isset($name) && isset($email) && isset($phone) && isset($message) && is_email_valid($email) ) {

	// Avoid Email Injection and Mail Form Script Hijacking
	$pattern = "/(content-type|bcc:|cc:|to:)/i";
	if( preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $phone) || preg_match($pattern, $message)) {
		exit;
	}

	// Email will be send
	$to = "kishore@railsfactory.com";  // Change with your email address
	$subject = "New quote request from GetLeads"; // If you want a default subject

	// HTML Elements for Email Body
	$body = <<<EOD
	<strong>Name:</strong> $name <br><strong>Email:</strong> <a href="mailto:$email?subject=feedback" "email me">$email</a> <br> <br><strong>Phone:</strong> $phone <br><strong>Message:</strong> $message <br>
EOD;
//Must end on first column
	
	$headers = "From: $name <$email>\r\n";
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// PHP email sender
	// mail($to, $subject, $body, $headers);

	system("curl -s --user 'api:".$_ENV['MG_APIKEY']."' ".$_ENV['MG_APIURL']." -F from='".$email."' -F to='".$_ENV['MG_TO']."' -F subject='".$subject."' -F text='".$body."'");
	error_log("curl -s --user 'api:".$_ENV['MG_APIKEY']."' ".$_ENV['MG_APIURL']." -F from='".$email."' -F to='".$_ENV['MG_TO']."' -F subject='".$subject."' -F text='".$body."'");
	system("curl -X POST -H 'Content-type: application/json' --data '{\"text\":\" $subject  --> New Lead Mail from JSL. \"}' ".$_ENV['SLACK_WH']);
	error_log("curl -X POST -H 'Content-type: application/json' --data '{\"text\":\" $subject  --> New Lead Mail from JSL. \"}' ".$_ENV['SLACK_WH']);
}
?>

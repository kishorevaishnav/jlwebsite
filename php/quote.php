<?php
require('env.php');
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
	<strong>Name:</strong> $name <br><strong>Email:</strong> <a href="mailto:$email?subject=feedback">$email</a> <br> <br><strong>Phone:</strong> $phone <br><strong>Message:</strong> $message <br>
EOD;
	$slack_body = "Name: *$name*\nEmail: $email\nPhone: *$phone*\nMessage: *$message*";

//Must end on first column
	
	// $headers = "From: $name <$email>\r\n";
	// $headers .= 'MIME-Version: 1.0' . "\r\n";
	// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// PHP email sender
	// mail($to, $subject, $body, $headers);

	system("curl -s --user 'api:".$_ENV['JL_MG_APIKEY']."' ".$_ENV['JL_MG_APIURL']."/messages -F from='".$email."' -F to='".$_ENV['JL_MG_TO']."' -F subject='".$subject."' --form-string html='".$body."'");
	// error_log("curl -s --user 'api:".$_ENV['JL_MG_APIKEY']."' ".$_ENV['JL_MG_APIURL']."/messages -F from='".$email."' -F to='".$_ENV['JL_MG_TO']."' -F subject='".$subject."' --form-string html='".$body."'");
	system("curl -X POST -H 'Content-type: application/json' --data '"attachments": [
        {
            \"title\": \"From *https://javascriptlabs.com*\",
            \"pretext\": \"\",
            \"text\": $slack_body,
            \"mrkdwn_in\": [
                \"text\",
                \"pretext\"
            ]
        }
    ]
}' ".$_ENV['JL_SLACK_WH']);
	// error_log("curl -X POST -H 'Content-type: application/json' --data '{\"text\":\"$slack_body\"}' ".$_ENV['JL_SLACK_WH']);
}
?>

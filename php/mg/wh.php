<?php
// Variables
// $_POST = json_decode(file_get_contents('php://input'), true);

error_log (print_r($_POST, true));
$recp = $_POST['recipient'];
if ($_POST['domain']=='sandbox416c1023822345578eace13713b59705.mailgun.org' && $_POST['event']=='delivered') {
	system("curl -X POST -H 'Content-type: application/json' --data '{\"text\":\" $recp  --> Message Delivered. \"}' https://hooks.slack.com/services/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");
}

if ($_POST['domain']=='sandbox416c1023822345578eace13713b59705.mailgun.org' && $_POST['event']=='opened') {
	system("curl -X POST -H 'Content-type: application/json' --data '{\"text\":\" $recp  --> Message Opened it. \"}' https://hooks.slack.com/services/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");
}

?>
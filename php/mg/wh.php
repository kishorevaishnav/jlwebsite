<?php
// Variables
// $_POST = json_decode(file_get_contents('php://input'), true);

// error_log (print_r($_POST, true));
$recp = $_POST['recipient'];
if (strpos($_ENV['MG_APIURL'], $_POST['domain']) !== false && $_POST['event']=='delivered') {
	system("curl -X POST -H 'Content-type: application/json' --data '{\"text\":\" $recp  --> Message Delivered. \"}' $_ENV['SLACK_WH']");
}

if (strpos($_ENV['MG_APIURL'], $_POST['domain']) !== false && $_POST['event']=='opened') {
	system("curl -X POST -H 'Content-type: application/json' --data '{\"text\":\" $recp  --> Message Opened it. \"}' $_ENV['SLACK_WH']");
}

?>
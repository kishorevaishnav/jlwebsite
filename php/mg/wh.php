<?php
// Variables
$_POST = json_decode(file_get_contents('php://input'), true);

error_log (print_r($_POST, true));

?>
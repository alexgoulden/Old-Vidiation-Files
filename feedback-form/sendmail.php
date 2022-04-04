<?php

$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

mail("alexrgoulden@gmail.com", "Vidiation Feedback Form", $message, "From: $email");
header("Location: thankyou.html");

?>
<?php
require "filter.php";

$formcontent="From: $new_firstname + $new_lastname \n Message: $clean_message";
$recipient = "$new_email";
$subject = "Contact Form feedback";
$mailheader = "From: $new_email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

echo "Thank you for your message!" . " -" . "<a href='https://www.youtube.com/watch?v=dQw4w9WgXcQ'> Return Home</a>";
?>
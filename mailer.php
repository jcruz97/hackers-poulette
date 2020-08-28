<?php
require "filter.php";

$test_message = 'This is a test message for HP';
$recipient = "$new_email";
$subject = "Contact Form feedback";
$mailheader = "From: $new_email";

mail($recipient, $subject, $test_message, $mailheader);

echo "Thank you for your message!" . " -" . "<a href='https://www.youtube.com/watch?v=dQw4w9WgXcQ' class='text-center' style='texte-decoration:none;color:#0d8187'> Return Home</a>";
?>
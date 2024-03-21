<?php
$to = 'penthousespace@gmail.com';
$subject = 'Subject of the email';
$message = 'This is the body of the email.';
$sender_email = 'adrian@digimat.cit';
$sender_name = 'Adrian';

$headers = "From: $sender_name <$sender_email>\r\n";
$headers .= "Reply-To: $sender_email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=utf-8\r\n";

// Sending email
if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
} else {
    echo 'Failed to send email.';
}
?>


<?php
$to = "nebacivil@gmail.com";
$subject = "Test Email";
$message = "This is a test email.";
$headers = "From: nattsamm12@gmail.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>

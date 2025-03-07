<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    
    $to = "your@email.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";
    
    mail($to, $subject, $message, $headers);
    
    header("Location: index.php?status=success#contact");
    exit();
}
header("Location: index.php?status=error#contact");
exit();
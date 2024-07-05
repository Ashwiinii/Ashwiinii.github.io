<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email parameters
    $to = 'amurali5@ncsu.edu';
    $subject = 'New Contact Form Submission';
    $body = "Full Name: $fullname\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>

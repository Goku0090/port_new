<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = 'gautamnair94@gmail.com'; // Change this to your email address
    $subject = 'New Contact Form Submission';
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    
    // Send email
    if (mail($to, $subject, $body)) {
        echo 'Message sent successfully!';
    } else {
        echo 'Error sending message.';
    }
}
?>
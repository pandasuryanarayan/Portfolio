<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'sunkrishna@signinid.com'; // Replace with your email address
    $Subject = 'New message from ' . $name;
    $body = "Name: $name\nEmail: $email\n\nSubject: $subject\n\nMessage:\n$message";

    if (mail($to, $Subject, $body)) {
        echo 'Email sent successfully!';
    } else {
        echo 'There was a problem sending your email.';
    }
}
?>

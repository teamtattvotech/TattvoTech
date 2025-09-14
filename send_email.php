<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "teamtattvotech@gmail.com"; // your email
    $subject = "New Launch Notification Signup";

    $name = htmlspecialchars($_POST['name']);
    $number = htmlspecialchars($_POST['number']);
    $email = htmlspecialchars($_POST['email']);

    $message = "
    New user signup for launch notifications:
    
    Name: $name
    Phone: $number
    Email: $email
    ";

    $headers = "From: no-reply@yourwebsite.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>

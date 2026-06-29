<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = trim($_POST['name']);
    $email   = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    $to = "Info@prathamcapital.in"; // CHANGE THIS
    $mailSubject = "Contact Form: " . $subject;

    $headers  = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    $body  = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Subject: $subject\n\n";
    $body .= "Message:\n$message";

    if (mail($to, $mailSubject, $body, $headers)) {
        header("Location: Contact.html?status=success");
        exit();
    } else {
        header("Location: Contact.html?status=error");
        exit();
    }
}
?>
            
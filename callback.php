<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name   = trim($_POST['name']);
    $mobile = trim($_POST['mobile']);
    $city   = trim($_POST['city']);

    $to = "Info@prathamcapital.in";
    $mailSubject = "New Call Back Request";

    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/plain;charset=UTF-8\r\n";
    $headers .= "From: Info@prathamcapital.in\r\n";
    $headers .= "Reply-To: Info@prathamcapital.in\r\n";

    $body  = "New Call Back Request\n";
    $body .= "=========================\n\n";
    $body .= "Name   : " . $name . "\n";
    $body .= "Mobile : " . $mobile . "\n";
    $body .= "City   : " . $city . "\n";

    if (mail($to, $mailSubject, $body, $headers)) {
        header("Location: index.php?status=success");
        exit();
    } else {
        header("Location: index.php?status=error");
        exit();
    }
}
?>
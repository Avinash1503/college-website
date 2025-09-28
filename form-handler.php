<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $visiter_email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    $email_from = 'info@yourwebsite.in';
    $email_subject = 'New Form Submission';
    $email_body = "User Name: $name.\n".
                  "User Email: $visiter_email.\n".
                  "Subject: $subject.\n".
                  "User Message: $message.\n";

    $to = 'bairwaavi78@gmail.com';
    $headers = "From: $email_from\r\n";
    $headers .= "Reply-To: $visiter_email\r\n";

    if(mail($to, $email_subject, $email_body, $headers)) {
        header("Location: contact.html");
        exit();
    } else {
        echo "Email sending failed. Please try again.";
    }
}
?>

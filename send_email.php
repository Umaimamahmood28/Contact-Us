<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "hmuhimin2020@gmail.com";

    // Set the subject of the email
    $subject = "Contact Us Form Submission";

    // Construct the email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // Send the email
    $success = mail($to, $subject, $body);

    if ($success) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message. Please try again later.";
    }
}
?>

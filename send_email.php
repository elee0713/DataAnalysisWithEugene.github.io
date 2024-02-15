<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Email information
    $to = "elee0713@gmail.com";
    $subject = "Message from $name";
    $txt = "You have received a message from $name <$email>: \n\n$message";
    $headers = "From: $email" . "\r\n" .
                "Reply-To: $email" . "\r\n" .
                "X-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to, $subject, $txt, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again later.";
    }
}
?>

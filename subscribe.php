<?php
// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'smtp-relay.brevo.com'; // Brevo SMTP host
    $mail->SMTPAuth = true;
    $mail->Username = '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'; // Your Brevo SMTP API key
    $mail->Password = ''; // Leave password empty
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
    $mail->Port = 587; // TCP port to connect to

    // Sender and recipient
    $mail->setFrom('karthikgowdara198@gmail.com', 'Karthik');
    $mail->addAddress('murthyraja27@gmail.com', 'murthy');

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email';
    $mail->Body = 'This is a test email sent via Brevo SMTP';

    // Send email
    $mail->send();
    echo 'Email sent successfully';
} catch (Exception $e) {
    echo 'Email could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>

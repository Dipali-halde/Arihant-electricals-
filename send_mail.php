<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'src/Exception.php';// or path to your manually downloaded files


// Get form data
$name    = $_POST['fullName'];
$email   = $_POST['email'];
$phone   = $_POST['phone'];
$message = $_POST['message'];


// Validate basic fields (optional but recommended)
if (!$name || !$email || !$message) {
    die("Please fill in all required fields.");
}

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'info@yourdomain.com';
    $mail->Password   = 'rdts ajle mmud rydz'; // 16-digit app password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

      // Email to YOU
      $mail->setFrom($email, $name);                       // Who submitted the form
      $mail->addAddress('info@yourdomain.com', 'Arihant');  // Where to send it

    

 // Content
 $mail->isHTML(true);
 $mail->Subject = 'New Contact Form Submission';
 $mail->Body    = "<h2>Contact Form Message</h2>
                   <p><strong>Name:</strong> {$name}</p>
                   <p><strong>Email:</strong> {$email}</p>
                   <p><strong>Message:</strong><br>{$message}</p>";
 $mail->AltBody = "Name: $name\nEmail: $email\nMessage:\n$message";
 $mail->send();
 echo "✅ Thank you! Your message has been sent.";
} catch (Exception $e) {
 echo "❌ Error: Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>




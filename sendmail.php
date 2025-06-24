<?php
// Get form fields
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$subject = $_POST['subject'] ?? '';
$message = $_POST['message'] ?? '';

// Set your email
$to = "yourname@gmail.com"; // ← Change this to your Gmail

// Compose email
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$body = "
  <h2>New Contact Message</h2>
  <p><strong>Name:</strong> $name</p>
  <p><strong>Email:</strong> $email</p>
  <p><strong>Subject:</strong> $subject</p>
  <p><strong>Message:</strong><br>$message</p>
";

// Send email
if (mail($to, $subject, $body, $headers)) {
    echo '<span class="output_message success">Message sent successfully!</span>';
} else {
    echo '<span class="output_message error">Message sending failed.</span>';
}
?>

<?php
// ✅ STEP 1: Form fields receive karo (jo HTML form se aata hai)
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$subject = $_POST['subject'] ?? '';
$message = $_POST['message'] ?? '';

// ✅ STEP 2: Apna Gmail yahan set karo
$to = "arbajkhan8034@gmail.com"; // <-- Yahan tumhara real email daalo

// ✅ STEP 3: Email ke headers banaye ja rahe hain
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// ✅ STEP 4: Email body — jo tumhe mail mein dikhna chahiye
$body = "
  <h2>New Contact Message</h2>
  <p><strong>Name:</strong> $name</p>
  <p><strong>Email:</strong> $email</p>
  <p><strong>Subject:</strong> $subject</p>
  <p><strong>Message:</strong><br>$message</p>
";

// ✅ STEP 5: Email bhejna
if (mail($to, $subject, $body, $headers)) {
    echo '<span class="output_message success">Message sent successfully!</span>';
} else {
    echo '<span class="output_message error">Message sending failed.</span>';
}
?>

<?php

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Retrieve the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Set the recipient email address
  $to = 'webtonerwebshop@gmail.com';

  // Set the email subject
  $subject = 'New message from contact form';

  // Construct the message
  $message = "Name: $name\nEmail: $email\nMessage:\n$message";

  // Set the headers to send HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // Add the sender's email address
  $headers .= "From: $name <$email>" . "\r\n";

  // Send the email
  if (mail($to, $subject, $message, $headers)) {
    // If the email was sent successfully, display a success message
    echo '<p>Thank you for your message!</p>';
  } else {
    // If the email failed to send, display an error message
    echo '<p>An error occurred while trying to send your message. Please try again.</p>';
  }
}

?>

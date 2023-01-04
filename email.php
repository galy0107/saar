<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['text'];
  $email = $_POST['email'];
  $phone = $_POST['tel'];

  // Set up the email
  $to = "galyair97@gmail.com";
  $subject = "Contact Form Submission";
  $message = "Name: $name\nEmail: $email\nPhone: $phone";
  $headers = "From: galyair97@gmail.com";

  // Send the email
  mail($to, $subject, $message, $headers);
}

?>
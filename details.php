<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  // Set up the email
  $to = "instructor@example.com";
  $subject = "Contact Form Submission";
  $message = "Name: $name\nEmail: $email\nPhone: $phone";
  $headers = "From: website@example.com";

  // Send the email
  mail($to, $subject, $message, $headers);
}

?>
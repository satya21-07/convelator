<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $first_name = $_POST['fname'];
  $last_name = $_POST['lname'];
  $subject = $_POST['subject'];

  // Perform any necessary validation on the form data here

  // Send an email with the form data
  $to = 'mohapatras696@gmail.com';
  $headers = "From: " . $fname . " " . $lname . " <" . $to . ">\r\n";
  $headers .= "Reply-To: " . $to . "\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
  $message_body = "Subject: " . $subject . "\n\n" . $message;
  $success = mail($to, $subject, $message_body, $headers);

  if ($success) {
    http_response_code(200);
  } else {
    http_response_code(500);
  }
}
?>

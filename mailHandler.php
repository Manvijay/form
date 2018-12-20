<?php
$recipient = "brentw.white@gmail.com"; //my email
$subject = 'Email message from Point Plumbing';
$fName = $_POST ["fName"];
$lName = $_POST ["lName"];

$mailBody="Name: $name\nEmail: $email\n\n$message";
$mail($recipient, $subject, $mailBody, "From: $fname <$email>");
$thankYou="<p>Thank you! We will be in contact with you shortly.</p>";

  if(mail('manvijay@buffalo.edu', 'checking php')){
    echo "<h1> Sent Successfully</h1>";
  }
  else {
    echo "<h1>something went wrong!</h1>"
  }

 ?>

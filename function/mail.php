<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

$to = 'medusa@metal.com';
$subject = $name.' from Medusa WebSite';

$headers = array(
    'From' => $email,
    'Reply-To' => $to,
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);

<<<<<<< HEAD
echo "<script type='text/javascript'>document.location.replace('../index.html');</script>";
=======
echo "<script type='text/javascript'>document.location.replace('../index.html');</script>";
>>>>>>> emergencyCoding

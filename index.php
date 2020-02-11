<?php
include "mail.php";

$to = $_POST["to"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$mail = new mail($to,$subject, $message);

echo $mail->sendMail();
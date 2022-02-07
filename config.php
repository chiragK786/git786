<?php
//$serverName = "127.0.0.1";
//set_time_limit (120);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require __DIR__ . '/PHPMailer/Exception.php';
require __DIR__ . '/PHPMailer/PHPMailer.php';
require __DIR__ . '/PHPMailer/SMTP.php';

$conn = mysqli_connect('localhost', 'root', '', 'assignment');
mysqli_query($conn, "SET @@session.wait_timeout=28800");
if (!mysqli_ping($conn)) {
    $conn = mysqli_connect('localhost', 'root', '', 'assignment');
}
if (!$conn) {
    echo 'failed to connect';
}

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host       = 'smtp.gmail.com'; //smtp server used here
$mail->SMTPAuth   = true;
$mail->Username   = 'chirag8554@gmail.com'; //put email here for phpmailer
$mail->Password   = 'Chirag786'; //put pasdword here for php mailer
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port       = 587;
$mail->setFrom('chirag8554@gmail.com', 'XKCD Comic Subscription');
$mail->addReplyTo('chirag8554@gmail.com', 'XKCD subscriber');
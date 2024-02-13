<?php
require_once('php/phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$phone = $_POST['user_phone'];

$mail->isSMTP();
$mail->Host = 'smtp.timeweb.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;
$mail->Username = '*********';
$mail->Password = '*********';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('*********');
$mail->addAddress('*********');
$mail->isHTML(true);

$mail->Subject = 'Заявка с сайта';
$mail->Body    = '' .$name . ' оставил заявку, его телефон ' .$phone;
$mail->AltBody = '';

if(!$mail->send()) {
echo 'Error';
} else {
echo 'Сообщение успешно отправлено';
}
?>

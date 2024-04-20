<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    /*
        password: jnsmz fsfscr wskvs zjrhs
        username or email: iilhomjonov777@gmail.com
    */
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'iilhomjonov777@gmail.com';
    $mail->Password   = 'skjdaeqwewqsdf'; // Sizni parolingiz, https://myaccount.google.com/security           
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->setFrom('iilhomjonov777@gmail.com', 'Ilhomjonov Iqbolshoh');
    $mail->addAddress('iilhomjonov777@gmail.com', 'Ilhomjonov Iqbolshoh');
    $mail->addAddress('iilhomjonov777@gmail.com');
    $mail->addReplyTo('iilhomjonov777@gmail.com', 'Ilhomjonov Iqbolshoh');
    $mail->addCC('iilhomjonov777@gmail.com');
    $mail->addBCC('iilhomjonov777@gmail.com');

    // Fayl yuborish
    $mail->addAttachment('tmp/new-php-logo.png');

    // Message Content
    $mail->isHTML(true);
    $mail->Subject = 'Bu Subject';
    $mail->Body    = 'Asosiy qism';
    $mail->AltBody = 'Yuboriladigan xabar matni';

    $mail->send();
    echo 'Xabar yuborildi';
} catch (Exception $e) {
    echo "Xabar yuborilmadi. Xatolik: {$mail->ErrorInfo}";
}

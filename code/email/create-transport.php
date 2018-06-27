<?php
/** @var Swift_SmtpTransport $transport 傳輸 */
$transport = (new Swift_SmtpTransport('smtp.example.com', 25))
    ->setUsername('yourAccount')
    ->setPassword('yourPassword');

/** @var Swift_Mailer $mailer 使用您創建的傳輸，創建郵件發送器 */
$mailer = new Swift_Mailer($transport);

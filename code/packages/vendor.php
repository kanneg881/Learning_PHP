<?php
// 告訴 PHP 載入 Composer 的類別搜尋檔案
require 'vendor/autoload.php';

/** @var Swift_SmtpTransport $transport 傳輸 */
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'TLS'))
    ->setUsername('yourAccount')
    ->setPassword('yourPassword');

/** @var Swift_Mailer $mailer 使用您創建的傳輸，創建郵件發送器 */
$mailer = new Swift_Mailer($transport);

/** @var Swift_Message $message 寄件訊息 */
$message = (new Swift_Message('美味的新食譜'))
    ->setFrom(['julia@example.com' => 'yourName'])
    ->setTo(['james@example.com' => 'James Beard'])
    ->setBody(<<<_TEXT_
親愛的(朋友的名字)

你應該試試這個：原漿1磅的雞肉和2磅的蘆筍
到攪拌器中，然後降下混合的小丸子到油炸鍋。 好吃！

愛你
(自己的名字)
_TEXT_
    );

/** @var int $result 送出訊息的結果 */
//$result = $mailer->send($message);

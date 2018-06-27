<?php

/** @var Swift_Message $message 寄件訊息 */
$message = (new Swift_Message('美味的新食譜'))
    ->setFrom(['julia@example.com'])
    ->setTo(['james@example.com' => 'James Beard'])
    ->setBody(<<<_TEXT_
親愛的 James

你應該試試這個：原漿1磅的雞肉和2磅的蘆筍
到攪拌器中，然後降下混合的小丸子到油炸鍋。 好吃！

愛你
Julia

_TEXT_
    );

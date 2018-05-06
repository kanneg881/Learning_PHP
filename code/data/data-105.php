<?php

/** @var string $html HTML 元素 */
$html = '<span class="{class}">炸豆腐<span>
<span class="{class}">油浸魚</span>';

print str_replace('{class}', $my_class, $html);

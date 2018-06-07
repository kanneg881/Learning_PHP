<?php
/** @var string $templateFile 檔案 */
$templateFile = 'page-template.html';

if (is_readable($templateFile)) {
    /** @var bool|string $template 檔案內容 */
    $template = file_get_contents($templateFile);
} else {
    print "無法讀取樣板檔案。";
}
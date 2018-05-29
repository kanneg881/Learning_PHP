<?php
/** @var array $sweets 甜點 */
$sweets = array(
    '鬆餅' => '芝麻鬆餅',
    '方形' => '方形椰奶凝膠',
    '蛋糕' => '黑糖蛋糕',
    '米肉' => '甜米飯和肉'
);

/**
 * 產生有值得選項
 *
 * @param array $options 選項
 * @return string html 選項
 */
function generateOptionsWithValue(array $options): string
{
    /** @var string $html 選項 */
    $html = '';

    foreach ($options as $value => $option) {
        $html .= "<option value='$value'>$option</option>\n";
    }

    return $html;
}

/**
 * 顯示表單
 */
function showForm()
{
    /** @var array $sweets 甜點 */
    $sweets = generateOptionsWithValue($GLOBALS['sweets']);
    print<<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
你的訂單：<select name="order">
$sweets
</select>
<br/>
<input type="submit" value="訂購">
</form>
_HTML_;
}

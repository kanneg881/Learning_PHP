<?php
/** @var array $sweets 甜點 */
$sweets = array(
    '鬆餅' => '芝麻鬆餅',
    '方形' => '方形椰奶凝膠',
    '蛋糕' => '黑糖蛋糕',
    '米肉' => '甜米飯和肉'
);

print '<select name="sweet">';
// > 前面是 option 標籤結尾， $label 是選單顯示值
foreach ($sweets as $option => $label) {
    print '<option value="' . $option . '"';

    if ($option == $defaults['sweet']) {
        print ' selected';
    }
    print ">$label</option>\n";
}
print '</select>';

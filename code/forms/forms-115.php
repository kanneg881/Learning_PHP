<?php
/** @var array $mainDishes 主菜 */
$mainDishes = array(
    '黃瓜' => '紅燒海參',
    '胃' => "炒豬的胃",
    '肚' => '葡萄酒醬炒牛肚',
    '芋頭' => '芋頭燉豬肉',
    '內臟' => '鹽焗內臟',
    '鮑魚' => '鮑魚骨髓和鴨掌'
);

print '<select name="mainDish[]" multiple>';
/** @var array $selectedOptions 選單的選項 */
$selectedOptions = array();

foreach ($defaults['mainDish'] as $option) {
    $selectedOptions[$option] = true;
}

// 印出 <option> 標籤
foreach ($mainDishes as $option => $label) {
    print '<option value="' . htmlentities($option) . '"';

    if (array_key_exists($option, $selectedOptions)) {
        print ' selected';
    }
    print '>' . htmlentities($label) . '</option>';
    print "\n";
}
print '</select>';

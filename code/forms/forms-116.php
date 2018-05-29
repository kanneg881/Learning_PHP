<?php
print '<input type="checkbox" name="delivery" value="是"';

if ($defaults['delivery'] == '是') {
    print ' checked';
}
print '>送出?';

/** @var array $checkboxOptions 複選框選項 */
$checkboxOptions = array(
    'small' => '小',
    'medium' => '中',
    'large' => '大',
);

foreach ($checkboxOptions as $value => $label) {
    print '<input type="radio" name="size" value="' . $value . '"';

    if ($defaults['size'] == $value) {
        print ' checked';
    }
    print ">$label";
}

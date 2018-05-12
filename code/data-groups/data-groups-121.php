<?php
/** @var array $flavors 口味 */
$flavors = array(
    '日式' => array(
        '辣' => '山葵',
        '鹽' => '醬油'
    ),
    '中式' => array(
        '辣' => '芥末',
        '胡椒鹽' => '花椒'
    )
);

// $culture 是鍵，$cultureFlavors 是值 (它是個陣列)
foreach ($flavors as $culture => $cultureFlavors) {
    // $flavor 是鍵，$example 是值
    foreach ($cultureFlavors as $flavor => $example) {
        print "$culture{$flavor}口味是{$example}。\n";
    }
}

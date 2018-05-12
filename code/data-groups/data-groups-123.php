<?php
/** @var array $specials 特價 */
$specials = array(
    array('栗子小圓麵包', '核桃小圓麵包', '花生小圓麵包'),
    array('板栗沙拉', '核桃沙拉', '花生沙拉')
);

// 變數 $numberSpecials 是 2：$specials 第一維度的元素數量
for ($i = 0, $numberSpecials = count($specials); $i < $numberSpecials; $i++) {
    // 變數 $numberSub 是 3：每個子陣列的元素數量
    for ($m = 0, $numberSub = count($specials[$i]); $m < $numberSub; $m++) {
        print "元素 [$i][$m] 是 {$specials[$i][$m]}\n";
    }
}

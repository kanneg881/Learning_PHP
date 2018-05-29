<?php
/** @var DateTime $rangeStart 做一個代表6個月前的日期物件 */
$rangeStart = new DateTime('6 months ago');
/** @var DateTime $rangeEnd 做一個代表現在的日期物件 */
$rangeEnd = new DateTime();

/**
 * $_POST['year'] 是4位數年份
 * $_POST['month'] 是2位數月份
 * $_POST['day'] 是2位數日期
 *
 * @var array $input 輸入資料
 */
$input['year'] = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT,
    array(
        'options' => array(
            'min_range' => 1900,
            'max_range' => 2100,
        )
    ));
$input['month'] = filter_input(INPUT_POST, 'month', FILTER_VALIDATE_INT,
    array(
        'options' => array(
            'min_range' => 1,
            'max_range' => 12
        )
    ));
$input['day'] = filter_input(INPUT_POST, 'day', FILTER_VALIDATE_INT,
    array(
        'options' => array(
            'min_range' => 1,
            'max_range' => 31
        )
    ));
/**
 * 不需要用 === 來檢驗false，因為0不是在選擇年、月或日的時候被選中
 * checkdate()確認用來指定的日期搭配特定的年月是不是正確的
 */
if ($input['year'] && $input['month'] && $input['day'] &&
    checkdate($input['month'], $input['day'], $input['year'])) {
    /** @var DateTime $submittedDate 提交的日期 */
    $submittedDate = new DateTime(strtotime($input['year'] . '-' .
        $input['month'] . '-' . $input['day']));

    if (($rangeStart > $submittedDate) || ($rangeEnd < $submittedDate)) {
        /** @var array $errors 錯誤訊息 */
        $errors[] = '請選擇一個不到六個月的日期。';
    }
} else {
    // 這個else情況是只送出了像2月31日這種日期
    $errors[] = '請輸入一個有效的日期。';
}

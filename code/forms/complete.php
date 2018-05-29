<?php

/**
 * 這行引入假設 FormHelper.php 跟目前檔案在同一個目錄下。
 */
require 'FormHelper.php';

/**
 * 甜點
 * 為選單建立選項陣列
 * 這些陣列會在 display_form()、validateForm()、
 * 還有 processForm() 被使用，所以定義全域變數。
 *
 * @var array $sweets
 */
$sweets = array(
    '鬆餅' => '芝麻鬆餅',
    '方形' => '方形椰奶凝膠',
    '蛋糕' => '黑糖蛋糕',
    '米肉' => '甜米飯和肉'
);
/** @var array $mainDishes 主菜 */
$mainDishes = array(
    '黃瓜' => '紅燒海參',
    '胃' => "炒豬的胃",
    '肚' => '葡萄酒醬炒牛肚',
    '芋頭' => '芋頭燉豬肉',
    '內臟' => '鹽焗內臟',
    '鮑魚' => '鮑魚骨髓和鴨掌'
);

/**
 * 主要頁面的程式邏輯是：
 * - 如果表單是送出的，那就驗證資料，然後處理或顯示
 * - 如果表單不是送出的，那就顯示
 */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 如果 validateForm() 回傳錯誤，把錯誤傳給 show_form()
    list($errors, $input) = validateForm();

    if ($errors) {
        showForm($errors);
    } else {
        // 如果送出的資料正確，那接著進行處理
        processForm($input);
    }
} else {
    // 如果不是表單送出，直接顯示
    showForm();
}

/**
 * 顯示表單
 *
 * @param array $errors 錯誤訊息
 */
function showForm(array $errors = array()): void
{
    /** @var array $defaults 預設值 */
    $defaults = array(
        'delivery' => '是',
        'size' => '中'
    );
    /** @var FormHelper $form 表單 */
    $form = new FormHelper($defaults);

    // 所有 HTML 還有表單的顯示程式碼都清楚地分開存放在不同檔案
    include 'complete-form.php';
}

/**
 * 驗證表單
 *
 * @return array 錯誤訊息和輸入資料
 */
function validateForm(): array
{
    /** @var array $input 輸入資料 */
    $input = array();
    /** @var array $errors 錯誤訊息 */
    $errors = array();

    // name 是必要欄位
    $input['name'] = trim($_POST['name'] ?? '');

    if (!strlen($input['name'])) {
        $errors[] = '請輸入你的名字。';
    }
    // size 是必要欄位
    $input['size'] = $_POST['size'] ?? '';

    if (!in_array($input['size'], ['小', '中', '大'])) {
        $errors[] = '請選擇一個尺寸。';
    }
    // sweet 是必要欄位
    $input['sweet'] = $_POST['sweet'] ?? '';

    if (!array_key_exists($input['sweet'], $GLOBALS['sweets'])) {
        $errors[] = '請選擇一個有效的甜品。';
    }
    // 主菜要有2個
    $input['mainDish'] = $_POST['mainDish'] ?? array();

    if (count($input['mainDish']) != 2) {
        $errors[] = '請選擇兩道主菜。';
    } else {
        // 已知選好兩個主菜了，現在確保兩個主菜都是 ok 的
        if (!(array_key_exists($input['mainDish'][0], $GLOBALS['mainDishes']) &&
            array_key_exists($input['mainDish'][1], $GLOBALS['mainDishes']))) {
            $errors[] = '請選擇兩道有效的主菜。';
        }
    }
    // 如果 delivery 被選了，那 comments 就一定要有內容
    $input['delivery'] = $_POST['delivery'] ?? '否';
    $input['comments'] = trim($_POST['comments'] ?? '');

    if ($input['delivery'] == '是' && !strlen($input['comments'])) {
        $errors[] = '請輸入您的地址以便交付。';
    }

    return array($errors, $input);
}

/**
 * 處理表單
 *
 * @param array $input 輸入資料
 */
function processForm($input)
{
    // 在 $GLOBALS['sweets'] 和 $GLOBALS['main_dishes'] 陣列裡找甜點跟主菜的全名
    /** @var string $sweet 甜點全名 */
    $sweet = $GLOBALS['sweets'][$input['sweet']];
    /** @var string $mainDish1 主菜全名 */
    $mainDish1 = $GLOBALS['mainDishes'][$input['mainDish'][0]];
    /** @var string $mainDish2 主菜全名 */
    $mainDish2 = $GLOBALS['mainDishes'][$input['mainDish'][1]];

    if (isset($input['delivery']) && ($input['delivery'] == '是')) {
        /** @var string $delivery 要或不要訊息 */
        $delivery = '要';
    } else {
        $delivery = '不要';
    }
    /** @var string $message 建立點菜訊息 */
    $message = <<<_ORDER_
謝謝您的訂單，{$input['name']}。
你要求大小為{$input['size']}的{$sweet}，{$mainDish1}，和{$mainDish2}。
你{$delivery}送出。
_ORDER_;

    if (strlen(trim($input['comments']))) {
        $message .= '你的評論：' . $input['comments'];
    }

    // 發送消息給廚師
    mail('chef@restaurant.example.com', '新訂單', $message);
    /**
     * 編碼 HTML 並印出訊息
     * 把換行字元轉換成 <br> 標籤
     */
    print nl2br(htmlentities($message, ENT_HTML5));
}

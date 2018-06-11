<?php
require 'FormHelper.php';

session_start();

/** @var array $mainDishes 主要菜 */
$mainDishes = [
    '黃瓜' => '紅燒海參',
    '胃' => "炒豬胃",
    '肚' => '葡萄酒醬炒牛肚',
    '芋頭' => '芋頭燉豬肉',
    '內臟' => '烤鹽內臟',
    '鮑魚' => '鮑魚與骨髓和鴨腳',
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    /**
     * @var array $errors 錯誤訊息
     * @var array $input 輸入資料
     */
    list($errors, $input) = validateForm();

    if ($errors) {
        showForm($errors);
    } else {
        processForm($input);
    }
} else {
    showForm();
}

/**
 * 顯示表單
 *
 * @param array $errors 錯誤訊息
 */
function showForm(array $errors = []): void
{
    /** @var FormHelper $form 沒有自訂預設值，所以 FormHelper 建構子沒有傳入參數 */
    $form = new FormHelper();

    // 建立顯示錯誤的 HTML 區塊
    if ($errors) {
        /** @var string $errorHtml 錯誤的 HTML 區塊 */
        $errorHtml = '<ul><li>';
        $errorHtml .= implode('</li><li>', $errors);
        $errorHtml .= '</li></ul>';
    } else {
        $errorHtml = '';
    }

    // 這表單很簡單，所以直接用 print 方法把表單建好
    print <<<_FORM_
<form method="POST" action="{$form->encode($_SERVER['PHP_SELF'])}">
$errorHtml
菜：{$form->select($GLOBALS['mainDishes'], ['name' => 'dish'])}
<br/>
數量：{$form->input('text', ['name' => 'quantity'])}
<br/>
{$form->input('submit', ['value' => '訂購'])}
</form>
_FORM_;
}

/**
 * 驗證表單
 *
 * @return array 錯誤訊息，資料輸入
 */
function validateForm(): array
{
    /** @var array $input 輸入資料 */
    $input = [];
    /** @var array $errors 錯誤訊息 */
    $errors = [];

    // 檢查選擇的菜餚名稱是否有效
    $input['dish'] = $_POST['dish'] ?? '';

    if (!array_key_exists($input['dish'], $GLOBALS['mainDishes'])) {
        $errors[] = '請選擇一個有效的菜。';
    }

    $input['quantity'] = filter_input(
        INPUT_POST,
        'quantity',
        FILTER_VALIDATE_INT,
        [
            'options' => ['min_range' => 1,],
        ]
    );

    if ($input['quantity'] === false || $input['quantity'] === null) {
        $errors[] = '請輸入數量。';
    }

    return array($errors, $input);
}

/**
 * 處理表單
 *
 * @param array $input 輸入資料
 */
function processForm(array $input): void
{
    $_SESSION['order'][] = [
        'dish' => $input['dish'],
        'quantity' => $input['quantity']
    ];

    print '謝謝您的訂單。';
}

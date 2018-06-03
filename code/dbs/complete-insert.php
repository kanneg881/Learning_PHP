<?php

// 引入 form helper 類別
require 'FormHelper.php';

// 連結資料夾
try {
    /** @var PDO $database PDO 物件 */
    $database = new PDO('sqlite:/tmp/restaurant.db');
} catch (PDOException $exception) {
    print "無法連線：" . $exception->getMessage();
    exit();
}
// 設定資料庫出錯時丟出例外
$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/**
 * 主要頁面邏輯是：
 * - 如果是送出表單的話，驗證、處理或顯示
 * - 如果還沒送出，顯示
 */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    /**
     * 如果 validateForm() 回傳錯誤，那把錯誤傳給 showForm()
     *
     * @var array $errors 錯誤訊息
     * @var array $input 輸入資料
     */
    list($errors, $input) = validateForm();

    if ($errors) {
        showForm($errors);
    } else {
        // 驗證過了ok，進行處理
        processForm($input);
    }
} else {
    // 還沒送出的表單，就顯示吧
    showForm();
}

/**
 * 顯示表單
 *
 * @param array $errors 錯誤訊息
 */
function showForm(array $errors = array()): void
{
    /** @var array $defaults 設定預設值 price 等於5 */
    $defaults = array('price' => '5.00');

    /** @var FormHelper $form 表單輔助物件，設定預設值 */
    $form = new FormHelper($defaults);

    // 所有 HTML 跟表單顯示都在各自檔案中
    include 'insert-form.php';
}

/**
 * 驗證表單
 *
 * @return array 錯誤訊息，輸入資料
 */
function validateForm(): array
{
    /** @var array $input 輸入資料 */
    $input = array();
    /** @var array $errors 錯誤訊息 */
    $errors = array();

    // dish_name 是必要欄位
    $input['dish_name'] = trim($_POST['dish_name'] ?? '');

    if (!strlen($input['dish_name'])) {
        $errors[] = '請輸入菜名。';
    }

    /**
     * price 必須是合法的浮點數
     * 並且要大於0
     */
    $input['price'] = filter_input(INPUT_POST, 'price',
        FILTER_VALIDATE_FLOAT);
    if ($input['price'] <= 0) {
        $errors[] = '請輸入有效的價格。';
    }

    // is_spicy 的預設值是 'no'
    $input['is_spicy'] = $_POST['is_spicy'] ?? '不';

    return array($errors, $input);
}

/**
 * 處理表單
 *
 * @param array $input 輸入資料
 */
function processForm(array $input): void
{
    // 在函式中存取全域變數 $database
    global $database;

    // 照核取方塊的值設定 $is_spicy
    if ($input['is_spicy'] == '是') {
        $is_spicy = 1;
    } else {
        $is_spicy = 0;
    }

    // 新增新菜到資料表中
    try {
        /** @var PDOStatement $statement pdo 聲明 */
        $statement = $database->prepare('INSERT INTO dishes 
          (dish_name, price, is_spicy) VALUES (?,?,?)');
        $statement->execute(array($input['dish_name'], $input['price'], $is_spicy));
        // 告訴使用者我們加了什麼
        print '新增了 ' . htmlentities($input['dish_name']) . ' 到資料庫。';
    } catch (PDOException $exception) {
        print "無法將您的菜新增到資料庫。";
    }
}

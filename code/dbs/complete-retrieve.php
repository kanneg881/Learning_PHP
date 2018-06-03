<?php
// 載入 form helper 類別
require 'FormHelper.php';

// 連結資料庫
try {
    /** @var PDO $database pdo 物件 */
    $database = new PDO('sqlite:/tmp/restaurant.db');
} catch (PDOException $exception) {
    print "無法連線：" . $exception->getMessage();
    exit();
}
// 設定資料庫錯誤時的例外
$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// 使用 fetch mode：使用物件
$database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

/** @var array $spicyChoices 表單中 "spicy" 選單中的選項 */
$spicyChoices = array('不', '是', '兩種');

/**
 * 主要程式邏輯：
 * - 如果是送出表單，執行驗證，然後執行處理或顯示
 * - 如果不是送出的表單，那就顯示
 */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 如果 validateForm() 回傳錯誤，將錯誤傳到 showForm()
    list($errors, $input) = validateForm();

    if ($errors) {
        showForm($errors);
    } else {
        // 如果送出的資料沒有錯誤，進行處理
        processForm($input);
    }
} else {
    // 不是送出表單，進行顯示
    showForm();
}

/**
 * 顯示表單
 *
 * @param array $errors 錯誤訊息
 */
function showForm(array $errors = array()): void
{
    /** @var array $defaults 設定自訂預設值 */
    $defaults = array(
        'minPrice' => '5.00',
        'maxPrice' => '25.00'
    );

    // 對 $form 物件設定適當的預設值
    $form = new FormHelper($defaults);

    // 所有的 HTML 與表單顯示功能都清楚放在不同檔案中
    include 'retrieve-form.php';
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

    // 將送出的 dishName 移除前後的空白字元
    $input['dishName'] = trim($_POST['dishName'] ?? '');
    // 最低價格必須是浮點數
    $input['minPrice'] = filter_input(INPUT_POST, 'minPrice',
        FILTER_VALIDATE_FLOAT);

    if ($input['minPrice'] === null || $input['minPrice'] === false) {
        $errors[] = '請輸入有效的最低價格。';
    }
    // 最高價必須是浮點數
    $input['maxPrice'] = filter_input(INPUT_POST, 'maxPrice',
        FILTER_VALIDATE_FLOAT);

    if ($input['maxPrice'] === null || $input['maxPrice'] === false) {
        $errors[] = '請輸入有效的最高價格。';
    }

    // 最低價格一定要低於最高價格
    if ($input['minPrice'] >= $input['maxPrice']) {
        $errors[] = '最低價格必須低於最高價格。';
    }
    $input['isSpicy'] = $_POST['isSpicy'] ?? '';

    if (!array_key_exists($input['isSpicy'], $GLOBALS['spicyChoices'])) {
        $errors[] = '請選擇一個有效的"辣"選項。';
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
    // 在函式中存取全域變數 $database
    global $database;

    /** @var string $sql 建立 query 述句 */
    $sql = 'SELECT dish_name, price, is_spicy 
            FROM dishes 
            WHERE price >= ? 
            AND price <= ?';

    /**
     * 如果菜名是被送出的，那就加到 WHERE 子句。
     * 我們用 quote() 和 strstr() 避免使用者輸入萬用字元。
     */
    if (strlen($input['dishName'])) {
        /** @var string $dish 菜名 */
        $dish = $database->quote($input['dishName']);
        $dish = strtr($dish, array('_' => '\_', '%' => '\%'));
        $sql .= " AND dishName LIKE $dish";
    }
    /**
     * 如果 isSpicy 的值是 "是" 或 "不" 那就加到 SQL 述句中
     * （如果它的值是 兩種，那我們就不把 isSpicy 加到 WHERE 子句）
     *
     * @var string $spicyChoice
     */
    $spicyChoice = $GLOBALS['spicyChoices'][$input['isSpicy']];

    if ($spicyChoice == '是') {
        $sql .= ' AND is_spicy = 1';
    } elseif ($spicyChoice == '不') {
        $sql .= ' AND is_spicy = 0';
    }
    /** @var PDOStatement $statement 把 query 傳送到資料庫程式 */
    $statement = $database->prepare($sql);
    $statement->execute(array($input['min_price'], $input['max_price']));
    /** @var array $dishes 取回所有資料列 */
    $dishes = $statement->fetchAll();

    if (count($dishes) == 0) {
        print '沒有匹配的菜。';
    } else {
        print '<table>';
        print '<tr><th>菜名</th><th>價格</th><th>辣?</th></tr>';

        /**
         * @var object $dish 菜資料
         */
        foreach ($dishes as $dish) {
            if ($dish->is_spicy == 1) {
                $spicy = '是';
            } else {
                $spicy = '不';
            }
            printf('<tr><td>%s</td><td>$%.02f</td><td>%s</td></tr>',
                htmlentities($dish->dish_name), $dish->price, $spicy);
        }
    }
}

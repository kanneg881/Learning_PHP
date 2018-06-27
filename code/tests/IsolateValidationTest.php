<?php
// validateForm() 被定義在這個檔案中
include 'isolate-validation.php';

use PHPUnit\Framework\TestCase;

class IsolateValidationTest extends TestCase
{
    /**
     * 測試小數點年紀無效
     */
    public function testDecimalAgeNotValid(): void
    {
        /** @var array $submitted 提交 */
        $submitted = [
            'age' => '6.7',
            'price' => '100',
            'name' => 'Julia',
        ];
        list($errors, $input) = validateForm($submitted);
        // 預期只有年紀會錯
        $this->assertContains('請輸入有效年齡。', $errors);
        $this->assertCount(1, $errors);
    }

    /**
     * 測試美元符號價格無效
     */
    public function testDollarSignPriceNotValid(): void
    {
        /** @var array $submitted 提交 */
        $submitted = [
            'age' => '6',
            'price' => '$52',
            'name' => 'Julia',
        ];
        list($errors, $input) = validateForm($submitted);
        // 預期只有價格會錯
        $this->assertContains('請輸入有效的價格。', $errors);
        $this->assertCount(1, $errors);
    }

    /**
     * 測試有效資料是沒問題的
     */
    public function testValidDataOK(): void
    {
        /** @var array $submitted 提交 */
        $submitted = [
            'age' => '15',
            'price' => '39.95',
            // 如果名稱前後有空白應該要被去除掉
            'name' => '  Julia  ',
        ];
        list($errors, $input) = validateForm($submitted);
        // 預期應該不能有錯誤
        $this->assertCount(0, $errors);
        // 預期 $input 陣列中應該要有3樣東西
        $this->assertCount(3, $input);
        $this->assertSame(15, $input['age']);
        $this->assertSame(39.95, $input['price']);
        $this->assertSame('Julia', $input['name']);
    }
}
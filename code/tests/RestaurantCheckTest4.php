<?php
include 'restaurant-check.php';

use PHPUnit\Framework\TestCase;

class RestaurantCheckTest extends TestCase
{
    /**
     * 測試稅率和小費
     */
    public function testWithTaxAndTip(): void
    {
        /** @var int $meal 餐費 */
        $meal = 100;
        /** @var int $tax 稅率 */
        $tax = 10;
        /** @var int $tip 小費 */
        $tip = 20;
        /** @var float $result 總額 */
        $result = restaurantCheck($meal, $tax, $tip);
        $this->assertEquals(130, $result);
    }

    /**
     * 測試稅率
     */
    public function testWithNoTip(): void
    {
        /** @var int $meal 餐費 */
        $meal = 100;
        /** @var int $tax 稅率 */
        $tax = 10;
        /** @var int $tip 小費 */
        $tip = 0;
        /** @var float $result 總額 */
        $result = restaurantCheck($meal, $tax, $tip);
        $this->assertEquals(110, $result);
    }

    /**
     * 測試不包含稅金的小費
     */
    public function testTipIsNotOnTax(): void
    {
        /** @var int $meal 餐費 */
        $meal = 100;
        /** @var int $tax 稅率 */
        $tax = 10;
        /** @var int $tip 小費 */
        $tip = 10;
        /** @var float $checkWithTax 有包含稅金的小費總額 */
        $checkWithTax = restaurantCheck($meal, $tax, $tip);
        /** @var float $checkWithoutTax 不包含稅金的小費總額 */
        $checkWithoutTax = restaurantCheck($meal, 0, $tip);
        /** @var float $expectedTax 期望稅金總額 */
        $expectedTax = $meal * ($tax / 100);
        $this->assertEquals($checkWithTax, $checkWithoutTax + $expectedTax);
    }

    /**
     * 測試小費應該包含稅金
     */
    public function testTipShouldIncludeTax(): void
    {
        /** @var int $meal 餐費 */
        $meal = 100;
        /** @var int $tax 稅率 */
        $tax = 10;
        /** @var int $tip 小費 */
        $tip = 10;
        /** @var float $result 第四個參數為真時表示要用稅後金額計算小費 */
        $result = restaurantCheck($meal, $tax, $tip, true);
        $this->assertEquals(121, $result);
    }

    /**
     * 測試小費不應該包含稅金
     */
    public function testTipShouldNotIncludeTax(): void
    {
        /** @var int $meal 餐費 */
        $meal = 100;
        /** @var int $tax 稅率 */
        $tax = 10;
        /** @var int $tip 小費 */
        $tip = 10;
        /** @var float $result 第四個參數為假時表示不要用稅後金額計算小費 */
        $result = restaurantCheck($meal, $tax, $tip, false);
        $this->assertEquals(120, $result);
    }
}
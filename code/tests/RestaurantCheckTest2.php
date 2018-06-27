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
        $this->assertEquals(120, $result);
    }
}

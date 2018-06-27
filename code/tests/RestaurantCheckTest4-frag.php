
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
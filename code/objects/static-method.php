<?php

class Entree
{
    /** @var string 名稱 */
    public $name;
    /** @var array 配料 */
    public $ingredients = array();

    /**
     * 取得尺寸
     *
     * @return array
     */
    public static function getSizes(): array
    {
        return array('小', '中', '大');
    }

    /**
     * 檢查有無配料
     *
     * @param string $ingredient 配料
     * @return bool 有無配料
     */
    public function hasIngredient($ingredient): bool
    {
        return in_array($ingredient, $this->ingredients);
    }
}

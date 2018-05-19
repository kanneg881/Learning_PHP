<?php

class Entree
{
    /** @var string 名稱 */
    public $name;
    /** @var array 配料 */
    public $ingredients = array();

    /**
     * Entree 建構子
     *
     * @param string $name 名稱
     * @param array $ingredients 配料
     * @throws Exception 如果 $ingredients 不是陣列
     */
    public function __construct(string $name, array $ingredients)
    {
        if (!is_array($ingredients)) {
            throw new Exception('$ingredients 必須是一個陣列');
        }
        $this->name = $name;
        $this->ingredients = $ingredients;
    }

    /**
     * 檢查有無配料
     *
     * @param string $ingredient 配料
     * @return bool 有無配料
     */
    public function hasIngredient(string $ingredient): bool
    {
        return in_array($ingredient, $this->ingredients);
    }
}

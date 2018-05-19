<?php

class Entree
{
    /** @var array 配料 */
    protected $ingredients = array();
    /** @var string 名稱 */
    private $name;

    /**
     * Entree 建構子
     *
     * @param string $name 名稱
     * @param array $ingredients 配料
     * @throws Exception $ingredients 不是陣列
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
     * 因為 $name 是 private，所以用這個方法讀取它
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
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

<?php

class ComboMeal extends Entree
{
    /**
     * ComboMeal 建構子
     * @param string $name 名稱
     * @param array $entrees 組合前菜
     * @throws Exception
     */
    public function __construct(string $name, array $entrees)
    {
        parent::__construct($name, $entrees);

        foreach ($entrees as $entree) {
            if (!$entree instanceof Entree) {
                throw new Exception('元素 $entrees 必須是 Entree 物件');
            }
        }
    }

    /**
     * 檢查有無配料
     *
     * @param string $ingredient 配料
     * @return bool 有無配料
     */
    public function hasIngredient(string $ingredient): bool
    {
        /**
         * @var Entree $entree 前菜
         */
        foreach ($this->ingredients as $entree) {
            if ($entree->hasIngredient($ingredient)) {
                return true;
            }
        }
        return false;
    }
}

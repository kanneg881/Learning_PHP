<?php

class ComboMeal extends Entree
{

    /**
     * 檢查有無配料
     *
     * @param string $ingredient 配料
     * @return bool 有無配料
     */
    public function hasIngredient(string $ingredient): bool
    {
        /**
         * @var Entree $entree 實體前菜物件
         */
        foreach ($this->ingredients as $entree) {
            if ($entree->hasIngredient($ingredient)) {
                return true;
            }
        }
        return false;
    }
}

<?php

namespace Application\Controller;

use DateTime;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class MenuController extends AbstractActionController
{
    /**
     * 顯示
     *
     * @return ViewModel
     */
    public function showAction(): ViewModel
    {
        /** @var DateTime $now 現在時間 */
        $now = new DateTime();
        /** @var array $items 項目 */
        $items = ["炸土豆", "煮土豆", "烤土豆",];

        return new ViewModel([
            'when' => $now,
            'what' => $items,
        ]);
    }
}

<?php

namespace App\Controller;

use DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends Controller
{
    /**
     * @Route("/show")
     * @Method("GET")
     */
    public function showAction(): Response
    {
        /** @var DateTime $now 現在時間 */
        $now = new DateTime();
        /** @var array $items 項目 */
        $items = ["炸土豆", "煮土豆", "烤土豆",];

        return $this->render('show_menu.html.twig',
            [
                'when' => $now,
                'what' => $items,
            ]);
    }
}
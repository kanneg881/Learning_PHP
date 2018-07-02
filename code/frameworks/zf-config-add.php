'menu' => [
    'type' => Literal::class,
    'options' => [
        'route'    => '/menu',
        'defaults' => [
            'controller' => Controller\MenuController::class,
            'action'     => 'show',
        ],
    ],
],
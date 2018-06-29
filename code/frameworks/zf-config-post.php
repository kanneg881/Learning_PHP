'controllers' => [
    'factories' => [
        Controller\IndexController::class => InvokableFactory::class,
    ],
    'invokables' => [
        Controller\MenuController::class => MenuController::class,
    ],
],

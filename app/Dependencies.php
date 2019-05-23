<?php

$container = $app->getContainer();

// Twig view dependency
$container['view'] = function ($c) {

    $cf = $c->get('settings')['view'];
    $view = new \Slim\Views\Twig($cf['path'], $cf['twig']);
    $view->addExtension(new \Slim\Views\TwigExtension(
        $c->router,
        $c->request->getUri()
    ));

    return $view;
};

// Eloquente ORM dependency
$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function ($c) use ($capsule) {
    return $capsule;
};

//Not found page handler
$container['notFoundHandler'] = function ($c) {
    return function ($request, $response) use ($c) {
        return $c->view->render($response, "/404.twig");
    };
};

// Register flash provider
$container['flash'] = function () {
    return new \Slim\Flash\Messages();
};
<?php
use Zend\Expressive\AppFactory;
$app = AppFactory::create();


$app->get('/', function ($request, $response)  {

    $response->getBody()->write((new ProductsController())->getProdPage());
    return $response;
});

$app->get('/cart', function ($request, $response) {

    $response->getBody()->write((new CartController())->getCartPage());
    return $response;
});

$app->pipeRoutingMiddleware();
$app->pipeDispatchMiddleware();
$app->run();
//$conn->close();
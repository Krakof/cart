<?php
use Zend\Expressive\AppFactory;
$app = AppFactory::create();

$app->get('/', function ($request, $response)  {
    $response->getBody()->write((new ProductsController())->getProdPage());
    return $response;
});

$app->get('/cart', function ($request, $response) {
    session_start();
    $cartProdIds = $_SESSION['cart_items'];
    //var_dump($cartProdIds);
    $response->getBody()->write((new CartController())->getCartPage($cartProdIds));
    return $response;
});

$app->pipeRoutingMiddleware();
$app->pipeDispatchMiddleware();
$app->run();
//$conn->close();
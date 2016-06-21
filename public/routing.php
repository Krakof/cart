<?php
use Zend\Expressive\AppFactory;
$app = AppFactory::create();


$app->get('/', function ($request, $response)  {

    $result = (new ProductsController())->getProducts();
    $response->getBody()->write((new ProductsController())->renderProducts($result));
    return $response;
});

//$app->get('/cart', function ($request, $response) use ($renderer)  {
//
//    $response->getBody()->write($renderer->plates()->render('templates::cart'));
//    return $response;
//});

$app->pipeRoutingMiddleware();
$app->pipeDispatchMiddleware();
$app->run();
//$conn->close();
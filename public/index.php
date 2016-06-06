<?php
use Zend\Expressive\AppFactory;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';
require 'repository/connection.php';
require 'services/plates.php';

$app = AppFactory::create();

$db = new ConnectDB();
$conn = $db->connect();
$renderer = new Plates();

$app->get('/', function ($request, $response) use ($conn, $renderer)  {

// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT id, name, price FROM product";

    $result = mysqli_query($conn, $sql);

    $response->getBody()->write($renderer->plates()->render('templates::content', ['result' => $result]));
    return $response;
});

$app->get('/cart', function ($request, $response) use ($renderer)  {

    $response->getBody()->write($renderer->plates()->render('templates::cart'));
    return $response;
});

$app->pipeRoutingMiddleware();
$app->pipeDispatchMiddleware();
$app->run();
//$conn->close();

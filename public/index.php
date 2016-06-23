<?php
chdir(dirname(__DIR__));
require 'vendor/autoload.php';
require 'repository/ConnectDB.php';
require 'services/ProductsService.php';
require 'services/RenderService.php';
require 'services/CartService.php';
require 'services/Plates.php';
require 'controllers/ProductsController.php';
require 'controllers/CartController.php';
require 'presenter/TransformIDs.php';
require 'routing.php';

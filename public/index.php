<?php
chdir(dirname(__DIR__));
require 'vendor/autoload.php';
require 'repository/connection.php';
require 'services/getProducts.php';
require 'services/renderPlates.php';
require 'services/cart.php';
require 'controllers/prodController.php';
require 'controllers/cartController.php';
require 'routing.php';

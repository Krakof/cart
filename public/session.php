<?php
// Start the session
session_start();
$id = isset($_GET['id']) ? $_GET['id'] : "";
$tempArr = array();
//$name = isset($_GET['name']) ? $_GET['name'] : "";
//$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : "";

if(isset($_SESSION['cart_items'])) {
    $tempArr = unserialize($_SESSION['cart_items']);
}

if (!in_array($id, $tempArr)) {
    array_push($tempArr, $id);
}

$_SESSION['cart_items'] = serialize($tempArr);


//if(array_key_exists($id, $_SESSION['cart_items'])){
//    // redirect to product list and tell the user it was added to cart
//    header('Location: products.php?action=exists&id' . $id . '&name=' . $name);
//}
//
//// else, add the item to the array
//else{
//array_push($_SESSION['cart_items'], $id);
//$_SESSION['cart_items'][$id]=$id;
//session_unset();

// redirect to product list and tell the user it was added to cart
    header("Location: {$_SERVER['HTTP_REFERER']}");
//}

exit;
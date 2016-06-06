<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        .product-panel {
            display: flex;
            flex-flow: column nowrap;
            justify-content: center;
            align-items: center;
        }
        .item {
            border: 1px solid #ccc;
            padding: 30px;
            margin: 20px 10px;
        }
    </style>
</head>
<body>
<div class="product-panel">
    <?php foreach($_SESSION['cart_items'] as $id=>$value): ?>
        <div class="item">
                <?php echo "ProdID:"."  ".$id; ?> <br>
                <?php echo "ProdNAME:"."  ".$value; ?> <br>

            </div>
    <?php endforeach; ?>
</div>
</body>
</html>
<?php
// Start the session
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        .product-panel {
            display: flex;
            flex-flow: row nowrap;
            justify-content: center;
            align-items: center;
        }
        .item {
            border: 1px solid #ccc;
            padding: 30px;
            margin: 20px 10px;
        }
        .btn {
            display: block;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="product-panel">
    <?php foreach($row = $result as $item): ?>
        <a href=<?php echo "session.php?id=". $item['id'] ?> ><div class="item">
            <?php echo $item["id"]; ?> <br>
            <?php echo $item["name"]; ?> <br>
            <?php echo $item["price"]; ?> <br>
        </div></a>
    <?php endforeach; ?>

</div>
<a class="btn" href="cart">CART</a>
</body>
</html>
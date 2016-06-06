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
    <?php while($row = $result->fetch_assoc()): ?>
        <a href=<?php echo "session.php?id=". $row['id']."&name=".$row['name'] ?> ><div class="item">
            <?php echo $row["id"]; ?> <br>
            <?php echo $row["name"]; ?> <br>
            <?php echo $row["price"]; ?> <br>
        </div></a>
    <?php endwhile; ?>
</div>
<a class="btn" href="cart">CART</a>
<?php //echo print_r($_SESSION);?>
</body>
</html>
<?php
// Start the session
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

    <?php while($row = $result->fetch_assoc()): ?>
        <div class="item">
                <?php echo "ProdID:"."  ".$row["id"]; ?> <br>
                <?php echo "ProdNAME:"."  ".$row["name"]; ?> <br>

            </div>
    <?php endwhile; ?>
</div>
</body>
</html>
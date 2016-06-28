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

    <?php foreach($row = $result as $item): ?>
        <div class="item">
                <?php echo "ProdID:"."  ".$item["id"]; ?> <br>
                <?php echo "ProdNAME:"."  ".$item["name"]; ?> <br>

            </div>
    <?php endforeach; ?>
</div>
</body>
</html>
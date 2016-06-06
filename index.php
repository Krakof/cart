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
</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "user";
$password = "moloko";
$dbname = "Cart";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, price FROM product";
$result = $conn->query($sql);

//if ($result->num_rows > 0) {
// output data of each row
//while($row = $result->fetch_assoc()) {
//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//}
//} else {
//echo "0 results";
//}
?>
    <div class="product-panel">
        <?php while($row = $result->fetch_assoc()): ?>
            <div class="item">
                <?php echo $row["id"]; ?> <br>
                <?php echo $row["name"]; ?> <br>
                <?php echo $row["price"]; ?> <br>
            </div>
        <?php endwhile; ?>
<!--        <div class="item">-->
<!--            Item 1-->
<!--        </div>-->
<!--        <div class="item">-->
<!--            Item 2-->
<!--        </div>-->
<!--        <div class="item">-->
<!--            Item 3-->
<!--        </div>-->
    </div>
<!--    --><?php //echo date('l, F jS, Y'); ?>
<?php
$conn->close();
//    $servername = "localhost";
//    $username = "user";
//    $password = "moloko";
//
//    try {
//        $conn = new PDO("mysql:host=$servername;dbname=Cart", $username, $password);
//        // set the PDO error mode to exception
//        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        echo "Connected successfully";
//    }
//    catch(PDOException $e)
//    {
//        echo "Connection failed: " . $e->getMessage();
//    }
?>
</body>
</html>
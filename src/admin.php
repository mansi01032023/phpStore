<?php
session_start();
// this is the admin panel
include_once("config.php");
?>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<div class="container">
    <h3>Top 5 Users</h3>
    <?php
    echo "<table style='width: 100%; border: 1px solid gray;'>
        <thead style='border: 1px solid gray;'>
            <tr>
                <th style='border: 1px solid gray; padding: 5px; '>User Id</th>
                <th style='border: 1px solid gray; padding: 5px; '>UserName</th>
                <th style='border: 1px solid gray; padding: 5px; '>Email Id</th>
                <th style='border: 1px solid gray; padding: 5px; '>Address</th>
                <th style='border: 1px solid gray; padding: 5px; '>Status</th>
            </tr>
        </thead>
        <tbody id='topUsers'>";
    $statement = "SELECT `user_id`,SUM(`total`) as `total`,COUNT(`total`)as `count` FROM `orders` GROUP BY `user_id` order by `total` DESC limit 5";
    $result = $conn->query($statement);
    if ($result->num_rows > 0) {
        while ($rowu = $result->fetch_assoc()) {
            $stmt = "SELECT * from `Users` where `user_id` = '$rowu[user_id]'";
            $res = $conn->query($stmt);
            if ($res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {
                    echo "<tr><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $row["user_id"] . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $row["username"] . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $row["email"] . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $row["address"] . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $row["status"] . "</td></tr>";
                }
            }
        }
    }
    echo "</tbody></table>";
    ?>
    <br><br>
    <h3>Top 5 Products</h3>
    <?php
    echo "<table style='width: 100%; border: 1px solid gray;'>
    <thead style='border: 1px solid gray;'>
        <tr>
            <th style='border: 1px solid gray; padding: 5px; '>Product Id</th>
            <th style='border: 1px solid gray; padding: 5px; '>Product Name</th>
            <th style='border: 1px solid gray; padding: 5px; '>Product Category</th>
            <th style='border: 1px solid gray; padding: 5px; '>Product Quantity</th>
            <th style='border: 1px solid gray; padding: 5px; '>Product Price</th>
            <th style='border: 1px solid gray; padding: 5px; '>Product Description</th>
        </tr>
    </thead>
    <tbody id='topProducts'>";
    $statement = "SELECT * from `products` ORDER By `price` desc LIMIT 5;";
    $result = $conn->query($statement);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $row["product_id"] . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $row["name"] . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $row["category"] . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $row["quantity"] . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $row["price"] . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $row["description"] . "</td></tr>";
        }
    }
    echo "</tbody></table>";
    ?>
    <br><br>
    <h3>Top 5 Orders</h3>
    <?php
    echo "<table style='width: 100%; border: 1px solid gray;'>
    <thead style='border: 1px solid gray;'>
        <tr>
            <th style='border: 1px solid gray; padding: 5px; '>Order Id</th>
            <th style='border: 1px solid gray; padding: 5px; '>User Id</th>
            <th style='border: 1px solid gray; padding: 5px; '>Product Id</th>
            <th style='border: 1px solid gray; padding: 5px; '>Status</th>
            <th style='border: 1px solid gray; padding: 5px; '>Total Amount</th>
            <th style='border: 1px solid gray; padding: 5px; '>Date</th>
        </tr>
    </thead>
    <tbody id='topOrders'>";
    $statement = "SELECT `order_id`, `user_id`, `product_id`, `status`, `total`, `date` from `orders` ORDER By `total` desc LIMIT 5;";
    $result = $conn->query($statement);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $row["order_id"] . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $row["user_id"] . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $row["product_id"] . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $row["status"] . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $row["total"] . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $row["date"] . "</td></tr>";
        }
    }
    echo "</tbody></table>";
    ?>
    <br><br>
    <button id="allProducts" onclick="showProducts()">Show All Products</button>
    <button id="allUsers" onclick="showUsers()">Show all Users</button>
    <button id="allOrders" onclick="showOrders()">Show all Orders</button>
    <a href="addProduct.php"><button id="addProduct">Add Product</button></a>
</div>
<script src="newScript.js"></script>

</html>
<?php
?>
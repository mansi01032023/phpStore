<?php
session_start();
// displaying products
include_once("config.php");
?>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    </head>
<?php
$statement = "SELECT * from `products`;";
$result = $conn->query($statement);
    if ($result->num_rows > 0) {
        echo "<table style='width: 100%; border: 1px solid gray;'>
    <thead style='border: 1px solid gray;'>
        <tr>
            <th style='border: 1px solid gray; padding: 5px; '>Product Id</th>
            <th style='border: 1px solid gray; padding: 5px; '>Product Name</th>
            <th style='border: 1px solid gray; padding: 5px; '>Product Category</th>
            <th style='border: 1px solid gray; padding: 5px; '>Product Quantity</th>
            <th style='border: 1px solid gray; padding: 5px; '>Product Price</th>
            <th style='border: 1px solid gray; padding: 5px; '>Product Description</th>
            <th style='border: 1px solid gray; padding: 5px; '>Edit</th>
        </tr>
    </thead>
    <tbody>";
    
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $row["product_id"] . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'><input type='text' value='" . $row["name"] . "' id='name". $row["product_id"]."' disabled></td><td style='border: 1px solid gray; padding: 5px; text-align: center;'><input type='text' value='" . $row["category"] . "' id='category". $row["product_id"]."' disabled></td><td style='border: 1px solid gray; padding: 5px; text-align: center;'><input type='text' value='" . $row["quantity"] . "' id='quantity". $row["product_id"]."' disabled></td><td style='border: 1px solid gray; padding: 5px; text-align: center;'><input type='text' value='" . $row["price"] . "' id='price". $row["product_id"]."' disabled></td><td style='border: 1px solid gray; padding: 5px; text-align: center;'><input type='text' value='" . $row["description"] . "' id='desc". $row["product_id"]."' disabled></td><td style='border: 1px solid gray; padding: 5px; text-align: center;'><button id='".$row["product_id"]."'  class='edit'>Edit</button></td></tr>";
        }
    }
    echo "</tbody></table>";
?>
<script src="newScript.js"></script>
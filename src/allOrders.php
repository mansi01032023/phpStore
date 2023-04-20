<?php
// displaying orders
session_start();
include_once("config.php");
?>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>
<?php
$statement = "SELECT * from `orders`;";
$result = $conn->query($statement);
if ($result->num_rows > 0) {
    echo "<table style='width: 100%; border: 1px solid gray;'>
    <thead style='border: 1px solid gray;'>
        <tr>
            <th style='border: 1px solid gray; padding: 5px; '>Order Id</th>
            <th style='border: 1px solid gray; padding: 5px; '>User Id</th>
            <th style='border: 1px solid gray; padding: 5px; '>Product Id</th>
            <th style='border: 1px solid gray; padding: 5px; '>Status</th>
            <th style='border: 1px solid gray; padding: 5px; '>Total Amount</th>
            <th style='border: 1px solid gray; padding: 5px; '>Date</th>
            <th style='border: 1px solid gray; padding: 5px; '>Address</th>
            <th style='border: 1px solid gray; padding: 5px; '>Edit</th>
        </tr>
    </thead>
    <tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $row["order_id"] . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $row["user_id"] . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $row["product_id"] . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'><select id='status" . $row["order_id"] . "' disabled value='" . $row["status"] . "'><option>placed</option><option>inprocess</option><option>intransit</option><option>delivered</option></select></td><td style='border: 1px solid gray; padding: 5px; text-align: center;'><input type='number' value='" . $row["total"] . "' id='total" . $row['order_id'] . "' disabled></td><td style='border: 1px solid gray; padding: 5px; text-align: center;'><input type='date' value='" . $row["date"] . "' id='date" . $row['order_id'] . "' disabled></td><td style='border: 1px solid gray; padding: 5px; text-align: center;'><input type='text' value='" . $row["address"] . "' id='address" . $row['order_id'] . "' disabled></td><td style='border: 1px solid gray; padding: 5px; text-align: center;'><button id='" . $row["order_id"] . "' class='editOrder'>Edit</button></td></tr>";
    }
}
echo "</tbody></table>";
?>
<script src="newScript.js"></script>
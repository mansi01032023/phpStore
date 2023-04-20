<?php
session_start();
// displaying users
include_once("config.php");
?>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>
<?php
$statement = "SELECT * from `Users`;";
$result = $conn->query($statement);
if ($result->num_rows > 0) {
    echo "<table style='width: 100%; border: 1px solid gray;'>
    <thead style='border: 1px solid gray;'>
        <tr>
            <th style='border: 1px solid gray; padding: 5px; '>User Id</th>
            <th style='border: 1px solid gray; padding: 5px; '>UserName</th>
            <th style='border: 1px solid gray; padding: 5px; '>Email</th>
            <th style='border: 1px solid gray; padding: 5px; '>Password</th>
            <th style='border: 1px solid gray; padding: 5px; '>Address</th>
            <th style='border: 1px solid gray; padding: 5px; '>Status</th>
            <th style='border: 1px solid gray; padding: 5px; '>Edit</th>
        </tr>
    </thead>
    <tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td style='border: 1px solid gray; padding: 5px; text-align: center;'>" . $row["user_id"] . "</td><td style='border: 1px solid gray; padding: 5px; text-align: center;'><input type='text' value='" . $row["username"] . "' disabled id='name" . $row["user_id"] . "'></td><td style='border: 1px solid gray; padding: 5px; text-align: center;'><input type='text' value='" . $row["email"] . "' disabled id='email" . $row["user_id"] . "'></td><td style='border: 1px solid gray; padding: 5px; text-align: center;'><input type='text' value='" . $row["password"] . "' disabled id='password" . $row["user_id"] . "'></td><td style='border: 1px solid gray; padding: 5px; text-align: center;'><input type='text' value='" . $row["address"] . "' disabled id='address" . $row["user_id"] . "'></td><td style='border: 1px solid gray; padding: 5px; text-align: center;'><select id='status" . $row["user_id"] . "' disabled value='" . $row["status"] . "'><option>pending</option><option>approved</option><option>deny</option></select></td><td style='border: 1px solid gray; padding: 5px; text-align: center;'><button id='" . $row["user_id"] . "'  class='editUser'>Edit</button></td></tr>";
    }
}
echo "</tbody></table>";
?>
<script src="newScript.js"></script>
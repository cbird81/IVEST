<?php
session_start();

if (isset($_SESSION['user_id']) == false) {
   header('Location: /login.php');
}

include 'db_connect.php';

?>

<!DOCTYPE html>
<html>
<head>
<title>Shares Database</title>
<style>

body{
    margin:0;
    background-color:#7FFFD4;
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}
table {
	border-collapse: collapse;
	margin: 10px;
	text-align: center;
}
table, tr, th, td {
	border: 1px solid #000; 
	
}

th {
background-color: #fff;
}

td {
background-color: #fff;
color: #000080;
}
</style>
</head>
<body>


<p>
   <a href="addshares.php">Addshares</a>
</p>
<p style="font-size: 50px; color: #000080;">Welcome Chinos !</p> 

<?php

$query = "SELECT * FROM shares WHERE user_id = " . $_SESSION['user_id'] . " ORDER BY `created_at` DESC ";

$result = $conn->query($query);

if ($result->num_rows == 0) {
    echo 'Nothing to show';
} else {
    $shares = $result->fetch_all(MYSQLI_ASSOC);
    echo "<table>";
    echo "
    <tr>
       <th>Amount</th>
       <th>Price</th>
       <th>Investment Type</th>
       <th>Date & Time</th>
    </tr>
    ";
    foreach ($shares as $share) {
      echo "<tr>";
      echo "<td>" . $share['amount'] . "</td>";
      echo "<td>" . $share['price'] . "</td>";
      echo "<td>" . $share['investment_type'] . "</td>";
      echo "<td>" . date('m/d/Y', strtotime($share['created_at'])) . "</td>";
      echo "</tr>";
    }
    echo "</table>";
}

 

?>
</body>
</html>
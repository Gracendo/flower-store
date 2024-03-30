0<?php
session_start();
require_once "../model/conn.php";

$userid = $_SESSION["userid"];
$sql = "SELECT product.*
FROM user
INNER JOIN product ON" . $userid . " = product.user_id;";
$_SESSION['result'] = $result;
$result = $conn->query($sql);

// //generating the table that will appear to the user

function generateProductTable($result)
{
  $table_html = "<table>";

  $table_html .= "<tr><th>Name</th><th>Price</th><th>Picture</th><th>Action</th></tr>";

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $table_html .= "<tr><td>" . $row["name"] . "</td><td>" . $row["price"] . "</td><td><img src=" . $row["picture"] . " alt=" . $row['name'] . "width='20px'/></td><td><button><i class='fas fa-pencil'></i></button><button><i class='fas fa-trash'></i></button><button><i class='fas fa-eye'></i></button></td></tr>"; // Add a row with product data
    }
  } else {
    $table_html .= "<tr><td colspan='3'>No data available</td></tr>"; // Display a message if no data is available
  }

  $table_html .= "</table>"; // Close the table HTML markup

  return $table_html; // Return the generated table HTML
}
?>
<?php
include_once "../databaseConnection.php";

function deleteOrder() {

    $orderId = $_POST['orderId'];

   $sql=  "DELETE FROM orders WHERE id = $orderId";

    if (mysqli_query(getConnection(), $sql)) {
        echo "Order deleted successfully";
      } else {
        echo "Error deleting record: " . mysqli_error(getConnection());
      }
}

deleteOrder();
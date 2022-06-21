<?php
include_once "../databaseConnection.php";

function deliverOrder() {

    $orderId = $_POST['orderId'];

    $sql = "UPDATE orders SET status = 'delivered' WHERE id = $orderId";

    if (mysqli_query(getConnection(), $sql)) {
        echo "Order has been delivered";
      } else {
        echo "Error delivering order: " . mysqli_error(getConnection());
      }

}

deliverOrder();
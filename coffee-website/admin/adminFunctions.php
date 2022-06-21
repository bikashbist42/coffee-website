<?php
include_once "../databaseConnection.php";

function getOrders() {


    $sql = "SELECT * FROM orders";
    $result = mysqli_query(getConnection(), $sql);

    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "
        <tr>
        <td>
        <img src='user.png'>
        <p> {$row["firstName"]}</p>
    </td>
    <td> {$row["lastName"]}</td>
    <td> {$row["shippingAddress"]}</td>
    <td> {$row["phoneNumber"]}</td>
    <td> {$row["country"]}</td>
    <td> {$row["city"]}</td>
    <td> {$row["orderName"]}</td>
    <td> {$row["orderPrice"]}</td>
    <td> {$row["zipCode"]}</td>
    <td><span class='status {$row["status"]}'>{$row["status"]}</span></td>
    <td><button class = 'deliverButton' data-orderId =  {$row["id"]}  onclick = 'deliverOrder(event)'>Deliver</button></td>
    <td><button class = 'deleteButton' data-orderId =  {$row["id"]} onclick = 'deleteOrder(event)'>Delete</button></td>
    </tr>
    ";

}
}

function deleteOrder() {

    $orderId = $_POST['orderId'];

   $sql=  "DELETE FROM `orders` WHERE `orders`.`id` = $orderId";

    

    if (mysqli_query(getConnection(), $sql)) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . mysqli_error(getConnection());
      }

      echo 'Order deleted';
}


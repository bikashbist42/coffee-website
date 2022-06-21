<?php

session_start();

require_once './databaseConnection.php';
require_once './userFunctions.php';

//Getting user fields
$email = $_POST['email'];
$shippingAddress= $_POST['shippingAddress'];
$firstName =  $_POST['firstName'];
$lastName = $_POST['lastName'];
$phoneNumber =  $_POST['phoneNumber'];
$country = $_POST['country'];
$city = $_POST['city'];
$state =  $_POST['state'];
$orderName =  $_SESSION['orderName'];
$orderPrice =  $_SESSION['orderPrice'];
$zipCode = $_POST['zipCode'];

//Saving orders into the database

        $query = "INSERT INTO `orders` (`id`, `email`, `shippingAddress`, `firstName`, `lastName`, `phoneNumber`, `country`, `city`, `state`, `orderName`, `orderPrice`, `zipCode`) 
        VALUES (NULL, '$email', '$shippingAddress', '$firstName', '$lastName', 
        '$phoneNumber', '$country', '$city', '$state', '$orderName', '$orderPrice', '$zipCode');";
        
          $result =  mysqli_query(getConnection(), $query);
include_once "./order.php";
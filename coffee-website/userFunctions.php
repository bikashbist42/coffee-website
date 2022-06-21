<?php

function saveOrder($conn, $email,
$shippingAddress,
$firstName,
$lastName,
$phoneNumber,
$country,
$city,
$state,
$orderName,
$orderPrice,
$zipCode
) {



$query = "INSERT INTO `orders` (`id`, `email`, `shippingAddress`, `firstName`, `lastName`, `phoneNumber`, `country`, `city`, `state`, `orderName`, `orderPrice`, `zipCode`) 
VALUES (NULL, '$email', '$shippingAddress', '$firstName', '$lastName', 
'$phoneNumber', '$country', '$city', '$state', '$orderName', '$orderPrice', '$zipCode');";

   mysqli_query($conn, $query);
    header('location : ./user.php?success=productordered');

}


<?php
/*$host = 'www.db4free.net';
$username="bikash202222";
$password='bikash2468';
$database='coffeeshop202222';
*/

function getConnection() {
   
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'coffeeshop';
$conn = '';

    try {
        $conn = mysqli_connect($host,$username,$password,$database);
        echo '';
    
    } catch (Exception $error) {
        echo 'Database connection failed';
    }

    return $conn;

}

getConnection();


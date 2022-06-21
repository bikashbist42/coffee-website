<?php 
session_start();

$_SESSION['orderName'] = $_GET['orderName']; 
$_SESSION['orderPrice'] =  $_GET['orderPrice'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Shop</title>
    <link rel="stylesheet" href="./css/k.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

<div class="container">
 
 <div class="content">
   <form method="POST" action= "./userScript.php" id="form">

    <div class="product-details">
    
      <h2>Your Order</h2>
    
      <div class="order-title">
        <h3><?php echo $_SESSION['orderName'];?></h3>
        <div class="order-price">
          <p><?php echo $_SESSION['orderPrice'];?></p>
        </div>
      </div>
    </div>

    <div class="title">
     <h2>Contact Information</h2>
   </div>
 
     <div class="user-details">
       <div class="input-box">
         <input type="text" name="email" placeholder="Email"  value=""  required/>
       </div>
      

       <div class="input-box">
        <input type="text" name="shippingAddress" placeholder="Shipping Address" value="" required>
       
    
      </div>

      <div class="input-box">
        <input type="text" name="firstName" placeholder="First Name" value="" required>
       
      
      </div>

      <div class="input-box">
        <input type="text" name="lastName" placeholder="Last Name" value="" required>
      
      </div>


      <div class="input-box">
       <input type="text" name="phoneNumber" placeholder="Phone Number" value="" required>
    

      </div>

      <div class="input-box">
        <input type="text" name="country" placeholder="Country" value="" required>
    
      
      </div>

    
      <div class="input-box">
        <input type="text" name="city" placeholder="City" value="" required>

      </div>

      
      <div class="input-box">
        <input type="text" name="state" placeholder="State" value="" required>
      
      

      </div>

      
      <div class="input-box">
        <input type="text" name="zipCode" placeholder="Zip Code" value="" required>
    
       
      
      </div>

     </div>

<?php
if(isset($_GET['error'])) {
  if($_GET['error'] == 'emptyfields') {

   echo " 
<div class='errorMessage'>
<i class='bx bx-error'></i>
<p>Some Fields Are Empty!</p>
   </div>";
  }

  elseif($_GET['error'] == 'productnotordered') {

    echo " 
 <div class='errorMessage'>
 <i class='bx bx-error'></i>
 <p>We are unable accept any order at this moment!</p>
    </div>";
   }
}

if(isset($_GET['success'])) {
  if($_GET['success'] == 'productordered') {

    echo " 
    <div class='successMessage'>
    <i class='bx bx-check-circle'></i>
    <p>We order is placed. We will contact you soon!</p>
       </div>";

  }

}

?>

     <div class="button">
       <input type="submit" value="Continue To Shipping">
     
     </div>

 

   </form>
 </div>
</div>

</body>
</html>

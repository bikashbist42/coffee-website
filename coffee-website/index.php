
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Coffee Shop Website </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">

    <a href="#" class="logo">
        <img src="images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#menu">menu</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

</header>

<section class="home" id="home">

    <div class="content">
        <h3>Coffee shop </h3>
        <p> Start Your Day With Our Coffee</p>
    </div>

</section>


<section class="menu" id="menu">

    <h1 class="heading"> Our Products </h1>

    <div class="box-container" id = 'products'>

        <div class="box" id="one">
           
            <div class="product-image">
                <img src="images/CAFFE LATTE.jpg " alt="">

            </div>

            <div class="productName">
                <h3>CAFFÈ LATTE</h3>
            </div>
            <div class="price">
                <p>$4.25</p>
            
            </div>
            <a class="btn"> Buy Now</a>
        </div>

        <div class="box">
            <div class="product-image">
                <img src="images/Americano.jpg" alt="">

            </div>
       

            <div class="productName">
                <h3> AMERICANO </h3>
            </div>
            <div class="price"><p> $2.85 </p></div>
            <a  class="btn"> Buy Now </a>
        </div>
           

        <div class="box">
            <div class="product-image">
                <img src="images/CAPPUCCINO.jpg" alt="">
                </div>
         
            <div class="productName">
                <h3> CAPPUCCINO </h3>
            </div>
            <div class="price"><p>$4</p> </div>
            <a class="btn"> Buy Now</a>
        </div>

        <div class="box">
            <div class="product-image">
                <img src="images/DOUBLE ESPRESSO.jpg" alt="">
            </div>
        
            <div class="productName">
                <h3>DOUBLE ESPRESSO</h3>
            </div>
            <div class="price"><p>$5</p></div>
            <a  class="btn"> Buy Now</a>
        </div>

        <div class="box">
            <div class="product-image">
                <img src="images/Mozzarella Cheese Sandwich.jpg" alt="">
            </div>

            <div class="productName">
                <h3> Mozzarella Cheese Sandwich</h3>
            </div>
            <div class="price"><p>$3.50 </p></div>
            <a  class="btn"> Buy Now</a>
        </div>

        
        <div class="box">
            <div class="product-image">
                <img src="images/Donuts.jpg" alt="">
          </div>

            <div class="productName">
                <h3> Donuts </h3>
            </div>
            <div class="price"><p>$2 </p></div>
            <a  class="btn"> Buy Now</a>
        </div>

        <div class="box">
            <div class="product-image">
                <img src="images/Cup Cakes.jpg" alt="">
           </div>

            <div class="productName">
                <h3> Cup Cakes </h3>
            </div>
            <div class="price"><p>$3.25 </p></div>
            <a  class="btn"> Buy Now</a>
        </div>

        <div class="box">
            <div class="product-image">
            <img src="images/butterscotch.jpg" alt="">
            </div>
            
            <div class="productName">
                <h3> Butter Scotch </h3>
            </div>
            <div class="price"><p>$2.50 </p></div>
            <a  class="btn"> Buy Now</a>
        </div>
  
    </div>

</section>

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="images/about-img.jpeg" alt="">
        </div>

        <div class="content">
            <h3>what makes our coffee special?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus qui ea ullam, enim tempora ipsum fuga alias quae ratione a officiis id temporibus autem? Quod nemo facilis cupiditate. Ex, vel?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit amet enim quod veritatis, nihil voluptas culpa! Neque consectetur obcaecati sapiente?</p>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>


</section>

        </div>

    </div>

</section>

<section class="footer">


    <div class="credit">created by <span> Bikash Bist</span> | all rights reserved</div>

</section>

<script src="js/Script.js"></script>

<script>

let products = document.querySelectorAll('.box')

products.forEach((product)=> {


    product.addEventListener('click', (e) => {
 
        let currentProduct = e.currentTarget

        let currentProductName =  currentProduct.children[1].querySelector('h3').innerHTML
        let currentPrice = currentProduct.children[2].querySelector('P').innerHTML
        let currentProductButton = currentProduct.children[3]

        currentProductButton.addEventListener('click', (e) => {

let url = new URL("http://localhost/coffee-website/user.php")
let params = new URLSearchParams(url.search)
currentProductButton.setAttribute('href', `http://localhost/coffee-website/user.php?orderName=${currentProductName}&orderPrice=${currentPrice}` )


})
     



    })
})


/*orderItem.addEventListener('click', (e) => {

    e.preventDefault()
    


    let url = new URL("http://localhost/coffee%20website/user.php")
    let params = new URLSearchParams(url.search)
 params.set("test", 2544)
   orderItem.setAttribute('href', `http://localhost/coffee%20website/user.php?orderName=Latte&orderPrice=$15` )
}) */




</script>

</body>
</html>
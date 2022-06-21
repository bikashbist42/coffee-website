<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Order</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #E6ECF3;
            background-color: #010103;
            display: grid;
            min-height: 100vh;
            place-content: center;
        }

        button {
            outline: none;
            border: none;
            background-color: #D3AD7F;
            width: 100%;
            color: white;
            font-weight: bold;
            font-size: 0.8rem;
            margin-top: 2.5em;
            padding: 1em;
            font-family: Arial, Helvetica, sans-serif;
        }

        #order-success {
            border: 1px solid #D3AD7F ;
        }

        .order-success-container {
            text-align: center;
            padding: 3em;
        }

        .order-icon {
            margin-bottom: 1em;
        }

        .order-text {
            color: white;
        }

        a {
            text-decoration: none;
        }

        .order-icon .bxs-check-circle {
            color: #08E5DB;
            font-size: 4rem;
        }




    </style>
</head>
<body>
    <section id="order-success">

        <div class="order-success-container">
            <div class="order-icon">
                <i class='bx bxs-check-circle'></i>
            </div>
            <div class="order-text">
                <h1>Thank You!</h1>
                <p>Your order has been placed.
                     It will be delivered soon.</p>
            </div>

            <div class="order-button">
                <a href="./index.php">
                <button>Back To Home</button></a>
            </div>
        </div>
    </section>



</html>
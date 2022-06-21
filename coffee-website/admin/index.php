<?php
include "./adminFunctions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="ab.css">

	<title>AdminHub</title>
</head>

<style>

.deliverButton, .deleteButton {
	border: none;
	outline: none;
	padding: 0.5em 2em;
	border-radius: 0.4em;
	

}

.deliverButton {
	background-color: #3C91E6;
	color: white;
	font-weight: bold;
}

.deleteButton {
	background-color: red;
	color: white;
	font-weight: bold;
}

</style>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-user icon'></i>
					<span class="text"> Customer</span>
				</a>
			</li>
		

		</ul>
		<ul class="side-menu">
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>

			</a>
			<a href="#" class="profile">
				<img src="man.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						
					</ul>
				</div>
				
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>Order Delivered</h3>
						<p>  2 </p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3> Order Pending</h3>
						<p> 1 </p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3> New Order </h3>
						<p> 0 </p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						

					</div>
					<table>
						<thead>
							<tr>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Shipping Address</th>
								<th>Phone Number</th>
								<th>Country</th>
								<th>City</th>
								<th>Order Name</th>
								<th>Order Price</th>
								<th>Zip Code</th>
								<th>Status</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							
								<?php
								getOrders();
								?>
							
						</tbody>
					</table>
				</div>
				
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<script>


//Deliver Order
function deliverOrder(e) {
			
	e = e || window.event
				var target = e.target || srcElement
				var orderId = target.dataset.orderid

				$(document).ready(function() {
					

// Ajax call to deliver order
$.ajax({
	type: 'POST',
	url: 'deliverOrder.php',
	data: {orderId},
	success : function (response) {
		console.log(response);

		if(response == 'Order has been delivered') {
			swal("", "Order has been delivered", "success");
			setTimeout(() => {
				$('body').load('index.php')
			},2000)
			
		}

		else {
			swal("Sorry!", "Something went wrong!", "error");
			setTimeout(() => {
				$('body').load('index.php')
			},2000)

		}

	}
})
			
		})

				
			}




//DELETE Order
function deleteOrder(e) {

				e = e || window.event
				var target = e.target || srcElement
				var orderId = target.dataset.orderid

				$(document).ready(function() {
					

// Ajax call to delete order
$.ajax({
	type: 'POST',
	url: 'deleteOrder.php',
	data: {orderId},
	success : function (response) {
		console.log(response);

		if(response == 'Order deleted successfully') {
			swal("", "Order deleted successfully", "success");
			setTimeout(() => {
				$('body').load('index.php')
			},2000)
		}

		else {
			swal("Sorry!", "Something went wrong!", "error");
			setTimeout(() => {
				$('body').load('index.php')
			},2000)

		}

	}
})
			
		})

				
			}


	</script>
</body>
</html>

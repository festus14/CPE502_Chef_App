<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="boonay launches humanitarian activities, most especially promoting educational activities">
		<meta name="keywords" content="humanitarian, scholarship, educational, learning, meritocratic scholarship">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap -->
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>

		<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="my_css/style.css">
		<title>ChefCorner</title>
	</head>


	<body>
		<!-- NAV SECTION -->
		<nav class="navbar navbar-expand-lg navbar-custom-2 fixed-top">
			<div class="container" style="padding-left:0px;padding-right:0px;flex-wrap:nowrap;">
				<a class="navbar-brand logo" href="index.html">ChefCorner</a>
				
				<section class="sidedraw" id="sidedraw-name" data-sidedraw-target>
					<div class="sidedraw-overlay" data-sidedraw-close tabindex="-1"></div>
					<div class="sidedraw-wrapper">
						<div class="sidedraw-header">
							<div class="sidedraw-title">ChefCorner</div>
							<button class="sidedraw-close" data-sidedraw-close aria-label="Close sidedraw"></button>
						</div>
						<div class="sidedraw-tabs">
							<a class="sidedraw-nav-link chefCorner-sidedraw-join" href="#">Join for free<span class="sr-only">(current)</span></a>
							<a class="sidedraw-nav-link chefCorner-sidedraw-login" href="#">Login</a>
						</div>
					</div>
				</section>
				<button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-sidedraw-trigger aria-controls="sidedraw-name" aria-expanded="false">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav ml-auto topnav">
						<li class="nav-item chefCorner-nav-item ">
							<a class="nav-link chefCorner-nav-atag" href="#">Username<img src="images/user.svg" style="width:17px; height: 17px;margin:0px 0px 3px 3px;"/></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END OF NAV SECTION -->
		
		<!-- MAIN SECTION -->
		<div class="container-fluid chefCo-container">
			<!-- PAGINATION SECTION -->
			<div class="row">
				<div class="container">
					<div class="row">
						<div class="col-md-12 d-flex justify-content-center align-items-center joint-tab">
							<div class="row flex-nowrap">
								<ul class="nav nav-pills mb-3 -container">
									<li class="nav-item chefco-tab">
										<a class="nav-link" href="">Menu</a>
									</li>
									<li class="nav-item chefco-tab">
										<a class="nav-link" href="">Cart</a>
									</li>
									<li class="nav-item chefco-tab">
										<a class="nav-link" href="">Order record</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END OF PAGINATION SECTION -->

			<!-- VIEW CART SECTION -->
			<div class="row" style="margin-top: 60px; margin-bottom: 100px;">
				<div class="container">
					<div class="col-md-9"><h1 style="padding:0px;margin:0px;">Cart</h1></div>
					<div class="row">
						<div class="col-md-9">
							<div class="container-fluid">
								<div class="row headings x-headings">
									<div class="col-lg-5">
										<ul class="nav">
											<li class="nav-item">
												<span class="cart-row">Items</span> 
											</li>
										</ul>
									</div>
									<div class="col-lg-3">
										<ul class="nav">
											<li class="nav-item">
												<span class="cart-row">Description</span>
											</li>
										</ul>
									</div>
									<div class="col-lg-4">
										<ul class="nav" style="flex-wrap: nowrap;">
											<li class="nav-item">
												<span class="cart-row" style="width:70px;">Price</span> 
											</li>
											<li class="nav-item">
												<span class="cart-row" style="width:70px;">Qty</span>
											</li>
											<li class="nav-item">
												<span class="cart-row" style="width:70px;">Total</span> 
											</li> 
										</ul>
									</div>
								</div>
								<!-- FIRST QUANTITY IN THE CART -->
								<div class="row headings x-headings-2">
									<div class="col-lg-5 col-6">
										<ul class="nav">
											<li class="nav-item">
												<span class="cart-row">
													<img src="images/fufu.jpg" style="max-height:200px;height:auto;width:100%;min-width:100px;min-height: 100px;">
												</span>
											</li>
										</ul>
									</div>
									<div class="col-lg-3 col-6">
										<ul class="nav">
											<li class="nav-item">
												<span class="cart-row">
													<h5 style="font-weight:bold;">Fufu</h5>
													<div class="d-flex">
														<span><i class="fa fa-clock-o" style="padding: 8px 8px 8px 0px;"></i></span>
														<p class="p-1 m-0">10 mins</p>
													</div>
													<p class="m-0">OrderByClientUsername</p>
													<p class="m-0">$12.99</p>
												</span>
											</li>
										</ul>
									</div>
									<div class="col-lg-4 col-6 me">
										<ul class="nav" style="flex-wrap: nowrap;">
											<li class="nav-item" >
												<span class="cart-row" style="width:70px;">$40</span>
											</li>
											<li class="nav-item">
												<span class="cart-row" style="width:70px;"><input type="" name="" style="width:30px;"/></span>
											</li>
											<li class="nav-item">
												<img src="images/cancel.svg" style="position:absolute;right:0px;top:13px;width:15px;height: 15px;" />
												<span class="cart-row"style="width:70px;">$1000</span>
											</li>
										</ul>
									</div>
								</div>
								<!-- END OF FIRST QUANTITY IN THE CART -->
								<!-- SECOND QUANTITY IN THE CART -->
								<div class="row headings x-headings-2 mt-5">
									<div class="col-lg-5 col-6">
										<ul class="nav">
											<li class="nav-item">
												<span class="cart-row">
													<img src="images/cake.png" style="max-height:200px;height:auto;width:100%;min-width:100px;min-height: 100px;">
												</span>
											</li>
										</ul>
									</div>
									<div class="col-lg-3 col-6">
										<ul class="nav">
											<li class="nav-item">
												<span class="cart-row">
													<h5 style="font-weight:bold;">Cake</h5>
													<div class="d-flex">
														<span><i class="fa fa-clock-o" style="padding: 8px 8px 8px 0px;"></i></span>
														<p class="p-1 m-0">10 mins</p>
													</div>
													<p class="m-0">OrderByClientUsername</p>
													<p class="m-0">$12.99</p>
												</span> 
											</li>
										</ul>
									</div>
									<div class="col-lg-4 col-6 me">
										<ul class="nav" style="flex-wrap: nowrap;">
											<li class="nav-item">
												<span class="cart-row" style="width:70px;">$40</span> 
											</li>
											<li class="nav-item">
												<span class="cart-row" style="width:70px;"><input type="" name="" style="width:30px;"/></span>
											</li>
											<li class="nav-item">
												<img src="images/cancel.svg" style="position:absolute;right:0px;top:13px;width:15px;height: 15px;"/>
												<span class="cart-row"style="width:70px;">$1000</span> 
											</li>                    
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- END OF SECOND QUANTITY IN THE CART -->
			

						<!-- PAY WITH PAYSTACK SECTION -->
						<div class="col-md-3">
							<div class="headings-col-2">
								<div style="display: flex;justify-content:center;">
									<button class="btn custom-btn" style="padding: 3px 10%;margin-top:3px">Pay with paystack</button>
								</div>
								<h5 style="text-align:center;padding:10px;">OR</h5>
								<form>
									<div class="form-group">
										<label for="cardNumber">Card Number</label>
										<input type="Number" class="form-control shadow-none" id="cardNumber" aria-describedby="cardNumber" placeholder="123456789">
									</div>
								</form>
								<div style="justify-content: space-between;display:flex;">
									<form style="padding: 0px 5px;">
										<div class="form-group">
											<label for="cardNumber">Expiry Date</label>
											<input type="Number" class="form-control shadow-none" id="cardNumber" aria-describedby="cardNumber" placeholder="MM / YY">
										</div>
									</form>
									<form>
										<div class="form-group">
											<label for="cardNumber">CVV Code</label>
											<input type="Number" class="form-control shadow-none" id="cardNumber" aria-describedby="cardNumber" placeholder="123456789">
										</div>
									</form>
								</div>
								<div style="display: flex;justify-content:center;">
									<button class="btn custom-btn" style="padding: 3px 30%">Pay</button>
								</div>
							</div>
						</div>
						<!-- END OF PAY WITH PAYSTACK SECTION -->
					</div>
				</div>
				
			</div>
			<!-- END OF VIEW CART SECTION -->
			
			
			<!-- FOOTER SECTION -->
			<div class="row footer-row mt-5">
				<div class="container">
					<div class="row footer">
						<div class="col-md-2 ft footer-logo">
							<a href="">ChefCorner</a>
						</div>
						<div class="col-md-5 ft m-auto">
							<ul class="footer-tab">
								<li><a href="">Help</a> </li>
								<li><a href="">About</a></li>
								<li><a href="">Price</a></li>
								<li><a href="">Blog</a></li>
							</ul>
						</div>
						<div class="col-md-5 ft m-auto">
							<p class="m-0 p-0">&copy; 2021 All rights reserved.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- END OF FOOTER SECTION -->

		</div>
		<!-- END OF MAIN SECTION -->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

		<script src="my_js/jquery-3.4.1.slim.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
		<script src="bootstrap-4.4.1-dist/js/bootstrap.bundle.min.js"></script>
		<script src="my_js/index.js"></script>
	</body>
</html>

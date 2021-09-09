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
				<a class="navbar-brand logo" href="#">ChefCorner</a>
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
						<li class="nav-item chefCorner-nav-item">
							<a class="nav-link chefCorner-nav-atag" href="#">Username<img src="images/user.svg" style="width:17px; height: 17px;margin:0px 0px 3px 3px;"/></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END OF NAV SECTION -->
		
		
		<!-- MAIN SECTION -->
		<div class="container-fluid chefCo-container">
			<div class="row" style="margin-top: 20px;margin-bottom: 30px;">
				<div class="container">
					<div class="row" style="margin-top:30px;">
						<div class="col-md-5 modal-img">
							<img src="images/thekids.jpg" style="border-radius:0px;"/>
						</div>
						<div class="col-md-7">
							<h2 style="font-weight:bold;">Cake</h2>
							<div class="d-flex">
								<span><i class="fa fa-clock-o" style="padding: 8px 8px 8px 0px;"></i></span>
								<p class="p-1 m-0">10 mins</p>
							</div>
							<h5 class="m-0" style="font-weight: normal;">OrderByClientUsername</h5>
							<h1>$40</h1>
							<a class="btn custom-btn buy-btn" href="" style="padding: 3px 10%;margin-top:3px">Add to cart</a>
						</div>
					</div>
					<div class="row pl-0 pt-5">
						<div class="col-md-9">
							<div class="descriptions">
								<h4>Description</h4>
								<p>
									Lorem Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
									Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
									Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Here's a video on how all of this works.
									View the full icon list here. Instructions here.
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="headings-col-2">
								<div style="display: flex;justify-content:center;">
									<button class="btn custom-btn" style="padding: 3px 10%;margin-top:3px">Pay with Paystack</button>
								</div>
								<h5 style="text-align:center;padding:10px;">OR</h5>
								<form>
									<div class="form-group">
										<label for="cardNumber">Card Number</label>
										<input type="number" class="form-control shadow-none" id="cardNumber" aria-describedby="cardNumber" placeholder="123456789">
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
					</div>
				</div>
			</div>
			
			
			<!-- FOOTER SECTION -->
			<div class="row footer-row">
				<div class="container">
					<div class="row footer">
						<div class="col-md-2 ft footer-logo">
							<a href="">ChefCorner</a>
						</div>
						<div class="col-md-5 ft m-auto">
							<ul class="footer-tab">
								<li><a href="#">Help</a> </li>
								<li><a href="#">About</a></li>
								<li><a href="#">Price</a></li>
								<li><a href="#">Blog</a></li>
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

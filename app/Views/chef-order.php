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

	<link rel="stylesheet" type="text/css" href="/assets/bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/my_css/style.css">
	<title>ChefCorner</title>
</head>


<body>
	<!-- NAV SECTION -->
	<nav class="navbar navbar-expand-lg navbar-custom-2 fixed-top">
		<div class="container" style="padding-left:0px;padding-right:0px;flex-wrap:nowrap;">
			<a class="navbar-brand logo" href="<?php echo base_url(); ?>/index">ChefCorner</a>

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
						<a class="nav-link chefCorner-nav-atag" href="<?php echo base_url(); ?>/chef/edit/<?php echo $id ?>"><?php echo $restaurant_name ?? 'username' ?><img src="/assets/images/user.svg" style="width:17px; height: 17px;margin:0px 0px 3px 3px;" /></a>
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
									<a class="nav-link" href="<?php echo base_url(); ?>/chef/show/<?php echo $id; ?>">Meal</a>
								</li>
								<li class="nav-item chefco-tab">
									<a class="nav-link" href="<?php echo base_url(); ?>/chef/order/<?php echo $id; ?>">Orders</a>
								</li>
								<!-- <li class="nav-item chefco-tab">
                  <a class="nav-link" href="">Recipes</a>
                </li> -->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END OF PAGINATION SECTION -->

	<!-- VIEW ORDER SECTION -->
	<div class="row" style="margin-top: 60px; margin-bottom: 100px;">
		<div class="container">
			<div class="col-md-9">
				<h1 style="padding: 0px; margin: 0px;">Orders</h1>
			</div>
			<div class="row">
				<div class="col-md-9">
					<div class="container-fluid">
						<div class="row headings x-headings">
							<div class="col-lg-4">
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
							<div class="col-lg-4 nav">
								<form style="flex-wrap: nowrap;display: flex;">
									<div class="form-check nav-item pr-3">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
										<label class="form-check-label cart-row" for="flexCheckDefault">Pending</label>
									</div>
									<div class="form-check neav-item pr-3">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
										<label class="form-check-label cart-row" for="flexCheckChecked">Processed</label>
									</div>
									<div class="form-check nav-item pr-3">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
										<label class="form-check-label cart-row" for="flexCheckDefault">Rejected</label>
									</div>
								</form>

							</div>
						</div>
						<!-- FIRST QUANTITY IN THE CART -->
						<?php if (!empty($orders)) : ?>
							<?php foreach ($orders as $order) { ?>
								<div class="col-md-4 d-flex justify-content-center align-items-center">
									<div class="chef-product">
										<div><img src="/assets/images/fufu.jpg" class="chef-item-img"></div>
										<h5 class="chef-item-h5"><?php echo $order['name'] ?></h5>
										<h6 class="chef-item-h6"><i class="fa fa-clock-o" style="padding: 8px 8px 8px 0px;"></i><span>10 mins</span></h6>
										<h6>From <span><?php echo $order['user_name'] ?></span></h6>
										<h6>N <?php echo $order['price'] ?></h6>
										<?php if ($order['status'] == 'pending') :  ?>
											<a class="btn custom-btn cartBtn" href="<?php echo base_url() ?>/order/accept/<?php echo $order['id'] ?>">Accept</a>
											<a class="btn custom-btn cartBtn" href="<?php echo base_url() ?>/order/reject/<?php echo $order['id'] ?>">Reject</a>
										<?php endif; ?>

										<?php if ($order['status'] == 'processed') :  ?>
											<button class="btn custom-btn cartBtn">Accepted</button>
										<?php endif; ?>
										<?php if ($order['status'] == 'rejected') :  ?>
											<button class="btn custom-btn cartBtn">Rejected</button>
										<?php endif; ?>

									</div>
								</div>
							<?php } ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END OF VIEW ORDER SECTION -->



	<!-- FOOTER SECTION -->
	<div class="row footer-row">
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
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="/assets/my_js/jquery-3.4.1.slim.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="/assets/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
	<script src="/assets/bootstrap-4.4.1-dist/js/bootstrap.bundle.min.js"></script>
	<script src="/assets/my_js/index.js"></script>

</body>

</html>
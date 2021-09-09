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
			<form>
				<div class="row profile-detail">
					<div class="container">
						<div class="row" style="margin-top:60px;">
							<div class="col-md-12 d-flex justify-content-center">
								<div class="basic-details " style="width:100%; max-width: 794px;box-shadow: 0 0 12px 0px #6c757d;">
									<div class="row" style="width: 100%;margin:0px;">
										<div class="col-md-4 d-flex justify-content-center align-items-center" style="padding:15px 0px;"><img src="images/user.svg" style="width:197px;height: 170px;"></div>
										<div class="col-md-8 d-flex align-items-center"> 
											<div class="form-group" style="width: 100%;">
												<input type="text" class="form-control shadow-none my-3" placeholder="Username">
												<input type="text" class="form-control shadow-none" placeholder="Mobile number">
											</div>
										</div>
									</div>
									<div class="row" style="margin:0px;">
										<div class="col-md-12">
											<div class="form-group" style="margin:0px;">
												<ul style="text-decoration:none;margin: 0px;padding-left:70px;">
													<li style="display:inline-block;">
														<img src="images/arroba.svg" style="width:32px;height:32px;display:inline-block;"/>
													</li>
													<li style="display:inline-block;width:70%">
														<input type="text" style="display:inline-block;" class="form-control form-control-sm  shadow-none my-3" placeholder="Email" />
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row profile-detail">
					<div class="container">
						<div class="row profile-detail" style="margin-top:30px;">
							<div class="col-md-12 d-flex justify-content-center">
								<div class="basic-details-sm" style="width:100%; max-width: 794px;">
									<div class="theform" style="padding-bottom: 20px;">
									
										<div class="form-group">
											<label for="Username">Address</label>
											<input type="text" class="form-control shadow-none" placeholder="Address">
										</div>
										
										
										<div class="form-group">
											<label for="Country">Country</label>
											<select class="form-control shadow-none">
												<option>Choose your country</option>
											</select>
										</div>
										<button type="submit" class="btn custom-btn ">Save</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
			

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
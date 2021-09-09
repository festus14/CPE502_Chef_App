<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--  -->
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="my_css/style.css">
<title>ChefCorner</title>

</head>
<!------>

<body>

    <!--Header-->
    <nav class="navbar navbar-expand-lg navbar-custom-2 fixed-top">
        <div class="container" style="padding-left:0px;padding-right:0px;flex-wrap:nowrap;">
            <div class="navbar-brand ">
                <a class="logo" href="#">ChefCorner</a>
            </div>

            <div>
                <ul class="navbar-nav ml-auto topnav">
                    <li class="nav-item chefCorner-nav-item ">
                        <a class="nav-link chefCorner-nav-atag" href="chef-signup.html">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!------>
    <div class="container-fluid pt-5 mt-5">
        <div class="row my-5">
            <div class="col-md-5 col-sm-10 m-auto">
                <div class="text-center">
                    <h1 class="mb-4">Sign in cause you like food</h1>
                    <p class="p-3 mb-3 logo-sample">ChefCorner</p>
                </div>
                <form action="#">
                    <div class="form-group mb-4">
                        <label for="Email">Email :</label>
                        <input type="email" class="form-control" id="Email">
                    </div>
                    <div class="form-group mb-4">
                        <label for="Password">Password :</label>
                        <input type="password" class="form-control" id="Password">
                    </div>
                    <button type="submit" class="btn custom-btn">Sign in</button>
                </form>
                <small>Don't have an account yet? <a href="#" class="btm-signup">sign up</a> </small>
            </div>
        </div>




        <div class="d-flex float-right flex-nowrap">
            <div class="ChefCorner-ss">
                <a href="">
                    <img src="images/facebook1.svg" />
                </a> 
            </div>
            <div class="ChefCorner-ss">
                <a href="">
                    <img src="images/twitter.svg" />
                </a>
            </div>
            <div class="ChefCorner-ss">
                <a href="">
                    <img src="images/instagram.svg" />
                </a>
            </div>
        </div>
    </div>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="my_js/jquery-3.4.1.slim.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-4.4.1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="my_js/index.js"></script>
</body>

</html>
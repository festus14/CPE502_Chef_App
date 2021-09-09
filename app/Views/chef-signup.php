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
            <div class="navbar-brand">
                <a class="logo" href="#">ChefCorner</a>
            </div>

            <div>
                <ul class="navbar-nav ml-auto topnav">
                    <li class="nav-item chefCorner-nav-item ">
                        <a class="nav-link chefCorner-nav-atag" href="sigin-in.html">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid pt-5 mt-5">
        <div class="col-md-5 col-sm-8 m-auto">
            <div class="text-center">
                <h1 class="mb-4">Sign up to serve</h1>
                <p class="p-3 mb-3 logo-sample">ChefCorner</p>
            </div>
            <form action="#">
                <div class="form-group mb-4">
                    <label for="role">Role :</label>
                    <select class="form-control" name="user" id="role">
                        <option value="Chef">Chef</option>
                        <option value="Chef">Chef</option>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label for="Username">Username :</label>
                    <input type="text" class="form-control" id="Username">
                </div>
                <div class="form-group mb-4">
                    <label for="Email">Email :</label>
                    <input type="email" class="form-control" id="Email">
                </div>
                <div class="form-group mb-4">
                    <label for="Password">Password :</label>
                    <input type="password" class="form-control" id="Password">
                </div>

                <div class="form-group mb-4">
                    <label for="ConfirmPassword">Confirm Password :</label>
                    <input type="password" class="form-control" id="ConfirmPassword">
                </div>

                <button type="submit" class="btn custom-btn">Sign Up</button>
            </form>

            <small id="emailHelp" class="form-text text-muted">By clicking “Sign up” you agree to name terms of services and privacy policy</small>
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

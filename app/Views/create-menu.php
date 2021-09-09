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

<body>
    <!--Header 1-->
    <nav class="navbar navbar-expand-lg navbar-custom-2 fixed-top">
      <div class="container" style="padding-left:0px;padding-right:0px;flex-wrap:nowrap;">
          <a class="navbar-brand logo" href="#">ChefCorner</a>
           
          <section class="sidedraw" id="sidedraw-name" data-sidedraw-target>
              <div class="sidedraw-overlay" data-sidedraw-close tabindex="-1"></div>
              <div class="sidedraw-wrapper">
                <div class="sidedraw-header">
                  <div class="sidedraw-title">
                    ChefCorner
                  </div>
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

          <div class="collapse navbar-collapse" >
              <ul class="navbar-nav ml-auto topnav">
                
                   <li class="nav-item chefCorner-nav-item ">
                        <a class="nav-link chefCorner-nav-atag" href="#">User's Name<img src="images/user.svg" style="width:17px; height: 17px;margin:0px 0px 3px 3px;"/></a>
                  </li>
               
              </ul>
          </div>
      </div>
    </nav>

    <div class="container-fluid chefCo-container">
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
                                    <a class="nav-link" href="">Orders</a>
                                </li>
                                <li class="nav-item chefco-tab">
                                    <a class="nav-link" href="">Recicipes</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <h1>This page is suppose to be a modal in chef-menu.html, so u don't need it</h1>
        <!------>
        <div class="container-fluid">
            <div class="col-md-8 col-sm-12 mx-auto my-5">
                <div class="col-md-12 m-auto py-3">
                    <form action="#">
                        <div class="form-group mb-4">
                            <label for="name">Name :</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group mb-4">
                            <label for="desc">Description :</label>
                            <textarea class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group mb-4">
                            <label for="items">Item Category :</label>
                            <select class="form-control" name="items" id="items">
                                <option value="drinks">Drinks</option>
                                <option value="meals">Meals</option>
                            </select>
                        </div>
                        <div class="form-group mb-4">
                            <label for="uploadProduct">Cover :</label>
                            <input class="form-control p-5" type="file" name="uploadProduct" id="uploadProduct">
                        </div>

                        <div class="form-group mb-4">
                            <label for="time">Time :</label>
                            <input class="form-control col-3" type="time" name="time" id="time">
                        </div>

                        <div class="form-group mb-4">
                            <label for="Quantity">Quantity :</label>
                            <input class="form-control col-3" type="number" name="Quantity" id="Quantity">
                        </div>

                        <div class="form-group mb-4">
                            <label for="Price">Price :</label>
                            <input class="form-control" type="number" name="Price" id="Price">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="mb-4 btn col-7 custom-btn">Add to menu</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
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
                        <p class="m-0 p-0">© 1999–2020 All rights reserved.</p>
                    </div>
                </div>
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
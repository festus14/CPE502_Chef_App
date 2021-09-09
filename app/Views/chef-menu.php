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
  <!--Header 1-->
  <nav class="navbar navbar-expand-lg navbar-custom-2 fixed-top">
    <div class="container" style="padding-left:0px;padding-right:0px;flex-wrap:nowrap;">
      <div class="navbar-brand ">
        <a  class="logo" href="#">ChefCorner</a>
      </div>
      <div class="mt-2">
        <ul class="navbar-nav ml-auto topnav">
          <li class="nav-item chefCorner-nav-item ">
            <a class="nav-link chefCorner-nav-atag" href="#">Username <i class="pl-1 fa fa-user-circle"></i></a>
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
                  <a class="nav-link" href="chef-menu.html">Menu</a>
                </li>
                <li class="nav-item chefco-tab">
                  <a class="nav-link" href="chef-order.html">Orders</a>
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

    <div class="container">
      <div class="navbar my-3">
        <h1>Resturant Menu</h1>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn custom-btn my-3" type="button" type="button" data-toggle="modal" data-target="#exampleModalCenter">Add Menu Item</button>

        </form>
      </div>

       <!-- Modal starts -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header" style="border-bottom-width:0px;">
               
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
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
        </div>
        <!-- Modal ends -->
    </div>
    <div class="row m-5 px-5">
      <div class="col-md-4 col-sm-12 my-3">
        <div class="text-center">
          <img class="img-fluid" src="images/cake.png" alt="cake">
        </div>
        
        <div class="d-block m-2">
          <div class="d-flex">
            <span><i class="fa fa-clock-o" style="padding: 8px 8px 8px 0px;"></i></span>
            <p class="p-1 ml-1">10 mins</p>
          </div>
          <p>OrderByClientUsername</p>
          <p>$12.99</p>
        </div>

        <div class="d-inline">
          <button type="button" class="btn custom-btn my-1" type="button" type="button" data-toggle="modal" data-target="#exampleModalCenter">Edit</button>
          <button type="button" class="btn custom-btn my-1">Delete</button>
        </div>
      </div>

      <div class="col-md-4 col-sm-12 my-3">
        <div class="text-center">
          <img class="img-fluid" src="images/cake.png" alt="cake">
        </div>
        <div class="d-block m-2">
          <div class="d-flex">
            <span><i class="fa fa-clock-o" style="padding: 8px 8px 8px 0px;"></i></span>
            <p class="p-1 ml-1">10 mins</p>
          </div>
          <p>OrderByClientUsername</p>
          <p>$12.99</p>
        </div>
        <!------>

        <div class="d-inline">
          <button type="button" class="btn custom-btn my-1" type="button" type="button" data-toggle="modal" data-target="#exampleModalCenter">Edit</button>
          <button type="button" class="btn custom-btn my-1">Delete</button>
        </div>
      </div>

      <div class="col-md-4 col-sm-12 my-3">
        <div class="text-center">
          <img class="img-fluid" src="images/cake.png" alt="cake">
        </div>
        <div class="d-block m-2">
          <div class="d-flex">
            <span><i class="fa fa-clock-o" style="padding: 8px 8px 8px 0px;"></i></span>
            <p class="p-1 ml-1">10 mins</p>
          </div>
          <p>OrderByClientUsername</p>
          <p>$12.99</p>
        </div>

        <div class="d-inline">
          <button type="button" class="btn custom-btn my-1" type="button" type="button" data-toggle="modal" data-target="#exampleModalCenter">Edit</button>
          <button type="button" class="btn custom-btn my-1">Delete</button>
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
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
                                        <a class="nav-link" href="">Orders</a>
                                    </li>
                                    <li class="nav-item chefco-tab">
                                        <a class="nav-link" href="">Recipes</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
      </div>
      <!-- END OF PAGINATION SECTION -->



      <!-- START OF SEARCH SECTION -->
     
      <!-- START OF SEARCH SECTION -->
      
        <!-- VIEW ORDER SECTION -->
        <div class="row" style="margin-bottom: 100px;">
          <div class="container">
            <div class="col-md-12">

              <div class="navbar my-1">
                <h1>Recipes</h1>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn custom-btn my-3" type="button" data-toggle="modal" data-target="#exampleModalCenter">Add Recipe</button>
                </form>


                <!-- Modal starts -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header" style="border-bottom-width:0px;">
                       
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form style="padding-bottom: 20px;">
                                 <div class="form-group">
                                        <label for="Username">Recipe name</label>
                                        <input type="text" class="form-control shadow-none" placeholder="Recipe name">
                                  </div>

                                

                                  <div class="form-group">
                                        <label for="Website">Cover</label>
                                        <div class="upload-input">  
                                            <input type="file" class="recipe-cover"> 
                                        </div>
                                  </div>
                                 
                                 
                                  <div class="form-group">
                                        <label for="Username">Quantity</label>
                                        <div class="input-group mb-2 mr-sm-2">
                                         
                                          <input type="Number" class="form-control shadow-none" placeholder="700">
                                        </div>
                                  </div>
                            
                            </form>
                        </div>
                        <div class="modal-footer" style="border-top-width:0px;padding:6px 12px;">
                          <button type="button" class="btn boonay-cancel" data-dismiss="modal">Cancel</button>
                          <button type="submit" class="btn custom-btn" style="">Create</button>
                        </div>
                      </div>
                  </div>
                </div>
                <!-- Modal ends-->

              </div>
            </div>
                    
            <div class="row">
              <div class="col-md-9">

                <div class="container-fluid">
                  
                  <!-- FIRST QUANTITY IN THE CART -->
                  <div class="container mt-3">
                    <div class="row mb-5">
                      <div class="col-md-5 modal-img">
                        <img src="images/salad.png" class="rounded-circle" />
                      </div>
                      <div class="col-md-7 d-flex align-items-center">          
                        <div class="recipe-tag">

                           <h2 style="font-weight: bold;">Salad</h2>   
                           <h6 style="font-weight: bold;">In stock <span>12</span></h6> 

                           <div class="d-inline">
                              <button class="btn custom-btn my-1" type="button" data-toggle="modal" data-target="#exampleModalCenter">Edit</button>
                              <button type="button" class="btn custom-btn my-1">Delete</button>
                           </div>
                        </div> 
                    
                      </div>
                    </div>
                    <!-- END OF FIRST QUANTITY IN THE CART -->
                    <!-- SECOND QUANTITY IN THE CART -->
                    <div class="row mt-5">

                      <div class="col-md-5 modal-img">
                        <img src="images/salad.png" class="rounded-circle" />
                      </div>

                      <div class="col-md-7 d-flex align-items-center">          
                          <div class="recipe-tag">
                             <h2 style="font-weight: bold;">Salad</h2>  
                             <h6 style="font-weight: bold;">In stock <span>12</span></h6>  

                             <div class="d-inline">
                                <button type="submit" class="btn custom-btn my-1">Edit</button>
                                <button type="reset" class="btn custom-btn my-1">Delete</button>
                             </div>
                          </div>                 
                      </div>

                    </div>
                    <!-- END OF SECOND QUANTITY IN THE CART -->
                  </div>
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
    <script src="my_js/jquery-3.4.1.slim.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-4.4.1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="my_js/index.js"></script>
  
  </body>
</html>

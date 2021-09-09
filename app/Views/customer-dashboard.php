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
                <a class="sidedraw-nav-link chefCorner-sidedraw-join" href="chef-signup.html">Join for free<span class="sr-only">(current)</span></a>
                <a class="sidedraw-nav-link chefCorner-sidedraw-login" href="sigin-in.html">Login</a>
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
        <div class="row" style="">
         <div class="container">
            <div class="row">
              <div class="col-md-12 d-flex justify-content-center align-items-center joint-tab">
                <div class="row flex-nowrap">
                   <ul class="nav nav-pills mb-3 -container" >
                    <li class="nav-item chefco-tab">
                      <a class="nav-link" href="customer-dashboard.html">Menu</a>
                    </li>
                    <li class="nav-item chefco-tab">
                      <a class="nav-link" href="customer-cart.html">Cart</a>
                    </li>
                    <li class="nav-item chefco-tab">
                      <a class="nav-link" href="order-records.html">Order record</a>
                    </li>
                  </ul>
                  
                </div>
              </div>
            </div>
         </div>
      </div>
            
    <!-- Put ur other rows inside here <div class="row"></div> --> 
    <div class="row">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 text-center pt-4">
        
              <form class="mx-2">  
                <div class="form-row py-2">
                  <div class="form-group col-md-9">
                    <input type="text" class="form-control chef-search" id="inputCity">
                  </div>
                  <div class="form-group col-md-3">
                        <div  class="btn custom-dropdown dropdown" role="button"><span>Filter</span> 
                            <div class="dropdown-content">
                              <div class="dropdown-list">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                      <span>checkbox</span> 
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                    <label class="form-check-label" for="defaultCheck2">
                                      <span>checkbox</span> 
                                    </label>
                                  </div>
                              </div>
                            </div>

                        </div>
                  </div>
              
                </div>
       
              </form>
            </div>
        </div>
      </div>
    </div>

    <div class="row">
        <div class="container">
            <div class="row">


                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <div class="chef-product">                       
                        <div><img src="images/fufu.jpg" class="chef-item-img"></div>  
                         <h5 class="chef-item-h5">Fufu</h5>
                         <h6 class="chef-item-h6"><i class="fa fa-clock-o" style="padding: 8px 8px 8px 0px;"></i><span>10 mins</span></h6> 
                         <h6>Order by <span>Shola</span></h6>
                         <h6>$12.99</h6>
                         <button class="btn custom-btn" data-toggle="modal" data-target="#exampleModal">Buy</button>


                        <!-- Modal start here -->
                        <div class="modal fade" id="exampleModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">


                              <div class="modal-header border-bottom-0">
                         
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>

                              <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                      <div class="col-md-5 modal-img">
                                        <img src="images/fufu.jpg" class="rounded-0"/>
                                      </div>
                                      <div class="col-md-7">          
                                           <h2 class="modal-item-h2">Art of war</h2>
                                           <h6 class="modal-item-h6">Literature</span></h6>
                                           <h5 class="modal-item-h5">By <span>sun Tzu. 2020</span></h5>
                                           <h1>$40</h1>      
                                           <a class="btn custom-btn buy-btn modal-item-btn" href="">Add to cart</a>
                                              
                                      </div>
                                    </div>
                                </div>
                              </div>

                              <div class="descriptions p-4">
                                <h4>Description</h4>
                                <p>
                                  A beautiful set of 120 custom app icons, perfect for iOS 14. Includes wallpapers, instructions, and comes in black, slate, cobalt, and white.

                                  Purchase and get lifetime access to all future updates, which will be sent to your email address with a link to download the new files.

                                  Three reasons not to buy this:
                                  1. Custom icons open the shortcuts app first (fixed in iOS 14.3 b2!)
                                  2. There's no notification badges on shortcut apps
                                  3. You have to manually set each icon shortcut

                                  I can no longer provide individual support or refunds. 

                                   
                                  Here's a video on how all of this works.
                                  View the full icon list here. Instructions here.
                                </p>
                              </div>
                            
                            </div>
                          </div>
                        </div> 
                        <!-- Modal end here -->
                    </div>      
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                     <div class="chef-product">                      
                         <div><img src="images/fufu.jpg" class="chef-item-img"></div>  
                         <h5 class="chef-item-h5">Fufu</h5>
                         <h6 class="chef-item-h6"><i class="fa fa-clock-o" style="padding: 8px 8px 8px 0px;"></i><span>10 mins</span></h6>
                         <h6>Order by <span>Shola</span></h6>
                         <h6>$12.99</h6>
                         <button class="btn custom-btn" data-toggle="modal" data-target="#exampleModal">Buy</button>
                    </div>  
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                     <div class="chef-product">
                         <div><img src="images/fufu.jpg" class="chef-item-img"></div>  
                         <h5 class="chef-item-h5">Fufu</h5>
                         <h6 class="chef-item-h6"><i class="fa fa-clock-o p-1"></i><span>10 mins</span></h6> 
                         <h6>Order by <span>Shola</span></h6>
                         <h6>$12.99</h6>
                         <button class="btn custom-btn" data-toggle="modal" data-target="#exampleModal">Buy</button>  
                    </div>  
                </div>

                <div class="col-md-4 d-flex justify-content-center align-items-center">
                     <div class="chef-product">
                         <div><img src="images/fufu.jpg" class="chef-item-img"></div>  
                         <h5 class="chef-item-h5">Fufu</h5>
                         <h6 class="chef-item-h6"><i class="fa fa-clock-o" style="padding: 8px 8px 8px 0px;"></i><span>10 mins</span></h6> 
                         <h6>Order by <span>Shola</span></h6>
                         <h6>$12.99</h6>
                         <button class="btn custom-btn" data-toggle="modal" data-target="#exampleModal">Buy</button>  
                    </div>  
                </div>
               


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
                <p  class="m-0 p-0">© 1999–2020 All rights reserved.</p>
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

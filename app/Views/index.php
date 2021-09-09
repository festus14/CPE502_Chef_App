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


  <header class="masthead">

      <nav class="navbar navbar-expand-lg navbar-custom sticky-top" id="scroll-change">
        <div class="container-fluid chefCorner-sticky">
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
                        <a class="nav-link chefCorner-nav-atag" href="chef-signup.html">Join for free</a>
                    </li>
                    <li class="nav-item chefCorner-nav-item ">
                        <a class="nav-link chefCorner-nav-atag" href="sigin-in.html">Sign In</a>
                    </li>
                 
                </ul>
            </div>
        </div>
      </nav>
      <div class="container text-cover">

          <div class="row align-items-center">
            <div class="col-12 text-center">
              <h1 class="font-weight-bold">Find meals in seconds and with ease </h1>
              <h2 class="font-weight-lighter">or join us as a chef</h2>


            </div>
          </div>
         
      </div>

  </header>

  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 text-center">
  
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



  <div class="container">
     
      <div class="row">
          <div class="col-md-4 d-flex justify-content-center align-items-center">
              <div class="chef-product">                       
                  <div><img src="images/fufu.jpg" class="chef-item-img"></div>  
                   
                   <a class="chef-item-h5" style="color:#022b69;" href="customer-view-item.html">Fufu</a>
                   <div class="d-flex">
                      <span><i class="fa fa-clock-o" style="padding: 8px 8px 8px 0px;"></i></span>
                      <p class="p-1 m-0">10 mins</p>
                   </div> 
                   <h6>ItemName by <span>ChefName</span></h6>
                   <h6>$12.99</h6>
                   <button class="btn custom-btn" data-toggle="modal" data-target="#exampleModal">Buy</button>
                <!------>

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
                                     <a class="chef-item-h5" style="color:#022b69;" href="customer-view-item.html">Fufu</a>
                                          
                                     <div class="d-flex">
                                        <span><i class="fa fa-clock-o" style="padding: 8px 8px 8px 0px;"></i></span>
                                        <p class="p-1 m-0">10 mins</p>
                                     </div> 
                                     <h5 class="modal-item-h5">ItemName by <span>ChefName</span></h5>
                                     <h1>$12.99</h1>
                                     <a class="btn custom-btn buy-btn modal-item-btn" href="customer-Fufurt.html">Add to cart</a>
                                        
                                </div>
                              </div>
                          </div>
                        </div>

                        <div class="descriptions p-4">
                          <h4>Description</h4>
                          <p>
                           Lorem Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                 
                          Here's a video on how all of this works.
                          View the full icon list here. Instructions here..
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
                   <a class="chef-item-h5" style="color:#022b69;" href="customer-view-item.html">Fufu</a>
                   <div class="d-flex">
                      <span><i class="fa fa-clock-o" style="padding: 8px 8px 8px 0px;"></i></span>
                      <p class="p-1 m-0">10 mins</p>
                   </div>
                   <h6>ItemName by <span>ChefName</span></h6>
                   <h6>$12.99</h6>
                   <button class="btn custom-btn" data-toggle="modal" data-target="#exampleModal">Buy</button>
              </div>  
          </div>
          <div class="col-md-4 d-flex justify-content-center align-items-center">
               <div class="chef-product">
                   <div><img src="images/fufu.jpg" class="chef-item-img"></div>  
                   <a class="chef-item-h5" style="color:#022b69;" href="customer-view-item.html">Fufu</a>
                   <div class="d-flex">
                      <span><i class="fa fa-clock-o" style="padding: 8px 8px 8px 0px;"></i></span>
                      <p class="p-1 m-0">10 mins</p>
                   </div>
                   <h6>ItemName by <span>ChefName</span></h6>
                   <h6>$12.99</h6>
                   <button class="btn custom-btn" data-toggle="modal" data-target="#exampleModal">Buy</button>  
              </div>  
          </div>

          <div class="col-md-4 d-flex justify-content-center align-items-center">
               <div class="chef-product">
                   <div><img src="images/fufu.jpg" class="chef-item-img"></div>  
                   <a class="chef-item-h5" style="color:#022b69;" href="customer-view-item.html">Fufu</a>
                   <div class="d-flex">
                      <span><i class="fa fa-clock-o" style="padding: 8px 8px 8px 0px;"></i></span>
                      <p class="p-1 m-0">10 mins</p>
                   </div> 
                   <h6>ItemName by <span>ChefName</span></h6>
                   <h6>$12.99</h6>
                   <button class="btn custom-btn" data-toggle="modal" data-target="#exampleModal">Buy</button>  
              </div>  
          </div>
          
      </div>            

  </div>



  <div class="container-fluid">
      <div class="row footer-row">
         <div class="container-fluid mx-5">
              <div class="row footer">
                  <div class="col-md-2 ft footer-logo">
                    <a href="">ChefCorner</a>
                  </div>
                  <div class="col-md-5 m-auto ft">
                    <ul class="footer-tab">
                        <li><a href="">Help</a> </li>
                        <li><a href="">About</a></li>
                        <li><a href="">Price</a></li>
                        <li><a href="">Blog</a></li>
                      </ul>
                  </div>
                
                  <div class="col-md-5 m-auto ft">
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


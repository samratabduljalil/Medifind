<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>MEDIFIND</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
   
       <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       <?php
         SESSION_start();  
              
    ?>
    </head>
    <body>
   
        <div class="header">
        <div class="container">
        <div class="navbar">
            <div class="logo">
            <a href="index.php">  <img src="images/m.png" width="135px"></a>
                
            </div>
            
            <nav >
                <ul  id="menuitems">
                <li> <form action="Search.php" method="get">   
                <input type="Search"placeholder="Search" name="search">
                <button type="Submit"name="Medicine" class="btn btn-dark">Medicine</button>
                <a class="btn btn-dark" href="store.php" role="button">Search Store</a>
                
           
</form>   </li> 

                    <li class="text-dark"><a href="index.php"class="text-dark"><i class="fa fa-home"></i> Home</a></li>
                    <li ><a href="product.php"class="text-dark">
                        <i class="fa fa-medkit" ></i> Products</a></li>
                    <li><a href="#"class="text-dark"> <i class="fa fa-phone" ></i> Contact</a></li>

                    <?php
                    
                    if(isset($_SESSION["table"])){
                    $d=$_SESSION["table"];
                   
                     if(!strcmp($d,'admin')){
                        
                        
                         ?>
                       <li><a href="DashboardAdmin.php"class="text-dark"> <i class="fa fa-id-badge"></i> admin</a></li>

                         <?php 
                     }else if (!strcmp($d,'general_user')){
                        ?>
                         <li><a href="DashboardUser.php"class="text-dark"> <i class="fa fa-id-badge"></i> general_user</a></li>
                         <?php 
                     }else if (!strcmp($d,'company')){
                        ?>
                        <li><a href="DashboardCompany.php"class="text-dark"> <i class="fa fa-id-badge"></i> Company</a></li>
                        <?php 
                     }else if (!strcmp($d,'shop')){
                        ?>

                     <li><a href="DashboardShop.php"class="text-dark"> <i class="fa fa-id-badge"></i> Shop</a></li>
                     <?php 

                     }} else{
                         ?>
                      <li><a href="account.php"class="text-dark"> <i class="fa fa-id-badge"></i> Account</a></li>

                            <?php 

                     }
                         ?>



                    <li><a href="Logout.php"class="text-dark"> <i class="fa fa-user"></i> About us</a></li>
                </ul>
            
            </nav>
            <img src="images/button.png" width="40px" height="40px">
            <img src="images/menu.png" width="40px" class="menu-icon" onclick="menutoggle()">
            
        </div>
            
           
            
        </div>
        </div>
        
<!---------feature categoris--------->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/christina-victoria-craft-ZHys6xN7sUE-unsplash.jpg" width="1600px" height="600px" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3 class="text-dark">Find Your Medicine With Us.</h3>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/volodymyr-hryshchenko-e8YFkjN2CzY-unsplash (1).jpg" width="1600px" height="600px" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h3 class="text-dark">Drop Your Prescription Here</h3>
       
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/madison-agardi-QNrjcp90tVc-unsplash (1).jpg" width="1600px" height="600px" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h3 class="text-dark">Take Medicine When You Need</h3>
        
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    
<!-----------feature products-------->
        
        
        
        <div class="small-container">
            <h2 class="title">Most Search Medicine</h2>
            <div class="row">
  <?php 
  require_once('connection.php');

  $sql="SELECT * FROM `most_search_medicine`";
  $products=$con->query($sql);
  while($product=$products->fetch_assoc()){

  ?>
                <div class="col-4">
                    <img src="<?php echo $product["M_image"]?>">
                    <h3><?php echo $product["M_name"]?></h3>
                    <p>Tablet</p>
                    <h4>Generics:</h4><p><?php echo $product["M_generic"]?></p>
                 
                    
                   
                    
                    
                    
                    <p>&#2547 19.00 </p>
            </div>
 <?php }?>
               
        
        </div>
            
            <h2 class="title">Nearest Shop</h2>
            <div class="row">
            <?php 
  require_once('connection.php');

  $sql="SELECT * FROM `medical_shop`";
  $Shops=$con->query($sql);
  while($Shop=$Shops->fetch_assoc()){

  ?>
                <div class="col-4">
                    <img src="<?php echo $Shop["S_image"]?>">
                    <h3><?php echo $Shop["S_name"]?></h3>
                    <br>
                    <h4>Place: <?php echo $Shop["S_place"]?></h4>
                   
                    <h4>Address:</h4><p><?php echo $Shop["S_upazila"]?>,<?php echo $Shop["S_district"]?>,<?php echo $Shop["S_division"]?>.</p>
                 
                   
                    
                
            </div>
 <?php }?>
               
                
                
                
                
                
                
                
        
        
        
        
        </div>
            
            
            
        
        
        
        
        </div>
            
        </div>
        
<!-------------testimonial--------
      <div class="testimonial">
            <div class="small-container">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elite. <br> Nemo omnis voluptatem consectetur quam tempore.</p>
                        <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                     </div>
                    <img src="images/pic 1.jpg">
                    <h2>Sean Parker</h2>
                </div>
                
                 <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elite. <br> Nemo omnis voluptatem consectetur quam tempore.</p>
                        <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                     </div>
                    <img src="images/pic%202.jpg">
                    <h2>Sean Parker</h2>
                </div>
                
                
                 <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elite. <br> Nemo omnis voluptatem consectetur quam tempore.</p>
                        <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                     </div>
                    <img src="images/pic%203.jpg">
                    <h2>Sean Parker</h2>
                </div>
      </div>
            
            
 </div>
        ------->
        
<!----------Companies------>
        
        
        
        <!-----footer------>
        
        
        
        
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Download Our App</h3>
                        <p>Download App for Android and ios Mobile Phone.</p>
                        <div class="app-logo">
                          <img src="images/play-store.png">
                            <img src="images/app-store.png">
                        
                        
                        </div>
                        
                    </div>
                    
                     <div class="footer-col-2">
                        <img src="images/M.png" width="200px">
                        <p>To provide safe, high quality patient care in an atmosphere <br>of professionalism, respect, and effective communication.</p>
                    </div>
                    
                    
                     <div class="footer-col-3">
                        <h3>Useful Links</h3>
                         <ul>
                             <li>Coupons</li>
                             <li>Blog Post</li>
                             <li>Return Policy</li>
                             <li>Join Affilicate</li>
                         
                         </ul>
                    </div>
                    
                    
                    
                    <div class="footer-col-4">
                        <h3>Follow Us</h3>
                         <ul>
                             <li>Facebook</li>
                             <li>Twitter</li>
                             <li>Instagram</li>
                             <li>YouTube</li>
                         
                         </ul>
                    </div>
                
                
                </div>
            
                
                
                <hr>
                <p class="copyright"> Copyright 2020- easy tutorial</p>
                
                </div>
        
        
        
        </div>
        
        
<!------------js for toggle menu----------->
        <script>
            var menuitems = document.getElementById(menuitems);
            menuitems.style.maxHeight = "0px";
            function menutoggle(){
                if(menuitems.style.maxHeight=="0px"){
                   menuitems.style.maxHeight="200px";
                   }
                else
                    {
                        menuitems.style.maxHeight="0px";
                    }
            }
        
        </script>
        
    </body>
</html>
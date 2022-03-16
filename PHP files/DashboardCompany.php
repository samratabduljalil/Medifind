<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>MEDIFIND</title>
        <link rel="stylesheet" href="side.css">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
   
       <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       <?php
         SESSION_start();  
              
    ?>
    </head>
    <body>
        <input type="checkbox" id="check">
        <label for="check">
        <i class="fa fa-bars" id="btn"></i>
        <i class="fa fa-times" id="cancel"></i>
        </label>
    <div class="sidebar">
    <a href="index.php"><header>MEDIFIND</header></a>
         <ul>
         <li><a href="DashboardCompany.php"><i class="fa fa-qrcode"></i><?php echo $_SESSION["username"]?></a></li>
             <li><a href="picturecompany.php"><i class="fa fa-tasks"></i>Add/change picture</a></li>
             <li><a href="sellingRate.php"><i class="fa fa-shopping-bag"></i>Selling Rate</a></li>
             <li><a href="CompanyNewMwdicine.php"><i class="fa fa-plus-square"></i>Add New Medicine</a></li>
             
             <li><a href="ContactShop.php"><i class="fa fa-user"></i>Medicine Offer</a></li>
            
             <li><a href="Logout.php"><i class="fa fa-tasks"></i>Logout</a></li>
            
             
        </ul>
        </div>
        <section>

        <div class="row">
                <div class="col-4">
                    <img src="<?php echo $_SESSION["image"]?>">
                    <h3>Name: <?php echo $_SESSION["username"]?></h3>
                    
                   
                    <h4>Phone Number: <?php echo $_SESSION["phone"]?></h4>
                    <h4>Email: <?php echo $_SESSION["email"]?></h4>
      


                       
                        
                    </div>
                    
                    
                    
                
            </div>





        </section>
        
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
        
    </body>
</html>

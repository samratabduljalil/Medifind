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
             <li><a href="DashboardShop.php"><i class="fa fa-qrcode"></i><?php echo $_SESSION["username"]?></a></li>
             <li><a href="pictureshop.php"><i class="fa fa-tasks"></i>Add/change picture</a></li>
             <li><a href="contactcompany.php"><i class="fa fa-shopping-bag"></i>company</a></li>
             <li><a href="addMedicine.php"><i class="fa fa-plus-square"></i>Add Medicine</a></li>
             <li><a href="updatemedicineShop.php"><i class="fa fa-pencil"></i>Upadte Medicine</a></li>
             <li><a href="Shopsell.php"><i class="fa fa-indent"></i>selling history</a></li>
            
             <li><a href="MedicineCheck.php"><i class="fa fa-tasks"></i>Medicine Check</a></li>
            
            
             <li><a href="setReminder.php"><i class="fa fa-tasks"></i>Set reminder</a></li>
             <li><a href="Logout.php"><i class="fa fa-tasks"></i>LogOut </a></li>
            
             
        </ul>
        </div>
        <section>

        <div class="row">
       
                <div class="col-3">
                    <img src="<?php echo $_SESSION["image"]?>"width="10" height="300">
                    <h3>Name: <?php echo $_SESSION["username"]?></h3>
                    
                    <h4>Area: <?php echo $_SESSION["union"]?></h4>
                    <h4>Phone Number: <?php echo $_SESSION["phone"]?></h4>
                    <h4>Email: <?php echo $_SESSION["email"]?></h4>
      


                       
                        
                    </div>
                    
                    
                    
                
            </div>
            </div>
           
        
      
</section> 

<section>


<div class="small-container">
          
          <?php 
          require_once('connection.php');
          
          $sql="SELECT * FROM `advertisement`";
          $products=$con->query($sql);
          while($product=$products->fetch_assoc()){
          
          ?>
                        <div class="col-5">
          
                        <h2> Advertisement    </h2>
                            <img src="<?php echo $product["M_image"]?>">
                            <h3>NAME:  <?php echo $product["M_name"]?></h3>
                            
                            <h4>Generics: </h4><p><?php echo $product["M_generic"]?></p>
          
                         
                            <p>offer price &#2547 <?php echo $product["M_privious_price"]?></p>
                            <p>offer price &#2547 <?php echo $product["M_price"]?></p>
                            <p>Company id:<?php echo $product["company_id"]?></p>
                    </div>
                    </div>
                    </div>
                  
          
          
          <?php  } ?>

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
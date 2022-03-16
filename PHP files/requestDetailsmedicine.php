<!DOCTYPE html>
<html lang="en">

<?php
         SESSION_start();             
    ?>


<?php
                    if(isset($_SESSION["table"])){
                    $d=$_SESSION["table"];
                    $da="admin";
                     if($d=$da){
                        
                        
                         ?>
  <head>
        <meta charset="UTF-8">
        <title>MEDIFIND</title>
        <link rel="stylesheet" href="side.css">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
   
       <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      
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
         <li><a href="DashboardAdmin.php"><i class="fa fa-qrcode"></i><?php echo $_SESSION["username"]?></a></li>
             <li><a href="UpdateMedicineAdmin.php"><i class="fa fa-shopping-bag"></i>Update Medicine </a></li>
             <li><a href="AddMedicineadmin.php"><i class="fa fa-plus-square"></i>Add Medicine </a></li>
            
             <li><a href="request.php"><i class="fa fa-tasks"></i>Medicine request </a></li>
             <li><a href="addoffer.php"><i class="fa fa-tasks"></i>Advertisement </a></li>
             <li><a href="adminimage.php"><i class="fa fa-tasks"></i>Add image</a></li>
             <li><a href="Logout.php"><i class="fa fa-tasks"></i>LogOut</a></li>
             
            
             
        </ul>
        </div>
        <br><br>
        <section>
        

        <?php 
  require_once('connection.php');



$a=$_GET['id'];

$sql="SELECT * FROM `request_medicine` WHERE request_id='$a'";
  $products=$con->query($sql);
  if($products->num_rows >0){
  while($product=$products->fetch_assoc()){

 
  ?>


        <div class="small-container single-product">
            <div class="row">
                <div class="col-2">
                <p>Medicine Image</p>
                   <img src="<?php echo $product["C_image"]?>">
                </div>

                <div class="col-2">
                <p>Certificate</p>
                   <img src="<?php echo $product["R_certificate"]?>">
              
            </div>
                <div class="col-2">
                    <h3><b><?php echo $product["M_name"]?></b></h3>
                   
                  
                    <h4>Generics:</h4><p><?php echo $product["M_generic"]?></p>
                    <p>&#2547 <?php echo $product["M_price_customers"]?> for customers </p>
                    <p>&#2547 <?php echo $product["M_price_shop"]?> for shop</p>
                    <a href="addItem.php?id=<?php echo $product["request_id"]?>" class="btn">Add</a>
                    <a href="delete.php?id=<?php echo $product["request_id"]?>" class="btn">Delete</a>
                     </div>
                     <?php }} ?>
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

                      
                         <?php 
                     }} else{
                         ?>
                         <br><br><br><br><br><br><br><br>
                         <br><br>
                         <br><br>
                         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
                         <div class="alert alert-danger" role="alert">
                                   <h1> Access Denied</h>
                                            </div>

                            <?php 

                     }
                         ?>



  
</html>

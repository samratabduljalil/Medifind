<!DOCTYPE html>
<html lang="en">

<?php
         SESSION_start();             
    ?>


<?php
                    if(isset($_SESSION["table"])){
                    $d=$_SESSION["table"];
                    $da="general_user";
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
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
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
        <br><br><br>
        <form class="row" action="ContactShop.php" method="get">
  <div class="col-3">
    <label for="exampleInputEmail1" class="form-label">Medicine Name</label>
    <input type="Search"placeholder="Search" name="medicine">
   
  </div>
  <div class="col-3">
    <label for="exampleInputPassword1" class="form-label">   Medicine Generic</label>
    <input type="Search"placeholder="Search" name="generic">
  </div>
  <div class="col-3">
    <label for="exampleInputPassword1" class="form-label">Privious price</label>
    <input type="Search"placeholder="Search" name="P_Price">
  </div>
  
  <div class="row">
  <div class="col-5">
    <label for="exampleInputEmail1" class="form-label">offer price</label>
    <input type="Search"placeholder="Search" name="O_price">
   
  </div>
  
  <div class="col-6">
    <label for="exampleInputPassword1" class="form-label">Medicine image </label>
    <input class="file-upload-input" type="file" onchange="readURL(this)"name="image" >
  </div></div>
  <br><br><br>
  </div>
  <br><br><br><br>
 
 
  <div class="row">
  <div class="col-3">
  <button type="submit" class="btn btn-dark">Send Offer</button></div></div>
</form>
        
<br><br><br><br> <br><br><br><br> <br><br><br><br>

<?php 
  require_once('connection.php');




  if(isset($_GET['medicine'])){
   
  
        $d=date('Y-m-d');
       
$sql="INSERT INTO `request_advertisement`(`company_id`, `M_name`, `M_generic`, `M_image`, `M_privious_price`, `M_price`, `add_Date`) VALUES ('{$_SESSION['Id']}','{$_GET['medicine']}','{$_GET['generic']}','images/{$_GET['image']}','{$_GET['P_Price']}','{$_GET['O_price']}','$d')";
  $con->query($sql);
  
    
    header("location: ContactShop.php");

}



  ?>

       
        
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

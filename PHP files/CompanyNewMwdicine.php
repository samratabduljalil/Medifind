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
        <form class="row" action="CompanyNewMwdicine.php" method="get">
  <div class="col-3">
    <label for="exampleInputEmail1" class="form-label">Medicine Name</label>
    <input type="Search"placeholder="Search" name="medicine">
   
  </div>
  <div class="col-3">
    <label for="exampleInputPassword1" class="form-label">Medicine Generic Name</label>
    <input type="Search"placeholder="Search" name="Generic">
  </div>
  <div class="col-3">
    <label for="exampleInputPassword1" class="form-label"> price</label>
    <input type="Search"placeholder="Search" name="price">
  </div>
  
  <div class="row">
  <div class="col-3">
    <label for="exampleInputPassword1" class="form-label">Shop price</label>
    <input type="Search"placeholder="Search" name="price_shop">
  </div>
  <div class="col-3">
    <label for="exampleInputPassword1" class="form-label">Drug Administretion certificate(jpg)</label>
    <input class="file-upload-input" type="file" onchange="readURL(this)"name="certificate" >
  </div>
  <div class="col-3">
    <label for="exampleInputPassword1" class="form-label">Medicine image(jpg) </label>
    <input class="file-upload-input" type="file" onchange="readURL(this)"name="image" >
  </div>
  </div>
  <br><br><br>
  </div>
  <br><br><br><br>
  <div class="row">

  <div class="col-3">
  <button type="submit" class="btn btn-dark" name="submit">Request Medicine</button></div></div>
</form>

<?php 
  require_once('connection.php');
if(isset($_GET["image"])){
    echo $d=date('Y-m-d');
    $sql="INSERT INTO `request_medicine`( M_price_shop,`M_name`, `company_id`, `M_generic`, `C_image`,  `M_price_customers`, `request_Date`, `R_certificate`) VALUES ('{$_GET['price_shop']}','{$_GET['medicine']}','{$_SESSION["Id"]}','{$_GET['Generic']}','images/{$_GET['image']}','{$_GET['price']}','$d','images/{$_GET['certificate']}' )";
  $con->query($sql);

  header("location: CompanyNewMwdicine.php");
}


  ?>




<br><br><br><br> <br><br><br><br> <br><br><br><br>



       
        
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

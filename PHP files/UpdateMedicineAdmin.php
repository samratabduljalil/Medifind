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
         <li><a href="DashboardAdmin.php"><i class="fa fa-qrcode"></i><?php echo $_SESSION["username"]?></a></li>
             <li><a href="UpdateMedicineAdmin.php"><i class="fa fa-shopping-bag"></i>Update Medicine </a></li>
             <li><a href="AddMedicineadmin.php"><i class="fa fa-plus-square"></i>Add Medicine </a></li>
            
             <li><a href="request.php"><i class="fa fa-tasks"></i>Medicine request </a></li>
             <li><a href="addoffer.php"><i class="fa fa-tasks"></i>Advertisement </a></li>
             <li><a href="adminimage.php"><i class="fa fa-tasks"></i>Add image</a></li>
             <li><a href="Logout.php"><i class="fa fa-tasks"></i>LogOut</a></li>
             
            
             
        </ul>
                     </div>

                     <form class="row" action="UpdateMedicineAdmin.php" method="get">
  <div class="col-2">
    <label for="exampleInputEmail1" class="form-label">Medicine Name</label>
    <input type="Search"placeholder="Search" name="medicine">
   
  </div>
 
  <br><br><br>
  </div>
  <br><br><br><br>
  <div class="col-6">
  <button type="submit" class="btn btn-dark">Search</button></div>
</form>
<?php 
  require_once('connection.php');


  if(isset($_GET['medicine'])){
$p=$_GET['medicine'];

$sql="select *
from medicine
where M_name='$p'";
  $products=$con->query($sql);
  if($products->num_rows >0){
  while($product=$products->fetch_assoc()){

 $_SESSION["medicine_id"]=$product['M_id'];

 
  ?>






        <form  action="UpdateMedicineAdmin.php" method="get">
        <div class="row">
  <div class="col-3">
    <label for="exampleInputEmail1" class="form-label">Medicine Name</label><br>
    <input type="Search"value="<?php echo $product["M_name"]?>" name="medicine2">
   
  </div></div>
  <div class="row">
  <div class="col-3">
    <label for="exampleInputPassword1" class="form-label">   Medicine price</label><br>
    <input type="Search"value="<?php echo $product["M_price"]?>" name="price">
  </div></div>
  <div class="row">
  <div class="col-3">
    <label for="exampleInputPassword1" class="form-label">Generic</label><br>
    <input type="Search"value="<?php echo$product["M_generic"]?>" name="generic">
  </div>
  </div>
  <div class="row">
  <div class="col-3">
    <label for="exampleInputEmail1" class="form-label">Price For shop</label><br>
    <input type="Search"value="<?php echo $product["Shop_price"]?>" name="Shop_price">
   
  </div></div>
  <div class="row">
  <div class="col-3">
    <label for="exampleInputPassword1" class="form-label">Company id</label><br>
    <input type="Search"value="<?php echo $product["company_id"]?>" name="company_id">
  </div></div>
  
  
    <div class="row">
    <div class="col-3">
    <label for="exampleInputPassword1" class="form-label">Medicine image </label>
    <input class="file-upload-input" type="file" onchange="readURL(this)"name="image" >
  </div>
  </div>

  <div class="row">
    <div class="col-3">
    <img src="<?php echo $product["M_image"]?>">
   
  </div>
  </div>

  <div class="row">
  <div class="col-3">
  <button type="submit" class="btn btn-dark">Update Medicine</button></div></div>
</form>
<?php 

$_SESSION["medicine_image"]=$product['M_image'];
}}}


  require_once('connection.php');
  if(isset($_GET['medicine2'])){
    if(!is_null($_GET['image'])){
      $image=$_GET['image'];
    
    
    }else{
      $image=$_SESSION["medicine_image"];
    
    }
  $a=$_SESSION["medicine_id"];

$sql="update medicine 
set M_name='{$_GET['medicine2']}',M_price='{$_GET['price']}',Shop_price='{$_GET['Shop_price']}',company_id='{$_GET['company_id']}',M_generic='{$_GET['generic']}',M_image='images/{$image}'
where M_id='$a'";

  $con->query($sql);

 
  header("location: UpdateMedicineAdmin.php");



  }
  ?>




<br><br><br><br><br><br><br><br><br><br><br><br>





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

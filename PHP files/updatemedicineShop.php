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







<form class="row" action="updatemedicineShop.php" method="get">
  <div class="col-3">
    <label for="exampleInputEmail1" class="form-label">Medicine Name</label>
    <input type="Search"placeholder="medicine" name="medicine">
   
  </div>
 
  <div class="col-3">
    <label for="exampleInputPassword1" class="form-label">How many pices</label>
    <input type="Search"placeholder="pices" name="pice">
  </div>
  <br><br><br>
  </div>
  <br><br><br><br>
  <div class="col-11">
  <button type="submit" class="btn btn-dark">sell</button></div>
</form>
<?php 
  require_once('connection.php');
 
 
  if(isset($_GET['medicine'] )){
  

 $a= $_GET['medicine'];
 $d=date('Y-m-d');
  $c= $_GET['pice'];
$sql="INSERT INTO `medicine_shop_sell`(`M_id`, `shop_id`, `Shop_sell`, `sell_date`) VALUES ((SELECT `M_id` FROM `medicine` WHERE M_name='$a'),'{$_SESSION["id"]}','$c','$d')";
$Admins=$con->query($sql);


$sql="SELECT * FROM `medicine_shop` WHERE M_id=(SELECT `M_id` FROM `medicine` WHERE M_name='$a')";
$products=$con->query($sql);
if($products->num_rows >0){
  while($product=$products->fetch_assoc()){

    $d=$product["stocks"]-$c;
  $sql="UPDATE `medicine_shop` SET `stocks`='$d' WHERE `M_id`=(SELECT `M_id` FROM `medicine` WHERE M_name='$a') and `shop_id`='{$_SESSION["id"]}'";
  $Admins=$con->query($sql);
  header("location: updatemedicineShop.php");
}



}else{
echo "please add first";
  header("location: updatemedicineShop.php");

}
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

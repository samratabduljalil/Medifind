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
                <input type="Search"placeholder="<?php echo $_GET['search']?>" name="search">
                <button type="submit"name="Medicine" class="btn btn-primary">Medicine</button>
                <button  type="submit"name="Store" class="btn btn-primary">Store</button>
                
           
</form>   </li> 

                    <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#">
                        <i class="fa fa-medkit"></i> Products</a></li>
                    <li><a href="#"> <i class="fa fa-phone" ></i> Contact</a></li>
                    <li><a href="login.php"> <i class="fa fa-id-badge"></i> Account</a></li>
                    <li><a href="#"> <i class="fa fa-user"></i> About us</a></li>
                </ul>
            
            </nav>
            <img src="images/button.png" width="40px" height="40px">
            <img src="images/menu.png" width="40px" class="menu-icon" onclick="menutoggle()">
            
        </div>   
            
        </div>
        </div>

        <div class="small-container">
            <h2 class="title">Search Medicine</h2>
            <div class="row">
  <?php 
  require_once('connection.php');
$p=$_GET['search'];

$sql="SELECT * FROM most_search_medicine where most_search_medicine.M_name = '$p' ";
  $products=$con->query($sql);
  if($products->num_rows >0){
  while($product=$products->fetch_assoc()){

  ?>
                <div class="col-4">
                    <img src="<?php echo $product["M_image"]?>">
                    <h3><?php echo $product["M_name"]?></h3>
                    <p>Tablet</p>
                    <h4>Generics:</h4><p><?php echo $product["M_generic"]?></p>
                 
                    
                    <div class="rating">
                       <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                       
                        
                    </div>
                    
                    
                    
                    <p>&#2547 122.00 </p>
            </div>
 <?php }}
  else {
?>
<br><br><br><br><p><h1 class="text-danger text-center"><?php echo " NOT FOUND "   ?></h1>
<h3 class="text-dark text-center"><?php echo " Please Check The spelling and Try Again...... "   ?>   </h3></p><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
  }
 ?>
 


 
 
               
        
 </div>
            
        </div>
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




<?php 
  require_once('connection.php');
  if(isset($_GET['L_Submit'])){

$sql="SELECT * FROM `admin` WHERE a_email='{$_GET['L_email']}' and a_password='{$_GET['L_Password']}'";
  $Admins=$con->query($sql);
  if($Admins->num_rows >0){
  while($Admin=$products->fetch_assoc()){
      $_SESSION_start();
      $session['username']=$Admin['a_name'];
      header("Location:localhost/medifind/index.php");

  }}
  ?>


<?PHP$_server['PHP_SELF'] ;?>


<?php

session_start();
?>
<?PHP  $_SESSION["b"]="red" ;?> 
<?php
session_start();
if(isset($_SESSION["username"] )){

    

}
else 
?>
$sql="select * FROM most_search_medicine where most_search_medicine.M_name = '$p' ";




<!-- not -->-


               <?php
                     if(strcmp($_SESSION["table"],"admin"))){
                        
                        <li><a href="account.php"class="text-dark"> <i class="fa fa-id-badge"></i> admin</a></li>
                         ?>
                       
                         <?php 
                     } else{
                         ?>
                      <li><a href="account.php"class="text-dark"> <i class="fa fa-id-badge"></i> Account</a></li>

                            <?php 

                     }
                         ?>



<!--img--->
background: url(n.jpg) no-repeat;

<!--add medicine--->
<!--img--->
<html>
    <head>
        <title> Add Medicine
        </title>
        <link rel="stylesheet" href="login.css">
    </head>
    
     <body>
         
         
         <div class="container">
             <div class="card">
                 <div class="inner-box" id="card">
                     
                        
                     <div class="card-front" method="get">
                  
                     <h2> Medicine </h2>
                
                          <form action="logincompany.php" method="get">
                              <input type = "text"name="Name" class="input-box" placeholder="Medicine Name" required>
                              <input type = "text"name="Power" class="input-box" placeholder="power" required>
                              <input type = "Email"name="pisces" class="input-box" placeholder="How Many pices" required>
                             <button type = "Submit" class="submit-btn"> Add Medicine</button>
                          
                              

                         </form>
                         <a href="DashboardShop.php">   <button type = "button" class="btn">Dashboard</button></a>
                        
                         <?php 
  require_once('connection.php');
  if(isset($_GET['Name'])){
      $a=$_GET['Name'];
      $b=$_GET['Email'];
      $c=$_GET['Phone'];
      $d=$_GET['Division'];
      $e=$_GET['District'];
      $g=$_GET['Place'];
      $h=$_GET['Password'];

$sql="INSERT INTO company( `C_name`, `C_email`, `C_password`,  `C_district`, `C_street`, `C_phone`) VALUES ('$a',' $b','$h',' $e','$g','$c')";
  $con->query($sql);
  }
  ?>
                     
                          




                     
                     </div>
                 </div>
             </div>
         </div>
        
       
         <!-- <script>
             
             var card = document.getElementById("card");
             
             function openRegister(){
                 card.style.transform = "rotateY(-180deg)";
                 }
             
              function openLogin(){
                 card.style.transform = "rotateY(0deg)";
                 }
             
         </script>
          -->
         
         
</body>    
</html>

INSERT INTO `advertisement`( `company_id`, `M_name`, `M_generic`, `M_image`, `M_privious_price`, `M_price`, `add_Date`) VALUES ('{$product["company_id"]}','{$product["M_name"]}','{$product["M_generic"]}','{$product["M_image"]}','{$product["M_privious_price"]},'{$product["M_price"]}','$d')";
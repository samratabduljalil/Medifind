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
                <input type="Search"placeholder="Search" name="search">
                <button type="Submit"name="Medicine" class="btn btn-dark">Medicine</button>
                <a class="btn btn-dark" href="store.php" role="button">Search Store</a>
                
           
</form>   </li> 

                    <li class="text-dark"><a href="index.php"class="text-dark"><i class="fa fa-home"></i> Home</a></li>
                    <li ><a href="#"class="text-dark">
                        <i class="fa fa-medkit" ></i> Products</a></li>
                    <li><a href="#"class="text-dark"> <i class="fa fa-phone" ></i> Contact</a></li>
                    <?php
                     SESSION_start(); 
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
                    <li><a href="#"class="text-dark"> <i class="fa fa-user"></i> About us</a></li>
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

if(isset($_GET['search'])){
$p=$_GET['search'];
$sql="SELECT * FROM `medicine` WHERE M_name like '%$p' or  M_generic like  '%$p';";
  $products=$con->query($sql);
  if($products->num_rows >0){
  while($product=$products->fetch_assoc()){

  ?>
                <div class="col-4">
                    <img src="<?php echo $product["M_image"]?>">
                    <h3><?php echo $product["M_name"]?></h3>
                   
                    <h4>Generics:  <?php echo $product["M_generic"]?> </h4>
                 
                    
                  
                    
                    
                    
                    <h4>Price: &#2547 <?php echo $product["M_price"]?> </h4>
            </div>
 <?php }}
  else {
?>
<br><br><br><br><p><h1 class="text-danger text-center"><?php echo " NOT FOUND "   ?></h1>
<h3 class="text-dark text-center"><?php echo " Please Check The spelling and Try Again...... "   ?>   </h3></p><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
  }}
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

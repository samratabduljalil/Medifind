<html>
    <head>
        <title> login and registration
        </title>
        <link rel="stylesheet" href="login.css">
       
    </head>
    
     <body>
     <?php
         SESSION_start();     
         
    ?>


         
         <div class="container">
             <div class="card">
                 <div class="inner-box" id="card">
                     <div class="card-front">
                         <?php
                     if(isset($_SESSION["NotLogin"])){
                        
                        session_unset();
                        session_destroy();
                         ?>
                         <h2> LOGIN </h2>
                         <h2 class="text-danger"> Wrong Email Or password </h2>
                         <?php 
                     } else{
                         ?>
                       <h2> LOGIN </h2>

                            <?php 

                     }
                         ?>


                          <form action="login.php" method="get">
                              <input type = "text"name="L_email" class="input-box" placeholder="Phone Number" required>
                              <input type = "Password"name="L_Password"  class="input-box" placeholder="Password" required>
                              <button type = "Submit" name="L_Submit" class="submit-btn"> Submit </button>
                           
                         </form>
                         <a href="index.php">   <button type = "button" class="btn">Home</button></a>
                         <?php 
  require_once('connection.php');
 
 
  if(isset($_GET['L_email'] )){
  

 $a= $_GET['L_email'];
  $b=$_GET['L_Password'];

$sql="SELECT * FROM medical_shop WHERE S_phone='$a' and S_password='$b'";
  $Admins=$con->query($sql);
  if($Admins->num_rows >0){
  while($Admin=$Admins->fetch_assoc()){
      SESSION_start();
    
      $_SESSION["username"] = $Admin['S_name'];
      $_SESSION["table"]="shop";
      $_SESSION["id"] = $Admin['shop_id'];
      $_SESSION["division"] = $Admin['S_division'];
      $_SESSION["district"] = $Admin['S_district'];
      $_SESSION["upazila"] = $Admin['S_upazila'];
      $_SESSION["union"] = $Admin['S_union'];
      $_SESSION["place"] = $Admin['S_place'];
      $_SESSION["image"] = $Admin['S_image'];
      $_SESSION["phone"] = $Admin['S_phone'];
      $_SESSION["email"] = $Admin['S_email'];
      
      
      



      header("location: DashboardShop.php");

    }}
    else{
        SESSION_start();
    
        $_SESSION["NotLogin"] ="Wrong User Name or Password";

      header("location: login.php");
   
    }
}
    
    ?>

 



                         <button type = "button" class="btn" onclick="openRegister()">Don't have an account?</button>
                            
                     </div>
                     <div class="card-back" method="get">
                  
                     <h2> REGISTER </h2>
                
                          <form action="login.php" method="get">
                              <input type = "text"name="Name" class="input-box" placeholder="Company Name" required>
                            
                              <input type = "text" name="Phone"class="input-box" placeholder="Phone Number" required>
                              <input type = "text"name="Division" class="input-box" placeholder="Division" required>
                              <input type = "text"name="District" class="input-box" placeholder="District" required>
                              <input type = "text"name="upazila" class="input-box" placeholder="Upazila" required>
                              <input type = "text"name="union" class="input-box" placeholder="Union" required>
                              <input type = "text"name="Place" class="input-box" placeholder="Place" required>
                              <input type = "text" name="Password"class="input-box" placeholder="Password" required>
                             <button type = "Submit" class="submit-btn"> Submit </button>
                          
                              <a href="login.php">   <button type = "button" class="btn">Already Have An Account</button></a>

                         </form>
                         
                        
                         <?php 
  require_once('connection.php');
  if(isset($_GET['Name'])){
  
$sql="INSERT INTO `medical_shop`( `S_name`,  `S_password`, `S_phone`,  `S_division`, `S_district`, `S_upazila`, `S_union`, `S_place`) VALUES ('{$_GET['Name']}','{$_GET['Password']}','{$_GET['Phone']}','{$_GET['Division']}','{$_GET['District']}','{$_GET['upazila']}','{$_GET['union']}','{$_GET['Place']}')";
  $con->query($sql);
  }
  ?>
                     
                          




                     
                     </div>
                 </div>
             </div>
         </div>
        
       
         <script>
             
             var card = document.getElementById("card");
             
             function openRegister(){
                 card.style.transform = "rotateY(-180deg)";
                 }
             
              function openLogin(){
                 card.style.transform = "rotateY(0deg)";
                 }
             
         </script>
         
         
         
</body>    
</html>
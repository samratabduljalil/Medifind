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


                          <form action="loginadmin.php" method="get">
                              <input type = "Email"name="L_email" class="input-box" placeholder="Your Email Id" required>
                              <input type = "Password"name="L_Password"  class="input-box" placeholder="Password" required>
                              <button type = "Submit" name="L_Submit" class="submit-btn"> Submit </button>
                           
                         </form>
                         <a href="index.php">   <button type = "button" class="btn">Home</button></a>
                         <?php 
  require_once('connection.php');
 
 
  if(isset($_GET['L_email'] )){
  

 $a= $_GET['L_email'];
  $b=$_GET['L_Password'];

$sql="SELECT * FROM `admin` WHERE a_email='$a' and a_password='$b'";
  $Admins=$con->query($sql);
  if($Admins->num_rows >0){
  while($Admin=$Admins->fetch_assoc()){
      SESSION_start();
    
      $_SESSION["username"] = $Admin['a_name'];
      $_SESSION["table"]="admin";
      $_SESSION["image"] = $Admin['a_image'];
      $_SESSION["phone"] = $Admin['a_phone'];
      $_SESSION["email"] = $Admin['a_email'];
      $_SESSION["id"] = $Admin['admin_id'];

      header("location: DashboardAdmin.php");

    }}
    else{
        SESSION_start();
    
        $_SESSION["NotLogin"] ="Wrong User Name or Password";

      header("location: loginadmin.php");
   
    }
}
    
    ?>

 



                         <button type = "button" class="btn" onclick="openRegister()">Don't have an account?</button>
                            
                     </div>
                     <div class="card-back" method="get">
                  
                     <h2> REGISTER </h2>
                    
                          <form action="loginadmin.php" method="get">
                              <input type = "text"name="Name" class="input-box" placeholder="Your Name" required>
                              <input type = "Email"name="Email" class="input-box" placeholder="Your Email Id" required>
                              <input type = "text" name="Phone"class="input-box" placeholder="Phone Number" required>
                             <input type = "text" name="Password"class="input-box" placeholder="Password" required>
                             
                              <button type = "Submit" class="submit-btn"> Submit </button>
                         </form>
                         <?php 
  require_once('connection.php');
  if(isset($_GET['Name'])){

$sql="INSERT INTO `admin`( `a_name`, `a_email`, `a_password`, `a_phone` ) VALUES ('{$_GET['Name']}','{$_GET['Email']}','{$_GET['Password']}','{$_GET['Phone']}') ";
  $con->query($sql);
  }
  ?>

      
                     
                          <a href="index.php">   <button type = "button" class="btn">HOME</button></a>
                          <a href="loginadmin.php">   <button type = "button" class="btn">Already Have An Account</button></a>



                     
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
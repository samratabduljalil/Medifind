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


                          <form action="logincompany.php" method="get">
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

$sql="SELECT * FROM company WHERE C_phone='$a' and C_password='$b'";
  $Admins=$con->query($sql);
  if($Admins->num_rows >0){
  while($Admin=$Admins->fetch_assoc()){
      SESSION_start();
    
      $_SESSION["username"] = $Admin['C_name'];
      $_SESSION["table"]="company";
      $_SESSION["Id"]=$Admin['company_id'];
      $_SESSION["name"]=$Admin['C_name'];
      $_SESSION["email"]=$Admin['C_email'];
      $_SESSION["phone"]=$Admin['C_phone'];
      $_SESSION["image"]=$Admin['C_image'];

      header("location: DashboardCompany.php");

    }}
    else{
        SESSION_start();
    
        $_SESSION["NotLogin"] ="Wrong User Name or Password";

      header("location: logincompany.php");
   
    }
}
    
    ?>

 



                         <button type = "button" class="btn" onclick="openRegister()">Don't have an account?</button>
                            
                     </div>
                     <div class="card-back" method="get">
                  
                     <h2> REGISTER </h2>
                
                          <form action="logincompany.php" method="get">
                              <input type = "text"name="Name" class="input-box" placeholder="Company Name" required>
                              <input type = "Email"name="Email" class="input-box" placeholder="Your Email Id" required>
                              <input type = "text" name="Phone"class="input-box" placeholder="Phone Number" required>
                              <input type = "text"name="Division" class="input-box" placeholder="Division" required>
                              <input type = "text"name="District" class="input-box" placeholder="District" required>
                              <input type = "text"name="Place" class="input-box" placeholder="Street" required>
                              <input type = "text" name="Password"class="input-box" placeholder="Password" required>
                             <button type = "Submit" class="submit-btn"> Submit </button>
                          
                              <a href="logincompany.php">   <button type = "button" class="btn">Already Have An Account</button></a>

                         </form>
                         <a href="index.php">   <button type = "button" class="btn">HOME</button></a>
                        
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

$sql="INSERT INTO company( `C_name`, `C_Email`, `C_password`,  `C_district`, `C_street`, `C_phone`) VALUES ('$a',' $b','$h',' $e','$g','$c')";
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
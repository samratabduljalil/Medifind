<html>
    <head>
        <title> login and registration
        </title>
        <link rel="stylesheet" href="login.css">
    </head>
    
     <body>
         
         
         <div class="container">
             <div class="card">
                 <div class="inner-box" id="card">
                     <div class="card-front">
                         <h2> LOGIN </h2>
                          <form><input type = "Email" class="input-box" placeholder="Your Email Id" required>
                              <input type = "Password" class="input-box" placeholder="Password" required>
                              
                              <button type = "Submit" class="submit-btn"> Submit </button>
                        
                              
                         </form>

                         <button type = "button" class="btn" onclick="openRegister()">Don't have an account?</button>
                          <a href="index.php">   <button type = "button" class="btn">HOME</button></a>
                              
                     
                     
                     </div>
                     <div class="card-back" method="get">
                  
                     <h2> REGISTER </h2>
                    
                          <form >
                              <input type = "text"name="Name" class="input-box" placeholder="Your Name" required>
                              <input type = "Email"name="Email" class="input-box" placeholder="Your Email Id" required>
                              <input type = "text" name="Phone"class="input-box" placeholder="Phone Number" required>
                              <input type = "text"name="Division" class="input-box" placeholder="Division" required>
                              <input type = "text"name="District" class="input-box" placeholder="District" required>
                              <input type = "text"name="Union" class="input-box" placeholder="Union/Area" required>
                              <input type = "text" name="Password"class="input-box" placeholder="Password" required>
                             
                              <button type = "Submit" class="submit-btn"> Submit </button>
                         </form>
                        
                      <?php
                      
                       require_once('connection.php');
                       if(isset($_GET['select'])){
                        $n=$_GET['select'];
                        echo $n ;
                       }
                    
                    
                     
                    
                  ?>
                      <a href="loginuser.php">   <button type = "button" class="btn">Already Have An Account</button></a>
                          <a href="index.php">   <button type = "button" class="btn">HOME</button></a>




                     
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
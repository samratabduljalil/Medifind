<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>All Products - MEDIFIND</title>
        <link rel="stylesheet" href="style2.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
   
       <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <button type="Submit"name="Store" class="btn btn-dark">Store</button>
                
           
</form>   </li> 

                    <li class="text-dark"><a href="index.php"class="text-dark"><i class="fa fa-home"></i> Home</a></li>
                    <li ><a href="product.php"class="text-dark">
                        <i class="fa fa-medkit" ></i> Products</a></li>
                    <li><a href="#"class="text-dark"> <i class="fa fa-phone" ></i> Contact</a></li>
                    <li><a href="login.php"class="text-dark"> <i class="fa fa-id-badge"></i> Account</a></li>
                    <li><a href="#"class="text-dark"> <i class="fa fa-user"></i> About us</a></li>
                </ul>
            
            </nav>
            <img src="images/button.png" width="40px" height="40px">
            <img src="images/menu.png" width="40px" class="menu-icon" onclick="menutoggle()">
            
        </div>
            
           
            
        </div>
        </div>
    
    

  <div class="small-container">
      
    <div class="row row-2">
        <h2>All Products</h2>
        <select>
            <option>Default shorting</option>
            <option>Short by price</option>
            <option>Short by generic name</option>
            <option>Short by rating</option>
            <option>Short by area</option>
        </select>
    </div>
      
      
            <div class="row">
                <div class="col-4">
                    <img src="images/Bizoran.jpg">
                    <h3>Bizoran 5/40</h3>
                    <p>Tablet</p>
                    <p><b>Power : </b>5mg + 40mg</p>
                    <h4>Generics:</h4><p>Amlodipine 5mg, Olmesartan Medoxomil 40mgg</p>
                    
                    <div class="rating">
                       <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                  <p>&#2547 19.00 </p>
            </div>
                
             <div class="col-4">
                    <img src="images/f.jpg">
                    <h3>Fluclox 500</h3>
                    <p>Capsule</p>
                 <p><b>Power : </b>500mg</p>
                    <h4>Generics:</h4><p>Flucloxacillin Sodium 500mg</p>
                    
                    <div class="rating">
                       <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                   </div>
                 <p>&#2547 10.07</p>
            </div>
                
                
                <div class="col-4">
                    <img src="images/Comet-850.jpg">
                    <h3>Comet 850</h3>
                    <p>Tablet</p>
                    <p><b>Power : </b>850mg</p>
                    <h4>Generics:</h4><p>Metformin Hydrochloride 850mg</p>
                    
                    <div class="rating">
                       <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
               <p>&#2547 60.20 tk</p>
            </div>
                
                <div class="col-4">
                    <img src="images/Panto.jpg">
                    <h3>Pantonix 20</h3>
                    <p>Tablet</p>
                    <p><b>Power : </b>20mg</p>
                    <h4>Generics:</h4><p>Pantoprazole 20mg</p>
                    
                    <div class="rating">
                       <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                  </div>
                     <p>&#2547 6.41</p>
            </div>
      </div>
      
      
      
        <div class="row">
                <div class="col-4">
                    <img src="images/Bizoran.jpg">
                    <h3>Bizoran 5/40</h3>
                    <p>Tablet</p>
                    <p><b>Power : </b>5mg + 40mg</p>
                    <h4>Generics:</h4><p>Amlodipine 5mg, Olmesartan Medoxomil 40mgg</p>
                    
                    <div class="rating">
                       <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                       
                        
                    </div>
                    
                    
                    
                    <p>&#2547 19.00 </p>
            </div>
                
                
                
                <div class="col-4">
                    <img src="images/f.jpg">
                    <h3>Fluclox 500</h3>
                    <p>Capsule</p>
                    <p><b>Power : </b>500mg</p>
                    <h4>Generics:</h4><p>Flucloxacillin Sodium 500mg</p>
                    
                    <div class="rating">
                       <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                       
                        
                    </div>
                    
                    
                    
                    <p>&#2547 10.07</p>
            </div>
                
                
                <div class="col-4">
                    <img src="images/Comet-850.jpg">
                    <h3>Comet 850</h3>
                    <p>Tablet</p>
                    <p><b>Power : </b>850mg</p>
                    <h4>Generics:</h4><p>Metformin Hydrochloride 850mg</p>
                    
                    <div class="rating">
                       <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                       
                        
                    </div>
                    
                    
                    
                    <p>&#2547 60.20 tk</p>
            </div>
                <div class="col-4">
                    <img src="images/Panto.jpg">
                    <h3>Pantonix 20</h3>
                    <p>Tablet</p>
                    <p><b>Power : </b>20mg</p>
                    <h4>Generics:</h4><p>Pantoprazole 20mg</p>
                    
                    <div class="rating">
                       <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                       
                        
                    </div>
                     <p>&#2547 6.41</p>
            </div>
     </div>
      
      
      
        <div class="row">
                <div class="col-4">
                    <img src="images/Bizoran.jpg">
                    <h3>Bizoran 5/40</h3>
                    <p>Tablet</p>
                    <p><b>Power : </b>5mg + 40mg</p>
                    <h4>Generics:</h4><p>Amlodipine 5mg, Olmesartan Medoxomil 40mgg</p>
                    
                    <div class="rating">
                       <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                       
                        
                    </div>
                    
                    
                    
                    <p>&#2547 19.00 </p>
            </div>
                
                
                
                <div class="col-4">
                    <img src="images/f.jpg">
                    <h3>Fluclox 500</h3>
                    <p>Capsule</p>
                    <p><b>Power : </b>500 mg</p>
                    <h4>Generics:</h4><p>Flucloxacillin Sodium 500mg</p>
                    
                    <div class="rating">
                       <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                       
                        
                    </div>
                    
                    
                    
                    <p>&#2547 10.07</p>
            </div>
                
                
                <div class="col-4">
                    <img src="images/Comet-850.jpg">
                    <h3>Comet 850</h3>
                    <p>Tablet</p>
                    <p><b>Power : </b>850mg</p>
                    <h4>Generics:</h4><p>Metformin Hydrochloride 850mg</p>
                    
                    <div class="rating">
                       <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                       
                        
                    </div>
                    
                    
                    
                    <p>&#2547 60.20 tk</p>
            </div>
                <div class="col-4">
                    <img src="images/Panto.jpg">
                    <h3>Pantonix 20</h3>
                    <p>Tablet</p>
                    <p><b>Power : </b>20mg</p>
                    <h4>Generics:</h4><p>Pantoprazole 20mg</p>
                    
                    <div class="rating">
                       <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                       
                        
                    </div>
                     <p>&#2547 6.41</p>
            </div>
     </div>
      
       <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
            </div>
        
        </div>
      
 </div>
        

        
        
<!------------------footer------>
        
        
        
        
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
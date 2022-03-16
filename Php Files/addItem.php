<?php 
  require_once('connection.php');




  if(isset($_GET['id'])){
    $a=$_GET['id'];
    $sql="SELECT * FROM `request_medicine` WHERE request_id='$a'";
    $products=$con->query($sql);
    if($products->num_rows >0){
    while($product=$products->fetch_assoc()){
  
    
  
$sql="INSERT INTO `medicine`( M_price,company_id,`M_name`, `Shop_price`, `M_generic`, `M_image`) VALUES ('{$product["M_price_customers"]}','{$product["company_id"]}','{$product["M_name"]}','{$product["M_price_shop"]}','{$product["M_generic"]}','{$product["C_image"]}')";
  $con->query($sql);
  }


    }
    
    $sql="DELETE FROM `request_medicine` WHERE request_id='$a' ";
  $con->query($sql);
    
    
    
    header("location: request.php");

}



  ?>



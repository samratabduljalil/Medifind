<?php 
  require_once('connection.php');




  if(isset($_GET['id'])){
    $a=$_GET['id'];
    $sql="SELECT * FROM `request_advertisement` WHERE add_id='$a'";
    $products=$con->query($sql);
    if($products->num_rows >0){
    while($product=$products->fetch_assoc()){
  
        $d=date('Y-m-d');
       
$sql="UPDATE `advertisement` SET `company_id`='{$product["company_id"]}',`M_name`='{$product["M_name"]}',
`M_generic`='{$product["M_generic"]}',`M_image`='{$product["M_image"]}',
`M_privious_price`='{$product["M_privious_price"]}',`M_price`='{$product["M_price"]}',`add_Date`='$d' WHERE `add_id`='17'";
 



$con->query($sql);
  }


 
    
    $sql="DELETE FROM `request_advertisement` WHERE add_id='$a' ";
  $con->query($sql);
    
}
    
    header("location: addoffer.php");

}



  ?>
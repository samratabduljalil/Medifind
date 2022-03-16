<?php 
  require_once('connection.php');

  $a=$_GET['id'];
    $sql="DELETE FROM `request_medicine` WHERE request_id='$a' ";
  $con->query($sql);
    
    
    
    header("location: request.php");





  ?>
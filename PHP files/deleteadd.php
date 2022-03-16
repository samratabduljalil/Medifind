<?php 
  require_once('connection.php');

  $a=$_GET['id'];
    $sql="DELETE FROM `request_advertisement` WHERE add_id='$a' ";
  $con->query($sql);
    
    
    
  header("location: addoffer.php");





  ?>
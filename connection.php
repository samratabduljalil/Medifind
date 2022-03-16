<?php
$host="localhost";
$user="root";
$pass="";
$data="paracetamol";

$con=mysqli_connect($host,$user,$pass,$data);

if(!$con ){
    echo "connection fail";
}
else


?>
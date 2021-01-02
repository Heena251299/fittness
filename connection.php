<?php
$con = mysqli_connect('localhost', 'root', '', 'test');
header ("Location: dashboard.php");
    
 if($con) {
     echo "conenct";
    
 } else {
     echo "error";
 }
?>
<?php
include('db.php');

if (isset($_POST["data"])) ; 

{
 
   
$sql = "insert into employee values ('','".$_POST["data"]['name']."','".$_POST["data"]['salery']."','".$_POST["data"]['age']."','".$_POST["data"]['email_c']."')";  
$rs_result = mysqli_query($conn, $sql); 

 }



?>
   






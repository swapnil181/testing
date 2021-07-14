<?php
include('db.php');

if (isset($_POST["id"])) ;  
 
  {
$sql = "Delete FROM employee where id = '".$_POST["id"]."'";  
$rs_result = mysqli_query($conn, $sql); 


 if($rs_result)
 {

    echo "Yes Succesfully deleted" ;
   return true ;

 }

 else {


   return false ;

 }



}
?>
   






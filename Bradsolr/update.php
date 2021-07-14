<?php
include('db.php');

if (isset($_POST["data"])) ; 

{

	
$sql = "UPDATE employee SET employee_name = '".$_POST['data']['name']."', employee_salary ='".$_POST['data']['salery']."', employee_age ='".$_POST['data']['age']."'  where id = '".$_POST['data']['id']."' "; 
/*
$sql = "Update employee set employee_name ='".$_POST['data']['name']."' , employee_salary='".$_POST['data']['salery']."' , where id = '2'";*/



$rs_result = mysqli_query($conn, $sql); 

if($rs_result)
 {

    echo "Yes Succesfully Updated" ;
   return true ;

 }

 else {

 echo "Not Succesfully Updated" ;
 return false ;

 }



}
?>
   






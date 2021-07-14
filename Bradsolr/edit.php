<?php
include('db.php');

if (isset($_POST["id"])) ;  

$sql = "SELECT * FROM employee where id = '".$_POST["id"]."' ";  
$rs_result = mysqli_query($conn, $sql); 
?>

<?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
 
           
 
          $result['name']= $row["employee_name"]; 
          $result['salery']= $row["employee_salary"];  
		 $result['age'] = 	$row["employee_age"]; 
		  $result['id'] = 	$row["id"]; 
		
            
 
};  

echo json_encode($result);



?>

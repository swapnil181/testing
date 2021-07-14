<?php
include('db.php');

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM employee ORDER BY id ASC LIMIT $start_from, $limit";  
$rs_result = mysqli_query($conn, $sql); 
?>

<?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
?>  
            <tr>  
            	 <td><?php echo $row["id"]; ?></td> 
            <td><?php echo $row["employee_name"]; ?></td>  
            <td><?php echo $row["employee_salary"]; ?></td>  
			<td><?php echo $row["employee_age"]; ?></td> 
			<td><?php echo $row["email_c"]; ?></td> 
			<td><i class='fas fa-trash btn btn-danger' onclick="delete_course(<?php echo $row['id'] ?>)" id="<?php echo $row['id']; ?>"></i>
          <i class='fas fa-edit btn btn-primary' onclick="div_show1(<?php echo $row['id']; ?>)" id="edit_<?php echo $row['id']; ?>"></i>
           <i class='fas fa-eye btn btn-success' onclick="showdata(<?php echo $row['id']; ?>)" id="view<?php echo $row['id']; ?>"></i></td>
 
            </tr>  
<?php  
};  
?>

<?php
include('db.php');

if (isset($_POST["data"]));  {


 
  
$sql = "SELECT * FROM employee where employee_name like '%".$_POST["data"]."%'  limit 5" ;  
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
			<td><input type="submit" id="<?php echo $row['id']; ?>" value="Delete" class="btn btn-danger" onclick="delete_course(<?php echo $row['id'] ?>)"></td>
			<td><input type="submit" id="edit_<?php echo $row['id']; ?>" value="Edit" class="btn btn-danger" onclick="div_show1(<?php echo $row['id']; ?>)" ></td> 
            </tr>  
<?php  
}

};  
?>
